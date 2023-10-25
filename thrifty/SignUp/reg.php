

<!DOCTYPE html>

<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Registration</title>
      <link rel="stylesheet" href="./reg.css">
  
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   </head>
   <body>



      <div class="container">
         <header>Signup Form</header>
         <?php
         if (isset($_GET['success'])) {
            echo "<div class='inserted'>Registration successful. Please Log in to Continue</div>";
        }
        ?> 
         
         <h3>Have an account ?
         <a href="../SignIn/logIn.php">Log in now</a>
         </h3>
         
         <div class="progress-bar">
            <div class="step">
               <p>
                  Name
               </p>
               <div class="bullet">
                  <span>1</span>
               </div>
               <div class="check fas fa-check" ></div>
            </div>
            <div class="step">
               <p>
                  Contact
               </p>
               <div class="bullet">
                  <span>2</span>
               </div>
               <div class="check fas fa-check"></div>
            </div>
            <div class="step">
               <p>
                  Birth
               </p>
               <div class="bullet">
                  <span>3</span>
               </div>
               <div class="check fas fa-check"></div>
            </div>
            <div class="step">
               <p>
                  Submit
               </p>
               <div class="bullet">
                  <span>4</span>
               </div>
               <div class="check fas fa-check"></div>
            </div>
         </div>
         <div class="form-outer">
            <form method="POST" action="save.php">
               <div class="page slide-page">
                  <div class="title">
                     Basic Info:
                  </div>
                  <div class="field">
                     <div class="label">
                        <label for="First Name"> First Name</label>
      
                     </div>
                     <input type="text" name="Fname"/>
                  </div>
                  <div class="field">
                     <div class="label">
                        Last Name
                     </div>
                     <input type="text" name="Lname"/>
                  </div>
                  <div class="field">
                     <button class="firstNext next">Next</button>
                  </div>
               </div>
               <div class="page">
                  <div class="title">
                     Contact Info:
                  </div>
                  
                  <div class="field">
                     <div class="label">
                        Email Address
                     </div>
                     <input type="email" name="email"/>

                  </div>
                  <div class="field">
                     <div class="label">
                        Phone Number
                     </div>
                     <input type="tel" name="phoneNo"/>
                  </div>
                  <div class="field btns">
                     <button class="prev-1 prev">Previous</button>
                     <button class="next-1 next">Next</button>
                  </div>
               </div>
               <div class="page">
                  <div class="title">
                     Date of Birth:
                  </div>
                  <div class="field">
                     <div class="label">
                        Date
                     </div>
                     <input type="date" name="dob"/>
                  </div>
                  <div class="field">
                     <div class="label">
                        Gender
                     </div>
                     <select name='gender'>
                        <option>Male</option>
                        <option>Female</option>
                        <option>Other</option>
                     </select>
                     
                  </div>
                  <div class="field btns">
                     <button class="prev-2 prev">Previous</button>
                     <button class="next-2 next">Next</button>
                  </div>
               </div>
               <div class="page">
                  <div class="title">
                     Login Details:
                  </div>
                  <div class="field">
                     <div class="label">
                        Username
                     </div>
                     <input type="text" name="uname"/>
                  </div>
                  <div class="field">
                     <div class="label">
                        Password
                     </div>
                     <input type="password" name="pwd"/>
                  </div>
                  <div class="field btns">
                     <button class="prev-3 prev">Previous</button>
                     <button class="submit">Submit</button>
                  </div>
               </div>
            </form>
         </div>
      </div>
      <script src="reg.js"></script>
    
   </main>
   </body>
  
</html>