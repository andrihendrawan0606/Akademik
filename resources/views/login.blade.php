@extends('layouts.auth')

<div class="wrapper fadeInDown">
    <div id="formContent">
      <!-- Tabs Titles -->

      @if (session()->has('success'))
      <div class="alert alert-success">
          <span style="color: black;">{{ session()->get('success') }}</span>
      </div>
      @endif
      @if (session()->has('error'))
      <div class="alert alert-danger">
          <span style="color: black;">{{ session()->get('error') }}</span>
      </div>
      @endif

  
      <!-- Icon -->
      <div class="fadeIn first">
        <img src="{{asset('img/icon_login.png')}}" class="rounded-circle" id="icon" alt="User Icon" />
      </div>
      
  
      <!-- Login Form -->
      <form  method="POST" action="{{ url('proses_login') }}"  class="mt-5">
        {{ csrf_field() }}
        <input type="text" id="login" class="fadeIn second @error('username') is-invalid @enderror" name="username" placeholder="Masukkan Username">
    @error('username')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
        <input type="password" id="password" class="fadeIn third @error('password') is-invalid @enderror" name="password" placeholder="Masukkan Password">
    @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
        <input type="submit" class="fadeIn fourth" value="Log In">
        @if (Route::has('password.request'))
        <a class="btn btn-link" href="{{ route('password.request') }}">
            {{ __('Forgot Your Password?') }}
        </a>
    @endif
      </form>
  
      <!-- Remind Passowrd -->
      <div id="formFooter">
        <a class="underlineHover" href="#">Forgot Password?</a>
      </div>
  
    </div>
  </div>
