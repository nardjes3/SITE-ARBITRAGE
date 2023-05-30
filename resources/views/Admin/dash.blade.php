<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <!-- Bootstrap CSS-->
    <link href="css/AdminCss/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/AdminCss/theme.css" rel="stylesheet" media="all">
    <link href="css/AdminCss/analy.css" rel="stylesheet" media="all">
    <link href="css/AdminCss/menu.css" rel="stylesheet" media="all">



</head>

<body >
    <div class="page-wrapper">
        
          
          

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            @include('Admin/menu')
            <!-- HEADER DESKTOP-->
           
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content" style="margin-left:-200px; margin-top:-50px;">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        
                        <div class="row m-t-25">
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">
                                                <h2>10368</h2>
                                                <span>referees</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart1"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-shopping-cart"></i>
                                            </div>
                                            <div class="text">
                                                <h2>388,688</h2>
                                                <span>instructors techniques</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart2"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c3">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-calendar-note"></i>
                                            </div>
                                            <div class="text">
                                                <h2>1,086</h2>
                                                <span>instructors physiues</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart3"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c4">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-money"></i>
                                            </div>
                                            <div class="text">
                                                <h2>1,060,386</h2>
                                                <span>total</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart4"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="au-card recent-report">
                                    <div class="au-card-inner">
                                        <h3 style="margin-bottom:70px" class="title-2">recent reports of notes</h3>
                                        
                                        <div class="recent-report__chart">
                                            <canvas id="recent-rep-chart"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="au-card chart-percent-card">
                                    <div class="au-card-inner">
                                        <h2 class="chart-heading">level of referees</h2>
                                        <div style="margin-top:30px; height:310px" class="programming-stats">
                                          <div class="chart-container">
                                            <canvas class="my-chart"></canvas>
                                          </div>
                                    
                                          <div class="details">
                                            <ul></ul>
                                          </div>
                                        </div>                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="chart-cont">
                                <h2 class="chart-head">level of referees</h2>
                                <canvas id="custom-chart"></canvas>
                              </div>
                            <div class="col-lg-3">
                                <h2 class="title-1 m-b-25">Top referees</h2>
                                <div class="au-card au-card--bg-blue au-card-top-countries m-b-40">
                                    <div class="au-card-inner">
                                        <div class="table-responsive">
                                            <table class="table table-top-countries">
                                                <tbody>
                                                    <tr>
                                                        <td>ETCHIALI Abdelhak</td>
                                                    </tr>
                                                    <tr>
                                                        <td>GHORBEL Mustapha</td>
                                                    </tr>
                                                    <tr>
                                                        <td>khiat sara nardjes</td>
                                                    </tr>
                                                    <tr>
                                                        <td>saidi sabah</td>
                                                    </tr>
                                                    <tr>
                                                        <td>belabdeli arslane</td>
                                                    </tr>
                                                    <tr>
                                                        <td>merabet amel</td>
                                                    </tr>
                                                    <tr>
                                                        <td>khit amel</td>
$                                                    </tr>
                                                    <tr>
                                                        <td>saidi boumedienne</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>
   


    <!-- Jquery JS-->
    <script src="js/AdminJs/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="js/AdminJs/popper.min.js"></script>
    <script src="js/AdminJs/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="js/AdminJs/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="js/AdminJs/animsition.min.js"></script>
    <script src="js/AdminJs/bootstrap-progressbar.min.js">
    </script>
    <script src="js/AdminJs/jquery.waypoints.min.js"></script>
    <script src="js/AdminJs/jquery.counterup.min.js">
    </script>
    <script src="js/AdminJs/circle-progress.min.js"></script>
    <script src="js/AdminJs/perfect-scrollbar.js"></script>
    <script src="js/AdminJs/Chart.bundle.min.js"></script>
    <script src="js/AdminJs/select2.min.js">
    </script>
   
    <script src="js/AdminJs/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


    <script >
    const chartData = {
        labels: ["advenced", "intermedite", "beginner"],
        data: [30, 17, 10,],
      };
      
      const myChart = document.querySelector(".my-chart");
      const ul = document.querySelector(".programming-stats .details ul");
      
      new Chart(myChart, {
        type: "doughnut",
        data: {
          labels: chartData.labels,
          datasets: [
            {
              label: "Language Popularity",
              data: chartData.data,
            },
          ],
        },
        options: {
          borderWidth: 10,
          borderRadius: 2,
          hoverBorderWidth: 0,
          plugins: {
            legend: {
              display: false,
            },
          },
        },
      });
      
      const populateUl = () => {
        chartData.labels.forEach((l, i) => {
          let li = document.createElement("li");
          li.innerHTML = `${l}: <span class='percentage'>${chartData.data[i]}%</span>`;
          ul.appendChild(li);
        });
      };
      
      populateUl();
      
      let customChart = document.getElementById("custom-chart").getContext("2d");

