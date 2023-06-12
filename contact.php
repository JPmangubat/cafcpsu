<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    if(!empty($_POST["send"])){
        $name = $_POST["$name"];
        $email = $_POST["$email"];
        $phone = $_POST["$phone"];
        $message = $_POST["$message"];
        $toEmail = $_POST["johnpaulmangubat339@gmail.com"];

        $mailHeaders = "Name: " . $name .
        "\r\n Email " . $email .
        "\r\n Phone " . $phone .
        "\r\n Message " . $message . "\r\n";

        if(mail($toEmail, $name, $mailHeaders)){
            $message = "Your information is Recieved Succesfully.";
        }
    }



?>

<div class="container-lg bg-success justify-content-between" style="display: flex; margin-top: 60px; border: 5px solid #cde000; border-radius: 10px;">
        <div class="card mt-5" style="width: 500px">
          <div class="card-header bg-dark text-white">
            Contact Form
          </div>
          <div class="card-body">
            <form>
              <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter your name">
              </div>
              <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter your email">
              </div>
              <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input type="tel" class="form-control" id="phone" placeholder="Enter your phone number">
              </div>
              <div class="form-group">
                <label for="message">Message:</label>
                <textarea class="form-control" id="message" rows="5" placeholder="Enter your message"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
              <?php if(!empty($message)){ ?>
              <div class="success">
                <strong> <?php echo $message; ?> </strong>
              </div>
              <?php } ?>
            </form>
          </div>
        </div>
        <map style="margin: 5px 5px">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3923.672844588181!2d123.35913877415175!3d10.447514265176256!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a93f548c10cef7%3A0xe50848516254198c!2sCPSU%20DJVV%20CAMPUS%20AGRICULTURE%20DEPARTMENT!5e0!3m2!1sen!2sph!4v1686452735400!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </map>
      </div>
</body>
</html>