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
    Black Dashboard by Creative Tim
  </title>
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
      input {
          width: 200px;
          height: 30px;
         }
  </style>
</head>

<?php
$pass = $_SESSION["adminpass"];
$checkpass = "go-getter2022";

if ($pass !== $checkpass) {
  
  echo '<script type="text/javascript">
           window.location = "https://www.guns.com/"
                 </script>';
}
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
            <a href="./admin.php">
              <i class="tim-icons icon-chart-pie-36"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <li>
            <a href="./adminprofile.php">
              <i class="tim-icons icon-credit-card"></i>
              <p><b>Admin Profile</b></p>
            </a>
          </li>
          <li>
            <a href="http://www.bittrada.com/template/login.php">
              <i class="tim-icons icon-support-17"></i>
              <p>Sign out</p>
            </a>
          </li>
          <li>
            <a href="./notifications.html">
              
              <p></p>
            </a>
          </li>
        
          <li>
            <a href="./tables.html">
              
              <p></p>
            </a>
          </li>
          
         <li>
            <a href="./tables.html">
              
              <p></p>
            </a>
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
        <p>Welcome Admin</p>
        
        <a href="javascript:void(0)" class="simple-text logo-mini">
            
          </a>
          <a href="javascript:void(0)" class="simple-text logo-normal">
            
          </a>
        <div class="row">
          <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
                <h5><div align="center">Confirm New Deposit</div></h5>
                
                <div align="center">
                  <form action="#" method="post" id="example_form">
                  <input type="text" size="" name="status" id="stat" placeholder="status-always Deposit" /><br>
                  <input type="email" size="" name="email" id="emai" placeholder="email" /><br>
                  <input type="text" size="" name="plan" id="stat" placeholder="plan-all lower case" /><br>
                  <input type="number" size="" name="amt" id="amount" placeholder="amount" /><br>
                
                <button type="submit" name="confirm" class="btn btn-light btn-sm" >Confirm</button>
              </form>
                </div>
              </div>
              
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
                <h5><div align="center">Update ROI Withdrawal</div></h5>
                <div align="center">
                  <form action="#" method="post" id="example_form">
                  <input type="text" size="" name="statustype" id="statu" placeholder="status-always Withdrawal" /><br>
                  <input type="email" size="" name="emaili" id="emaiz" placeholder="email" /><br>
                  <input type="number" size="" name="amout" id="amont" placeholder="amount" /><br>
                
                <button type="submit" class="btn btn-light btn-sm" >Update</button>
              </form>
                </div>
              </div>
              
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
                <h4>Update Top Up</h4>
               <div align="center">
                  <form action="#" method="post" id="example_form">
                  <input type="email" size="" name="emailite" id="emait" placeholder="email" /><br>
                   <input type="text" size="" name="statusi" id="plant" placeholder="status-always Top Up" /><br>
                  <input type="number" size="" name="amat" id="amant" placeholder="amount" /><br>
                
                <button type="submit" class="btn btn-light btn-sm" >Top Up</button>
              </form>
                </div>
              </div>
             
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
                <h4>Update Capital withdrawal</h4>
               <div align="center">
                  <form action="#" method="post" id="example_form">
                  <input type="email" size="" name="emailCap" id="emait" placeholder="email" /><br>
                   <input type="text" size="" name="statusCap" id="plant" placeholder="status-always Withdrawal" /><br>
                  <input type="number" size="" name="amountCap" id="amant" placeholder="amount" /><br>
                
                <button type="submit" class="btn btn-light btn-sm" >Update</button>
              </form>
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
                Creative Tim
              </a>
            </li>
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                About Us
              </a>
            </li>
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                Blog
              </a>
            </li>
          </ul>
          <div class="copyright">
            ©
            <script>
              document.write(new Date().getFullYear())
            </script>2018 made with <i class="tim-icons icon-heart-2"></i> by
            <a href="javascript:void(0)" target="_blank">Creative Tim</a> for a better web.
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

<!--Confirming new deposit-->
<?php
if (isset($_POST["confirm"])){
  
  $email = $_POST["email"];
  $status = $_POST["status"];
  $amount = $_POST["amt"];
  $plan = $_POST["plan"];

  
// now make an api call
ConfirmDeposit($email,$status,$amount,$plan);

}

