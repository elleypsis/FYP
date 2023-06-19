<style>
    .gradient-custom {
/* fallback for old browsers */
background: #6a11cb;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right, rgba(37, 117, 252, 1), rgba(106, 17, 203, 1));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right, rgba(37, 117, 252, 1), rgba(106, 17, 203, 1));

}

</style>

<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">


            <div class="mb-md-5 mt-md-4 pb-5">
            <form name="signupForm" action="registerusers.php" method=POST onsubmit="return validateForm()">

              <h2 class="fw-bold mb-2 text-uppercase">Sign Up</h2>
              <p class="text-white-50 mb-5">You're one step closer to boosting your knowledge.</p>

              <div class="form-outline form-white mb-4">
                <input type="text" name="firstName"id="typeEmailX" class="form-control form-control-lg" />
                <label class="form-label" for="typeEmailX">First Name</label>
            
                <input type="text" name="lastName"id="typeEmailX" class="form-control form-control-lg" />
                <label class="form-label" for="typeEmailX">Last Name</label>
            </div>


              <div class="form-outline form-white mb-4">
                <input type="email" name="email" id="typeEmailX" class="form-control form-control-lg" />
                <label class="form-label" for="typeEmailX">Email</label>
              </div>

              <div class="form-outline form-white mb-4">
                <input type="password" name="password" id="typePasswordX" class="form-control form-control-lg" />
                <label class="form-label" for="typePasswordX">Password</label>
              </div>

              <div class="form-outline form-white mb-4">
                <input type="password" name="password2" id="typePasswordX" class="form-control form-control-lg" />
                <label class="form-label" for="typePasswordX">Re-Enter Password</label>
              </div>

              <button class="btn btn-outline-light btn-lg px-5" type="submit">Sign Up</button>

    
            
            </form>
            </div>


          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
 function validateForm() {
  var firstName = document.forms["signupForm"]["firstName"].value;
  var lastName = document.forms["signupForm"]["lastName"].value;
  var email = document.forms["signupForm"]["email"].value;
  var password = document.forms["signupForm"]["password"].value;
  var password2 = document.forms["signupForm"]["password2"].value;
  
  var nameRegex = /^[a-zA-Z]{2,20}$/;
  var emailRegex = /^([a-zA-Z0-9._%-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,})$/;

  //firstname validation
  if (!nameRegex.test(firstName)) {
    alert("First name must be between 2 and 20 letters and contain only letters.");
    return false;
  }
  if (firstName == "") {
    alert("First Name must be filled out");
    return false;
  }

  //lastname validation
  if (lastName == "") {
    alert("Last Name must be filled out");
    return false;
  }
  if (!nameRegex.test(lastName)) {
    alert("Last name must be between 2 and 20 letters and contain only letters.");
    return false;
  }

  //email validation
  if (email == "") {
    alert("Email must be filled out");
    return false;
  }
  if (!emailRegex.test(email)) {
      alert("Please enter a valid email address.");
      return false;
  }

  
  if (password == "") {
    alert("Password must be filled out");
    return false;
  }

  if (password2 == "") {
    alert("Re-enter Password must be filled out");
    return false;
  }

  if (password != password2) {
    alert("Passwords do not match");
    return false;
  }
  return true;
}

</script>