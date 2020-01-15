@extends('layouts.app')
@section('title', '注册')
@section('content')
<div class="pages section">
	<div class="container">
		<div class="pages-head">
			<h3>REGISTER</h3>
		</div>
		<div class="register">
			<div class="row">
				<form class="col s12" method="post" action="/user/reg">
					@csrf
					<div class="input-field">
						<input type="text" class="validate" name="name" placeholder="NAME" required>
					</div>
					<div class="input-field">
						<input type="email" placeholder="EMAIL" name="email" class="validate" required>
					</div>
					<div class="input-field">
						<input type="password" placeholder="PASSWORD" name="pwd" class="validate" required>
					</div>
					<input type="submit" value="REGISTER" class="btn button-default">
					<!-- <div class="btn button-default">REGISTER</div> -->
				</form>
			</div>
		</div>
	</div>
</div>
@endsection