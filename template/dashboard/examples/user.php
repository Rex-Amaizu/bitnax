<?php
// Start the session
session_start();
?>

<!--
=========================================================
* * Black Dashboard - v1.0.1
=========================================================

* Product Page: https://www.creative-tim.com/product/black-dashboard
* Copyright 2019 Creative Tim (https://www.creative-tim.com)


* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    User Profile | Bittrada
  </title>
  <link href="https://fonts.googleapis.com/css?family=Bitter:400,700" rel="stylesheet">
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="../assets/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>
<?php
include('../../../constants.php');
$userDataRespString = $_SESSION["userdata"];
$userDataObj = json_decode($userDataRespString,true);
$first_name = $userDataObj['data']['user_information']['first_name'];
$last_name = $userDataObj['data']['user_information']['last_name'];
$profile_name = ($first_name ." ". $last_name);
$profile_phone = $userDataObj['data']['user_information']['phone'];
$referral_id = $userDataObj['data']['user_information']['referral_id'];
$country = $userDataObj['data']['user_information']['country'];
?>



<?php
include('../../../constants.php');
$walletDataRespString = $_SESSION["fetchdata"];
$walletDataObj = json_decode($walletDataRespString,true);
$investor_id = $walletDataObj['data']['wallet_information']['investor_id'];
$investor_email = $walletDataObj['data']['wallet_information']['investor_email'];
$ledger_bal = $walletDataObj['data']['wallet_information']['ledger_bal'];
$available_bal = $walletDataObj['data']['wallet_information']['available_bal'];
$profile_id = $walletDataObj['data']['wallet_information']['investor_id'];
$profile_email = $walletDataObj['data']['wallet_information']['investor_email'];
$btcaddress = $walletDataObj['data']['wallet_information']['btc_address'];
$ethaddress = $walletDataObj['data']['wallet_information']['eth_address'];
$bchaddress = $walletDataObj['data']['wallet_information']['bch_address'];
$usdtaddress = $walletDataObj['data']['wallet_information']['usdt_address'];
?>
<body class="">
  
   <div class="wrapper">
    <div class="sidebar">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red"
    -->
      <div class="sidebar-wrapper">
        <div class="logo">
          <a href="javascript:void(0)" class="simple-text logo-mini">
            
          </a>
          <a href="javascript:void(0)" class="simple-text logo-normal">
           Profile
          </a>
        </div>
        <ul class="nav">
          <li class="active ">
            <a href="./dashboard.php">
              <i class="tim-icons icon-chart-pie-36"></i>
              <p>Dashboard</p>
            </a>
          </li>
            <li>
            <a href="./user.php">
              <i class="tim-icons icon-single-02"></i>
              <p>User Profile</p>
            </a>
          </li>
          <li>
            <a href="./deposit.php">
              <i class="tim-icons icon-credit-card"></i>
              <p>Deposit</p>
            </a>
          </li>
          <li>
            <a href="./withdrawal.php">
              <i class="tim-icons icon-wallet-43"></i>
              <p>Withdrawal</p>
            </a>
          </li>
        
          <li>
            <a href="http://www.bittrada.com/template/login.php">
              <i class="tim-icons icon-support-17"></i>
              <p>Sign out</p>
            </a>
          </li>
          
         <li>
            <a href="./trade.php">
              <i class="tim-icons icon-pencil"></i>
              <p>Sign up for trade tips</p>
            </a>
          </li>
          <li>
           <div id="google_translate_element">

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</div>
</li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle d-inline">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="javascript:void(0)">User Profile</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse" id="navigation">
            <ul class="navbar-nav ml-auto">
              <li class="search-bar input-group">
                
              </li>
              
          </div>
        </div>
      </nav>
      <div class="modal modal-search fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="SEARCH">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="tim-icons icon-simple-remove"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- End Navbar -->
      <div class="content">
        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Edit Profile</h5>
              </div>
              <div class="card-body">
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'] ); ?>" method="post">
                  <div class="row">
                    <div class="col-md-6 pr-md-1">
                      <div class="form-group">
                        <label>Investor ID</label>
                        <p><?php echo $profile_id; ?></p>
                        
                      </div>
                    </div>
                    <div class="col-md-6 pl-md-1">
                      <div class="form-group">
                        <label>Email address</label>
                        <p><?php echo $profile_email; ?></p>
                       
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-5 pr-md-1">
                      <div class="form-group">
                        <label>Full Name</label>
                        <p><?php echo $profile_name;?></p>
                      </div>
                    </div>
                    <div class="col-md-5 pr-md-1">
                      <div class="form-group">
                        <label>Phone</label>
                        <input type="text" class="form-control" size="20" name="phone" placeholder=<?php echo $profile_phone;?>>
                      </div>
                    </div>
                    
                  </div>
                  
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Bitcoin Address</label>
                        <input type="text" class="form-control" size="50" name="btc" placeholder=<?php echo $btcaddress;?>>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Ethereum Address</label>
                        <input type="text" class="form-control" size="50" name="eth" placeholder=<?php echo $ethaddress;?>>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Bitcoin Cash Address</label>
                        <input type="text" class="form-control" size="50" name="bch" placeholder=<?php echo $bchaddress;?>>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Usdt Address</label>
                        <input type="text" class="form-control" size="50" name="usdt" placeholder=<?php echo $usdtaddress;?>>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    
                    <div class="col-md-4 px-md-1">
                      <div class="form-group">
                        <label>Country</label>
                        <p><?php echo $country;?></p>
                      </div>
                    </div>
                    <div class="col-md-4 pl-md-1">
                      <div class="form-group">
                        <label>Referral ID</label>
                        <p><?php echo $referral_id;?></p>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-8">
                      <div class="form-group">
                        <label>Note</label>
                        <p>For security of your funds, you can only Update your phone number and wallet addresses. Any other change to your profile should be communicated to support@bittrada.com.</p>
                      </div>
                    </div>
                  </div>
                
              </div>
              <div class="card-footer">
                <button type="submit" class="btn btn-fill btn-primary" name="save">Save</button>
              </div>
            </div>
          </div>
          </form>
          <div class="col-md-4">
            <div class="card card-user">
              <div class="card-body">
                <p class="card-text">
                  <div class="author">
                    <div class="block block-one"></div>
                    <div class="block block-two"></div>
                    <div class="block block-three"></div>
                    <div class="block block-four"></div>
                    <a href="javascript:void(0)">
                      <img class="avatar" src="../assets/img/default-avatar.png" alt="...">
                      <h5 class="title"><?php echo $profile_name;?></h5>
                    </a>
                    <p class="description">
                      User Profile
                    </p>
                  </div>
                </p>
                <div class="card-description">
                  Welcome to your profile. Bittrada is here to take you to a whole new level of crypto trading. Our miners and expert traders are continuously working to ensure our members stay satisfied and happy. If you wish to trade your yourself, <font color="#e68a00">click <a href="trade.php">
            here
          </a> to sign up for trading tips to sign up.</font>
                </div>
              </div>
              <div class="card-footer">
                <div class="button-container">
                  <button href="javascript:void(0)" class="btn btn-icon btn-round btn-facebook">
                    <i class="fab fa-facebook"></i>
                  </button>
                  <button href="javascript:void(0)" class="btn btn-icon btn-round btn-twitter">
                    <i class="fab fa-twitter"></i>
                  </button>
                  <button href="javascript:void(0)" class="btn btn-icon btn-round btn-instagram">
                    <i class="fab fa-instagram"></i>
                  </button>
                  <button href="javascript:void(0)" class="btn btn-icon btn-round btn-telegram">
                    <i class="fab fa-telegram"></i>
                  </button>
                  <button href="javascript:void(0)" class="btn btn-icon btn-round btn-linkedin">
                    <i class="fab fa-linkedin"></i>
                  </button>


                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer">
        <div class="container-fluid">
          <ul class="nav">
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                Bittrada
              </a>
            </li>
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                About Us
              </a>
            </li>
            <li class="nav-item">
              
            </li>
          </ul>
          <div class="copyright">
            © 
             <script>
              document.write(new Date().getFullYear())
            </script> | </i> by
            <a href="javascript:void(0)" target="_blank">Bittrada.com</a>.
          </div>
        </div>
      </footer>
    </div>
  </div>
  
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <!-- Place this tag in your head or just before your close body tag. -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/black-dashboard.min.js?v=1.0.0"></script><!-- Black Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');
        $navbar = $('.navbar');
        $main_panel = $('.main-panel');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');
        sidebar_mini_active = true;
        white_color = false;

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();



        $('.fixed-plugin a').click(function(event) {
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .background-color span').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data', new_color);
          }

          if ($main_panel.length != 0) {
            $main_panel.attr('data', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data', new_color);
          }
        });

        $('.switch-sidebar-mini input').on("switchChange.bootstrapSwitch", function() {
          var $btn = $(this);

          if (sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            sidebar_mini_active = false;
            blackDashboard.showSidebarMessage('Sidebar mini deactivated...');
          } else {
            $('body').addClass('sidebar-mini');
            sidebar_mini_active = true;
            blackDashboard.showSidebarMessage('Sidebar mini activated...');
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);
        });

        $('.switch-change-color input').on("switchChange.bootstrapSwitch", function() {
          var $btn = $(this);

          if (white_color == true) {

            $('body').addClass('change-background');
            setTimeout(function() {
              $('body').removeClass('change-background');
              $('body').removeClass('white-content');
            }, 900);
            white_color = false;
          } else {

            $('body').addClass('change-background');
            setTimeout(function() {
              $('body').removeClass('change-background');
              $('body').addClass('white-content');
            }, 900);

            white_color = true;
          }


        });

        $('.light-badge').click(function() {
          $('body').addClass('white-content');
        });

        $('.dark-badge').click(function() {
          $('body').removeClass('white-content');
        });
      });
    });
  </script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "black-dashboard-free"
      });
  </script>


  <?php
    include('../../../db.php');