let programmingChart = new Chart(customChart, {
  type: "bar",
  data: {
    labels: ["France", "Argentina", "England", "Portugal", "Netherlands", "Spain", "Brazil", "Croitia", "Germany", "Morocco", "South Korea", "Ghana", "Japan", "Serbia", "Swiss", "Senegal", "Australia", "Cameroon", "Ecuador", "Iran"],
    datasets: [
      {
        
        data: [16, 15, 13, 12, 10, 9, 8, 8, 6, 6, 5, 5, 5, 5, 5, 5, 4, 4, 4, 4 ],
        backgroundColor: [
          "rgba(0, 176, 255, 0.6)",
          "rgba(164, 118, 255, 0.6)",
          "rgba(255, 240, 0, 0.6)",
          "rgba(255, 0, 89, 0.6)",
          "rgba(17, 240, 80, 0.6)",
          "rgba(14, 120, 0, 0.6)",
          "rgba(164, 20, 10, 0.6)",
          "rgba(255, 255, 100, 0.6)",
          "rgba(0, 255, 0, 0.6)",
          "rgba(10, 0, 0, 0.6)",
          "rgba(97, 3, 1, 0.6)",
          "rgba(140, 120, 0, 0.6)",
          "rgba(170, 255, 255, 0.6)",
          "rgba(11, 80, 255, 0.6)",
          "rgba(210, 240, 5, 0.6)",
          "rgba(150, 140, 40, 0.6)",
          "rgba(20, 120, 253, 0.6)",
          "rgba(252, 124, 11, 0.6)",
          "rgba(134, 215, 37, 0.6)",
          "rgba(7, 105, 48, 0.6)",
          "rgba(16, 184, 220, 0.6)",



        ],
        borderColor: [
          "rgba(0, 176, 255, 1)",
          "rgba(164, 118, 255, 1)",
          "rgba(255, 240, 0, 1)",
          "rgba(255, 0, 89, 1)",
          "rgba(17, 240, 80, 1)",
          "rgba(14, 120, 0, 1)",
          "rgba(164, 20, 10, 1)",
          "rgba(255, 255, 100, 1)",
          "rgba(0, 255, 0, 1)",
          "rgba(10, 0, 0, 1)",
          "rgba(97, 3, 1, 1)",
          "rgba(140, 120, 0, 1)",
          "rgba(170, 255, 255, 1)",
          "rgba(11, 80, 255, 1)",
          "rgba(210, 240, 5, 1)",
          "rgba(150, 140, 40, 1)",
          "rgba(20, 120, 253, 1)",
          "rgba(252, 124, 11, 1)",
          "rgba(134, 215, 37, 1)",
          "rgba(7, 105, 48, 1)",
          "rgba(16, 184, 220, 1)",

        ],
        borderWidth: 2,
      },
    ],
  },

  options: {
    scales: {
      yAxes: [
        {
          ticks: {
            beginAtZero: true,
          },
        },
      ],
    },
  },
});
</script>
<script>

</script>
    <!-- Main JS-->

</body>

</html>
<!-- end document-->
