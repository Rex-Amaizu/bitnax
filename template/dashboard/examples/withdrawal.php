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
    Bittrada | Withdrawal Page
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
  
  <style>
  #example_form fieldset {
    width: 200px;
    padding: 3px 10px 10px 10px;
    margin-left: auto;
    margin-right: auto;

}
#example_form input {
    width: 250px;
    margin-left: auto;
    margin-right: auto;
}
#example_form input[type=submit] {
    margin-top: 3px;
    margin-left: auto;
    margin-right: auto;
    width: auto;
}

  </style>
</head>
<?php
include('../../../constants.php');
$userDataRespString = $_SESSION["userdata"];
$userDataObj = json_decode($userDataRespString,true);
$first_name = $userDataObj['data']['user_information']['first_name'];
$last_name = $userDataObj['data']['user_information']['last_name'];
$full_name = ($first_name ." ". $last_name);
?>

<?php
include('../../../constants.php');
$walletDataRespString = $_SESSION["fetchdata"];
$walletDataObj = json_decode($walletDataRespString,true);
$investor_id = $walletDataObj['data']['wallet_information']['investor_id'];
$investor_email = $walletDataObj['data']['wallet_information']['investor_email'];
$ledger_bal = $walletDataObj['data']['wallet_information']['ledger_bal'];
$available_bal = $walletDataObj['data']['wallet_information']['available_bal'];
$btcaddress = $walletDataObj['data']['wallet_information']['btc_address'];
$bchaddress = $walletDataObj['data']['wallet_information']['bch_address'];
$ethaddress = $walletDataObj['data']['wallet_information']['eth_address'];
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
</li>s
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
            <a class="navbar-brand" href="javascript:void(0)">Dashboard</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse" id="navigation">
            <ul class="navbar-nav ml-auto">
              
             
              <li class="dropdown nav-item">
                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                  <div class="photo">
                    <img src="../assets/img/anime3.png" alt="Profile Photo">
                  </div>
                  <b class="caret d-none d-lg-block d-xl-block"></b>
                  <p class="d-lg-none">
                    Log out
                  </p>
                </a>
                <ul class="dropdown-menu dropdown-navbar">
                  <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">Profile</a></li>
                  <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">Settings</a></li>
                  <li class="dropdown-divider"></li>
                  <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">Log out</a></li>
                </ul>
              </li>
              <li class="separator d-lg-none"></li>
            </ul>
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
        <p>Withdrawal Page | <?php echo $full_name; ?></p>
        <a href="javascript:void(0)" class="simple-text logo-mini">
            Available Balance: &dollar;<?php echo $available_bal; ?>
          </a>
          <a href="javascript:void(0)" class="simple-text logo-normal">
          
          </a>
       
  <?php

if (isset($_POST["sms"]) && isset($_POST["amat"]) && isset($_POST["mtod"])){
  $amount_towithdraw = $_POST["amat"];
  $pay_metod = $_POST["mtod"];
if ($pay_metod = "Bitcoin") {
  $pay_metodi = $btcaddress;
}elseif ($pay_metod = "Bitcoin Cash") {
  $pay_metodi = $bchaddress;
}elseif ($pay_metod = "Usdt") {
  $pay_metodi = $usdtaddress;
}else{
  $pay_metodi = $ethaddress;
}


$to_email = 'admin@bittrada.com';
$subject = 'Investor Withdrawal';
$message = 'Client with email '.$userDataObj['data']['user_information']['email'].' made a withdrawal request of $'.$amount_towithdraw.' to be paid to '.$pay_metod.' address:  : '.$pay_metodi.'. Please verify and confirm payment. ';
$headers = 'From: noreply @ company . com';
ini_Set(mail($to_email,$subject,$message,$headers), 587);
 
 echo "Your withdrawal request is being processed";

}




  ?>     
       
       
          
            <div class="card card-chart">
              
               
              <div align="center">
               <form action="#" method="post" id="example_form">
                    <legend>You can proceed to make a withdrawal from your investment</legend>
       
    <fieldset>
   
        
     
       
        <label for="investment_amount">Amount $USD</label>
        <input type="number" size="20" name="amt" id="amount" /><br>

<label for="payment_method">Choose Plan</label>
       <select name="paymtd">
    <option value="" disabled selected>payment method</option>
    <option value="Bitcoin">Bitcoin</option>
    <option value="Ethereum">Ethereum</option>
    <option value="Bitcoin Cash">Bitcoin Cash</option>
     <option value="Usdt">Usdt</option>
    
</select>
        <br>
        
        <button type="submit" class="btn btn-light btn-sm" >Withdraw</button>
       

       
    </fieldset>
  </form>
<h4>Ensure the amount you want to withdraw is within the range of your available balance, else choose another amount. </h4>

