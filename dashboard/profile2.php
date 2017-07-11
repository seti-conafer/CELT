Fre<?php
session_start();
if(empty($_SESSION['userid'])){
  header('location: login.html');
  exit();
}
require_once('config.php');
$userid =$_SESSION["userid"];
$res=$conn->query("SELECT cpay, cdel, csch, camb from registration WHERE id = $userid");
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
  <link href="//fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
        <!--li style="border-bottom: solid #f1f1f1;"><a href="scholarship.php"><div>Scholarship
         <?php
         if(!$row['csch']){
           ?>	
           <!--span class="label label-warning" style="display: inherit;float: right;margin-top: 5px;">Not Completed</span>
           <?php
         }
         ?>
       </div></a>
     </li-->
     <li style="border-bottom: solid #f1f1f1;"><a href="payment.php"><div>Payment
      <?php
      if(!$row['cpay']){
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

</nav><!-- #primary-menu end -->

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
                       <input required id="icon_prefix" type="text" class="validate" name="name">
                       <label for="icon_prefix">Your Name</label>
                     </div>
                   </div>
                   <div class="row">
                    <div class="input-field col s12">
                     <div class="file-field input-field">
                      <div class="btn">
                       <span>File</span>
                       <input type="file" name="file">
                     </div>
                     <div class="file-path-wrapper">
                       <input required class="file-path validate" type="text" placeholder="Upload your Photo (max: 100kb)">
                     </div>
                   </div>
                 </div>
               </div>
               <div class="row">
                <div class="input-field col s12">
                  <select name="gender" id="gender">
                   <option required value="" disabled selected>Choose your option</option>
                   <option value="male">Male</option>
                   <option value="female">Female</option>
                 </select>
                 <label>Gender</label>
               </div>
             </div><br>
             <div class="row">
              <div class="input-field col s12">
               <i class="material-icons prefix">library_books</i>
               <input type="date" class="datepicker" name="bday" required>
               <label for="library_books">Date of Birth</label>
             </div>
           </div> 
           <div class="row">
             <div class="input-field col s12">
              <i class="material-icons prefix">business</i>
              <input required id="business" type="text" class="validate" name="college">
              <label for="business">Your University</label>
            </div>
            <div class="row">
              <div class="input-field col s12">
               <i class="material-icons prefix">note_add</i>
               <input required id="note_add" type="text" class="validate" name="study">
               <label for="note_add">Course Of Study</label>
             </div>
           </div>
           <div class="row">
             <div class="input-field col s12">
              <i class="material-icons prefix">business</i>
              <input required id="business" type="text" class="validate" name="gpa">
              <label for="business">GPA</label>
            </div>
          </div>
          <div class="row">
           <div class="input-field col s12">
             <i class="material-icons prefix">phone</i>
             <input required id="icon_telephone" type="tel" class="validate" name="phone">
             <label for="icon_telephone">Mobile Number</label>
           </div>
         </div>
         
         <div class="row">
          <div class="input-field col s12">
            <i class="material-icons prefix">location_on</i>
            <textarea required id="icon_prefix2" class="materialize-textarea" name="address"></textarea>
            <label for="icon_prefix2">Address</label>
          </div>
        </div>
        <div class="row">
           <div class="input-field col s12">
             <i class="material-icons prefix">business</i>
             <!--input required id="country" type="text" class="validate" name="country"-->
             <select name="country" id="country">
                   <option required value="" disabled selected>Choose your Country</option>
                   
                  
                  <option value="AF">Afghanistan</option>
                  <option value="AL">Albania</option>
                  <option value="DZ">Algeria</option>
                  <option value="AS">American Samoa</option>
                  <option value="AD">Andorra</option>
                  <option value="AG">Angola</option>
                  <option value="AI">Anguilla</option>
                  <option value="AG">Antigua &amp; Barbuda</option>
                  <option value="AR">Argentina</option>
                  <option value="AA">Armenia</option>
                  <option value="AW">Aruba</option>
                  <option value="AU">Australia</option>
                  <option value="AT">Austria</option>
                  <option value="AZ">Azerbaijan</option>
                  <option value="BS">Bahamas</option>
                  <option value="BH">Bahrain</option>
                  <option value="BD">Bangladesh</option>
                  <option value="BB">Barbados</option>
                  <option value="BY">Belarus</option>
                  <option value="BE">Belgium</option>
                  <option value="BZ">Belize</option>
                  <option value="BJ">Benin</option>
                  <option value="BM">Bermuda</option>
                  <option value="BT">Bhutan</option>
                  <option value="BO">Bolivia</option>
                  <option value="BL">Bonaire</option>
                  <option value="BA">Bosnia &amp; Herzegovina</option>
                  <option value="BW">Botswana</option>
                  <option value="BR">Brazil</option>
                  <option value="BC">British Indian Ocean Ter</option>
                  <option value="BN">Brunei</option>
                  <option value="BG">Bulgaria</option>
                  <option value="BF">Burkina Faso</option>
                  <option value="BI">Burundi</option>
                  <option value="KH">Cambodia</option>
                  <option value="CM">Cameroon</option>
                  <option value="CA">Canada</option>
                  <option value="IC">Canary Islands</option>
                  <option value="CV">Cape Verde</option>
                  <option value="KY">Cayman Islands</option>
                  <option value="CF">Central African Republic</option>
                  <option value="TD">Chad</option>
                  <option value="CD">Channel Islands</option>
                  <option value="CL">Chile</option>
                  <option value="CN">China</option>
                  <option value="CI">Christmas Island</option>
                  <option value="CS">Cocos Island</option>
                  <option value="CO">Colombia</option>
                  <option value="CC">Comoros</option>
                  <option value="CG">Congo</option>
                  <option value="CK">Cook Islands</option>
                  <option value="CR">Costa Rica</option>
                  <option value="CT">Cote D'Ivoire</option>
                  <option value="HR">Croatia</option>
                  <option value="CU">Cuba</option>
                  <option value="CB">Curacao</option>
                  <option value="CY">Cyprus</option>
                  <option value="CZ">Czech Republic</option>
                  <option value="DK">Denmark</option>
                  <option value="DJ">Djibouti</option>
                  <option value="DM">Dominica</option>
                  <option value="DO">Dominican Republic</option>
                  <option value="TM">East Timor</option>
                  <option value="EC">Ecuador</option>
                  <option value="EG">Egypt</option>
                  <option value="SV">El Salvador</option>
                  <option value="GQ">Equatorial Guinea</option>
                  <option value="ER">Eritrea</option>
                  <option value="EE">Estonia</option>
                  <option value="ET">Ethiopia</option>
                  <option value="FA">Falkland Islands</option>
                  <option value="FO">Faroe Islands</option>
                  <option value="FJ">Fiji</option>
                  <option value="FI">Finland</option>
                  <option value="FR">France</option>
                  <option value="GF">French Guiana</option>
                  <option value="PF">French Polynesia</option>
                  <option value="FS">French Southern Ter</option>
                  <option value="GA">Gabon</option>
                  <option value="GM">Gambia</option>
                  <option value="GE">Georgia</option>
                  <option value="DE">Germany</option>
                  <option value="GH">Ghana</option>
                  <option value="GI">Gibraltar</option>
                  <option value="GB">Great Britain</option>
                  <option value="GR">Greece</option>
                  <option value="GL">Greenland</option>
                  <option value="GD">Grenada</option>
                  <option value="GP">Guadeloupe</option>
                  <option value="GU">Guam</option>
                  <option value="GT">Guatemala</option>
                  <option value="GN">Guinea</option>
                  <option value="GY">Guyana</option>
                  <option value="HT">Haiti</option>
                  <option value="HW">Hawaii</option>
                  <option value="HN">Honduras</option>
                  <option value="HK">Hong Kong</option>
                  <option value="HU">Hungary</option>
                  <option value="IS">Iceland</option>
                  <option value="IN">India</option>
                  <option value="ID">Indonesia</option>
                  <option value="IA">Iran</option>
                  <option value="IQ">Iraq</option>
                  <option value="IR">Ireland</option>
                  <option value="IM">Isle of Man</option>
                  <option value="IL">Israel</option>
                  <option value="IT">Italy</option>
                  <option value="JM">Jamaica</option>
                  <option value="JP">Japan</option>
                  <option value="JO">Jordan</option>
                  <option value="KZ">Kazakhstan</option>
                  <option value="KE">Kenya</option>
                  <option value="KI">Kiribati</option>
                  <option value="NK">Korea North</option>
                  <option value="KS">Korea South</option>
                  <option value="KW">Kuwait</option>
                  <option value="KG">Kyrgyzstan</option>
                  <option value="LA">Laos</option>
                  <option value="LV">Latvia</option>
                  <option value="LB">Lebanon</option>
                  <option value="LS">Lesotho</option>
                  <option value="LR">Liberia</option>
                  <option value="LY">Libya</option>
                  <option value="LI">Liechtenstein</option>
                  <option value="LT">Lithuania</option>
                  <option value="LU">Luxembourg</option>
                  <option value="MO">Macau</option>
                  <option value="MK">Macedonia</option>
                  <option value="MG">Madagascar</option>
                  <option value="MY">Malaysia</option>
                  <option value="MW">Malawi</option>
                  <option value="MV">Maldives</option>
                  <option value="ML">Mali</option>
                  <option value="MT">Malta</option>
                  <option value="MH">Marshall Islands</option>
                  <option value="MQ">Martinique</option>
                  <option value="MR">Mauritania</option>
                  <option value="MU">Mauritius</option>
                  <option value="ME">Mayotte</option>
                  <option value="MX">Mexico</option>
                  <option value="MI">Midway Islands</option>
                  <option value="MD">Moldova</option>
                  <option value="MC">Monaco</option>
                  <option value="MN">Mongolia</option>
                  <option value="MS">Montserrat</option>
                  <option value="MA">Morocco</option>
                  <option value="MZ">Mozambique</option>
                  <option value="MM">Myanmar</option>
                  <option value="NA">Nambia</option>
                  <option value="NU">Nauru</option>
                  <option value="NP">Nepal</option>
                  <option value="AN">Netherland Antilles</option>
                  <option value="NL">Netherlands (Holland, Europe)</option>
                  <option value="NV">Nevis</option>
                  <option value="NC">New Caledonia</option>
                  <option value="NZ">New Zealand</option>
                  <option value="NI">Nicaragua</option>
                  <option value="NE">Niger</option>
                  <option value="NG">Nigeria</option>
                  <option value="NW">Niue</option>
                  <option value="NF">Norfolk Island</option>
                  <option value="NO">Norway</option>
                  <option value="OM">Oman</option>
                  <option value="PK">Pakistan</option>
                  <option value="PW">Palau Island</option>
                  <option value="PS">Palestine</option>
                  <option value="PA">Panama</option>
                  <option value="PG">Papua New Guinea</option>
                  <option value="PY">Paraguay</option>
                  <option value="PE">Peru</option>
                  <option value="PH">Philippines</option>
                  <option value="PO">Pitcairn Island</option>
                  <option value="PL">Poland</option>
                  <option value="PT">Portugal</option>
                  <option value="PR">Puerto Rico</option>
                  <option value="QA">Qatar</option>
                  <option value="ME">Republic of Montenegro</option>
                  <option value="RS">Republic of Serbia</option>
                  <option value="RE">Reunion</option>
                  <option value="RO">Romania</option>
                  <option value="RU">Russia</option>
                  <option value="RW">Rwanda</option>
                  <option value="NT">St Barthelemy</option>
                  <option value="EU">St Eustatius</option>
                  <option value="HE">St Helena</option>
                  <option value="KN">St Kitts-Nevis</option>
                  <option value="LC">St Lucia</option>
                  <option value="MB">St Maarten</option>
                  <option value="PM">St Pierre &amp; Miquelon</option>
                  <option value="VC">St Vincent &amp; Grenadines</option>
                  <option value="SP">Saipan</option>
                  <option value="SO">Samoa</option>
                  <option value="AS">Samoa American</option>
                  <option value="SM">San Marino</option>
                  <option value="ST">Sao Tome &amp; Principe</option>
                  <option value="SA">Saudi Arabia</option>
                  <option value="SN">Senegal</option>
                  <option value="RS">Serbia</option>
                  <option value="SC">Seychelles</option>
                  <option value="SL">Sierra Leone</option>
                  <option value="SG">Singapore</option>
                  <option value="SK">Slovakia</option>
                  <option value="SI">Slovenia</option>
                  <option value="SB">Solomon Islands</option>
                  <option value="OI">Somalia</option>
                  <option value="ZA">South Africa</option>
                  <option value="ES">Spain</option>
                  <option value="LK">Sri Lanka</option>
                  <option value="SD">Sudan</option>
                  <option value="SR">Suriname</option>
                  <option value="SZ">Swaziland</option>
                  <option value="SE">Sweden</option>
                  <option value="CH">Switzerland</option>
                  <option value="SY">Syria</option>
                  <option value="TA">Tahiti</option>
                  <option value="TW">Taiwan</option>
                  <option value="TJ">Tajikistan</option>
                  <option value="TZ">Tanzania</option>
                  <option value="TH">Thailand</option>
                  <option value="TG">Togo</option>
                  <option value="TK">Tokelau</option>
                  <option value="TO">Tonga</option>
                  <option value="TT">Trinidad &amp; Tobago</option>
                  <option value="TN">Tunisia</option>
                  <option value="TR">Turkey</option>
                  <option value="TU">Turkmenistan</option>
                  <option value="TC">Turks &amp; Caicos Is</option>
                  <option value="TV">Tuvalu</option>
                  <option value="UG">Uganda</option>
                  <option value="UA">Ukraine</option>
                  <option value="AE">United Arab Emirates</option>
                  <option value="GB">United Kingdom</option>
                  <option value="US">United States of America</option>
                  <option value="UY">Uruguay</option>
                  <option value="UZ">Uzbekistan</option>
                  <option value="VU">Vanuatu</option>
                  <option value="VS">Vatican City State</option>
                  <option value="VE">Venezuela</option>
                  <option value="VN">Vietnam</option>
                  <option value="VB">Virgin Islands (Brit)</option>
                  <option value="VA">Virgin Islands (USA)</option>
                  <option value="WK">Wake Island</option>
                  <option value="WF">Wallis &amp; Futana Is</option>
                  <option value="YE">Yemen</option>
                  <option value="ZR">Zaire</option>
                  <option value="ZM">Zambia</option>
                  <option value="ZW">Zimbabwe</option>
                   <option value="Others">Others</option>
                 </select>
             <label for="icon_telephone">Country</label>
           </div>
         </div>
        <div class="row">
         <div class="input-field col s12">
          <label>Do you have a Passport?</label></br>
          <p>
           <input type="radio" id="passportYes" name="passpt" value="Yes" />
           <label for="passportYes">Yes</label>
         </p>
         <p>
          <input type="radio" id="passportNo" name="passpt" value="No"/>
          <label for="passportNo">No</label>
        </p>
      </div>
    </div>
    <div class="row">
     <div class="input-field col s12">
      <i class="material-icons prefix">business</i>
      <input id="business1" type="text" class="validate" name="passport" placeholder="Passport Number" disabled="disabled" required>
    </div>
    <div class="input-field col s12">
      <i class="material-icons prefix">business</i>
      <input id="business2" type="text" class="validate" name="passexpdt" placeholder="Passport Expiry Date" disabled="disabled" required>
    </div>
  </div>
  <div class="row">
   <div class="input-field col s12">
    <i class="material-icons prefix">business</i>
    <input id="business3" type="text" class="validate" name="airport" placeholder="Nearest airport"disabled="disabled" required>
  </div>
</div>
<div class="row">
  <div class="input-field col s12">
    <label>Would you require Visa Assistance to enable you travel to India?</label></br>
    <p>
      <br />
      <input name="visa" type="radio" id="test1" value="Yes" required/>
      <label for="test1">Yes</label>
    </p>
    <p>
      <input name="visa" type="radio" id="test2" value="No" required/>
      <label for="test2">No</label>
    </p>
  </div>
</div>
<div class="row">
  <div class="input-field col s12">
    <label>Do you need any scholarship?</label></br>
    <p>
     <br />
     <input name="scholarship" type="radio" id="test3" value="Yes" required/>
     <label for="test3">Yes</label>
   </p>
   <p>
    <input name="scholarship" type="radio" id="test4" value="No" required />
    <label for="test4">No</label>
  </p>
</div>
</div><br>
<label><h6>Upload your Resume</h6></label>

<div class="file-field input-field">
  <div class="btn">
    <span>File</span>
    <input type="file" name="file1" required>
  </div>
  <div class="file-path-wrapper">
    <input class="file-path validate" type="text" placeholder="Upload your Resume">
  </div>
</div><br>
<a href="Sample_resume.rar" class="waves-effect waves-light btn"><i class="material-icons right" download>file_download</i>Download Sample Resume</a>	
<br><br>
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
      <?php echo "Profile Completed Successfully";}?>

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