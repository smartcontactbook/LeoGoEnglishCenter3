<html lang="en">
<head>
	<title>LeoGo English Center</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/login.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/vendor.css')}}">
</head>
<body class="">
	<div class="login-page">
		<div class="row">
			<div class="col-md-4 col-lg-4 col-md-offset-4 col-lg-offset-4">
				<img src="{{ asset('image/avatar/flat-avatar.png')}}" class="user-avatar" />
				<h1>LeoGo</h1>

				<div class="col-sm-3">
				</div>
				<div class="col-12">
					@if(Session::has('message'))
					<div class="alert alert-{!! Session::get('flag') !!}">
						{!! Session::get('message') !!}
					</div>
					@endif
				</div>
					<input type="hidden" name="_token" value="{{csrf_token()}}">
					<div class="form-content">
						<div class="form-group">
							<input type="text" class="form-control input-underline input-lg" name="txt_Email" placeholder=Email required pattern="^[\w]{1,}[\w.+-]{0,}@[\w-]{2,}([.][a-zA-Z]{2,}|[.][\w-]{2,}[.][a-zA-Z]{2,})$" title="Email Format Invalid">
						</div>
						<div class="form-group">
							<input type="password" class="form-control input-underline input-lg" name="txt_Password" placeholder="Password" required pattern=".{6,}" title="Six or more characters">
						</div>
					</div>
					<input type="submit" class="btn btn-white btn-outline btn-lg btn-rounded progress-login"  value="Log in">
					&nbsp;
				<!-- </form> -->
			</div>
		</div>
	</div>
</body>
</html>