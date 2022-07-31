<!DOCTYPE html>
<html lan="en">
<head>
<meta charset="UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewpoint" content="width=device-width,initial-scale=1.0"/>
<title>User Authentication Using Facial Recognition</title>
</head>
<link rel="stylesheet" type="text/css" href="asset/css/signin.css">
<link rel="stylesheet" type="text/css" href="asset/css/font-awesome/css/all.css">
<link href="asset/css/font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href="asset/css/social-buttons.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.css">
<?php //include 'navbar.php'; ?>
<style type="text/css">
  .img{
    background-color: black;
    border-radius: 28px;
  }
</style>
<body style="background-image: url('./asset/img/bg0.jpg'); background-repeat:no-repeat; background-size: cover; ">

<div class="container" align="center">
<h1 style="color:#1b30a4;">Authentication with Face Recognition</h1>
<button type="submit" class="btn btn-md btn-primary" id="enroll"><i class="fa fa-camera"></i> Enroll New User</button> &nbsp;
<button type="submit" class="btn btn-md btn-success" id="authenticate"><i class="fa fa-user"></i> Authenticate User</button>
</div>
<div id="faceio-modal"></div>
<script src="https://cdn.faceio.net/fio.js"></script>
<script src="./index.js"></script>
</body>
</html>