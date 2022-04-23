<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <h1>send mail</h1>
    <div class="box">
            <form action="" method="POST">
        <label for="" class="fw-bold">email</label>
        <input type="email" name="email" id="" class="form-control mt-2">
        <label for="1" class="fw-bold">subject</label>
        <input type="text" name="subject" id="" class="form-control mt-2">
        <label for="" class="from-label">content</label>
        <textarea class="form-control" name="content" ></textarea>
        <button type="submit" class="btn btn-success mt-2"name="send">send email</button>

</form>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
<?php
if (isset($_POST['send'])) {
    require_once 'mail.php';

    //l'emetteur
    $mail->setFrom('*****************', 'youcefleprince');
    //le recepteur
    $mail->addAddress($_POST["email"]);

    // subject of the message
    $mail->Subject = $_POST['subject'];

    //body of the message
    $mail->Body = $_POST['content'];
   // move_uploaded_file($_FILES['file']['tmp_name'], $_FILES['file']['name']);

  //  $mail->addAttachment($_FILES['file']['name']);
    //   $mail->addAttachment('files/'.$_POST['file']);
    
    if($mail->send()){
 echo '<div class="alert alert-success" role="alert">
 A simple success alert—check it out!
</div>';
    }else{

    }
}
?>