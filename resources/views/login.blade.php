@extends('master_layout')
@section('dynamic')    
<div class="container-fluid main">
        <div class="row">
    <form class="auth" method="POST" action="{{ route('loging') }}">
        @csrf
        <h2 class="heading">Login</h2>
        <div class="mb-3">
          <label for="email" class="form-label">Email address</label>
          <input type="email" name="email" autocomplete="off" class="form-control" id="email" />
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" name="password" autocomplete="off" class="form-control" id="password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form> 
        </div>
    </div>
@endsection