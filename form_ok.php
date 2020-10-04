<?php
    $username=$_GET['username'];
    $pwd=$_GET['pwd'];
    $firstname=$_GET['firstname'];
    $lastname=$_GET['lastname'];
    $country=$_GET['country'];
    $birthday=$_GET['birthday'];
    $messsage=$_GET['message'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style> 
    #main {
        width: 70px;
        height: 300px;
        border: 1px solid #c3c3c3;
        display: flex;
        flex-wrap: wrap;
        align-content: center;
    }

    #main div {
        width: 70px;
        height: 70px;
        padding: 20px;
    }
</style>
</head>


<body>
    <h3>Data</h3>
    <div style="background-color:#d8aafb;">username :     <?=$username?></div>
    <div style="background-color:lightblue;">password :   <?=$pwd?></div>
    <div style="background-color:pink;">First name :  <?=$firstname?></div>

    <div style="background-color:#d8aafb;">Last name :    <?=$lastname?></div>

    <div style="background-color:lightblue;">Country :    <?=$country?></div>

    <div style="background-color:pink;">Birthday :    <?=$birthday?></div>

    <div style="background-color:#d8aafb;">Message :  <?=$messsage?></div>

</body>
</html>