@extends('weblayout.auth.layout')
@section('content')

<h3>Reset Password</h3>
<form method="POST" action="{{ route('password.store') }}">
    @csrf
    
    <div class="">

        <input type="email" name="email" required autofocus autocomplete="username">
    </div>
    <div class="">

        <input type="email" name="password">
    </div>
    <div class="">

        <input type="email" name="confirm_password">
    </div>
    <div class="emailreset">
        <button> Email Password Reset Link </button>
    </div>
 </div>
</form>

@endsection