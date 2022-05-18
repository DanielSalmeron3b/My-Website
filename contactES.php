<?php

require('resources/email.php');

// Validating that the data sent is not empty
function validate($name, $email, $subject, $message, $form)
{
    return !empty($name) && !empty($email) && !empty($subject) && !empty($message);
};

$status = "";

// Validating if the form was sent, using the name of the button
if (isset($_POST["form"])) {

    // Array unpacking
    if (validate(...$_POST)) {

        // Saving everything in variables
        $name = $_POST["name"];
        $email = $_POST["email"];
        $subject = $_POST["subject"];
        $message = $_POST["message"];

        // Creating the body of the email
        $body = "$name <$email> sends you the following message: <br><br>
        $message";

        // Sending the email
        sendEmail($subject, $body, $email, $name, $subject, true);

        $status = "success";
    } else {
        $status = "danger";
    }
};

?>

<?php require('./layouts/header.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Contactame</title>
</head>

<body>

    <?php if ($status == "danger") : ?>

        <div class="alert danger">
            <span>Hubo un error 😓</span>
        </div>

    <?php endif; ?>

    <?php if ($status == "success") : ?>

        <div class="alert success">
            <span>¡Mensaje enviado con éxito 🥳!</span>
        </div>

    <?php endif; ?>



    <form action="./" method="POST" class="window">

        <div class="window-body--content window-form">
            <h1>¡Contactame!</h1>

            <div class="input-group">
                <label for="name">Nombre:</label>
                <input type="text" name="name" id="name">
            </div>

            <div class="input-group">
                <label for="email">Correo:</label>
                <input type="email" name="email" id="email">
            </div>

            <div class="input-group">
                <label for="subject">Asunto:</label>
                <input type="subject" name="subject" id="subject">
            </div>

            <div class="input-group">
                <label for="message">Mensaje:</label>
                <textarea name="message" id="message">
            </textarea>
            </div>

            <div class="button-container-form">
                <button name="form" type="submit">Enviar</button>
            </div>

            <div class="contact-info">

                <div class="info">
                    <span><i class="fas fa-map-marker-alt"></i> El Salvador, San Salvador</span>
                </div>

                <div class="info">
                    <span>danielsaytcode@gmail.com</span>
                </div>

            </div>

        </div>


    </form>

    <script src="https://kit.fontawesome.com/bbff992efd.js" crossorigin="anonymous"></script>

</body>

</html>

<?php require('./layouts/footerES.php') ?>