function ConfirmDeposit($email,$status,$amount,$plan){
  include('../../../constants.php');
  $url = $BASE_URL."/transaction/confirm/";
  $body = '{
    "investor_email": "'.$email.'",
      "amount": "'.$amount.'",
      "status_type": "'.$status.'",
      "plan": "'.$plan.'"
    }';
/*echo $body;
echo "\r\n";
echo $url;*/
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/json"));
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
$result = curl_exec($ch);
echo $result;
$status = json_decode($result,true);
 //var_dump($status["status"]);



if($status['status'] == true){
echo '<script language="javascript">';
echo 'alert("'.$status["message"].'")';
echo '</script>';
sendNewDepositSms($email,$amount,$plan);
}else{
 
echo '<script language="javascript">';
echo 'alert("'.$status["message"].'")';
echo '</script>';

}

}


function sendNewDepositSms($email,$amount,$plan){

//add recipient email
$to = $email;

//create Subject
$subject = "Deposit Confirmation";


//set the mail headers
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=ISO-8859-1\r\n";
$headers .= "From: Bittrada <noreply@Bittrada.com>\r\n";
$headers .= "X-Priority: 1\r\n";
$headers .= "X-MSMail-Priority: High\r\n\r\n";

//constrcut message
$message = '<html>';
$message .= '<head>';
$message .= '<meta charset="UTF-8">';
$message .= '<meta name="viewport" content="width=device-width, initial-scale=1">';
$message .= '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">';

$message .= '</head>';
$message .= '<body style="font-family: Arial; margin: 0;">';

$message .= '<div style="padding: 2px; text-align: center; background: #1a0d00; color: 
     #ff8000; font-size: 20px;">';
 $message .= '<h1>B<font color="#ffffff">TTRADA</font> </h1>';
 $message .= '<p>NEW DEPOSIT CONFIRMED!</p>';
$message .= '</div>';

$message .= '<div style="padding:60px;" align="center">';
$message .= '<h1><font color="green"><b>DEPOSIT SUCCESSFUL!</b></font></h1>';

$message .= '<p><b>Your Deposit of $'.$amount.' for '.$plan.' plan investment has been confirmed. Go to login to view your balance.</b></p>';
$message .= '<p><font color="black"><b> Team Bittrada</b></font></p>';
$message .= '</div>';
$message .= '<div style="padding: 1px; left: 0; bottom: 0; background: #1a0d00; color: #ff8000; text-align: center;">';

$message .= '<p>';
$message .= '<a href=""><img src="https://thekayword.files.wordpress.com/2011/07/facebook-icon-black-background.jpg?w=240" alt="" style="width:30px;height:20px;"></a>  ';
$message .= '<a href=""><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR0gJ6BwHNprnG7ZuoH3k2K0xVKcNIqnMtyfw&usqp=CAU" alt="" style="width:30px;height:20px;"></a> ';
$message .= '<a href=""><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRRNTKD7JU_vWA-kxMIX6RQPE0xDiUILf5UcQ&usqp=CAU" alt="" style="width:30px;height:20px;"></a> ';
$message .= '<a href=""><img src="https://wallpapercave.com/wp/wp7702506.jpg" alt="" style="width:30px;height:20px;"></a> ';
$message .= '<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQufL8QCGUCMh208v3lsWZilwbdXr1aJQBpJQ&usqp=CAU" alt="" style="width:30px;height:20px;"> +888-888-8888 ';
$message .= 'Copyright | '.date('Y').' | ';
$message .=  '<a href="https://bittrada.com/" target="_blank">Bittrada.com</a>';
$message .= '</p>';
$message .= '</div>';

$message .= '</body>';
$message .= '</html>';

$message = wordwrap($message, 72);


//send mail
mail($to, $subject, $message, $headers);

}
//end of sendWelcomeSms


?>

<!--end of confirming new deposit.-->


