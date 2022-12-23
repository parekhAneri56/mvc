    <!-- Header End -->
  <div class="container-xxl py-5 bg-dark page-header mb-5">
            <div class="container my-5 pt-5 pb-4">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Create Account</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb text-uppercase">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Account</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Register</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Header End -->

    <!-- content start here -->
    <div class="container mt-5 p-3">
        <h1 class="text-center">Register Form</h1>
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
        <div class="bg-light shadow mt-2 p-3 text-dark">Register with us</div>
        <!-- Register form -->
        <form method="post" enctype="multipart/form-data">
          <div class="form-group mt-2 col-md-8 mx-auto">
            <input type="text" name="email" placeholder="Email *" required class="form-control">
          </div>
          <div class="form-group mt-2 col-md-8 mx-auto">
            <input type="password" name="pass" placeholder="Password *" required class="form-control">
          </div>
          <div class="form-group mt-2 col-md-8 mx-auto">
            <input type="password" name="cpass" placeholder="Confirm-Password *" required class="form-control">
          </div>
          <div class="form-group mt-2 col-md-8 mx-auto">
            <input type="date" name="dob" placeholder="DOB *" required class="form-control">
          </div>
        <div class="form-group mt-2 col-md-8 mx-auto">
            <input type="text" name="fname" placeholder="FirstName *" required class="form-control">
          </div>

          <div class="form-group mt-2 col-md-8 mx-auto">
            <input type="text" name="lname" placeholder="LastName *" required class="form-control">
          </div>
          <div class="form-group mt-2 col-md-8 mx-auto">
          <label>Select gender</label>  
          Male :<input type="radio" name="gender" value="male" required>
          Female :<input type="radio" name="gender" value="female" required>          
        </div>

        <div class="form-group mt-2 col-md-8 mx-auto">
          <label>Select Hobbies</label>  
          Teaching :<input type="checkbox" name="chk[]" value="teaching" required>
          Reading :<input type="checkbox" name="chk[]" value="reading">
          listen music:<input type="checkbox" name="chk[]" value="listen music">
          Dancing :<input type="checkbox" name="chk[]" value="dancing">
        </div>

        <div class="form-group mt-2 col-md-8 mx-auto">
            <input type="file" name="img" placeholder="Photo *" required class="form-control">
          </div>

          <div class="form-group mt-2 col-md-8 mx-auto">
            <input type="text" name="phone" placeholder="Phone *" required class="form-control">
          </div>

          <div class="form-group mt-2 col-md-8 mx-auto">
            <textarea name="address" placeholder="Address *" required class="form-control"></textarea>
          </div>
          <div class="form-group mt-2 col-md-8 mx-auto">
            <select name="state" placeholder="state *" required class="form-control">
              <option value="">-select state-</option>
              <?php 
              foreach($state as $state1)
              {
              ?>
              <option value="<?php echo $state1["state_id"];?>"><?php echo $state1["state_name"];?></option>
             <?php 
              }
              ?>
            </select>
          </div>

          <div class="form-group mt-2 col-md-8 mx-auto">
            <select name="city" placeholder=" City *" required class="form-control">
            <option value="">-select city-</option>
            <?php 
              foreach($city as $city1)
              {
              ?>
              <option value="<?php echo $city1["city_id"];?>"><?php echo $city1["city_name"];?></option>
             <?php 
              }
              ?>
            </select>
          </div>
          

 
          <div class="form-group mt-2 col-md-8 mx-auto">
            <input type="submit" name="reg" class="btn btn-lg btn-info" value="Register">
            <input type="reset" name="reset" class="btn btn-lg btn-danger" value="Reset">
          
          </div>

          
          <div class="form-group mt-2 col-md-8 mx-auto">
            <b class="">Already have an account ?<a href="<?php $mainurl;?>login-us"> Login here?</a></b>  
        </div>
        </form>

        </div>
        
    </div>
    </div>