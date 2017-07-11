<?php
session_start();
if(empty($_SESSION['userid'])){
  header('location: login.html');
  exit();
}
require_once('config.php');
$userid =$_SESSION["userid"];
$res=$conn->query("SELECT cdel, csch, camb from registration WHERE id = $userid");
$result = $conn->query("SELECT name FROM profile where userid = $userid");
$row = $res->fetch_array();
?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="author" content="SemiColonWeb" />
  <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
  <link rel="stylesheet" href="style.css" type="text/css" />
  <link rel="stylesheet" href="css/dark.css" type="text/css" />
  <link rel="stylesheet" href="css/font-icons.css" type="text/css" />
  <link rel="stylesheet" href="css/animate.css" type="text/css" />
  <link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

  <link rel="stylesheet" href="css/responsive.css" type="text/css" />
  
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <link rel="stylesheet" href="css/materialize.css" type="text/css" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>CELT Ambassador Program</title>

</head>

<body class="stretched side-header">
  <div id="wrapper" class="clearfix">

    <header id="header">

      <div id="header-wrap">

        <div class="container clearfix">

          <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>
          <div id="logo" class="fancy-title title-center" >
            <img src="images/celtindia-web2.png">
          </div>
          <nav id="primary-menu">

          <ul>
              <li class="current"style="border-bottom: solid #f1f1f1;"><a href="index.php"><div>Home</div>
              </li>
              <li style="border-bottom: solid #f1f1f1;"><a href="profile.php"><div>Profile</div></a>
              </li>
              <li style="border-bottom: solid #f1f1f1;"><a href="application.php"><div>Application
              <?php
              if(!$row['cdel']){
              ?>  
                <span class="label label-warning" style="display: inherit;float: right;margin-top: 5px;">Not Completed</span>
              <?php
              }
              ?>
              </div></a>
              </li>
              <li style="border-bottom: solid #f1f1f1;"><a href="ambassador.php"><div>Ambassador
              <?php
              if(!$row['camb']){
              ?>  
              <span class="label label-warning" style="display: inherit;float: right;margin-top: 5px;">Not Completed</span>
              <?php
              }
              ?>
              </div></a>
              </li>
              <li style="border-bottom: solid #f1f1f1;"><a href="scholarship.php"><div>Scholarship
              <?php
              if(!$row['csch']){
              ?>  
              <span class="label label-warning" style="display: inherit;float: right;margin-top: 5px;">Not Completed</span>
              <?php
              }
              ?>
              </div></a>
              </li>
              <li style="border-bottom: solid #f1f1f1;"><a href="schedule.php"><div>Schedule</div></a>
              </li>
              <br>
              <li><a href="logout.php"><div>Logout</div></a>
              </li>

            </ul>

          </nav>

        <div class="clearfix visible-md visible-lg ">
            <div class="center">
            <a href="https://www.facebook.com/celtindia" class="social-icon si-small si-borderless si-facebook">
              <i class="icon-facebook"></i>
              <i class="icon-facebook"></i>
            </a>

            <a href="https://twitter.com/celtindia" class="social-icon si-small si-borderless si-twitter">
              <i class="icon-twitter"></i>
              <i class="icon-twitter"></i>
            </a>

            <a href="http://lnked.in/CeltIndia" class="social-icon si-small si-borderless si-linkedin">
              <i class="icon-linkedin"></i>
              <i class="icon-linkedin"></i>
            </a>

            </div>
            <div class="center"><br><br>
                Copyrights &copy; 2016<br> All Rights Reserved by CELT.<br>
                <div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
              </div>
          </div>




        </div>

      </div>

    </header><!-- #header end -->

    <!-- Content
    ============================================= -->
    <section id="content">

      <div class="content-wrap nopadding">
        <div class="container clearfix">
        <?php if(!$result->num_rows){ ?>
          <div class="fancy-title title-dotted-border title-center">
              <h3>Student's Profile</h3>
          </div>
          <!-- Content Start -->
          <form action="profileget.php" id="delegateForm" name="delegateForm" method="post" enctype="multipart/form-data">
            <div class="container">
              <div class="row">
              <div class="col s12">
                        <div class="row">
                          <div class="input-field col s12">
                             <i class="material-icons prefix">account_circle</i>
                             <input  id="icon_prefix" type="text" class="validate" name="name" required>
                             <label for="icon_prefix">Your Name</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                             <div class="file-field input-field">
                                <div class="btn">
                                   <span>File</span>
                                   <input type="file" required name="file">
                                </div>
                                <div class="file-path-wrapper">
                                   <input class="file-path validate" type="text" placeholder="Upload your Photo (max: 100kb)">
                                </div>
                             </div>
                          </div>
                        </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">person_pin</i>
                                           <select name="gender">
                                                <option value="" disabled selected>Choose your Gender</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                              </select>   
                                </div>
                            </div>

                                <div class="row">
                                  <div class="input-field col s12">
                                       <i class="material-icons prefix">library_books</i>
                                        <input type="date" class="datepicker" name="bday" >
                                        <label for="library_books">Date of Birth</label>
                                  </div>
                                </div>
                                  <div class="row">
                                     <div class="input-field col s12">
                                        <i class="material-icons prefix">business</i>
                                        <input  id="business" type="text" class="validate" required name="college">
                                        <label for="business">Your University</label>
                                     </div>
                                  <div class="row">
                                  <div class="input-field col s12">
                                       <i class="material-icons prefix">note_add</i>
                                        <input  id="note_add" type="text" class="validate" required name="study">
                                        <label for="note_add">Course Of Study</label>
                                  </div>
                                </div>
                                <div class="row">
                                     <div class="input-field col s12">
                                        <i class="material-icons prefix">business</i>
                                        <input  id="business" type="text" class="validate" required name="gpa">
                                        <label for="business">GPA</label>
                                     </div>
                                  </div>
                                     <div class="row">
                                     <div class="input-field col s12">
                                       <i class="material-icons prefix">phone</i>
                                        <input  id="icon_telephone" type="tel" class="validate" required name="phone">
                                        <label for="icon_telephone">Mobile Number</label>
                                     </div>
                                   </div>
                                      <div class="row">
                                        <div class="input-field col s12">
                                          <i class="material-icons prefix">location_on</i>
                                          <textarea  required id="icon_prefix2" class="materialize-textarea" name="address"></textarea>
                                          <label for="icon_prefix2">Address</label>
                                        </div>
                                      </div>
                                  <div class="row">
                                     <div class="input-field col s12">
                                        <label>Do you have a Passport?</label></br>
                                         <p>
                                         <input type="radio" id="passportYes" name="passpt" required value="Yes" />
                                         <label for="passportYes">Yes</label>
                                         </p>
                                        <p>
                                        <input type="radio" id="passportNo" name="passpt" required value="No"/>
                                        <label for="passportNo">No</label>
                                        </p>
                                      </div>
                                   </div>
                                <div class="row">
                                     <div class="input-field col s12">
                                        <i class="material-icons prefix">business</i>
                                        <input id="business1" type="tel" class="validate" name="passport" placeholder="Passport Number" disabled="disabled">
                                     </div>
                                     <div class="input-field col s12">
                                        <i class="material-icons prefix">business</i>
                                        <input id="business2" type="date" class="validate" name="passexpdt" placeholder="Passport Expiry Date" disabled="disabled">
                                     </div>
                                  </div>
                                  <div class="row">
                                     <div class="input-field col s12">
                                        <i class="material-icons prefix">business</i>
                                        <input id="business3" type="text" class="validate" name="airport" placeholder="Nearest airport"disabled="disabled">
                                     </div>
                                </div>
                                <div class="row">
                                      <div class="input-field col s12">
                                        <label>Would you require Visa Assistance to enable you travel to India?</label></br>
                                         <p>
                                            <br />
                                            <input name="visa" type="radio" required id="test1" value="Yes" />
                                            <label for="test1">Yes</label>
                                          </p>
                                          <p>
                                            <input name="visa" type="radio" required id="test2" value="No" />
                                            <label for="test2">No</label>
                                          </p>
                                      </div>
                                    </div>
                                 <div class="row">
                                      <div class="input-field col s12">
                                        <label>Do you need any scholarship?</label></br>
                                         <p>
                                         <br />
                                          <input name="scholarship" type="radio" required id="test3" value="Yes" />
                                          <label for="test3">Yes</label>
                                        </p>
                                        <p>
                                          <input name="scholarship" type="radio" required id="test4" value="No"  />
                                          <label for="test4">No</label>
                                        </p>
                                      </div>
                                    </div><br>
                                    <label><h6>Upload your Resume</h6></label>
                                     <div class="file-field input-field">
                                      <div class="btn">
                                        <span>File</span>
                                        <input required type="file" name="file1" >
                                      </div>
                                      <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text" placeholder="Upload your Resume">
                                      </div>
                                    </div><br><br><br>
                                   <div class="row">
                                      <div class="input-field col s12">
                                      <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                                        <i class="material-icons right">send</i>
                                      </button>
                                    </div>
                                  </div>
                             </div>
                        </div>
              </div>
        </form>
        
        <?php }else{?>
        <p class="done"> 
            <div class="alert alert-success">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <i class="icon-gift">
              </i>
              <strong>Congratulations!</strong>
              <?php echo "Application Completed Successfully";}?>

            </div>
        </p>
        
          <!-- Content End -->
        </div>
      </div>

    </section><!-- #content end -->

  </div><!-- #wrapper end -->

  <!-- Go To Top
  ============================================= -->
  <div id="gotoTop" class="icon-angle-up"></div>

  <!-- External JavaScripts
  ============================================= -->
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/plugins.js"></script>
  <script type="text/javascript" src="js/jquery.calendario.js"></script>

  <!-- Footer Scripts
  ============================================= -->
  <script type="text/javascript" src="js/functions.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.js"></script>
    <script type="text/javascript" src="js/init.js"></script>
    <script type="text/javascript" src="js/delegate.js"></script>

  <!-- Portfolio Script
  ============================================= -->

</body>
</html>

<script type="text/css">
  ::-webkit-input-placeholder {
  text-decoration:uppercase;
}

:-moz-placeholder { /* Firefox 18- */
   text-decoration:uppercase;  
}

::-moz-placeholder {  /* Firefox 19+ */
   text-decoration:uppercase; 
}

:-ms-input-placeholder {  
   text-decoration:uppercase;   
}
</script>