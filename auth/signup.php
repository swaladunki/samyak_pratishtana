<?php
$page_title = "Signup";
$current_page = "sign up";
$is_subpage = false;
?>

<?php require_once __DIR__ . '/../includes/header.php'; ?>
<?php require_once __DIR__ . '/../includes/navbar.php'; ?>
<?php

$errors = [];
$old = ['name' => '', 'email' => '', 'phone' => ''];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $password = $_POST['password'] ?? '';
    $confirm = $_POST['confirm_password'] ?? '';

    $old['name'] = htmlspecialchars($name);
    $old['email'] = htmlspecialchars($email);
    $old['phone'] = htmlspecialchars($phone);

    if ($name === '') $errors[] = 'Name is required.';
    if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'A valid email is required.';
    if ($phone === '') $errors[] = 'Phone is required.';
    if (strlen($password) < 8) $errors[] = 'Password must be at least 8 characters.';
    if ($password !== $confirm) $errors[] = 'Passwords do not match.';

    if (empty($errors)) {
        // adjust DB credentials if needed
        $mysqli = new mysqli('localhost', 'root', '', 'samyak');
        if ($mysqli->connect_errno) {
            $errors[] = 'DB connection failed: ' . $mysqli->connect_error;
        } else {
            // check existing email
            $stmt = $mysqli->prepare('SELECT id FROM users WHERE email = ? LIMIT 1');
            $stmt->bind_param('s', $email);
            $stmt->execute();
            $stmt->store_result();
            if ($stmt->num_rows > 0) {
                $errors[] = 'Email already registered.';
                $stmt->close();
            } else {
                $stmt->close();
                // insert user
                $hash = password_hash($password, PASSWORD_DEFAULT);
                $ins = $mysqli->prepare('INSERT INTO users (name, email, phone, password, created_at) VALUES (?, ?, ?, ?, NOW())');
                $ins->bind_param('ssss', $name, $email, $phone, $hash);
                if ($ins->execute()) {
                    $ins->close();
                    $mysqli->close();
                    header('Location: login.php');
                    exit;
                } else {
                    $errors[] = 'Signup failed: ' . $mysqli->error;
                    $ins->close();
                }
            }
            $mysqli->close();
        }
    }
}
?>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <h2 class="mb-4">Sign Up</h2>

            <?php if (!empty($errors)): ?>
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        <?php foreach ($errors as $e): ?>
                            <li><?php echo htmlspecialchars($e); ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>

            <form method="post" onsubmit="return checkPasswords();">
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input name="name" class="form-control" required value="<?php echo $old['name']; ?>">
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input name="email" type="email" class="form-control" required value="<?php echo $old['email']; ?>">
                </div>

                <div class="mb-3">
                    <label class="form-label">Phone</label>
                    <input name="phone" class="form-control" required value="<?php echo $old['phone']; ?>">
                </div>

                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input name="password" type="password" id="pw" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Confirm Password</label>
                    <input name="confirm_password" type="password" id="pw2" class="form-control" required>
                </div>

                <button class="btn btn-primary" type="submit">Create account</button>
                <a class="btn btn-link" href="login.php">Already have an account? Log in</a>
            </form>
        </div>
    </div>
</div>

<script>
    function checkPasswords() {
        var a = document.getElementById('pw').value;
        var b = document.getElementById('pw2').value;
        if (a.length < 8) {
            alert('Password must be at least 8 characters.');
            return false;
        }
        if (a !== b) {
            alert('Passwords do not match.');
            return false;
        }
        return true;
    }
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>