@extends( 'frontend/index' )
@section('pageTitle', 'Service Provider Sign-up')
@section('body_class', 'body__signup_service_provider')
@section( 'content' )
<div class="page-container">
	<div class="container">
		<div class="signup-page" id="sign-up-service-provider">
			
			<section>
				<h2 class="signup-title text-center">Join As Service Provider</h2>
				<div class="col-sm-8 col-sm-offset-2">
					{!! Form::open() !!}
					
					<div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
						{!! Form::label('firstname', 'First Name') !!}
						{!! Form::text('firstname', null, ['class' => 'form-control', 'required' => 'required']) !!}
						<small class="text-danger">{{ $errors->first('firstname') }}</small>
					</div>
					<div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
						{!! Form::label('lastname', 'Last Name') !!}
						{!! Form::text('lastname', null, ['class' => 'form-control', 'required' => 'required']) !!}
						<small class="text-danger">{{ $errors->first('lastname') }}</small>
					</div>
					<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
						{!! Form::label('email', 'Email Address') !!}
						{!! Form::email('email', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'eg: foo@bar.com']) !!}
						<small class="text-danger">{{ $errors->first('email') }}</small>
					</div>
					<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
						{!! Form::label('password', 'Password') !!}
						{!! Form::password('password', ['class' => 'form-control', 'required' => 'required']) !!}
						<small class="text-danger">{{ $errors->first('password') }}</small>
					</div>
					<div class="form-group{{ $errors->has('date-of-birth') ? ' has-error' : '' }}">
						{!! Form::label('date-of-birth', 'Date of Birth') !!}
						{!! Form::date('date-of-birth', null, ['class' => 'form-control', 'required' => 'required']) !!}
						<small class="text-danger">{{ $errors->first('date-of-birth') }}</small>
					</div>
					<div class="form-group{{ $errors->has('company-name') ? ' has-error' : '' }}">
						{!! Form::label('company-name', 'Company Name') !!}
						{!! Form::text('company-name', null, ['class' => 'form-control', 'required' => 'required']) !!}
						<small class="text-danger">{{ $errors->first('company-name') }}</small>
					</div>
					<div class="form-group{{ $errors->has('about-company') ? ' has-error' : '' }}">
						{!! Form::label('about-company', 'About the Company') !!}
						{!! Form::textarea('about-company', null, ['class' => 'form-control', 'required' => 'required']) !!}
						<small class="text-danger">{{ $errors->first('about-company') }}</small>
					</div>
					<div class="form-group{{ $errors->has('date-of-inc') ? ' has-error' : '' }}">
						{!! Form::label('date-of-inc', 'Date of Incorporation') !!}
						{!! Form::date('date-of-inc', null, ['class' => 'form-control', 'required' => 'required']) !!}
						<small class="text-danger">{{ $errors->first('date-of-inc') }}</small>
					</div>
					<div class="form-group{{ $errors->has('phone-number') ? ' has-error' : '' }}">
						{!! Form::label('phone-number', 'Phone Number') !!}
						{!! Form::text('phone-number', null, ['class' => 'form-control', 'required' => 'required']) !!}
						<small class="text-danger">{{ $errors->first('phone-number') }}</small>
					</div>
					<div class="form-group{{ $errors->has('photo') ? ' has-error' : '' }}">
						{!! Form::label('profile-photo', 'Profile Photo') !!}
						<div id="profile-photo" class="dropzone">
							<div class="dz-message text-center">
								<span class="text">
									Drag and Drop Files Here
								</span>
								<p>Or</p>
								<i class="gray__bordered__btn website__btn __transition">Browse Files</i>
							</div>
							
						</div>
					</div>
					<div class="form-group{{ $errors->has('valid-ids') ? ' has-error' : '' }}">
						{!! Form::label('valid-ids', 'Valid IDs') !!}
						<div id="valid-ids" class="dropzone">
							<div class="dz-message">
								<span class="text">
									Drag and Drop Files Here Or
								</span>
								<i class="gray__bordered__btn website__btn __transition">Browse Files</i>
							</div>
							
						</div>
					</div>
					<div class="form-group{{ $errors->has('proof-of-billing') ? ' has-error' : '' }}">
						{!! Form::label('proof-of-billing', 'Proof of Billing') !!}
						<div id="proof-of-billing" class="dropzone">
							<div class="dz-message">
								<span class="text">
									Drag and Drop Files Here Or
								</span>
								<i class="gray__bordered__btn website__btn __transition">Browse Files</i>
							</div>
							
						</div>
					</div>	
					<div class="btn-group text-center">
						{!! Form::submit("Register", ['class' => 'website__btn secondary__btn __transition']) !!}
					</div>
					
					{!! Form::close() !!}
				</div>
			</section>
			
		</div>
	</div>
</div>
@endsection
@section('scripts')
<script>
	let photo = new Dropzone('#profile-photo', {
		addRemoveLinks: true,
		url: '/',
		maxFiles:1,
		init: function() {
		    this.hiddenFileInput.removeAttribute('multiple');
		},  
	});
	let ids = new Dropzone('#valid-ids', {
		addRemoveLinks: true,
		url: '/',
		maxFiles:2,
	});
	let billing = new Dropzone('#proof-of-billing', {
		addRemoveLinks: true,
		url: '/',
		maxFiles:2,
	});
</script>
@endsection