<?php
session_start();
include 'header.php';

// Require login: redirect to signup if not authenticated
if (empty($_SESSION['user_id'])) {
    header('Location: signup.php');
    exit;
}

// DB connection (adjust credentials if needed)
$mysqli = new mysqli('localhost', 'root', '', 'samyak');
if ($mysqli->connect_errno) {
    die('<div class="container py-5"><div class="alert alert-danger">Database connection failed: ' . htmlspecialchars($mysqli->connect_error) . '</div></div>');
}

$user_id = (int) $_SESSION['user_id'];
$program_id = isset($_GET['program_id']) ? (int) $_GET['program_id'] : (isset($_POST['program_id']) ? (int)$_POST['program_id'] : 0);
$errors = [];
$success = '';

// Load program info (if available)
$program = null;
if ($program_id > 0) {
    $stmt = $mysqli->prepare('SELECT id, title, description FROM programs WHERE id = ? LIMIT 1');
    if ($stmt) {
        $stmt->bind_param('i', $program_id);
        $stmt->execute();
        $res = $stmt->get_result();
        $program = $res->fetch_assoc();
        $stmt->close();
    }
}

// Handle enrollment POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($program_id <= 0) {
        $errors[] = 'Invalid program selected.';
    } else {
        // check already enrolled
        $chk = $mysqli->prepare('SELECT id FROM enrollments WHERE user_id = ? AND program_id = ? LIMIT 1');
        $chk->bind_param('ii', $user_id, $program_id);
        $chk->execute();
        $chk->store_result();
        if ($chk->num_rows > 0) {
            $errors[] = 'You are already enrolled in this program.';
            $chk->close();
        } else {
            $chk->close();
            $ins = $mysqli->prepare('INSERT INTO enrollments (user_id, program_id, created_at) VALUES (?, ?, NOW())');
            if ($ins) {
                $ins->bind_param('ii', $user_id, $program_id);
                if ($ins->execute()) {
                    $success = 'Enrollment successful. You will receive further details by email.';
                    // optionally redirect to a dashboard or programs page:
                    // header('Location: programs.php?enrolled=1');
                    // exit;
                } else {
                    $errors[] = 'Could not enroll: ' . $mysqli->error;
                }
                $ins->close();
            } else {
                $errors[] = 'Database error: ' . $mysqli->error;
            }
        }
    }
}
?>
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="mb-4"><?php echo $program ? 'Enroll — ' . htmlspecialchars($program['title']) : 'Enroll in a Program'; ?></h2>

            <?php if ($success): ?>
                <div class="alert alert-success"><?php echo htmlspecialchars($success); ?></div>
            <?php endif; ?>

            <?php if (!empty($errors)): ?>
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        <?php foreach ($errors as $e): ?>
                            <li><?php echo htmlspecialchars($e); ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>

            <?php if ($program): ?>
                <div class="card mb-4">
                    <div class="card-body">
                        <p class="card-text"><?php echo nl2br(htmlspecialchars($program['description'])); ?></p>
                    </div>
                </div>
            <?php else: ?>
                <p class="text-muted">No specific program selected. You can return to the <a href="programs.php">Programs</a> page and choose one to enroll.</p>
            <?php endif; ?>

            <form method="post" class="p-3 bg-white rounded shadow-sm">
                <input type="hidden" name="program_id" value="<?php echo (int)$program_id; ?>">
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input class="form-control" value="<?php echo isset($_SESSION['name']) ? htmlspecialchars($_SESSION['name']) : ''; ?>" disabled>
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input class="form-control" value="<?php echo isset($_SESSION['email']) ? htmlspecialchars($_SESSION['email']) : ''; ?>" disabled>
                </div>

                <button type="submit" class="btn btn-primary" <?php echo $program ? '' : ' disabled'; ?>>Confirm Enrollment</button>
                <a href="programs.php" class="btn btn-link">Back to Programs</a>
            </form>
        </div>
    </div>
</div>

<?php
$mysqli->close();
include 'footer.php';
?>