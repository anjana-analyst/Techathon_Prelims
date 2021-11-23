<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Teachers Page</title>
</head>
<script>
    window.onload = function() {
  setTimeout( function() {
    document.querySelector( '.quote' ).className = ( 'quote active' );    
  }, 100 )
}
</script>
<style>
body {
  background-color:black;
  margin: 0px;
  padding: 0px;
  overflow: hidden;
  
}
html { 
  background:  url('images/teacherbg1.gif') no-repeat center center fixed; 
  background-size: cover;
}

.background {
  position: absolute;
  background-size: cover;
  height: 100%;
  width: 100%;
  opacity: 0.3;
}

.quote {
  -webkit-transition: all 900ms cubic-bezier(0.165, 0.84, 0.44, 1);
  -moz-transition: all 900ms cubic-bezier(0.165, 0.84, 0.44, 1);
  transition: all 900ms cubic-bezier(0.165, 0.84, 0.44, 1);
  position: absolute;
  left: 50%;
  top: 50%;
  margin-left: -275px;
  margin-top: -120px;
  opacity: 0;
}

.line {
  -webkit-transition: width 900ms cubic-bezier(0.165, 0.84, 0.44, 1);
  -moz-transition: width 900ms cubic-bezier(0.165, 0.84, 0.44, 1);
  transition: width 900ms cubic-bezier(0.165, 0.84, 0.44, 1);
  width: 0px;
  height: 1px;
  background: #fff;
  margin: auto;
  margin-bottom: 12px;
  margin-top: 18px;
}

.quote.active {
  -webkit-transform: translateY(-30px);
  -moz-transform: translateY(-30px);
  transform: translateY(-30px);
  opacity: 1;
}

.quote.active .line {
  width: 100px;
}

img {
    -webkit-animation: adjustHue 10s infinite;
    -moz-animation: adjustHue 10s infinite;
    animation: adjustHue 10s infinite;
}

@-webkit-keyframes adjustHue { 
  50% {
    -webkit-filter: saturate(150%) hue-rotate(-35deg);
  }
}

@-moz-keyframes adjustHue { 
  50% {
    -moz-filter: saturate(150%) hue-rotate(-35deg);
  }
}

@keyframes adjustHue { 
  50% {
    filter: saturate(150%) hue-rotate(-35deg);
  }
}
</style>
<body>

	<?php include("includes/header.php"); ?>
    <div class="background"></div>
<div class="quote">
  <div class="line"></div>
  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/277/first-quote_1.png" />
  <div class="line"></div>
</div>
</div>


</body>
</html>