<!DOCTYPE html>
<html>
<head>
<title>vince login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<meta name="keywords" content="Blog Login Form Responsive Templates, Iphone Compatible Templates, Smartphone Compatible Templates, Ipad Compatible Templates, Flat Responsive Templates"/>
<link href="{{ asset('/css/dress/w3l/app.css') }}" rel="stylesheet">
<!--webfonts-->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Handlee' rel='stylesheet' type='text/css'>
<!--/webfonts-->
</head>
<body style="background: url('{{ $bg_img }}') no-repeat 0px 0px;">
<h1></h1>
<!--start-main-->
<div class="login-box">
	<div class="camera"> </div>
	<h2>vince's blog</h2>
	<form method="POST" id="loginForm" action="{{ url('/auth/login') }}">
	    <input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input type="text" class="text" value="USERNAME" onfocus="if (this.value == 'USERNAME') {this.value = ''};" onblur="if (this.value == '') {this.value = 'USERNAME';}" >
		<input type="password" value="Password" onfocus="if (this.value == 'Password') {this.value = ''};" onblur="if (this.value == '') {this.value = 'Password';}">
		<div class="btn"><input type="submit" value="SING IN" onclick="document.getElementById("loginForm").submit();"></div>
	</form>
</div>
<!--//End-login-form-->

<!--start-copyright-->
<div class="copy-right">
	<p>Yearning for freedom</p>
</div>
<!--//end-copyright-->
</body>
</html>