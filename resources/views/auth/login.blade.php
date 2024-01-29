@extends('layouts.app')

@section('content')



@extends('layouts.app')

@section('content')

<section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex align-items-center justify-content-center h-100">
      <div class="col-md-8 col-lg-7 col-xl-6">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg"
          class="img-fluid" alt="Phone image">
      </div>
      <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
        <form method="POST" action="{{ route('admin.login') }}">
        @csrf
        

          <!-- Email input -->
          <div class="form-floating mb-3">
            <input type="email" id="form1Example13" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus/>
            @error('email')                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <label for="floatingInput">Usuario</label>
          </div>

          <!-- Password input -->
          <div class="form-floating mb-3">
            <input type="password" id="form1Example23" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" />
            <label for="floatingInput">Contraseña</label>
            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
          </div>

          <div class="d-flex justify-content-around align-items-center mb-4">
            <!-- Checkbox -->
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} />
              <label class="form-check-label"  for="remember"> Remember me </label>
            </div>
            @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('¿Ha olvidado su contraseña?') }}
                                    </a>
                                @endif
          </div>

          <!-- Submit button -->
          <button type="submit" class="btn btn-primary btn-lg btn-block">Ingresar</button>
        </form>
      </div>
    </div>
  </div>
</section>

















@endsection
