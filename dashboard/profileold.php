<?php
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
  <meta name="author" content="KIIT E-Cell" />
  <link href="//fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
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
              <h3>Delegate's Profile</h3>
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
                   <option value="Others">Others</option>
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
              <label for="business">Your University / Organisation</label>
            </div>
            <!--div class="row">
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
          </div-->
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
                   
<option value="Afghanistan">Afghanistan</option>
<option value="Albania">Albania</option>
<option value="Algeria">Algeria</option>
<option value="American Samoa">American Samoa</option>
<option value="Andorra">Andorra</option>
<option value="Angola">Angola</option>
<option value="Anguilla">Anguilla</option>
<option value="Antigua & Barbuda">Antigua & Barbuda</option>
<option value="Argentina">Argentina</option>
<option value="Armenia">Armenia</option>
<option value="Aruba">Aruba</option>
<option value="Australia">Australia</option>
<option value="Austria">Austria</option>
<option value="Azerbaijan">Azerbaijan</option>
<option value="Bahamas">Bahamas</option>
<option value="Bahrain">Bahrain</option>
<option value="Bangladesh">Bangladesh</option>
<option value="Barbados">Barbados</option>
<option value="Belarus">Belarus</option>
<option value="Belgium">Belgium</option>
<option value="Belize">Belize</option>
<option value="Benin">Benin</option>
<option value="Bermuda">Bermuda</option>
<option value="Bhutan">Bhutan</option>
<option value="Bolivia">Bolivia</option>
<option value="Bonaire">Bonaire</option>
<option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
<option value="Botswana">Botswana</option>
<option value="Brazil">Brazil</option>
<option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
<option value="Brunei">Brunei</option>
<option value="Bulgaria">Bulgaria</option>
<option value="Burkina Faso">Burkina Faso</option>
<option value="Burundi">Burundi</option>
<option value="Cambodia">Cambodia</option>
<option value="Cameroon">Cameroon</option>
<option value="Canada">Canada</option>
<option value="Canary Islands">Canary Islands</option>
<option value="Cape Verde">Cape Verde</option>
<option value="Cayman Islands">Cayman Islands</option>
<option value="Central African Republic">Central African Republic</option>
<option value="Chad">Chad</option>
<option value="Channel Islands">Channel Islands</option>
<option value="Chile">Chile</option>
<option value="China">China</option>
<option value="Christmas Island">Christmas Island</option>
<option value="Cocos Island">Cocos Island</option>
<option value="Colombia">Colombia</option>
<option value="Comoros">Comoros</option>
<option value="Congo">Congo</option>
<option value="Cook Islands">Cook Islands</option>
<option value="Costa Rica">Costa Rica</option>
<option value="Cote D'Ivoire">Cote D'Ivoire</option>
<option value="Croatia">Croatia</option>
<option value="Cuba">Cuba</option>
<option value="Curacao">Curacao</option>
<option value="Cyprus">Cyprus</option>
<option value="Czech Republic">Czech Republic</option>
<option value="Denmark">Denmark</option>
<option value="Djibouti">Djibouti</option>
<option value="Dominica">Dominica</option>
<option value="Dominican Republic">Dominican Republic</option>
<option value="East Timor">East Timor</option>
<option value="Ecuador">Ecuador</option>
<option value="Egypt">Egypt</option>
<option value="El Salvador">El Salvador</option>
<option value="Equatorial Guinea">Equatorial Guinea</option>
<option value="Eritrea">Eritrea</option>
<option value="Estonia">Estonia</option>
<option value="Ethiopia">Ethiopia</option>
<option value="Falkland Islands">Falkland Islands</option>
<option value="Faroe Islands">Faroe Islands</option>
<option value="Fiji">Fiji</option>
<option value="Finland">Finland</option>
<option value="France">France</option>
<option value="French Guiana">French Guiana</option>
<option value="French Polynesia">French Polynesia</option>
<option value="French Southern Ter">French Southern Ter</option>
<option value="Gabon">Gabon</option>
<option value="Gambia">Gambia</option>
<option value="Georgia">Georgia</option>
<option value="Germany">Germany</option>
<option value="Ghana">Ghana</option>
<option value="Gibraltar">Gibraltar</option>
<option value="Great Britain">Great Britain</option>
<option value="Greece">Greece</option>
<option value="Greenland">Greenland</option>
<option value="Grenada">Grenada</option>
<option value="Guadeloupe">Guadeloupe</option>
<option value="Guam">Guam</option>
<option value="Guatemala">Guatemala</option>
<option value="Guinea">Guinea</option>
<option value="Guyana">Guyana</option>
<option value="Haiti">Haiti</option>
<option value="Hawaii">Hawaii</option>
<option value="Honduras">Honduras</option>
<option value="Hong Kong">Hong Kong</option>
<option value="Hungary">Hungary</option>
<option value="Iceland">Iceland</option>
<option value="India">India</option>
<option value="Indonesia">Indonesia</option>
<option value="Iran">Iran</option>
<option value="Iraq">Iraq</option>
<option value="Ireland">Ireland</option>
<option value="Isle of Man">Isle of Man</option>
<option value="Israel">Israel</option>
<option value="Italy">Italy</option>
<option value="Jamaica">Jamaica</option>
<option value="Japan">Japan</option>
<option value="Jordan">Jordan</option>
<option value="Kazakhstan">Kazakhstan</option>
<option value="Kenya">Kenya</option>
<option value="Kiribati">Kiribati</option>
<option value="Korea North">Korea North</option>
<option value="Korea South">Korea South</option>
<option value="Kuwait">Kuwait</option>
<option value="Kyrgyzstan">Kyrgyzstan</option>
<option value="Laos">Laos</option>
<option value="Latvia">Latvia</option>
<option value="Lebanon">Lebanon</option>
<option value="Lesotho">Lesotho</option>
<option value="Liberia">Liberia</option>
<option value="Libya">Libya</option>
<option value="Liechtenstein">Liechtenstein</option>
<option value="Lithuania">Lithuania</option>
<option value="Luxembourg">Luxembourg</option>
<option value="Macau">Macau</option>
<option value="Macedonia">Macedonia</option>
<option value="Madagascar">Madagascar</option>
<option value="Malaysia">Malaysia</option>
<option value="Malawi">Malawi</option>
<option value="Maldives">Maldives</option>
<option value="Mali">Mali</option>
<option value="Malta">Malta</option>
<option value="Marshall Islands">Marshall Islands</option>
<option value="Martinique">Martinique</option>
<option value="Mauritania">Mauritania</option>
<option value="Mauritius">Mauritius</option>
<option value="Mayotte">Mayotte</option>
<option value="Mexico">Mexico</option>
<option value="Midway Islands">Midway Islands</option>
<option value="Moldova">Moldova</option>
<option value="Monaco">Monaco</option>
<option value="Mongolia">Mongolia</option>
<option value="Montserrat">Montserrat</option>
<option value="Morocco">Morocco</option>
<option value="Mozambique">Mozambique</option>
<option value="Myanmar">Myanmar</option>
<option value="Nambia">Nambia</option>
<option value="Nauru">Nauru</option>
<option value="Nepal">Nepal</option>
<option value="Netherland Antilles">Netherland Antilles</option>
<option value="Netherlands (Holland, Europe)">Netherlands (Holland, Europe)</option>
<option value="Nevis">Nevis</option>
<option value="New Caledonia">New Caledonia</option>
<option value="New Zealand">New Zealand</option>
<option value="Nicaragua">Nicaragua</option>
<option value="Niger">Niger</option>
<option value="Nigeria">Nigeria</option>
<option value="Niue">Niue</option>
<option value="Norfolk Island">Norfolk Island</option>
<option value="Norway">Norway</option>
<option value="Oman">Oman</option>
<option value="Pakistan">Pakistan</option>
<option value="Palau Island">Palau Island</option>
<option value="Palestine">Palestine</option>
<option value="Panama">Panama</option>
<option value="Papua New Guinea">Papua New Guinea</option>
<option value="Paraguay">Paraguay</option>
<option value="Peru">Peru</option>
<option value="Philippines">Philippines</option>
<option value="Pitcairn Island">Pitcairn Island</option>
<option value="Poland">Poland</option>
<option value="Portugal">Portugal</option>
<option value="Puerto Rico">Puerto Rico</option>
<option value="Qatar">Qatar</option>
<option value="Republic of Montenegro">Republic of Montenegro</option>
<option value="Republic of Serbia">Republic of Serbia</option>
<option value="Reunion">Reunion</option>
<option value="Romania">Romania</option>
<option value="Russia">Russia</option>
<option value="Rwanda">Rwanda</option>
<option value="St Barthelemy">St Barthelemy</option>
<option value="St Eustatius">St Eustatius</option>
<option value="St Helena">St Helena</option>
<option value="St Kitts-Nevis">St Kitts-Nevis</option>
<option value="St Lucia">St Lucia</option>
<option value="St Maarten">St Maarten</option>
<option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
<option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
<option value="Saipan">Saipan</option>
<option value="Samoa">Samoa</option>
<option value="Samoa American">Samoa American</option>
<option value="San Marino">San Marino</option>
<option value="Sao Tome & Principe">Sao Tome & Principe</option>
<option value="Saudi Arabia">Saudi Arabia</option>
<option value="Senegal">Senegal</option>
<option value="Serbia">Serbia</option>
<option value="Seychelles">Seychelles</option>
<option value="Sierra Leone">Sierra Leone</option>
<option value="Singapore">Singapore</option>
<option value="Slovakia">Slovakia</option>
<option value="Slovenia">Slovenia</option>
<option value="Solomon Islands">Solomon Islands</option>
<option value="Somalia">Somalia</option>
<option value="South Africa">South Africa</option>
<option value="Spain">Spain</option>
<option value="Sri Lanka">Sri Lanka</option>
<option value="Sudan">Sudan</option>
<option value="Suriname">Suriname</option>
<option value="Swaziland">Swaziland</option>
<option value="Sweden">Sweden</option>
<option value="Switzerland">Switzerland</option>
<option value="Syria">Syria</option>
<option value="Tahiti">Tahiti</option>
<option value="Taiwan">Taiwan</option>
<option value="Tajikistan">Tajikistan</option>
<option value="Tanzania">Tanzania</option>
<option value="Thailand">Thailand</option>
<option value="Togo">Togo</option>
<option value="Tokelau">Tokelau</option>
<option value="Tonga">Tonga</option>
<option value="Trinidad & Tobago">Trinidad & Tobago</option>
<option value="Tunisia">Tunisia</option>
<option value="Turkey">Turkey</option>
<option value="Turkmenistan">Turkmenistan</option>
<option value="Turks & Caicos Is">Turks & Caicos Is</option>
<option value="Tuvalu">Tuvalu</option>
<option value="Uganda">Uganda</option>
<option value="Ukraine">Ukraine</option>
<option value="United Arab Emirates">United Arab Emirates</option>
<option value="United Kingdom">United Kingdom</option>
<option value="United States of America">United States of America</option>
<option value="Uruguay">Uruguay</option>
<option value="Uzbekistan">Uzbekistan</option>
<option value="Vanuatu">Vanuatu</option>
<option value="Vatican City State">Vatican City State</option>
<option value="Venezuela">Venezuela</option>
<option value="Vietnam">Vietnam</option>
<option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
<option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
<option value="Wake Island">Wake Island</option>
<option value="Wallis & Futana Is">Wallis & Futana Is</option>
<option value="Yemen">Yemen</option>
<option value="Zaire">Zaire</option>
<option value="Zambia">Zambia</option>
<option value="Zimbabwe">Zimbabwe</option>
<option value="Others">Others</option>
                 </select>
             <label for="icon_telephone">Country</label>
           </div>
         </div>
        <!--div class="row">
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
    <input id="business3" type="text" class="validate" name="airport" placeholder="Nearest airport" disabled="disabled" required>
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
</div--><br>
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
<br><br><br><br><br>
          <div class="input-field col s12">
            <i class="material-icons prefix">business</i><input id="refid" type="text" name="refid" placeholder="refid">
            <label for="refid">Reference/CELT ID (Optional) </label>
          </div>
<br><br><br><br>
<div class="postcontent nobottommargin  clearfix">


            <!-- Posts
            ============================================= -->
            <div id="posts" class="post-timeline clearfix">

              
                <div class="timeline-border"></div>
<div class="entry clearfix">
                  <div class="entry-timeline">
                    1
                    <div class="timeline-divider"></div>
                  </div>
                  
                  
                  
                  <div class="entry-content">
                    <div class="input-field col s12">
                              <textarea required name="expectation" id="textarea4" class="materialize-textarea" length="600"></textarea>
                                        <label for="textarea4">What do you expect from <strong>CELT</strong>? What would you like to have in the conference? 
                                          (Not More than 600 characters)
                                        </label>
                            </div>
                                
                  </div>
                </div>
                </div>
                </div>

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