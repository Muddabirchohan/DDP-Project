<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css?family=Alegreya:900" rel="stylesheet">
<style>
   body{
    margin-top:2.5em;
   }
   h1{
       text-align:center;
       font-weight:bolder;
       letter-spacing:0.3em;
       font-family: 'Alegreya', serif;
   }
</style>
</head>
<body>
    <h1>Review Table</h1>
    <?php
include('booked-connection.php');
include('order-place-connection.php');
$sqlget = "SELECT * FROM booked ,orders ";
$sqldata = mysqli_query($conn,$sqlget) or die('error');
echo "<table class='table'><thead>";
echo "<tr><th >ID</th><th >Name</th><th >Time<th >Datw</th><th>people</th></tr>";
while($row = mysqli_fetch_array($sqldata,MYSQLI_ASSOC)){
    echo"<tr><td>";
    echo $row['b-id'];
    echo"</td><td>";
    echo $row['name'];
    echo"</td><td>";
    echo $row['time'];
    echo"</td><td>";
    echo $row['date'];
    echo"</td><td>";
    echo $row['people'];
    echo "</td></tr>";
}
echo "</thead></table>"
?>
</body>
</html>