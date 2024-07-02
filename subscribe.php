<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $email = $_POST['email'];

    // Prepare email
    $to = 'rajesh.a@falconcaterers.in';
    $subject = 'New Subscriber Submission';
    $body = "Email: $email";
    $headers = "From: $email";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "Thank you for Subscribing.";
    } else {
        echo "Sorry, something went wrong. Please try again later.";
    }
}
?>


<!DOCTYPE HTML>
<html>
<head>
  
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="images/favicon.ico" type="image/icon">

  <!-- CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/all.min.css">
  <link rel="stylesheet" href="css/slick.css">
  <link rel="stylesheet" href="css/aos.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/laxmi.css">

<title>Thanks!</title>
</head>
<body style="  display: flex;
    justify-content: center;
    align-items: center;
    align-content: center;
    font-size: 19px;
    font-weight: 600;
    flex-direction: column;
    height: 100vh;
    flex-wrap: wrap;">
<div class="">
    <div>   <?php if (isset($success_message)) : ?>
        <div class="row" style="color: white;"><?php echo $success_message = "Thank you, You have Subscribed successfully.;" ?></div>
    <?php endif; ?>


    <?php if (isset($error_message)) : ?>
        <div style="color:white;"><?php echo $error_message; ?></div>
    <?php endif; ?></div>
    <div class="row d-flex">
        <a class="btn" style="    margin: 15px 0;
    background-color: red;
    color: white;
    width: 87px;
    font-size: 17px;" href="index.html">Ok</a>
  </div>
</div>

      <!-- JavaScript -->
  <script src="js/jquery-3.5.1.min.js" type="text/javascript"></script>
  <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
  <script src="js/aos.js" type="text/javascript"></script>
  <script src="js/slick.js" type="text/javascript"></script>

  <!-- Custom JavaScript -->
  <script src="js/custom.js" type="text/javascript"></script>
</body>
</html>