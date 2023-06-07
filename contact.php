<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  // Customize the email subject and recipient
  $subject = "New Contact Form Submission";
  $recipient = "mathiaseju@gmail.com";

  $headers = "From: $name <$email>" . "\r\n";
  $headers .= "Reply-To: $email" . "\r\n";
  $headers .= "Content-Type: text/html; charset=UTF-8" . "\r\n";

  $body = "Name: $name\n";
  $body .= "Email: $email\n";
  $body .= "Message: $message\n";

  // Send the email
  mail($recipient, $subject, $body, $headers);

  // Return a success response
  http_response_code(200);
  echo "Message sent successfully!";
} else {
  // Return an error response
  http_response_code(400);
  echo "Oops! Something went wrong.";
}
?>