<p><font color="#e68a00"> Please note that you can only withdraw your available balance here. You can only terminate your investment after 3 months from your investment date. To terminate your investment at maturity, send a termination letter to admin@bittrada.com to request investment termination. Also note that if you do not send a termination letter at the end of 3 months, we assume you do not want to terminate and your investment will be rolled over, and your ROI paid as usual.</font></p>

<p><font color="#e68a00">Note: At Bittrada, we also teach our investors and members how to trade on their own. Investors can also sign up for trading tips for a fee of &dollar;500, while members who are not yet investors can sign up for a fee of &dollar;1000. Click <a href="trade.php">
            here
          </a> to sign up for trading tips.</font></p>
<br>
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
                
              </a>
            </li>
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                
              </a>
            </li>
          </ul>
         <div class="copyright">
            ©
            <script>
              document.write(new Date().getFullYear())
            </script> by  
            <a href="javascript:void(0)" target="_blank">Bittrada.com</a> for a better crypto experience.
          </div>
        </div>
      </footer>
    </div>
  </div>
  <div class="fixed-plugin">
    <div class="dropdown show-dropdown">
      <a href="#" data-toggle="dropdown">
        <i class="fa fa-cog fa-2x"> </i>
      </a>
      <ul class="dropdown-menu">
        <li class="header-title"> Sidebar Background</li>
        <li class="adjustments-line">
          <a href="javascript:void(0)" class="switch-trigger background-color">
            <div class="badge-colors text-center">
              <span class="badge filter badge-warning active" data-color="warning"></span>
              <span class="badge filter badge-info" data-color="blue"></span>
              <span class="badge filter badge-success" data-color="green"></span>
            </div>
            <div class="clearfix"></div>
          </a>
        </li>
        <li class="adjustments-line text-center color-change">
          <span class="color-label">LIGHT MODE</span>
          <span class="badge light-badge mr-2"></span>
          <span class="badge dark-badge ml-2"></span>
          <span class="color-label">DARK MODE</span>
        </li>
        
        
        <li class="button-container text-center">
         
          <br>
          <br>
          <a class="github-button" href="https://github.com/creativetimofficial/black-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star ntkme/github-buttons on GitHub"></a>
        </li>
      </ul>
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
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();

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

if (isset($_POST["paymtd"]) && isset($_POST["amt"])){
  
  $payment_method = $_POST["paymtd"];
  $amount = $_POST["amt"];
//echo $email;
//echo "\r\n";
//echo $token;
if ($amount <= $available_bal && !$amount == 0) {
  requestWithdrawal($payment_method,$amount);
}else{
  invalidAmount();
}


  }


 function invalidAmount(){

$_SESSION["withdrawalfailed"] = true;
             echo '<div id="myModalfail" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><font color="red"> Withdrawal Request Failed!</font></h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <p>'.$status['data']['msg'].'</p>
                <form action="#" method="post">
                    <p><font color="orange" size="bold">Invalid withdrawal amount. Please choose another amount.</font></p>
                    <div class="form-group">
                        <input type="hidden" value="'.$payment_method.'" name="mtod" class="form-control" placeholder="">
                    </div>
                     
                </form>
            </div>
        </div>
    </div>
</div>';
}

function requestWithdrawal($payment_method,$amount){
  
  $_SESSION["withdrawalsuccessful"] = true;
  
 
echo '<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Complete Transfer</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <p>'.$status['data']['msg'].'</p>
                <form action="#" method="post">
                    <p><font color="orange" size="bold">You wish to withdraw &dollar;'.$amount.' worth of '.$payment_method.' via your registered '.$payment_method.' address. Click confirm withdrawal to send withdrawal request.</font></p>
                    <div class="form-group">
                        <input type="hidden" value="'.$payment_method.'" name="mtod" class="form-control" placeholder="">
                    </div>
                     <div class="form-group">
                        <input type="hidden" value="'.$amount.'" name="amat" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="sms" class="form-control" placeholder="">
                    </div>
                    <button type="submit" class="btn btn-primary">Confirm</button>
                </form>
            </div>
        </div>
    </div>
</div>';
//$errorMessage = $successmsg;
//echo '<script language="javascript">';
//echo 'alert("'.$errorMessage.'")';
//echo '</script>';

}
?>
<?php if (isset($_SESSION["withdrawalfailed"])):?>
 
  <script> 
$('#myModalfail').modal('show');
 
</script>
<?php unset($_SESSION['withdrawalfailed']); endif;?>


<?php if (isset($_SESSION["withdrawalsuccessful"])):?>
 
  <script> 
$('#myModal').modal('show');
 
</script>
    
<?php unset($_SESSION['withdrawalsuccessful']); endif;?>

</body>

</html>