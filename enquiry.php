<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>VPIMSR</title>
  <link rel="icon" type="image/x-icon" href="src/logo.png" />

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

  <!-- CSS -->
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/enquiry.css" />
  <link rel="stylesheet" href="css/p-enquiry.css" />

  <!-- JavaScript -->
  <script src="javascript/popup.js" defer></script>
  <script src="javascript/login.js" defer></script>
  <script src="javascript/enquiry.js" defer></script>
</head>

<body>
  <!-- Log In pop up -->
  <div class="popup">
    <section class="popupdata">
      <h1 class="popuph1">Welcome To VPIMSR</h1>
      <div class="popupdiv">
        <input type="text" placeholder="Username" class="popupinput" id="username_input" />
        <br />
        <input type="password" placeholder="Password" class="popupinput" id="password_input" />
        <br />
        <div id="message">hello</div>
        <button class="popupbut">Log In</button>
        <button class="popupbut" id="close">Close</button>
      </div>
    </section>
  </div>

  <div class="master-container">
    <header>
      <div class="container-lg">
        <div class="header-menu">
          <a href="http://www.vpimsr.edu.in/" target="_blank">
            <img src="src/logo.png" alt="" />
          </a>
          <ul class="header-menu-items">
            <li><a href="index.html">Home</a></li>
            <li><a href="placement.html">Placements</a></li>
            <div class="dropdown-container">
              <li><a href="" class="dropdown-btn active">Admission
                  <img src="src/arrow_drop_down.svg" alt="" class="arrow-down">
                </a></li>
              <div class="dropdown">
                <a href="">Enquiry Form</a>
                <a href="payment.html">Payment</a>
                <a href="fees.html">Courses Fees</a>
              </div>
            </div>
            <li><a href="activity.html">Activities</a></li>
            <li><a href="Courses.html">Courses</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="gallery.html">Gallery</a></li>
            <li><a id="profile">Login</a></li>
          </ul>
        </div>
      </div>
    </header>

    <!-- Write here -->

    <!-- Admission Form -->
    <div class="data-sub">
      <div>
        <!-- this is the part of enquiry form -->
        <?php
        // checking if the request method is post or not.
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          //Connetion of database.
          $servername = "localhost";
          $username = "root";
          $password = "";
          $database = "vpimsr_db";

          $conn = mysqli_connect($servername, $username, $password, $database);

          if ($conn) {  // checking if connection of is done or not.
            // initailized variable for insertion query execution.
            $fname = $_POST['fname'];
            $mname = $_POST['mname'];
            $lname = $_POST['lname'];
            $eadd = $_POST['add'];
            $ecity = $_POST['city'];
            $estate = $_POST['state'];
            $epin = $_POST['pin'];
            $emobile = $_POST['mobile'];
            $ecell = $_POST['cell'];
            $eemail = $_POST['email'];
            @$egender = $_POST['gender'];
            $edob = $_POST['dob'];
            $eaadhar = $_POST['aadhar'];
            @$ecourse = $_POST['course'];
            $edes = $_POST['des'];
            
            //Insert query part.
            $data = "INSERT INTO enquiry_form (fname, mname, lname, eadd, ecity, estate, epin, emobile, ecell, eemail, egender, edob, eaadhar, ecourse, edes) VALUES ('$fname','$mname','$lname','$eadd','$ecity','$estate','$epin','$emobile','$ecell','$eemail','$egender','$edob','$eaadhar','$ecourse','$edes')";
            //query execution part.
            $insert = mysqli_query($conn, $data);

            if ($insert) {  // checking if data stored or not.
              echo "Success! Your data has been stored.";
            } else {
              die("\n Data is not recorded successfully...... :(") . mysqli_error($conn);
            }
          } else {
            die("\n Connection was not done successfully...... :(");
          }
          mysqli_close($conn);
        }
        ?>
      </div>
      <div>
        <img src="src/close.svg" alt="" class="close-btn">
      </div>
    </div>
    <section class="admission-form">
      <div class="container-lg">
        <div class="form-heading">
          <h2>Enquiry Form</h2>
          <div class="line"></div>
        </div>

        <form action="enquiry.php" method="POST">
          <div class="personal-info">
            <h3 class="form-section-heading">personal information</h3>

            <div class="form-one-line-container">
              <div class="form-el-container">
                <label for="name">Name</label>
                <div class="name-container">
                  <input type="text" id="name" autocomplete="off" placeholder="FIRSTNAME" name="fname" />
                  <input type="text" id="fname" autocomplete="off" placeholder="MIDDLENAME" name="mname" />
                  <input type="text" id="lname" autocomplete="off" placeholder="LASTNAME" name="lname" />
                </div>
              </div>
            </div>

            <div class="form-one-line-container">
              <div class="form-el-container">
                <label for="address">Address</label>
                <input type="text" id="address" name="add">
              </div>
            </div>

            <div class="form-one-line-container">
              <div class="form-el-container">
                <label for="city">City</label>
                <input type="text" id="city" autocomplete="off" name="city">
              </div>
              <div class="form-el-container">
                <label for="state">State</label>
                <input type="text" id="state" autocomplete="off" name="state">
              </div>
              <div class="form-el-container">
                <label for="pin">Pin</label>
                <input type="text" id="pin" autocomplete="off" name="pin">
              </div>
            </div>

            <div class="form-one-line-container">
              <div class="form-el-container">
                <label for="mobile">Mobile</label>
                <input type="tel" autocomplete="off" id="mobile" name="mobile" />
              </div>
              <div class="form-el-container">
                <label for="cell">Cellphone</label>
                <input type="tel" autocomplete="off" id="cell" name="cell" />
              </div>
              <div class="form-el-container">
                <label for="email">Email</label>
                <input type="email" autocomplete="off" id="email" name="email" />
              </div>
            </div>

            <div class="form-one-line-container">
              <div class="form-el-container">
                <label for="gender">Gender</label>
                <div class="gender">
                  <input type="radio" name="gender" id="male" value="male" />
                  <label for="male">Male</label>
                  <input type="radio" name="gender" id="female" value="female" />
                  <label for="female">Female</label>
                  <input type="radio" name="gender" id="other" value="other" />
                  <label for="other">Other</label>
                </div>
              </div>
              <div class="form-el-container">
                <label for="dob">DOB</label>
                <input type="date" id="dob" autocomplete="off" name="dob" />
              </div>
              <div class="form-el-container">
                <label for="aadhar">Aadhar</label>
                <input type="text" id="aadhar" autocomplete="off" name="aadhar">
              </div>
            </div>
          </div>

          <div class="enquiry-info">
            <h3 class="form-section-heading">enquiry information</h3>

            <div class="form-one-line-container">
              <div class="form-el-container">
                <label for="course">Course of Interest</label>
                <select name="course-interest" id="course">
                  <option value="">--Select Course--</option>
                  <option value="BCA">BCA</option>
                  <option value="BBA">BBA</option>
                  <option value="MCA">MCA</option>
                  <option value="MBA">MBA</option>
                  <option value="DIT">DIT</option>
                  <option value="PGDCA">PGDCA</option>
                  <option value="DBM">DBM</option>
                  <option value="M.com">M.Com</option>
                </select>
              </div>
            </div>

            <div class="form-one-line-container">
              <div class="form-el-container">
                <label for="description">Description</label>
                <textarea name="des" id="" cols="30" rows="5"></textarea>
              </div>
            </div>

          </div>

          <div class="form-btn-container">
            <button type="reset" class="gray-btn form-btn form-btn-red">Clear</button>
            <button type="submit" class="gray-btn form-btn" id="submit-btn">Submit</button>
          </div>

        </form>
      </div>
    </section>

    <!--Footer Part-->
    <footer>
      <div class="container-lg footer-container">
        <section class="map">
          <h3 class="heading">Maps</h3>
          <div class="map-container">
            <a href="https://www.google.com/maps/place/V.P.+Institute+of+Management+Studies+%26+Research/@16.841187,74.6210434,14.75z/data=!4m5!3m4!1s0x3bc1225e591c9b77:0x281f0db03fdc162d!8m2!3d16.8401904!4d74.6194138" target="blank">
              <img src="src/map.png" alt="" />
            </a>
          </div>
        </section>

        <section class="courses-footer">
          <h3 class="heading">Courses</h3>
          <div class="courses-list">
            <a href="">Bachelors's in Computer Application</a>
            <a href="">Master of Computer Applications</a>
            <a href="">Post Graduate Diploma in Computer Application</a>
            <a href="">Bachelor's degree in Business Administration</a>
            <a href="">Master of Business Administration</a>
            <a href="">Diploma in Business Management</a>
          </div>
        </section>

        <section class="contact-info">
          <h3 class="heading">contact info</h3>
          <div class="contact-container">
            <div class="adress">
              <span>Address</span><br />
              Sangli-Miraj Road,Near Bharati Hospital,Wanlesswadi
              Sangli-416414.
            </div>
            <div class="phone">
              <span>Phone</span><br />
              +91 0233-2212427 <br />
              +91 0233-2211467
            </div>
            <div class="email">
              <span>Email</span><br />
              <a href="mailto:admin@vpimsr.edu.in">admin@vpimsr.edu.in</a>
            </div>
          </div>
        </section>
      </div>

      <hr class="hor-line" />

      <div class="container-lg copyright-container">
        <div id="copyright">
          <div>Copyright &copy; 2022 VPIMSR</div>
          <div>Powered by VPIMSR</div>
        </div>
      </div>
    </footer>
  </div>

  <!-- Bootstrap (Do not touch) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>