<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Star Admin2 </title>
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
</head>
<style>
  h4{
    font-size: larger;
    font-weight: 800;
  }

  #btnSignup{
    border-radius: 10px;
    width: 100%;
  }
  #formm{
    border-radius: 7px;
    height: 40px;
    margin-bottom: -10px;
  }
</style>
<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
            
              <center>
              <h4>Court-tify Sign up!</h4>
              <h6 class="fw-light mb-4 mt-3">Enter your detail to make account Court-tify.</h6>
              </center>
              <form class="pt-3" method="post" action="/register">
              @csrf
                <div class="form-group">
                <div class="form-group" id="">
                      <label for="exampleInputName1">Nama Pelanggan</label>
                      <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror " id="formm" placeholder="Nama Pelanggan">
                      @error('nama')
                      <div class="invalid-feedback">
                        {{$message}}
                      </div>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Alamat</label>
                      <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" id="formm" placeholder="Alamat">
                      @error('alamat')
                      <div class="invalid-feedback">
                      {{$message}}
                      </div>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Email</label>
                      <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="formm" placeholder="Email">
                      @error('email')
                      <div class="invalid-feedback">
                      {{$message}}
                      </div>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">No Telpon</label>
                      <input type="text" name="telp" class="form-control @error('telp') is-invalid @enderror" id="formm" placeholder="No Telpon">
                      @error('telp')
                      <div class="invalid-feedback">
                      {{$message}}
                      </div>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Username</label>
                      <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="formm" placeholder="Username">
                      @error('username')
                      <div class="invalid-feedback">
                      {{$message}}
                      </div>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Password</label>
                      <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="formm" placeholder="Password">
                      @error('password')
                      <div class="invalid-feedback">
                      {{$message}}
                      </div>
                      @enderror
                    </div>
                    <div class="form-group">
                      <input value="user" type="hidden" name="status" class="form-control" id="status">
                    </div>
                
                <div class="mt-3">
                <button type="submit" class="btn btn-primary mb-3 " id="btnSignup">Sign up</button>
                </div>
               
                <div class="text-center mt-3">
                <h6 class="fw-light ">Do you have an account? <a href="/login" class="text-primary">Login</a></h6>
                </div>
              </form>
            </div>
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