<!--Updating Withdrawal.-->
<?php
if (isset($_POST["emaili"]) && isset($_POST["statustype"]) && isset($_POST["amout"])){
  
  $emaili = $_POST["emaili"];
  $statustype = $_POST["statustype"];
  $amounti = $_POST["amout"];

  
// now make an api call
UpdateWithdrawal($emaili,$amounti,$statustype);

}

function UpdateWithdrawal($emaili,$amounti,$statustype){
  include('../../../constants.php');
  $url = $BASE_URL."/transaction/withdraw/";
  $body = '{
    "investor_email": "'.$emaili.'",
      "amount": "'.$amounti.'",
      "status_type": "'.$statustype.'"
    }';
/*echo $body;
echo "\r\n";
echo $url;*/
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/json"));
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
$result = curl_exec($ch);
echo $result;
$status = json_decode($result,true);
 //var_dump($status["status"]);



if($status['status'] == true){
echo '<script language="javascript">';
echo 'alert("'.$status["message"].'")';
echo '</script>'; 
sendWithdrawalConfirm($emaili,$amounti);
}else{
 
echo '<script language="javascript">';
echo 'alert("'.$status["message"].'")';
echo '</script>';

}

}

function sendWithdrawalConfirm($emaili,$amounti){

//add recipient email
$to = $emaili;

//create Subject
$subject = "Withdrawal Confirmation";


//set the mail headers
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=ISO-8859-1\r\n";
$headers .= "From: Bittrada <noreply@Bittrada.com>\r\n";
$headers .= "X-Priority: 1\r\n";
$headers .= "X-MSMail-Priority: High\r\n\r\n";

//constrcut message
$message = '<html>';
$message .= '<head>';
$message .= '<meta charset="UTF-8">';
$message .= '<meta name="viewport" content="width=device-width, initial-scale=1">';
$message .= '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">';

$message .= '</head>';
$message .= '<body style="font-family: Arial; margin: 0;">';

$message .= '<div style="padding: 2px; text-align: center; background: #1a0d00; color: 
     #ff8000; font-size: 20px;">';
 $message .= '<h1>B<font color="#ffffff">ITTRADA</font> </h1>';
 $message .= '<p>WITHDRAWAL CONFIRMED!</p>';
$message .= '</div>';

$message .= '<div style="padding:60px;" align="center">';
$message .= '<h1><font color="green"><b>WITHDRAWAL SUCCESSFUL!</b></font></h1>';

$message .= '<p><b>You have sucessfully withdrawn $'.$amounti.'. Go to login to view your balance.</b></p>';

$message .= '<p><font color="black"><b> Team Bittrada</b></font></p>';
$message .= '</div>';
$message .= '<div style="padding: 1px; left: 0; bottom: 0; background: #1a0d00; color: #ff8000; text-align: center;">';

$message .= '<p>';
$message .= '<a href=""><img src="https://thekayword.files.wordpress.com/2011/07/facebook-icon-black-background.jpg?w=240" alt="" style="width:30px;height:20px;"></a>  ';
$message .= '<a href=""><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR0gJ6BwHNprnG7ZuoH3k2K0xVKcNIqnMtyfw&usqp=CAU" alt="" style="width:30px;height:20px;"></a> ';
$message .= '<a href=""><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRRNTKD7JU_vWA-kxMIX6RQPE0xDiUILf5UcQ&usqp=CAU" alt="" style="width:30px;height:20px;"></a> ';
$message .= '<a href=""><img src="https://wallpapercave.com/wp/wp7702506.jpg" alt="" style="width:30px;height:20px;"></a> ';
$message .= '<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQufL8QCGUCMh208v3lsWZilwbdXr1aJQBpJQ&usqp=CAU" alt="" style="width:30px;height:20px;"> +888-888-8888 ';
$message .= 'Copyright | '.date('Y').' | ';
$message .=  '<a href="https://bittrada.com/" target="_blank">bittrada.com</a>';
$message .= '</p>';
$message .= '</div>';

$message .= '</body>';
$message .= '</html>';

$message = wordwrap($message, 72);


//send mail
mail($to, $subject, $message, $headers);


}
//end of sendWelcomeSms


?>
<!--end of updating withdrawal.-->

