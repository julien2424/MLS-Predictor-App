<?php
 include_once('connection.php');

?>

<!DOCTYPE html>
<html>

<head>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800|Varela+Round&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body class="body" onload="getWidth()">

<?php
 $sql1 = "SELECT * FROM mlsusers WHERE email = 'd' ;";
 $result = mysqli_query($con,$sql1);
 $result2 = mysqli_query($con,$sql1);
 $result3 = mysqli_query($con,$sql1);
 $result4 = mysqli_query($con,$sql1);
 $result5 = mysqli_query($con,$sql1);
 $result6 = mysqli_query($con,$sql1);
 $result7 = mysqli_query($con,$sql1);
 $result8 = mysqli_query($con,$sql1);
 $resultCheck = mysqli_num_rows($result);
?>



<form action="insert.php" method = "post" class="formScore" autocomplete="on">

  <input type = "text" name = "score1" placeholder = "0" onkeypress='validate(event)' class="formEdit" maxlength="1"
      <?php while($rows = mysqli_fetch_assoc($result)) { ?>
      value = <?php if($rows['score1'] != null){
        echo $rows['score1'];
      }else{
        echo 9;
      }  ?> >
      <?php } ?>

  <input type = "text" name = "score2" placeholder = "0" onkeypress='validate(event)' class="formEdit" maxlength="1"
      <?php while($rows2 = mysqli_fetch_assoc($result2)) { ?>
      value = <?php echo $rows2['score2'];  ?> >
      <?php } ?>
  <br/>

  <input type = "text" name = "score3" placeholder = "0" onkeypress='validate(event)' class="formEdit" maxlength="1"
      <?php while($rows3 = mysqli_fetch_assoc($result3)) { ?>
      value = <?php echo $rows3['score3'];  ?> >
      <?php } ?>

  <input type = "text" name = "score4" placeholder = "0" onkeypress='validate(event)' class="formEdit" maxlength="1"
      <?php while($rows4 = mysqli_fetch_assoc($result4)) { ?>
      value = <?php echo $rows4['score4'];  ?> >
      <?php } ?>

  <br/>

  <input type = "text" name = "score5" placeholder = "0" onkeypress='validate(event)' class="formEdit" maxlength="1"
      <?php while($rows5 = mysqli_fetch_assoc($result5)) { ?>
      value = <?php echo $rows5['score5'];  ?> >
      <?php } ?>

  <input type = "text" name = "score6" placeholder = "0" onkeypress='validate(event)' class="formEdit" maxlength="1"
      <?php while($rows6 = mysqli_fetch_assoc($result6)) { ?>
      value = <?php echo $rows6['score6'];  ?> >
      <?php } ?>

  <br/>

  <input type = "text" name = "score7" placeholder = "0" onkeypress='validate(event)' class="formEdit" maxlength="1"
      <?php while($rows7 = mysqli_fetch_assoc($result7)) { ?>
      value = <?php echo $rows7['score7'];  ?> >
      <?php } ?>

  <input type = "text" name = "score8" placeholder = "0" onkeypress='validate(event)' class="formEdit" maxlength="1"
      <?php while($rows8 = mysqli_fetch_assoc($result8)) { ?>
      value = <?php echo $rows8['score8'];  ?> >
      <?php } ?>

  <br/>
  <input id = "emailSave" type = "text" name = "email" placeholder = "email@example.com" class="formEditBot">
  <br/>

  
    <input type = "submit" value = "Submit" class="formEditSave">

</form>


    <h1 class="mlstiitle">MLS Predictor</h1>
    <h1 class="heading">Week 1: July 10th, 8AM &nbsp &nbsp &nbsp &nbsp Weekly Prize: $400 &nbsp &nbsp &nbsp &nbsp 4 Score Jackpot: $4,000</h1><h1 class="rules"></h1><img src="images/Atl-MLS.png" width="88" srcset="images/Atl-MLS-p-500.png 500w, images/Atl-MLS-p-800.png 800w, images/Atl-MLS-p-1080.png 1080w, images/Atl-MLS.png 1200w" sizes="(max-width: 479px) 180px, 240px" alt="" class="left1"><img src="images/Redbulls-MLS.png" width="88" alt="" class="left2"><img src="images/SJ-MLS.png" width="88" srcset="images/SJ-MLS-p-500.png 500w, images/SJ-MLS-p-800.png 800w, images/SJ-MLS-p-1080.png 1080w, images/SJ-MLS.png 1200w" sizes="(max-width: 479px) 180px, 240px" alt="" class="left3"><img src="images/Kansas-MLS.png" width="88" srcset="images/Kansas-MLS-p-500.png 500w, images/Kansas-MLS-p-800.png 800w, images/Kansas-MLS-p-1080.png 1080w, images/Kansas-MLS.png 1200w" sizes="(max-width: 479px) 180px, 240px" alt="" class="left4"><img src="images/Dal-MLS.png" width="88" srcset="images/Dal-MLS-p-500.png 500w, images/Dal-MLS-p-800.png 800w, images/Dal-MLS-p-1080.png 1080w, images/Dal-MLS.png 1200w" sizes="(max-width: 479px) 180px, 240px" alt="" class="right1"><img src="images/Crew-MLS.png" width="88" srcset="images/Crew-MLS-p-500.png 500w, images/Crew-MLS-p-800.png 800w, images/Crew-MLS-p-1080.png 1080w, images/Crew-MLS.png 1200w" sizes="(max-width: 479px) 180px, 240px" alt="" class="right2"><img src="images/Revolution-MLS.png" width="88" srcset="images/Revolution-MLS-p-500.png 500w, images/Revolution-MLS-p-800.png 800w, images/Revolution-MLS-p-1080.png 1080w, images/Revolution-MLS.png 1400w" sizes="(max-width: 479px) 180px, 240px" alt="" class="right3"><img src="images/Timbers-MLS.png" width="88" srcset="images/Timbers-MLS-p-500.png 500w, images/Timbers-MLS.png 1000w" sizes="(max-width: 479px) 180px, 240px" alt="" class="right4"><a href="/info" class="button-2 w-button">rules</a><a href="/point" class="button-3 w-button">score</a>
    <h1 class="submitC">By clicking submit, I agree to the official rules.</h1>
    <div class="v1">-<br></div>
    <div class="v2">-<br></div>
    <div class="v3">-<br></div>
    <div class="v4">-<br></div><a  class="game1 w-button"><br><br>‍</a><a  class="game3 w-button"></a><a  class="game2 w-button"></a><a  class="game4 w-button"></a><a  class="toolbar w-button"></a>
    <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.4.1.min.220afd743d.js" type="text/javascript" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="code.js" type="text/javascript"></script>
    <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
  </body>
</html>