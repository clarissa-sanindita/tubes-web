<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Court-tify </title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('vendors/feather/feather.css')}}">
  <link rel="stylesheet" href="{{asset('vendors/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset('vendors/typicons/typicons.css')}}">
  <link rel="stylesheet" href="{{asset('vendors/simple-line-icons/css/simple-line-icons.css')}}">
  <link rel="stylesheet" href="{{asset('vendors/css/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('css/vertical-layout-light/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('images/favicon.png')}}" />
  <style>
  h4{
    font-size: larger;
    font-weight: 800;
  }

  #username, #password{
    border-radius: 7px;
    height: 40px;
  }

  #btnLogin{
    border-radius: 10px;
    width: 100%;
  }
  .imglog{
    max-width: 375px;
    margin: 0;
   
  }
  .boxx{
    margin: 0;
    padding: 0;
  }
</style>
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
         <div class="col-lg-2 mx-auto"></div>
          <div class="col-lg-4 mx-auto boxx">
            <img class="imglog float-end" src="{{asset('images/img1.jpg')}}" alt="">
          </div>
          <div class="col-lg-3 mx-auto boxx">
          

            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <center>
              @if($message = Session::get('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ $message }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
           @endif
           
           @if(session()->has('loginError'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
           @endif
              <h4>Court-tify Login!</h4>
              <h6 class="fw-light mb-2 mt-3">Enter your detail to get sign in to your account.</h6>
              </center>
              
              <form class="pt-3" method="post" action="/login">
              @csrf
              <div class="form-group">
                      <label for="exampleInputEmail3">Username</label>
                      <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username">
                      @error('username')
                      <div class="invalid-feedback">
                      {{$message}}
                      </div>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Password</label>
                      <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password">
                      @error('password')
                      <div class="invalid-feedback">
                      {{$message}}
                      </div>
                      @enderror
                    </div>
                <div class="mt-3">
                <button type="submit" class="btn btn-primary mb-3 " id="btnLogin">Sign in</button>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Keep me signed in
                    </label>
                  </div>
                  <a href="#" class="auth-link text-black">Forgot password?</a>
                </div>
                
                <div class="text-center mt-3">
                <h6 class="fw-light mb-3">Don't have an account? <a href="/register" class="text-primary">Create</a></h6>
                </div>
              </form>
            </div>
          </div>
          <div class="col-lg-3 mx-auto">

          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="{{asset('vendors/js/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{asset('vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{asset('js/off-canvas.js')}}"></script>
  <script src="{{asset('js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('js/template.js')}}"></script>
  <script src="{{asset('js/settings.js')}}"></script>
  <script src="{{asset('js/todolist.js')}}"></script>
  <!-- endinject -->
</body>

</html>
