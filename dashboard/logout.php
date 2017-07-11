<?php
session_start();
session_unset(); 
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <link href="lcss/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="lcss/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="stylesheet" type="text/css" href="lcss/icon.css">
  <!--<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" />
  <link href="//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900&subset=latin,latin-ext" rel="stylesheet" />-->

  <title>Logout Success | CELT</title>
  <script type="text/javascript">$(document).ready(function () {
    
    window.setTimeout(function () {
        location.href = "http://celtindia.org/";
    }, 5000);
});</script>
 
<style>
  .title{
    font-size:1.5em;
  }
</style>
</head>

  <body>
  	<div class="materialContainer">
       <div class="box">
         <div class="title">Successfully Logged Out</div>
       </div>
   </div>
 </body>
 </html>
