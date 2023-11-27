@extends('weblayout.auth.layout')
@section('content')
<h3>Sign Up</h3>
<form method="POST" action="{{ route('register') }}">
  @csrf
  <div class="row">
    <div class="col-lg-12 no-pdd">
        <div class="sn-field">
          <input
            type="text"
            name="fname"
            placeholder="First Name"
          />
          <i class="la la-user"></i> 

          @error('fname')
        <div class="text-danger mt-2">
          {{$message}}
        </div>
        @enderror

        </div>
      </div>
      <div class="col-lg-12 no-pdd">
        <div class="sn-field">
          <input
            type="text"
            name="lname"
            placeholder="Last Name"
          />
          <i class="la la-user"></i>
            
          @error('lname')
          <div class="text-danger mt-2">
            {{$message}}
            
          </div>
          @enderror

        </div>
      </div>
      <div class="col-lg-12 no-pdd">
        <div class="sn-field">
          <select name="account_type">
            <option>Account Type</option>
            <option value="farmer">Farmer</option>
            <option value="investor">Investor</option>
          </select>
          <i class="la la-dropbox"></i>
          <span><i class="fa fa-ellipsis-h"></i></span>
        </div>
      </div>                        
      <div class="col-lg-12 no-pdd">
        <div class="sn-field">
          <input
            type="email"
            name="email"
            placeholder="Email"
          />
          <i class="la la-user"></i>
        </div>
      </div>
      <div class="col-lg-12 no-pdd">
        <div class="sn-field">
          <input
            type="password"
            name="password"
            placeholder="Password"
          />
          <i class="la la-lock"></i>
        </div>
      </div>

      
      <div class="col-lg-12 no-pdd">
        <div class="sn-field">
          <input
            type="password"
            name="password_confirmation"
            placeholder="Confirm Password"
          />
          <i class="la la-user"></i>
        </div>
      </div>

      <div class="checky-sec">
        <div class="fgt-sec">
          <input type="checkbox" name="cc" id="c1" />
          <label for="c1">
            <span></span>
          </label>
          <small>Yes i am here, I understand and agree to the workwise
            Terms &amp; Conditions.</small>
        </div>
        
      </div>
    </div>
    <div class="col-lg-12 no-pdd">
        <button type="submit" value="submit">Get Started</button>
        <div class="pt-3"> Already have an account?  <a href="">Sign in here</a></div>
      </div>
     
  </div>
</form>

@endsection