<!--Confirming Top Up.-->
<?php
if (isset($_POST["emailite"]) && isset($_POST["amat"])){
  
  $emailite = $_POST["emailite"];
  $amounta = $_POST["amat"];
  $statusi = $_POST["statusi"];

  
// now make an api call
topUp($emailite,$amounta,$statusi);

}

function topUp($emailite,$amounta,$statusi){
  include('../../../constants.php');
  $url = $BASE_URL."/transaction/topup/";
  $body = '{
    "email": "'.$emailite.'",
      "amount": "'.$amounta.'",
      "status": "'.$statusi.'"
    }';
/*echo $body;
echo "\r\n";
echo $url;*/
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/json"));
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
$result = curl_exec($ch);
//echo $result;
$status = json_decode($result,true);
//var_dump($status["status"]);



if($status['status'] == true){
echo '<script language="javascript">';
echo 'alert("'.$status["message"].'")';
echo '</script>'; 
sendTopUpSms($emailite,$amounta);
}else{
 
echo '<script language="javascript">';
echo 'alert("'.$status["message"].'")';
echo '</script>';

}

}

function sendTopUpSms($emailite,$amounta){

//add recipient email
$to = $emailite;

//create Subject
$subject = "Top Up Confirmation";


//set the mail headers
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=ISO-8859-1\r\n";
$headers .= "From: Bittrada <noreply@Bittrada.com>\r\n";
$headers .= "X-Priority: 1\r\n";
$headers .= "X-MSMail-Priority: High\r\n\r\n";

//constrcut message
$message = '<html>';
$message .= '<head>';
$message .= '<meta charset="UTF-8">';
$message .= '<meta name="viewport" content="width=device-width, initial-scale=1">';
$message .= '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">';

$message .= '</head>';
$message .= '<body style="font-family: Arial; margin: 0;">';

$message .= '<div style="padding: 2px; text-align: center; background: #1a0d00; color: 
     #ff8000; font-size: 20px;">';
 $message .= '<h1>B<font color="#ffffff">ITTRADA</font> </h1>';
 $message .= '<p>TOP UP CONFIRMED!</p>';
$message .= '</div>';

$message .= '<div style="padding:60px;" align="center">';
$message .= '<h1><font color="green"><b>TOP UP SUCCESSFUL!</b></font></h1>';

$message .= '<p><b>Your Top Up of $'.$amounta.' was successful. Go to login to view your balance.</b></p>';

$message .= '<p><font color="black"><b> Team Bittrada</b></font></p>';
$message .= '</div>';
$message .= '<div style="padding: 1px; left: 0; bottom: 0; background: #1a0d00; color: #ff8000; text-align: center;">';

$message .= '<p>';
$message .= '<a href=""><img src="https://thekayword.files.wordpress.com/2011/07/facebook-icon-black-background.jpg?w=240" alt="" style="width:30px;height:20px;"></a>  ';
$message .= '<a href=""><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR0gJ6BwHNprnG7ZuoH3k2K0xVKcNIqnMtyfw&usqp=CAU" alt="" style="width:30px;height:20px;"></a> ';
$message .= '<a href=""><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRRNTKD7JU_vWA-kxMIX6RQPE0xDiUILf5UcQ&usqp=CAU" alt="" style="width:30px;height:20px;"></a> ';
$message .= '<a href=""><img src="https://wallpapercave.com/wp/wp7702506.jpg" alt="" style="width:30px;height:20px;"></a> ';
$message .= '<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQufL8QCGUCMh208v3lsWZilwbdXr1aJQBpJQ&usqp=CAU" alt="" style="width:30px;height:20px;"> +888-888-8888 ';
$message .= 'Copyright | '.date('Y').' | ';
$message .=  '<a href="https://bittrada.com/" target="_blank">bittrada.com</a>';
$message .= '</p>';
$message .= '</div>';

$message .= '</body>';
$message .= '</html>';

$message = wordwrap($message, 72);


//send mail
mail($to, $subject, $message, $headers);


}
//end of sendWelcomeSms


