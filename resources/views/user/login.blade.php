@extends('layouts.app')
@section('title', '登录')
@section("content")
<!-- login -->
<div class="pages section">
	<div class="container">
		<div class="pages-head">
			<h3>LOGIN</h3>
		</div>
		<div class="login">
			<div class="row">
				<form class="col s12" action="/user/login" method="post">
					@csrf
					<div class="input-field">
						<input type="text" class="validate" name="name" placeholder="USERNAME" required>
					</div>
					<div class="input-field">
						<input type="password" class="validate" name="pwd" placeholder="PASSWORD" required>
					</div>
					<a href=""><h6>Forgot Password ?</h6></a>
					<input type="submit" value="LOGIN" class="btn button-default">
					<!-- <a href="" class="btn button-default">LOGIN</a> -->
				</form>
			</div>
		</div>
	</div>
</div>
<!-- end login -->
@endsection