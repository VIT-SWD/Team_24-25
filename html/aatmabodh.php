<!-- nonvit -->
<?php
session_start();
?>
<?php
error_reporting(0);
require_once "../php/config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['nonvitsubmit'])) {

  $Name = mysqli_real_escape_string($con, $_POST['Name']);
  $Email = mysqli_real_escape_string($con, $_POST['Email']);
  $Phone = mysqli_real_escape_string($con, $_POST['Phone']);
  $State = mysqli_real_escape_string($con, $_POST['State']);
  $City = mysqli_real_escape_string($con, $_POST['City']);
  $isStud = mysqli_real_escape_string($con, $_POST['isStud']);
  $Organization = mysqli_real_escape_string($con, $_POST['Organization']);
  $randomText = mysqli_real_escape_string($con, $_POST['randomText']);
  $Reference = mysqli_real_escape_string($con, $_POST['Reference']);

  $SELECT = "SELECT Email FROM `user` WHERE Email = ? LIMIT 1";
  $INSERT = "INSERT INTO `user` (Name, Email, Phone, State, City, isStud, Organization, randomText, Reference) values(?, ?, ?, ?, ?, ?, ?, ?, ?)";

  $stmt = $con->prepare($SELECT);
  $stmt->bind_param("s", $Email);
  $stmt->execute();
  $stmt->bind_result($Email);
  $stmt->store_result();
  $rnum = $stmt->num_rows;

  if ($rnum == 0) {
    if (strlen($_POST['Phone']) < 10) {
?>
      <script>
        alert("Mobile number should be of 10 digits");
      </script>
    <?php
    } else if (!preg_match("/^[6-9]\d{9}$/", $_POST['Phone'])) {
    ?>
      <script>
        alert("Invalid mobile number");
      </script>
    <?php
    } else {
      $stmt->close();

      $stmt = $con->prepare($INSERT);
      $stmt->bind_param("sssssssss", $Name, $Email, $Phone, $State, $City, $isStud, $Organization, $randomText, $Reference);
      $stmt->execute();
    ?>
      <script>
        alert("Record inserted successfully");
      </script>
    <?php
    }
  } else {
    ?>
    <script>
      alert("Email id already registered");
    </script>
<?php
  }
}
?>

<!-- VIT-Students -->
<?php
error_reporting(0);
require_once "../php/config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['vitsubmit'])) {

  $Name = mysqli_real_escape_string($con, $_POST['Name']);
  $Email = mysqli_real_escape_string($con, $_POST['Email']);
  $Phone = mysqli_real_escape_string($con, $_POST['Phone']);
  $State = mysqli_real_escape_string($con, $_POST['State']);
  $City = mysqli_real_escape_string($con, $_POST['City']);
  $Year = mysqli_real_escape_string($con, $_POST['Year']);
  $Branch = mysqli_real_escape_string($con, $_POST['Branch']);
  $Division = mysqli_real_escape_string($con, $_POST['Division']);
  $PNR = mysqli_real_escape_string($con, $_POST['PNR']);
  $Roll = mysqli_real_escape_string($con, $_POST['Roll']);

  $SELECT = "SELECT Email FROM `vituser` WHERE Email = ? LIMIT 1";
  $INSERT = "INSERT INTO `vituser` (Name, Email, Phone, State, City, Year, Branch, Division, PNR, Roll) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

  $stmt = $con->prepare($SELECT);
  $stmt->bind_param("s", $Email);
  $stmt->execute();
  $stmt->bind_result($Email);
  $stmt->store_result();
  $rnum = $stmt->num_rows;

  if ($rnum == 0) {
    if (strlen($_POST['Phone']) < 10) {
?>
      <script>
        alert("Mobile number should be of 10 digits");
      </script>
    <?php
    } else if (!preg_match("/^[6-9]\d{9}$/", $_POST['Phone'])) {
    ?>
      <script>
        alert("Invalid mobile number");
      </script>
    <?php
    } else {
      $stmt->close();

      $stmt = $con->prepare($INSERT);
      $stmt->bind_param("sssssissss", $Name, $Email, $Phone, $State, $City, $Year, $Branch, $Division, $PNR, $Roll);
      $stmt->execute();
    ?>
      <script>
        alert("Record inserted successfully");
      </script>
    <?php
    }
  } else {
    ?>
    <script>
      alert("Email id already registered");
    </script>
<?php
  }
}
?>