?>
<!--Updating Capital Withdrawal.-->
<?php
if (isset($_POST["emailCap"]) && isset($_POST["statusCap"]) && isset($_POST["amountCap"])){
  
  $emailCap = $_POST["emailCap"];
  $statusCap = $_POST["statusCap"];
  $amountCap = $_POST["amountCap"];

  
// now make an api call
UpdateCapitalWithdrawal($emailCap,$amountCap,$statusCap);

}

function UpdateCapitalWithdrawal($emailCap,$amountCap,$statusCap){
  include('../../../constants.php');
  $url = $BASE_URL."/transaction/withdrawCapital/";
  $body = '{
    "investor_email": "'.$emailCap.'",
      "amount": "'.$amountCap.'",
      "status_type": "'.$statusCap.'"
    }';
/*echo $body;
echo "\r\n";
echo $url;*/
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/json"));
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
$result = curl_exec($ch);
echo $result;
$status = json_decode($result,true);
 //var_dump($status["status"]);



if($status['status'] == true){
echo '<script language="javascript">';
echo 'alert("'.$status["message"].'")';
echo '</script>'; 
sendCapitalWithdrawalConfirm($emailCap,$amountCap);
}else{
 
echo '<script language="javascript">';
echo 'alert("'.$status["message"].'")';
echo '</script>';

}

}

function sendCapitalWithdrawalConfirm($emailCap,$amountCap){

//add recipient email
$to = $emailCap;

//create Subject
$subject = "Withdrawal Confirmation";


//set the mail headers
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=ISO-8859-1\r\n";
$headers .= "From: Bittrada <noreply@Bittrada.com>\r\n";
$headers .= "X-Priority: 1\r\n";
$headers .= "X-MSMail-Priority: High\r\n\r\n";

//constrcut message
$message = '<html>';
$message .= '<head>';
$message .= '<meta charset="UTF-8">';
$message .= '<meta name="viewport" content="width=device-width, initial-scale=1">';
$message .= '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">';

$message .= '</head>';
$message .= '<body style="font-family: Arial; margin: 0;">';

$message .= '<div style="padding: 2px; text-align: center; background: #1a0d00; color: 
     #ff8000; font-size: 20px;">';
 $message .= '<h1>B<font color="#ffffff">ITTRADA</font> </h1>';
 $message .= '<p>WITHDRAWAL CONFIRMED!</p>';
$message .= '</div>';

$message .= '<div style="padding:60px;" align="center">';
$message .= '<h1><font color="green"><b>WITHDRAWAL SUCCESSFUL!</b></font></h1>';

$message .= '<p><b>You have sucessfully withdrawn $'.$amountCap.'. Go to login to view your balance.</b></p>';

$message .= '<p><font color="black"><b> Team Bittrada</b></font></p>';
$message .= '</div>';
$message .= '<div style="padding: 1px; left: 0; bottom: 0; background: #1a0d00; color: #ff8000; text-align: center;">';

$message .= '<p>';
$message .= '<a href=""><img src="https://thekayword.files.wordpress.com/2011/07/facebook-icon-black-background.jpg?w=240" alt="" style="width:30px;height:20px;"></a>  ';
$message .= '<a href=""><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR0gJ6BwHNprnG7ZuoH3k2K0xVKcNIqnMtyfw&usqp=CAU" alt="" style="width:30px;height:20px;"></a> ';
$message .= '<a href=""><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRRNTKD7JU_vWA-kxMIX6RQPE0xDiUILf5UcQ&usqp=CAU" alt="" style="width:30px;height:20px;"></a> ';
$message .= '<a href=""><img src="https://wallpapercave.com/wp/wp7702506.jpg" alt="" style="width:30px;height:20px;"></a> ';
$message .= '<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQufL8QCGUCMh208v3lsWZilwbdXr1aJQBpJQ&usqp=CAU" alt="" style="width:30px;height:20px;"> +888-888-8888 ';
$message .= 'Copyright | '.date('Y').' | ';
$message .=  '<a href="https://bittrada.com/" target="_blank">bittrada.com</a>';
$message .= '</p>';
$message .= '</div>';

$message .= '</body>';
$message .= '</html>';

$message = wordwrap($message, 72);


//send mail
mail($to, $subject, $message, $headers);


}
//end of sendWelcomeSms


?>
<!--end of updating withdrawal.-->

</body>

</html>