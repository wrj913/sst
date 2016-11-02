<!DOCTYPE html>
<html>
<head>
<title>vince login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<meta name="keywords" content="Blog Login Form Responsive Templates, Iphone Compatible Templates, Smartphone Compatible Templates, Ipad Compatible Templates, Flat Responsive Templates"/>
<link href="{{ asset('/css/login.css') }}" rel="stylesheet">
<!--webfonts-->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Handlee' rel='stylesheet' type='text/css'>
<!--/webfonts-->
</head>
<body style="background: url('{{ $bg_img }}') no-repeat 0px 0px;">
<div class="mask"></div>
<h1></h1>
<!--start-main-->
<div class="login-box">
	<div class="camera"> </div>
	<h2>vince's blog</h2>
	<form method="POST" id="loginForm" action="{{ url('/login') }}">
	    <input type="hidden" name="_token" value="{{ csrf_token() }}">
	    <div class="form-group">
		    <input type="text" name="email" class="text" value="">

		</div>

		<div class="form-group">
		    <input type="password"  name="password" value="">
		</div>
		<div class="clear form-group">
		    <input type="checkbox" name="remember" class="remember"> Remember Me
		</div>
		<div class="btn"><input type="submit" value="SING IN" /></div>
	</form>
	<div class="error-box">
        <span class="form-error"><?=current($errors->get('email'))?></span>
        <span class="form-error"><?=current($errors->get('password'))?></span>
    </div>
</div>
<!--//End-login-form-->

<!--start-copyright-->
<div class="copy-right">
	<p>Yearning for freedom</p>
</div>
<!--//end-copyright-->
<script src="http://cdn.bootcss.com/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="{{asset('/js/bases/rose/login.js')}}"></script>
</body>
</html>