<!-- Participants -->
<?php
error_reporting(0);
require_once "../php/config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['participantsubmit'])) {

  $Name = mysqli_real_escape_string($con, $_POST['Name']);
  $Phone = mysqli_real_escape_string($con, $_POST['Phone']);
  $Profession = mysqli_real_escape_string($con, $_POST['Profession']);
  $State = mysqli_real_escape_string($con, $_POST['State']);
  $City = mysqli_real_escape_string($con, $_POST['City']);
  $VolName = mysqli_real_escape_string($con, $_POST['VolName']);


  $SELECT = "SELECT Phone FROM `participation` WHERE Phone = ? LIMIT 1";
  $INSERT = "INSERT INTO `participation` (Name, Phone, Profession, State, City, VolName) values(?, ?, ?, ?, ?, ?)";

  $stmt = $con->prepare($SELECT);
  $stmt->bind_param("s", $Phone);
  $stmt->execute();
  $stmt->bind_result($Phone);
  $stmt->store_result();
  $rnum = $stmt->num_rows;

  if ($rnum == 0) {
    if (strlen($_POST['Phone']) < 10) {
?>
      <script>
        alert("Mobile number should be of 10 digits");
      </script>
    <?php
    } else if (!preg_match("/^[6-9]\d{9}$/", $_POST['Phone'])) {
    ?>
      <script>
        alert("Invalid mobile number");
      </script>
    <?php
    } else {
      $stmt->close();

      $stmt = $con->prepare($INSERT);
      $stmt->bind_param("ssssss", $Name, $Phone, $Profession, $State, $City, $VolName);
      $stmt->execute();
    ?>
      <script>
        alert("Record inserted successfully");
      </script>
    <?php
    }
  } else {
    ?>
    <script>
      alert("Contact Number already registered");
    </script>
<?php
  }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="HandheldFriendly" content="true">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>

  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>



  <title>Aatmabodh Registration</title>
  <link rel="stylesheet" type="text/css" href="../css/aatmabodh_reg.css">
  <link rel="stylesheet" href="../css/main.css" />
  <noscript>
    <link rel="stylesheet" href="../css/noscript.css" />
  </noscript>
  <!-- <link rel=”stylesheet” href=”bootstrap.css”> -->
</head>
<style type="text/css">

section .containersy {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-wrap: wrap;
  max-width: 1200px;
  margin: 40px 0;
}

section .containersy .cardsy {
  position: relative;
  min-width: 320px;
  height: 360px;
  box-shadow: inset 5px 5px 5px rgba(0, 0, 0, 0.2),
    inset -5px -5px 15px rgba(255, 255, 255, 0.1),
    5px 5px 15px rgba(0, 0, 0, 0.3), -5px -5px 15px rgba(255, 255, 255, 0.1);
  border-radius: 15px;
  margin: 30px;
  transition: 0.5s;
}

section .containersy .cardsy:nth-child(1) .boxsy .contentsy a {
  background: #d4322b;
}

section .containersy .cardsy:nth-child(2) .boxsy .contentsy a {
  background: #d4322b;
}
section .containersy .cardsy:nth-child(3) .boxsy .contentsy a {
  background: #d4322b;
}

section .containersy .cardsy .boxsy {
  position: absolute;
  top: 20px;
  left: 20px;
  right: 20px;
  bottom: 20px;
  background: #2a2b2f;
  border-radius: 15px;
  display: flex;
  justify-content: center;
  align-items: center;
  overflow: hidden;
  transition: 0.5s;
}

section .containersy .cardsy .boxsy:hover {
  transform: translateY(-50px);
}

section .containersy .cardsy .boxsy:before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 50%;
  height: 100%;
  background: rgba(255, 255, 255, 0.03);
}

section .containersy .cardsy .boxsy .contentsy {
  padding: 20px;
  text-align: center;
}

section .containersy .cardsy .boxsy .contentsy h2 {
  position: absolute;
  top: -10px;
  right: 30px;
  font-size: 8rem;
  font-weight: bold;
  color: rgba(255, 255, 255, 0.1);
}

section .containersy .cardsy .boxsy .contentsy h3 {
  font-size: 1.8rem;
  color: #fff;
  z-index: 1;
  transition: 0.5s;
  margin-bottom: 15px;
}