if (isset($_POST["save"])){


//assigning the email variable
$user_email = $investor_email;
$phonebook = "";
$btcaddy = "";
$ethaddy = "";
$bchaddy = "";
$usdtaddy = "";
//fetching the required data from the database table
$sql = "SELECT * FROM register WHERE email = '$user_email'";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()){

$phonebook = $row['phone'];


}

//fetching the required data from the database table
$sql = "SELECT * FROM wallet WHERE investor_email = '$user_email'";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()){

$btcaddy = $row['btc_address'];
$ethaddy = $row['eth_address'];
$bchaddy = $row['bch_address'];
$usdtaddy = $row['usdt_address'];


}
//validating phone
if (empty($_POST["phone"])) {
  
  $phone = $phonebook;
}else{

  $phone = $_POST["phone"];
}

//validating btc_address
if (empty($_POST["btc"])) {
  
  $btc = $btcaddy;
}else{

  $btc = $_POST["btc"];
}

//validating eth_address
if (empty($_POST["eth"])) {
  
  $eth = $ethaddy;
}else{

  $eth = $_POST["eth"];
}

//validating bch_address
if (empty($_POST["bch"])) {
  
  $bch = $bchaddy;
}else{

  $bch = $_POST["bch"];
}
//validating usdt_address
if (empty($_POST["usdt"])) {
  
  $usdt = $usdtaddy;
}else{

  $usdt = $_POST["usdt"];
}
  
// calling the function to make the API call
updateProfile($user_email,$phone,$btc,$eth,$bch,$usdt);

}

// function convertImgToBase(){
// $data = base64_encode(file_get_contents( $_FILES["pic"]["tmp_name"] ));
// return $data;
// }
function updateProfile($user_email,$phone,$btc,$eth,$bch,$usdt){
  include('../../../constants.php');
  $url = $BASE_URL."/userprofile/";
  $body = '{
    "email": "'.$user_email.'",
    "phone": "'.$phone.'",
      "btc_address": "'.$btc.'",
      "eth_address": "'.$eth.'",
      "bch_address": "'.$bch.'",
      "usdt_address": "'.$usdt.'"
    }';
//echo "body is ".$body;
//echo $url;

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/json"));
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
$result = curl_exec($ch);
$status = json_decode($result,true);
//var_dump($status["status"]);

//echo $status["data"]["token"];
//echo "\r\n";
//echo $emai;

if(!$status["status"]){
echo '<script language="javascript">';
echo 'alert("'.$status["message"].'")';
echo '</script>';   
}else{
echo '<script language="javascript">';
echo 'alert("'.$status["message"].'")';
echo '</script>';

}

}


?>
</body>

</html>