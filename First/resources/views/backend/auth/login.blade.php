
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Purple Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="backend/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="backend/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <!-- Layout styles -->
    <link rel="stylesheet" href="backend/assets/css/style.css">
    <link rel="stylesheet" href="backend/assets/css/customize.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="backend/assets/images/favicon.ico" />
  </head>
  <body>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @elseif(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
          <div class="row flex-grow">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left p-5">
                <div class="brand-logo">
                  <img src="backend/assets/images/logo.svg">
                </div>
                <h4>Hello! let's get started</h4>
                <h6 class="font-weight-light">Sign in to continue.</h6>
                <form method="POST" class="pt-3" action ={{ route('auth.admin')}}>
                    @csrf
                  <div class="form-group">
                    <input type="text" name="email" class="form-control form-control-lg" value="{{old('email')}}" id="exampleInputEmail1" placeholder="Username">
                    @if($errors->has('email'))
                        <span class = 'error-message'> {{$errors->first('email')}}</span>
                    @endif
                  </div>
                  <div class="form-group">
                    <input type="password" name = "password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                    @if($errors ->has('password'))
                        <span class="error-message">{{$errors -> first('password')}}</span>
                    @endif
                  </div>
                  <div class="mt-3">
                    <button type="submit" class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn">SIGN IN</button>
                  </div>
                  <div class="my-2 d-flex justify-content-between align-items-center">
                    <div class="form-check">
                      <label class="form-check-label text-muted">
                        <input type="checkbox" class="form-check-input"> Keep me signed in </label>
                    </div>
                    <a href="#" class="auth-link text-black">Forgot password?</a>
                  </div>
                  <div class="mb-2">
                    <button type="button" class="btn btn-block btn-facebook auth-form-btn">
                      <i class="mdi mdi-facebook me-2"></i>Connect using facebook </button>
                  </div>
                  <div class="text-center mt-4 font-weight-light"> Don't have an account? <a href="register.html" class="text-primary">Create</a>
                  </div>
                </form>
                <script>
                    function showAlert() {
                    var alertBox = document.getElementById("alertBox");
                    alertBox.style.display = "block";

                    // Tự động ẩn thông báo sau 1 giây
                    setTimeout(function(){
                        alertBox.style.display = "none";
                    }, 1000);
                }
                </script>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <script>
    @if ($errors->any())
    <script>
        alert("{{ $errors->first() }}");
    </script>
    @endif
    </script>
    <script>
        function showAlert(message) {
            alert(message);
        }
    </script>
    <!-- plugins:js -->
    <script src="backend/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="backend/assets/js/off-canvas.js"></script>
    <script src="backend/assets/js/hoverable-collapse.js"></script>
    <script src="backend/assets/js/misc.js"></script>
    <!-- endinject -->
  </body>
</html>