section .containersy .cardsy .boxsy .contentsy p {
  font-size: 1rem;
  font-weight: 300;
  color: rgba(255, 255, 255, 0.9);
  z-index: 1;
  transition: 0.5s;
}

section .containersy .cardsy .boxsy .contentsy a {
  position: relative;
  display: inline-block;
  padding: 8px 20px;
  background: black;
  border-radius: 5px;
  text-decoration: none;
  color: white;
  margin-top: 20px;
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
  transition: 0.5s;
}
section .containersy .cardsy .boxsy .contentsy a:hover {
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.6);
  background: #fff;
  color: #000;
}

  .counter-up {
    background: url("../img/counter.png") no-repeat;
    min-height: 50vh;
    background-size: cover;
    background-attachment: fixed;
    padding: 0 50px;
    position: relative;
    display: flex;
    align-items: center;
  }

  .counter-up::before {
    position: absolute;
    content: "";
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    background: rgba(0, 0, 0, 0.8);
  }

  .counter-up .contentc {
    z-index: 1;
    position: relative;
    display: flex;
    width: 100%;
    height: 100%;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between;
  }

  .counter-up .contentc .boxc {
    border: 1px dashed rgba(255, 255, 255, 0.6);
    width: calc(25% - 30px);
    border-radius: 5px;
    display: flex;
    align-items: center;
    justify-content: space-evenly;
    flex-direction: column;
    padding: 20px;
  }

  .contentc .boxc .iconc {
    font-size: 48px;
    color: #e6e6e6;
  }

  .contentc .boxc .counter {
    font-size: 50px;
    font-weight: 500;
    color: #f2f2f2;
    font-family: sans-serif;
  }

  .contentc .boxc .textc {
    font-weight: 400;
    color: #ccc;
  }

  @media screen and (max-width: 1036px) {
    .counter-up {
      padding: 50px 50px 0 50px;
    }

    .counter-up .contentc .boxc {
      width: calc(50% - 30px);
      margin-bottom: 50px;
    }
  }

  @media screen and (max-width: 580px) {
    .counter-up .contentc .boxc {
      width: 100%;
    }
  }

  @media screen and (max-width: 500px) {
    .counter-up {
      padding: 30px 20px 0 20px;
    }
  }




  .testimonials-clean {
    color: #313437;
    background-color: #eef4f7;
    margin-top: -45px;
  }

  .testimonials-clean p {
    color: #7d8285;
  }

  .testimonials-clean h2 {
    font-weight: bold;
    margin-bottom: 40px;
    padding-top: 40px;
    color: inherit;
  }

  @media (max-width:767px) {
    .testimonials-clean h2 {
      margin-bottom: 25px;
      padding-top: 25px;
      font-size: 24px;
    }
  }

  .testimonials-clean .intro {
    font-size: 16px;
    max-width: 500px;
    margin: 0 auto;
  }

  .testimonials-clean .intro p {
    margin-bottom: 0;
  }

  .testimonials-clean .people {
    padding: 50px 0 20px;
  }

  .testimonials-clean .item {
    margin-bottom: 32px;
  }

  @media (min-width:768px) {
    .testimonials-clean .item {
      height: 220px;
    }
  }

  .testimonials-clean .item .box {
    border: solid 0px;
    padding: 30px;
    background-color: #fff;
    position: relative;
  }

  .testimonials-clean .item .box:after {
    border: solid 0px;
    content: '';
    position: absolute;
    left: 30px;
    bottom: -24px;
    width: 0;
    height: 0;
  }

  .testimonials-clean .item .author {
    margin-top: 28px;
    padding-left: 25px;
  }

  .testimonials-clean .item .name {
    font-weight: bold;
    margin-bottom: 2px;
    color: inherit;
  }

  .testimonials-clean .item .titlet {
    font-size: 13px;
    color: #9da9ae;
  }

  .testimonials-clean .item .description {
    font-size: 15px;
    margin-bottom: 0;
  }

  .testimonials-clean .item img {
    max-width: 40px;
    float: left;
    margin-right: 12px;
    margin-top: -5px;
  }


  .hover14 figure::before {
    position: absolute;
    top: 0;
    left: -75%;
    z-index: 2;
    display: block;
    content: '';
    width: 50%;
    height: 100%;
    background: -webkit-linear-gradient(left, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, .3) 100%);
    background: linear-gradient(to right, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, .3) 100%);
    -webkit-transform: skewX(-25deg);
    transform: skewX(-25deg);
  }

  .hover14 figure:hover::before {
    -webkit-animation: shine .75s;
    animation: shine .75s;
  }

  @-webkit-keyframes shine {
    100% {
      left: 125%;
    }
  }

  @keyframes shine {
    100% {
      left: 125%;
    }
  }

  @media (max-width: 936px) and (min-width:734px) {
  /* For tablets: */
  .previous{
      margin-top:20%;
  }
  }
