@guest()
<div class="modal fade" id="singinModal" tabindex="-1" role="dialog" aria-labelledby="modalSingIn" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            
                <div class="modal-header">
                    <div class="modal-logo" id="modalSingIn">
                        <img src="{{ asset('/images/rcu-yellow-logo.png') }}" alt="logo">
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
 
                <div class="modal-body">

                    <div class="modal-title">
                        <h5><b>@lang('data.registro')</b></h5>
                    </div>

                    <form method="POST" action="{{ route('register') }}">
                    @csrf
                        <h6>@lang('data.nombre_apellido')</h6>
                        <div class="form-group" id="input-modal">
                            <i class="fa fa-user"></i>
                            <input type="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="@lang('data.nombre_apellido')">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <h6>@lang('data.correo')</h6>
                        <div class="form-group" id="input-modal">
                            <i class="fas fa-at"></i>
                            <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="example@unimar.edu.ve">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <h6>@lang('data.contrasena')</h6>
                        <div class="form-group" id="input-modal">
                        <i class="fas fa-unlock-alt"></i>
                            <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="********">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        
                        <h6>@lang('data.rep_contrasena')</h6>
                        <div class="form-group" id="input-modal">
                            <i class="fa fa-unlock-alt"></i>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" autofocus placeholder="********">
                        </div>

                        <div class="form-group">
                            <button type="submit" id="btnregister" class="btn btn-primary btn-block">
                            {{ __('Register') }}
                            </button>
                        </div>

                    </form>

                </div>

        </div>
    </div>
</div>

@endguest
<script>
    $("#btnregister").on("click", function () {
        swal("¡Bienvenido!", "Ha sido registrado con éxito", "success");
    });
</script>
