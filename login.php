  <!-- Header End -->
  <div class="container-xxl py-5 bg-dark page-header mb-5">
            <div class="container my-5 pt-5 pb-4">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Login Us</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb text-uppercase">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Account</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">login</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Header End -->
<!-- content start here -->

    <div class="container mt-5 p-3">
        <h1 class="text-center">Login Form</h1>
        <div class="row">
        <div class="col-md-4">    
        <div class="bg-light shadow mt-2 p-3 text-dark">Why Join with Us</div>
        <ul>
            <li>24x7 support services</li>
            <li>Online customer support services</li>
            <li>Return Policy</li>
            <li>COD facility</li>
        </ul>
        </div>

        <div class="col-md-8">    
        <div class="bg-light shadow mt-2 p-3 text-dark">Login with us</div>
        <!-- login form -->
          <div class="form-group mt-2 col-md-8 mx-auto">
            <input type="text" name="email" placeholder="Email *" required class="form-control">
          </div>
          <div class="form-group mt-2 col-md-8 mx-auto">
            <input type="password" name="pass" placeholder="Password *" required class="form-control">
          </div>

          <div class="form-group mt-2 col-md-8 mx-auto">
            <input type="submit" name="login" class="btn btn-lg btn-info" value="Login">
            <b class="text-white"><a href="<?php $mainurl;?>forgetpassword">Forget Password ?</a></b>
          </div>

          
          <div class="form-group mt-2 col-md-8 mx-auto">
            <b class="">Don't have an account ?<a href="<?php $mainurl;?>Create-account">Register Here?</a></b>  
        </div>
        </div>
    </div>
    </div>