</style>


<body>
  <!-- Image -->

    <div class="container-fluid">
        <header class="d-flex flex-wrap justify-content-between py-3 mb-4 border-bottom">
            <a href="../index.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                <img src="../img/SWD Youtube2.png" class="bi me-2" width="40" height="36">
                <span class="fs-4" style="font-size: 2vw; line-height: 0.8;"><b style="color: #234d20; font-family: 'Times New Roman', serif;">Social Welfare
                        <br>& Development</b></span>
            </a>
                <img src="../img/Aatmabodhlogo.png" class="bi me-2" width="100" height="36">
           
        </header>
    </div>

  <div class="card mb-3">
    <img class="card-img-top" src="../img/slider.jpg" alt="Card image cap">
    <div class="card-body" style="width: 90%; height: 90%; border: solid white; position:absolute; left: 5%; top: 5%; bottom: 5%; right: 5%;">
    </div>
  </div>



  <div class="container">
    <div class="row">

      <!-- text and image -->
      
      <div class="col-md-6" style="z-index: 1; padding: right 10%;">
        <section class="spotlight orient-left content-align-left">
        <div class="g-col-6">
          <div class="row featurette d-flex justify-content-center align-items-center">
            <div class="card-body">

              <div class="title">
                <h2 class="text-center"><b style="color: #d4322b;">AATMABODH</b></h2>
              </div>
              <p class="text-justify" style="margin-right: 8%; ">Aatmabodh, an initiative by the social welfare and development committee to spread the knowledge of digital literacy among underprivileged, especially senior citizens and women. Started right from teaching people by physically visiting their house, moving on to digitally teaching in computer labs, and further with the amidst of pandemic, the event continued with the same excitement and enthusiasm in online mode with teaching initiative right from their home place.</p>
                          </div>
          </div>
          
        </div>
        <div class="image" style="margin-right: 5%;">
          <img src="../img/i44.jpg" class="img-fluid" alt="image">
        </div>
         </section>
      </div>
   


      <!-- Volunteer Application Form -->

    </div>
  </div>
  <!-- participants Application Form -->

  <div class="container" style="padding-bottom:10%;">

    <div class="row temp-row">

      <div class="col-md-6">

        <div class="flip-card">
          <div class="flip-card-inner" id="form3">
            <div class="flip-card-front">

              <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST" myForm="text-center" id="form2" class="row g-3">
                <!-- <h3>Interested in Volunteering?</h3> -->


                <h2><b>Participant's Application Form</b></h2>
                <div class="text-center">
                  <h4 style="text-align: center;"><b>मराठी साठी</b></h4>
                  <button type="button" class="button small" onclick="flip2()">इथे क्लिक करा</button>
                </div>


                <!--   <h5>मराठी साठी</h5> -->


                <div class="col-12">
                  <label for="inputName" class="form-label">Full Name</label>
                  <input type="text" class="form-control" name="Name" placeholder="Type Your Full Name" required>
                </div>



                <div class="col-md-12">
                  <label for="inputPhone" class="form-label">WhatsApp Number</label>
                  <input type="tel" class="form-control" name="Phone" placeholder="Your Phone Number" required>
                  <?php if (isset($phone_error)) { ?>
                    <p><?php echo $phone_error ?></p>
                  <?php } ?>
                </div>
                <div class="col-12">
                  <label for="inputAddress" class="form-label">Profession</label>
                  <input type="text" class="form-control" name="Profession" placeholder="Enter Your Profession" required>
                </div>
                <div class="col-md-6">
                  <label for="inputState" class="form-label">State</label>
                  <input type="text" class="form-control" placeholder="Your State" name="State" required>
                </div>
                <div class="col-md-6">
                  <label for="inputCity" class="form-label">City</label>
                  <input type="text" class="form-control" name="City" placeholder="Your City" required>
                </div>


                <div class="col-12">
                  <label for="inputVName" class="form-label">Volunteer Name</label>
                  <input type="text" class="form-control" name="VolName" placeholder="Type Volunteer Name">
                </div>
                <div class="text-center">
                  <button type="submit" name="participantsubmit" class="button">SUBMIT</button>
                </div>
              </form>
            </div>
            <div class="flip-card-back">

              <form method="POST" myForm="text-center" id="form2" class="row g-3">
                <!-- <h3>Interested in Volunteering?</h3> -->


                <h2><b>सहभागी अर्ज</b></h2>
                <div class="text-center">
                  <h4 style="text-align: center;"><b>For English</b></h4>
                  <button type="button" class="button small" onclick="flip3()">CLICK HERE</button>
                </div>

                <!--  <h5>मराठी साठी</h5> -->


                <div class="col-12">
                  <label for="inputName" class="form-label">पूर्ण नाव</label>
                  <input type="text" class="form-control" name="Name" placeholder="तुमचे पूर्ण नाव टाईप करा" required>
                </div>



                <div class="col-md-12">
                  <label for="inputPhone" class="form-label">फोन नंबर</label>
                  <input type="tel" class="form-control" name="Phone" placeholder="तुमचा फोन नंबर टाईप करा" required>
                  <?php if (isset($phone_error)) { ?>
                    <p><?php echo $phone_error ?></p>
                  <?php } ?>
                </div>



                <div class="col-12">
                  <label for="inputAddress" class="form-label">व्यवसाय</label>
                  <input type="text" class="form-control" name="Profession" placeholder="तुमचा व्यवसाय टाईप करा" required>
                </div>
                <div class="col-md-6">
                  <label for="inputState" class="form-label">राज्य</label>
                  <input type="text" class="form-control" name="State" placeholder="आपल्या राज्याचे नाव टाईप करा" required="">
                </div>
                <div class="col-md-6">
                  <label for="inputCity" class="form-label">शहर</label>
                  <input type="text" class="form-control" name="City" placeholder="तुमच्या शहराचे नाव टाईप करा" required>
                </div>


                <div class="col-12">
                  <label for="inputVName" class="form-label">स्वयंसेवकाचे नाव</label>
                  <input type="text" class="form-control" name="VolName" placeholder="तुमचे स्वयंसेवक नाव टाईप करा">
                </div>

                <div class="text-center">
                  <button type="submit" name="participantsubmit" class="button">फॉर्म सबमिट करण्यासाठी येथे क्लिक करा</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="image2 image">
          <img src="../img/i3.jpg" class="img-fluid" alt="image2">
        </div>
        <div class="card-body">
          <h2 class="text-center text-uppercase" style="font-size: 5vw; "><b>questions?</b>
          </h2>

          <p class="text-center">

            <span><b>E-mail us at <span style="color: #d4322b;">vitswd@vit.edu</span></b></span><br>
            <span><b>or Contact us: <span style="color: #d4322b;">+91 60054 87084 / +91 77965 64982</span></b></span>
          </p>
        </div>
      </div>
    </div>
  </div>
  <!-- Counter -->
