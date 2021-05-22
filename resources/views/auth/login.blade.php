<style>

.modal-content {
	padding: 10px;
	border-radius: 5px;
	border: none;
   
}
.modal-header .modal-logo img{
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 40%;
}
.modal-body  .form-group {
	position: relative;
}
.modal-body h6{
    font-size: 18px;
    padding-bottom: 6px;
}
.modal-body i {
	position: absolute;
	left: 13px;
	top: 11px;
	font-size: 18px;
}
.modal-body .form-control {
	padding-left: 40px;
}

.modal-body .col-6 a{
    font-size: 15px;
}
</style>


@guest()
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="modalLogin" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                    <div class="modal-logo" id="modalLogin">   
                        <img src="{{ asset('images/logotipo.png') }}" alt="logo">
                    </div>
                   
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="modal-title">
                    <h6>Inicia Sesión</h6>
                </div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group">
                        <i class="fas fa-envelope"></i>
						<input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Correo Electronico">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror    
                    </div>
                    
                    <div class="form-group">
						<i class="fa fa-lock"></i>
						<input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Contraseña">					
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>

                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-6">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-outline-dark btn-block btn-lg" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                            <div class="col-6">
                                <a type="submit" class="btn btn-success btn-block btn-lg">
                                    {{ __('Login') }}
                                </a>
                            </div>
                        </div>
                    </div>
                </form>


            </div>
        </div>
    </div>
</div>

@endguest
