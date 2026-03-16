<?php
/* ========================================
   CONTACT FORM HANDLER
   Handles form submissions and sends emails
   ======================================== */

header('Content-Type: application/json');

// Initialize response array
$response = array(
    'success' => false,
    'message' => ''
);

// Check if form was submitted via POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    $response['message'] = 'Invalid request method';
    echo json_encode($response);
    exit;
}

// Get form data and sanitize
$name = isset($_POST['name']) ? trim(htmlspecialchars($_POST['name'])) : '';
$email = isset($_POST['email']) ? trim(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL)) : '';
$subject = isset($_POST['subject']) ? trim(htmlspecialchars($_POST['subject'])) : '';
$message = isset($_POST['message']) ? trim(htmlspecialchars($_POST['message'])) : '';

// Validate form data
if (empty($name)) {
    $response['message'] = 'Please enter your name';
    echo json_encode($response);
    exit;
}

if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $response['message'] = 'Please enter a valid email address';
    echo json_encode($response);
    exit;
}

if (empty($subject)) {
    $response['message'] = 'Please enter a subject';
    echo json_encode($response);
    exit;
}

if (empty($message)) {
    $response['message'] = 'Please enter a message';
    echo json_encode($response);
    exit;
}

// Check message length
if (strlen($message) < 10) {
    $response['message'] = 'Message must be at least 10 characters long';
    echo json_encode($response);
    exit;
}

// Additional security checks for spam
if (strlen($message) > 5000) {
    $response['message'] = 'Message is too long';
    echo json_encode($response);
    exit;
}

// Prepare email
$recipient_email = 'info@samyak.org';
$from_email = $email;
$reply_to = $email;

// Create email headers
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";
$headers .= "From: " . $from_email . "\r\n";
$headers .= "Reply-To: " . $reply_to . "\r\n";

// Create email subject line
$email_subject = "[Samyak] Contact Form - " . $subject;

// Create email body with HTML formatting
$email_body = "<!DOCTYPE html>
<html>
<head>
    <style>
        body { font-family: Arial, sans-serif; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; background: #f5f5f5; }
        .header { background: #8B5A2B; color: white; padding: 20px; border-radius: 8px 8px 0 0; }
        .content { background: white; padding: 20px; }
        .footer { background: #f5f5f5; padding: 15px; text-align: center; font-size: 12px; color: #666; border-radius: 0 0 8px 8px; }
        .field { margin-bottom: 15px; }
        .label { font-weight: bold; color: #8B5A2B; }
        .value { color: #333; margin-top: 5px; line-height: 1.6; }
    </style>
</head>
<body>
    <div class='container'>
        <div class='header'>
            <h2>New Contact Form Submission</h2>
        </div>
        <div class='content'>
            <div class='field'>
                <div class='label'>Name:</div>
                <div class='value'>" . $name . "</div>
            </div>
            <div class='field'>
                <div class='label'>Email:</div>
                <div class='value'>" . $email . "</div>
            </div>
            <div class='field'>
                <div class='label'>Subject:</div>
                <div class='value'>" . $subject . "</div>
            </div>
            <div class='field'>
                <div class='label'>Message:</div>
                <div class='value'>" . nl2br($message) . "</div>
            </div>
            <div class='field' style='margin-top: 20px; padding-top: 15px; border-top: 1px solid #ddd;'>
                <small style='color: #999;'>
                    Submission Time: " . date('Y-m-d H:i:s') . "<br>
                    IP Address: " . (isset($_SERVER['REMOTE_ADDR']) ? htmlspecialchars($_SERVER['REMOTE_ADDR']) : 'Unknown') . "
                </small>
            </div>
        </div>
        <div class='footer'>
            <p>This message was sent through the Samyak contact form.</p>
        </div>
    </div>
</body>
</html>";

// Send email to Samyak
$email_sent = @mail($recipient_email, $email_subject, $email_body, $headers);

if ($email_sent) {
    // Also send confirmation email to user
    $user_subject = "We received your message - Samyak";
    $user_body = "<!DOCTYPE html>
<html>
<head>
    <style>
        body { font-family: Arial, sans-serif; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; background: #f5f5f5; }
        .header { background: #8B5A2B; color: white; padding: 20px; border-radius: 8px 8px 0 0; text-align: center; }
        .content { background: white; padding: 20px; }
        .footer { background: #f5f5f5; padding: 15px; text-align: center; font-size: 12px; color: #666; border-radius: 0 0 8px 8px; }
    </style>
</head>
<body>
    <div class='container'>
        <div class='header'>
            <h2>Thank You for Contacting Samyak</h2>
        </div>
        <div class='content'>
            <p>Dear " . htmlspecialchars($name) . ",</p>
            <p>Thank you for reaching out to Samyak - Centre for Sanskrit Heritage & Knowledge.</p>
            <p>We have received your message with the subject: <strong>" . htmlspecialchars($subject) . "</strong></p>
            <p>Our team will review your inquiry and respond to you within 24 hours on business days.</p>
            <hr style='border: none; border-top: 1px solid #ddd; margin: 20px 0;'>
            <h3 style='color: #8B5A2B;'>Quick Links:</h3>
            <ul>
                <li><a href='https://samyak.org/programs.php'>Explore Our Programs</a></li>
                <li><a href='https://samyak.org/about.php'>About Samyak</a></li>
                <li><a href='https://samyak.org/gallery.php'>Gallery</a></li>
                <li><a href='https://samyak.org/publications.php'>Publications</a></li>
            </ul>
            <p style='margin-top: 20px;'>Best regards,<br><strong>Samyak Team</strong></p>
        </div>
        <div class='footer'>
            <p>© 2024 Samyak - Centre for Sanskrit Heritage & Knowledge</p>
            <p>Preserving Ancient Wisdom | Inspiring Future Generations</p>
        </div>
    </div>
</body>
</html>";

    @mail($email, $user_subject, $user_body, $headers);

    // Log the submission (optional)
    $log_entry = date('Y-m-d H:i:s') . " | Name: " . $name . " | Email: " . $email . " | Subject: " . $subject . "\n";
    $log_file = __DIR__ . '/contact_submissions.log';

    // Create log file if it doesn't exist and write entry
    @file_put_contents($log_file, $log_entry, FILE_APPEND | LOCK_EX);

    $response['success'] = true;
    $response['message'] = 'Thank you! Your message has been sent successfully. We will get back to you soon.';
} else {
    // Email sending failed
    $response['success'] = false;
    $response['message'] = 'Sorry, there was an error sending your message. Please try again later or contact us directly.';
}

// Return JSON response
echo json_encode($response);
exit;
