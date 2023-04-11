@extends('dashboard.admin.master')
 

@section('konten')

<div class="container-fluid">
  <div class="card col-12 mt-2 mb-2">

   
    <form class="m-4 p-4" method="POST" action="/akses/update/{{ $user->id }}">
      {{ csrf_field() }}
      {{ method_field('PUT') }}

      <div class="row mb-3">
          <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

          <div class="col-md-6">
              <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus>

              @error('name')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
      </div>

      <div class="row mb-3">
          <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

          <div class="col-md-6">
              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email">

              @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
      </div>

      <div class="row mb-3">
        <label for="role" class="col-md-4 col-form-label text-md-end">Role</label>

        <div class="col-md-6">
            <input id="role" type="text" class="form-control" value="{{ $user->role }}" name="role"  required >

        </div>
    </div>

      {{-- <div class="row mb-3">
          <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

          <div class="col-md-6">
              <input id="password" value="" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

              @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
      </div>

      <div class="row mb-3">
          <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

          <div class="col-md-6">
              <input id="password-confirm" value="{{ $user->password }}" type="text" class="form-control" name="password_confirmation" required autocomplete="new-password">
          </div>
      </div> --}}

      <div class="form-group row" style="justify-content: center;">
        <div class="col-2">
          <input type="submit" class="form-control"  value="Simpan">
        </div>
        <div class="col-2">
          <a href="/akses">
            <input type="button" class="form-control"  value="Cancel">
          </a>
        
        </div>
      
      </div>
  </form>
  </div>
  

</div>

@endsection