<div class="previous" style="padding-top:5%;">
  <section class="wrapper style1 align-center" style="margin-top: 10%; background-color: #d4322b; opacity: 0.8;">
    <div class="inner">
      <h2><b style="color: white;">Previous Statistics</b></h2>
      <p style="color: white; text-align: center;">२००८ मध्ये समाजातील ज्येष्ठ, निरक्षर व महिलांना डिजिटल परिभाषेशी परिचीत करण्याच्या हेतूने  SW&D कमिटीने सुरू केलेला 'आत्मबोध' हा उपक्रम दरवर्षी तितक्याच जोमाने राबवला जातो. सुरूवातीला लोकांच्या घरी जाऊन तर नंतर काॅलेजमध्ये कम्प्युटर लॅब मध्ये लोकांना शिकवण्याचे काम चालू ठेवण्यात आले. मागील वर्षी देखील कोरोनामुळे लाॅकडाउन असताही आॅनलाईन पद्धतीने आत्मबोध हा उपक्रम राबविला. आॅनलाईन पद्धतीमध्ये सुद्धा तितकाच उत्साह आणि आनंद पहायला मिळाला.</p>
    </div>
  </section></div>

  <div class="counter-up">
    <div class="contentc">
      <div class="boxc">
        <div class="iconc"><i class="fas fa-users"></i></div>
        <div class="counter">4000</div>
        <div class="textc">Participants</div>
      </div>
      <div class="boxc">
        <div class="iconc"><i class="fas fa-history"></i></div>
        <div class="counter">30</div>
        <div class="textc">Edition</div>
      </div>
      <div class="boxc">
        <div class="iconc"><i class="fas fa-users"></i></div>
        <div class="counter">3700</div>
        <div class="textc">Volunteers</div>
      </div>

    </div>
  </div>

  <!-- testimonial -->

  <div class="testimonials-clean">
    <div class="container">
      <div class="intro">
        <h2 class="text-center">Testimonials</h2>
      </div>
      <div class="row people">
        <div class="col-md-6 col-lg-4 item">
          <div class="box">
            <p class="description">आत्मबोध मुळे आयुष्य सोपे झाले. घरी बसुन अनेक तांत्रिक बाबी कळाल्या, Gpay मुळे घरी बसुन कोणालाही पैसे पाठवता येतात हे कळालं. आत्मबोध चे मनापासुन आभार मानते.</p>
          </div>
          <div class="author">
            <h5 class="name">- मनीषा गोखले</h5>
            <p class="titlet">Ex-Participant</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 item">
          <div class="box">
            <p class="description">Aatmabodh has been a interactive and fun session for me. It is a great social cause & I am proud that I was able to work for a organization that helps the elderly.</p>
          </div>
          <div class="author">
            <h5 class="name">- Neel Gokhale</h5>
            <p class="titlet">Ex-Volunteer</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 item">
          <div class="box">
            <p class="description">सीखने की कोई उम्र नहीं होती! मैंने इन १० दिनों में ना केवल मोबाइल सीखा बल्कि इसके अलावा भी बहोत कुछ पाया| आज मैं मोबाइल से पत्र व्यवहार कर सकता हूॅं, यह मेरी उपलब्धि है|</p>
          </div>
          <div class="author">
            <h5 class="name">- श्री करंदीकर</h5>
            <p class="titlet">Ex-Participant</p>
          </div>
        </div>

      </div>
    </div>
  </div>



