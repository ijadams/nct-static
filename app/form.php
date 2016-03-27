<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $company = $_POST['company'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $from = 'Contact Form Submission - nctonline.com'; 
    $to = 'sales@nctonline.com'; 
    $subject = 'Email Inquiry';

    $body = "From: $name\n Company: $company\n E-Mail: $email\n Phone: $phone\n Message:\n $message";
?>

<?php
if ($_POST['submit']) {
    if (mail ($to, $subject, $body, $from)) { 
        echo '<p>Thank you for your email!</p>';
    } else { 
        echo '<p>Oops! An error occurred. Try sending your message again.</p>'; 
    }
}
?>
