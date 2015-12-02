@extends('layout.pages')
@section('content')

<div class="row register-content">
	<div class="col-md-3 col-md-offset-2">
		<div class="register-text">
			<p>
			Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
			</p>
		</div>
	</div>
	<div class="col-md-3 col-md-offset-1 register-form">
	 {!! Html::ul($errors->all(), array('class'=>'errors')) !!}		
		<form method="POST" action="/{{ LaravelLocalization::getCurrentLocale() }}/{{ Lang::get('routes.register') }}">
			{!! csrf_field() !!}
			<fieldset>		 	
				<div class="form-group">
			 		<label for="nickname" class="control-label">Nickname</label>				 				 				       
					<input type="text" name="nickname" class="form-control" value="{{ old('nickname') }}">						
				</div>		
				<div class="form-group">
					<label for="email" class="control-label" placeholder="Email">Email</label>						
					<input type="email" name="email" class="form-control" value="{{ old('email') }}">						
				</div>
				<div class="form-group">
					<label for="email_confirmation" class="control-label" placeholder="Email">Email Confirmation</label>						
					<input type="email" name="email_confirmation" class="form-control" value="{{ old('email_confirmation') }}">						
				</div>
				<div class="form-group">
					<label for="password" class="control-label">Password</label>						
					<input type="password" name="password" class="form-control">						
				</div>
				<div class="form-group">
					<label for="password_confirmation" class="control-label">Password Confirmation</label>						
					<input type="password" name="password_confirmation" class="form-control">
				</div>
				<div class="form-group">						
					<button type="submit" class="btn btn-primary">Register</button>						
				</div>	
			</fieldset>					
		</form>				
	</div>	
</div>

@stop