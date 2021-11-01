<?php 
if(isset($_POST['submit'])){
    $receiving_email_address = "saji.2@iitj.ac.in"; // this is your Email address
    $from_email = $_POST['email']; // this is the sender's Email address
    $from_name = $_POST['name'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $_POST['message'];
    $message2 = "Here is a copy of your message " . $from_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from_email;
    $headers2 = "From:" . $receiving_email_address;
    mail($receiving_email_address, $subject, $message, $headers);
    mail($from_email, $subject2, $message2, $headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you ";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
?>
