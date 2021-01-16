<?php

    $con = mysqli_connect('localhost', 'root', '');
    if(!$con){
        echo 'not con';
    }

    if(!mysqli_select_db($con,'MLSFull')){
        echo 'not sel';
    }

    $Email = $_POST['email'];
    $score1= $_POST['score1'];
    $score2= $_POST['score2'];
    $score3= $_POST['score3'];
    $score4= $_POST['score4'];
    $score5= $_POST['score5'];
    $score6= $_POST['score6'];
    $score7= $_POST['score7'];
    $score8= $_POST['score8'];

    $sql = "INSERT INTO mlsusers (Email,score1,score2,score3,score4,score5,score6,score7,score8) VALUES ('$Email', '$score1', '$score2', '$score3', '$score4', '$score5', '$score6', '$score7', '$score8')";

    if(!mysqli_query($con,$sql)){
        echo 'not ins';
    }else{
        echo 'inserted';
    }

    header("refresh:2;url = index.php");
?>