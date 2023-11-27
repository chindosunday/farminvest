{{-- 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
  </head>
  <body id="body">
    <div class="layoutAuthentication">
      <div class="layoutAuthentication_content">
        <main>
            <p>&nbsp; </p>
            <p>&nbsp; </p>
            <p>&nbsp; </p>
            <p>&nbsp; </p>
            <p>&nbsp; </p>
            <p>&nbsp; </p>
            <p>&nbsp; </p>
            <p>&nbsp; </p>
            

          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-5">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                  <div class="card-header">
                    <h3 class="text-center font-weight-light my-4">
                      Thanks for Signing Up!
                    </h3>
                  </div>
                  <div class="card-body">

                    Before proceeding, could you please, take a moment to verify your email by clicking the verification link we just sent to your email

                    @if (session('status') == 'verification-link-sent')
                    <div class="mb-4 font-medium text-sm text-green-600">
                        <span> new verification link has been sent to the email address you provided during registration. </span>
                    </div>
                @endif
                    <div class=" form-items">
                        <form method="POST" action="{{ route('verification.send') }}">
                            @csrf
                
                            <div>
                                <button class="btn btn-info mt-2">
                                    Resend Verification Email'
                                <button>
                            </div>
                        </form>
        
        
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                
                            <button type="submit" class="mt-3">
                                Logout
                            </button>
                        </form>
                    </div>

              
                </div>
                </div>
              </div>
            </div>
          </div>
        </main>
      </div>
    </div>
  </body>
</html>  --}}


                    @extends('weblayout.auth.layout')
                    @section('content')
                    <h3>Thanks for Signing up</h3>
                    
                    Before proceeding, could you please, take a moment to verify your email by clicking the verification link we just sent to your email

                    @if (session('status') == 'verification-link-sent')
                    <div class="mb-4 font-medium text-sm text-green-600">
                        <span> new verification link has been sent to the email address you provided during registration. </span>
                    </div>
                @endif
                    <div class=" form-items">
                        <form method="POST" action="{{ route('verification.send') }}">
                            @csrf
                
                            <div>
                              <input type="submit" value="Resend Verification Link" style="color: white" class="btn btn-info">
                            </div>
                        </form>
        
        
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <div>
                              
                            
                              <input type="submit" value="Logout" class="btn btn-danger" style="color: white">
                            </div>
                        </form>
                    </div>

    
                  </div>
                  <!--sign_up_sec end-->
                  
                </div>
                <!--login-sec end-->
              </div>

              <div class="col-lg-2">
               
                <!--cmp-info end-->
              </div>

            </div>
          </div>
          <!--signin-pop end-->
        </div>
        <!--signin-popup end-->
        
      </div>
      <!--sign-in-page end-->
    </div>
    <!--theme-layout end-->

    <script type="text/javascript" src="js/jquery.min.js.download"></script>
    <script type="text/javascript" src="js/popper.js.download"></script>
    <script type="text/javascript" src="js/bootstrap.min.js.download"></script>
    <script type="text/javascript" src="js/slick.min.js.download"></script>
    <script type="text/javascript" src="js/script.js.download"></script>

    @endsection