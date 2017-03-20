<html>
<head>
<title>Page Moved</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<h4 class="container"><?php 

if (isset($_POST['number'])) {
	$number = $_POST['number'];
	file("http://smssigma.com/API/WebSMS/Http/v1.0a/index.php?username=bigperl&password=Bigperl123&sender=BIGPER&to=" . $number ."&message=Please+click+here+to+download+our+eatsapp+android+app++https://play.google.com/store/apps/details?id=app.eatsapp&route_id=7");
	echo "Message Sent Successfully.........!";
}

 ?></h4>
<script type="text/javascript" language="JavaScript">
    setTimeout(function () {
                      location.href = 'index.php'; 
               }, 2000);
</script>

</body>
</html>

