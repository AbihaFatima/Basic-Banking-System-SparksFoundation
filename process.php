<?php
include 'export/connection.php';
include 'export/header.php';
$select="SELECT * FROM transfer";
$select_query=mysqli_query($con,$select);
?>


<!-- $insert="insert into users(name,email,balance) values('$name','$email','$balance')";
$insert_query=mysqli_query($con,$insert);
if($insert_query){
    echo "<script> alert('user creation successful');
    window.location='transaction.php';
    </script>"; -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!--Latest compiled and minified JavaScript-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>SF Bank</title>
</head>

<body style="background: linear-gradient(to right, #3a1c71, #d76d77, #ffaf7b);">

<div class="container">
<div class="row">
<h2 class="text-center" style="margin-top: 100px; color: #ffffff;">Transaction History</h2>
<br>

<div class="col-md-offset-2 col-md-8">
<table class="table" style="background-color: #4a4a4a;">
<thead>
<tr style="color: #ffffff;font-size:18px">
<th>ID</th>
<th>Sender</th>
<th>Receiver</th>
<th>Amount</th>
</tr>
</thead>
<tbody>



<?php
while($row=mysqli_fetch_assoc($select_query)){
?>
<tr style="color: #ffff">
<td ><?php echo $row['sid'] ?></td>
<td ><?php echo $row['sender']?></td>
<td ><?php echo $row['receiver']?></td>
<td ><?php echo $row['amount']?></td>
</tr>
<?php } ?>




</tbody>
</table>
</div>
</div>
</div>
</body>

</html>
