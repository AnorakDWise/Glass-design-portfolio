<?php

    $_POST;

    $userName = $_POST["name"];
    $userEmail = $_POST["email"];
    $messageSubject = $_POST["subject"];
    $message = $_POST["message"];

    $to = "gregory442005@gmail.com";
    $body = "";

    $body .= "From: ".$userName. "\r\n";
    $body .= "Sender's e-mail adress: ".$userEmail. "\r\n";
    $body .= "Actual message: ".$message. "\r\n";

    mail($to,$messageSubject,$body);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <link
      rel="shortcut icon"
      href="./assets/icons/done.svg"
      type="image/x-icon"
    />

    <!--Nunito font from Google fonts:-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;700&display=swap"
      rel="stylesheet"
    />

    <!--AOS - github-->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./style/style.css" />
    <title>Sent successfully!</title>
  </head>

  <div
    class="Notification"
    data-aos="fade-up"
    data-aos-duration="1000"
    data-aos-delay="750"
    data-aos-easing="ease"
    class="nav-container"
  >
    <img src="./assets/icons/Success.svg" />
    <div class="notificationText">
      <h1>Your message was sent successfully!<br />I'll contact you ASAP.</h1>
      <div class="button">
        <a href="./index.html"
          >Go back to the home page <img src="./assets/icons/further.svg"
        /></a>
      </div>
    </div>
  </div>

  <body id="formHandler">
    <script type="text/javascript" src="./vanilla-tilt.js"></script>
    <script type="text/javascript">
      VanillaTilt.init(document.querySelectorAll("form"), {
        max: 1,
        speed: 5000,
      });
    </script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
  </body>
</html>