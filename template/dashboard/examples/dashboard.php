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
    Dashboard | Bittrada
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
$act_bal = $walletDataObj['data']['wallet_information']['act_bal'];
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
            Main
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
                  <li class="nav-link"><a href="user.php" class="nav-item dropdown-item">Profile</a></li>
                  <li class="nav-link"><a href="trade.php" class="nav-item dropdown-item">Sign up for trade</a></li>
                  <li class="dropdown-divider"></li>
                  <li class="nav-link"><a href="http://www.bittrada.com/template/login.php" class="nav-item dropdown-item">Log out</a></li>
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
      	<p>Welcome <?php echo $full_name;?> &nbsp ID: <?php echo $investor_id; ?></p>
      	
      	  <a href="javascript:void(0)" class="simple-text logo-mini">Account Balance:</a> <a href="javascript:void(0)" class="simple-text logo-mini">
            &dollar;<?php echo $act_bal; ?>
          </a> &nbsp
        
        <a href="javascript:void(0)" class="simple-text logo-mini">Ledger Balance:</a> <a href="javascript:void(0)" class="simple-text logo-mini">
            &dollar;<?php echo $ledger_bal; ?>
          </a> &nbsp  <a href="javascript:void(0)" class="simple-text logo-mini">ROI:</a> <a href="javascript:void(0)" class="simple-text logo-mini">
            &dollar;<?php echo $available_bal; ?>
          </a>
          
        <div class="row">
          <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
                <h2><div align="center">Bronze Plan</div></h2>
                <span class="float-left">
                <h5>Min Deposit</h5>
                <h3 class="card-title">&dollar;100</h3>
              </span>
              <span class="float-right">
                <h5>Max Deposit</h5>
                <h3 class="card-title">&dollar;9,999</h3>
              </span>
               <br><br><br><br>
                <div align="center">
                <h3 class="card-category">Interest 3% weekly</h3>
                <button onclick="window.location.href='deposit.php';" type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-zoom-out"></span> Invest </button>
                </div>
              </div>
              
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
                <h2><div align="center">Silver Plan</div></h2>
                <span class="float-left">
                <h5>Min Deposit</h5>
                <h3 class="card-title">&dollar;10,000</h3>
              </span>
              <span class="float-right">
                <h5>Max Deposit</h5>
                <h3 class="card-title">&dollar;19,999</h3>
              </span>
               <br><br><br><br>
               <div align="center">
                <h3 class="card-category">Interest 7% weekly</h3>
                <button onclick="window.location.href='deposit.php';" type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-zoom-out"></span> Invest </button>
                </div>
              </div>
              
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
                <h3>Gold Plan</h3>
                <span class="float-left">
                <h5>Min Deposit</h5>
                <h3 class="card-title">&dollar;20,000</h3>
              </span>
              <span class="float-right">
                <h5>Max Deposit</h5>
                <h3 class="card-title">&dollar;29,999</h3>
              </span>
               <br><br><br><br>
               <div align="center">
                <h3 class="card-category">Interest 12% weekly</h3>
                <button onclick="window.location.href='deposit.php';" type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-zoom-out"></span> Invest </button>
                </div>
              </div>
             
            </div>
          </div>


        </div>
        <div class="row">
          <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
                <h2><div align="center">Diamond Plan</div></h2>
                <span class="float-left">
                <h5>Min Deposit</h5>
                <h3 class="card-title">&dollar;30,000</h3>
              </span>
              <span class="float-right">
                <h5>Max Deposit</h5>
                <h3 class="card-title">Unlimited</h3>
              </span>
               <br><br><br><br>
               <div align="center">
                <h3 class="card-category">Interest 15% weekly</h3>
                <button onclick="window.location.href='deposit.php';" type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-zoom-out"></span> Invest </button>
                </div>
              </div>
              
            </div>
          </div>

          <div class="col-lg-6 col-md-12">
            <div class="card ">
              <div class="card-header">
                <h4 class="card-title"> Transaction(s) Table</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table tablesorter " id="">
                    <thead class=" text-primary">
                      <tr>
                        <th>
                          Investor ID
                        </th>
                        <th>
                          Amount
                        </th>
                        <th>
                          Status
                        </th>
                        <th class="text-center">
                          Date
                        </th>
                      </tr>
                    </thead>
                    <tbody>
<?php
for ($x = 0; $x < count($walletDataObj['data']['transaction_details']); $x++) {
// var_dump($userDataObj['data']['transaction_details'][$x]['amount']); 
    if($walletDataObj['data']['transaction_details'][$x]['client_id'] == $investor_id) {
//var_dump(count($walletDataObj['data']['transaction_details'])
echo '<tr>
                        <td>
                          '.$walletDataObj['data']['transaction_details'][$x]['client_id'].'
                        </td>
                        <td>
                          '.$walletDataObj['data']['transaction_details'][$x]['amount'].'
                        </td>
                        <td>
                          '.$walletDataObj['data']['transaction_details'][$x]['status'].'
                        </td>
                        <td class="text-center">
                          '.$walletDataObj['data']['transaction_details'][$x]['reg_date'].'
                        </td>
                      </tr>';
}
}

?>
                    </tbody>
                  </table>
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
</body>
</html>