<?php include 'header.php'; ?>
<body class="back123">
    
    <div class="back">
      <div class="container-fluid position">
        <h1 class="position1"><span id="color1">eats</span><span id="color2">app</span></h1>
      </div>
    </div>

<?php include 'footer.php'; ?>

<?php 

if (isset($_POST['number'])) {
  $number = $_POST['number'];
  file("http://smssigma.com/API/WebSMS/Http/v1.0a/index.php?username=bigperl&password=Bigperl123&sender=BIGPER&to=" . $number ."&message=Please+click+here+to+download+our+eatsapp+android+app++https://play.google.com/store/apps/details?id=app.eatsapp&route_id=7");
  echo "<script>alert('Message Sent Successfully.........!')</script>";
}

 ?>