<section style="  display: flex; justify-content: center; align-items: center; flex-wrap: wrap; min-height: 50vh; background: #232427; margin: 0; padding: 0; box-sizing: border-box;">
  <div class="containersy">
  <div class="cardsy">
    <div class="boxsy">
      <div class="contentsy">
        <h2>01</h2>
        <h3>LAST YEAR'S SYLLABUS</h3>
        <p style="text-align: center;">The event continued with the same enthusiasm in online mode.</p>
        <a href="https://drive.google.com/file/d/1A9ERZ9eS4WCLoqZaMsDzuwT0LvemWCW9/view?usp=sharing" target="_blank">CHECK NOW</a>
      </div>
    </div>
  </div>

  <div class="cardsy">
    <div class="boxsy">
      <div class="contentsy">
        <h2>02</h2>
        <h3>AATMABODH GUIDELINES</h3>
        <p style="text-align: center;">Brace yourself for this momentous flagship event, Aatmabodh.</p>
        <a href="https://docs.google.com/document/d/19XokwBD_lekNqC2MgZAeDxIFeles0RqwxvXA2WyfOVc" target="_blank">READ NOW</a>
      </div>
    </div>
  </div>


  <div class="cardsy">
    <div class="boxsy">
      <div class="contentsy">
        <h2>03</h2>
        <h3>AATMABODH PLAYLIST</h3>
        <p style="text-align: center;">Aatmabodh, the digital literacy program for senior citizens and women.</p>
        <a href="https://youtube.com/playlist?list=PL2pq_tvfOYAgQKfNBb71r3sReHtTcccOk" target="_blank">WATCH NOW</a>
      </div>
    </div>
  </div>
</section>

  <script>
    $(document).ready(function() {
      $(".counter").counterUp({
        delay: 60,
        time: 1200
      })
    });
  </script>

  <script type="text/javascript">
    function flip() {
      document.getElementById("form1").style.
      transform = 'rotateY(180deg)';
    }

    function flip1() {
      document.getElementById("form1").style.
      transform = 'rotateY(0deg)';
    }

    function flip2() {
      document.getElementById("form3").style.
      transform = 'rotateY(180deg)';
    }

    function flip3() {
      document.getElementById("form3").style.
      transform = 'rotateY(0deg)';
    }
  </script>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>


</body>

</html>