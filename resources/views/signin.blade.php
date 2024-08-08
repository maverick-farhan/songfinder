@extends('master_layout')
@section('dynamic')
<div class="container-fluid main">
        <div class="row">
    <form class="auth" method="POST" action="{{ route('register') }}">
        @csrf
        <h2 class="heading">SignIn</h2>
        <div class="mb-3">
          <label for="email" class="form-label">Email address</label>
          <input type="email" name="email" autocomplete="off" class="form-control" id="email" />
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" autocomplete="off" class="form-control" id="password" name="password" >
        </div>
        <div class="mb-3">
          <label for="cpassword" class="form-label">Confirm Password</label>
          <input type="password" autocomplete="off" class="form-control" name="password_confirmation" id="cpassword">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form> 
         </div>
    </div>   
@endsection