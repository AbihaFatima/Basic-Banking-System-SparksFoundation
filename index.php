<?php
include 'export/connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!--Latest compiled and minified JavaScript-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/jss/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>SF Banking System</title>
</head>
<style>
    body{
  height: 100vh;
  width: 100%;
  margin: 0px;
  /* background-image: url(images/moneyTransfer.jpg);  */
  background: url(images/moneyTransfer.jpg), linear-gradient(to right,  #ffffff, #ece9e6);
  background-size: contain;
 background-repeat: no-repeat;
 background-position: center;
 background-attachment: fixed;
 overflow: hidden;
  }
    h2{
        font: italic 3em "Fira Sans", serif;
}
.para{
    font: italic 2em "Fira Sans", serif;
}

.bton{
    margin-right:20%;
}
    </style>

<body>
<?php
include 'export/header.php';
?>




<!-- <div class="content">
  <h1>.</h1>
</div> -->
<div style="padding: 20px;
                    margin-top: 30px;
                    height: 1500px;">
          <h2 style="color: black; text-align: center">Money transfer got EASY.</h2>
          <p class="para" style="color: black">Transfer your money with ease.</p>
          <p class="para" style="color: black">Welcome to SPARKS FOUNDATION Bank!</p>
          <br>
          <br>
          <button type="button" class="btn btn-primary bton"><a style="color: #ffffff" class="get-started" href="./user.php">Get Started</a></button>
        </div>








<?php
include 'export/footer.php';
?>
</body>
</html>
