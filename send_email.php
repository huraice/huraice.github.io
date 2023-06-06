<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $textMsg = $_POST["message"];
  
  $to = "huraices@gmail.com"; // Enter your email address here
  $subject = "New Form Submission";
  $message = "Name: " . $name . "\n\nEmail:  " . $email . "\n\nMessage " . $textMsg;
  
  // Send email
  if (mail($to, $subject, $message)) {
    echo "Thank you for your submission!";
  } else {
    echo "Oops! Something went wrong.";
  }
}
?>
Make sure to replace "your_email@example.com" with your actual email address.

CSS (optional):
You can style your form using CSS to make it visually appealing. This step is optional but can enhance the user experience.
That's it! When a user fills out the form and clicks the submit button, the data will be sent to the specified email address using the mail() function in PHP.

Note: This example uses the mail() function, which is a simple way to send emails from PHP. However, depending on your server configuration, this function may not work, or your emails may be flagged as spam. In production environments, it's recommended to use a more robust email library or service to send emails reliably.






