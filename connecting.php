<?php
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $number = $_POST['number'];
    $chid = $_POST['chid'];
    $idnumber = $_POST['idnumber'];
    $adults = $_POST['adults'];
    $children = $_POST['children'];

    $conn = new mysqli('localhost','root','','finalDB');
    if ($conn->connect_error) {
        die('connection failed :'.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into club(fname,lname,number,chid,idnumber,adults,children)
        values(?,?,?,?,?,?,?)");
        $stmt->bind_param("ssisiii",$firstName,$lastName,$number,$chid,$idnumber,$adults,$children);
        $stmt->execute();
        echo "<h1> Booking succeccful... </h1>";
        $stmt->close();
        $conn->close();
    }
?>
