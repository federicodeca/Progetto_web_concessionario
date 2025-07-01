<!DOCTYPE html>
<html lang="en">

<head>

  
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/RentalTopGear/directory/Smarty/assets/images/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>PHPJabbers.com | Free Car Rental Website Template</title>

    <!-- Bootstrap core CSS -->
    <link href="/RentalTopGear/directory/Smarty/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="/RentalTopGear/directory/Smarty/assets/css/fontawesome.css">
    <link rel="stylesheet" href="/RentalTopGear/directory/Smarty/assets/css/style.css">
    <link rel="stylesheet" href="/RentalTopGear/directory/Smarty/assets/css/owl.css">

    <!--dati per login-->
    <script>
      const isLogged = {$isLogged|@json_encode|default:'false'};
      const username = "{$username|escape:'javascript'|default:''}";
      const permission = "{$permission|escape:'javascript'|default:''}";
      
    </script>
    <script src="/RentalTopGear/directory/Smarty/js/login-box.js"></script>

  </head>

<body>

<header>
    <div class="" id="home">
        <nav class="navbar navbar-expand-xl">
            <div class="container h-100">
                <a class="navbar-brand" href="/RentalTopGear/Owner/home/">
                    <h1 class="tm-site-title mb-0">Dashboard</h1>
                </a>
                <button class="navbar-toggler ml-auto mr-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars tm-nav-icon"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto h-100">
                        <li class="nav-item">
                            <a class="nav-link active" href="/RentalTopGear/Owner/home/">
                                <i class="fas fa-tachometer-alt"></i>
                                Dashboard
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="products.html">
                                Products
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="accounts.html">
                                Accounts
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </header>

        </nav>
        <div class="container">
            <div class="row">
                <div class="col">
                    <p class="text-white mt-5 mb-5">Welcome back, <b>Admin</b></p>
                </div>
            </div>
            <!-- row -->
            <div class="row tm-content-row">

                <!--- Lista degli ordini -->
                <div class="col-12 tm-block-col">
                    <div class="tm-bg-primary-dark tm-block tm-block-taller tm-block-scroll" style="height: 500px; overflow-y: auto; border: 1px solid #ccc; padding: 10px;">
                        <h2 class="tm-block-title">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-card-list" viewBox="0 0 16 16">
                            <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2z"/>
                            <path d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8m0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m-1-5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0M4 8a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0m0 2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0"/>
                            </svg>
                            Lista ordini</h2>
                        <table class="table" style="width: 100%;">
                            <thead>
                                <tr>
                                    <th scope="col">NUM. ORDINE</th>
                                    <th scope="col">NOME</th>
                                    <th scope="col">COGNOME</th>
                                    <th scope="col">MARCA AUTO</th>
                                    <th scope="col">MODELLO AUTO</th>
                                    <th scope="col">DATA ORDINE</th>
                                    <th scope="col">TOTALE</th>
                                </tr>
                            </thead>
                            <tbody>

                                <!--- Lista auto vendita -->
                                {assign var="total" value=0}
                                {foreach from=$saleOrders item=sale}
                                    <tr>
                                        <td>{$sale->getOrderId()}</td>
                                        <td>{$sale->getUser()->getFirstName()}</td>
                                        <td>{$sale->getUser()->getLastName()}</td>
                                        <td>{$sale->getCarForSale()->getBrand()}</td>
                                        <td>{$sale->getCarForSale()->getModel()}</td>
                                        <td>{$sale->getOrderDate()->format("Y/m/d")}</td>
                                        <td>{$sale->getPrice()}</td>
                                        {assign var="total" value=$total + $sale->getPrice()}
                                    </tr>
                                    {/foreach}

                                    <!--- Lista auto noleggio-->
                                    {assign var="totalRent" value=0}
                                    {foreach from=$rentOrders item=rent}
                                    <tr>
                                        <td>{$rent->getOrderId()}</td>
                                        <td>{$rent->getUser()->getFirstName()}</td>
                                        <td>{$rent->getUser()->getLastName()}</td>
                                        <td>{$rent->getAuto()->getBrand()}</td>
                                        <td>{$rent->getAuto()->getModel()}</td>
                                        <td>{$rent->getOrderDate()->format("Y/m/d")}</td>
                                        <td>{$rent->getTotalPrice()}</td>
                                        {assign var="totalRent" value=$totalRent + $rent->getTotalPrice()}
                                    </tr>
                                    {/foreach}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        
            <div class="row mt-5">
                <div class="col-sm-12 col-md-12 tm-block-col">
                    <div class="tm-bg-primary-dark tm-block">
                        <h2 class="tm-block-title">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-cash-stack" viewBox="0 0 16 16">
                            <path d="M1 3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1zm7 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4"/>
                            <path d="M0 5a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V7a2 2 0 0 1-2-2z"/>
                            </svg>
                            Totale vendite:  <small>€ {$total|number_format:2:",":"."}</small></h2>
                        <canvas id="lineChart"></canvas>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-block-col">
                    <div class="tm-bg-primary-dark tm-block">
                        <h2 class="tm-block-title">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-cash-stack" viewBox="0 0 16 16">
                            <path d="M1 3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1zm7 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4"/>
                            <path d="M0 5a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V7a2 2 0 0 1-2-2z"/>
                            </svg>
                            Totale noleggi:  <small>€ {$totalRent|number_format:2:",":"."}</small></h2>
                        <canvas id="barChart"></canvas>
                    </div>
                </div>
            </div>
        </div>


                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-block-col">
                    <div class="tm-bg-primary-dark tm-block tm-block-taller">
                        <h2 class="tm-block-title">Storage Information</h2>
                        <div id="pieChartContainer">
                            <canvas id="pieChart" class="chartjs-render-monitor" width="200" height="200"></canvas>
                            
                        </div>                        
                    </div>
                </div>

                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-block-col">
                    <div class="tm-bg-primary-dark tm-block tm-block-taller tm-block-overflow">
                        <h2 class="tm-block-title">Notification List</h2>
                        <div class="tm-notification-items">
                            <div class="media tm-notification-item">
                                <div class="tm-gray-circle"><img src="img/notification-01.jpg" alt="Avatar Image" class="rounded-circle"></div>
                                <div class="media-body">
                                    <p class="mb-2"><b>Jessica</b> and <b>6 others</b> sent you new <a href="#"
                                            class="tm-notification-link">product updates</a>. Check new orders.</p>
                                    <span class="tm-small tm-text-color-secondary">6h ago.</span>
                                </div>
                            </div>
                            <div class="media tm-notification-item">
                                <div class="tm-gray-circle"><img src="img/notification-02.jpg" alt="Avatar Image" class="rounded-circle"></div>
                                <div class="media-body">
                                    <p class="mb-2"><b>Oliver Too</b> and <b>6 others</b> sent you existing <a href="#"
                                            class="tm-notification-link">product updates</a>. Read more reports.</p>
                                    <span class="tm-small tm-text-color-secondary">6h ago.</span>
                                </div>
                            </div>
                            <div class="media tm-notification-item">
                                <div class="tm-gray-circle"><img src="img/notification-03.jpg" alt="Avatar Image" class="rounded-circle"></div>
                                <div class="media-body">
                                    <p class="mb-2"><b>Victoria</b> and <b>6 others</b> sent you <a href="#"
                                            class="tm-notification-link">order updates</a>. Read order information.</p>
                                    <span class="tm-small tm-text-color-secondary">6h ago.</span>
                                </div>
                            </div>
                            <div class="media tm-notification-item">
                                <div class="tm-gray-circle"><img src="img/notification-01.jpg" alt="Avatar Image" class="rounded-circle"></div>
                                <div class="media-body">
                                    <p class="mb-2"><b>Laura Cute</b> and <b>6 others</b> sent you <a href="#"
                                            class="tm-notification-link">product records</a>.</p>
                                    <span class="tm-small tm-text-color-secondary">6h ago.</span>
                                </div>
                            </div>
                            <div class="media tm-notification-item">
                                <div class="tm-gray-circle"><img src="img/notification-02.jpg" alt="Avatar Image" class="rounded-circle"></div>
                                <div class="media-body">
                                    <p class="mb-2"><b>Samantha</b> and <b>6 others</b> sent you <a href="#"
                                            class="tm-notification-link">order stuffs</a>.</p>
                                    <span class="tm-small tm-text-color-secondary">6h ago.</span>
                                </div>
                            </div>
                            <div class="media tm-notification-item">
                                <div class="tm-gray-circle"><img src="img/notification-03.jpg" alt="Avatar Image" class="rounded-circle"></div>
                                <div class="media-body">
                                    <p class="mb-2"><b>Sophie</b> and <b>6 others</b> sent you <a href="#"
                                            class="tm-notification-link">product updates</a>.</p>
                                    <span class="tm-small tm-text-color-secondary">6h ago.</span>
                                </div>
                            </div>
                            <div class="media tm-notification-item">
                                <div class="tm-gray-circle"><img src="img/notification-01.jpg" alt="Avatar Image" class="rounded-circle"></div>
                                <div class="media-body">
                                    <p class="mb-2"><b>Lily A</b> and <b>6 others</b> sent you <a href="#"
                                            class="tm-notification-link">product updates</a>.</p>
                                    <span class="tm-small tm-text-color-secondary">6h ago.</span>
                                </div>
                            </div>
                            <div class="media tm-notification-item">
                                <div class="tm-gray-circle"><img src="img/notification-02.jpg" alt="Avatar Image" class="rounded-circle"></div>
                                <div class="media-body">
                                    <p class="mb-2"><b>Amara</b> and <b>6 others</b> sent you <a href="#"
                                            class="tm-notification-link">product updates</a>.</p>
                                    <span class="tm-small tm-text-color-secondary">6h ago.</span>
                                </div>
                            </div>
                            <div class="media tm-notification-item">
                                <div class="tm-gray-circle"><img src="img/notification-03.jpg" alt="Avatar Image" class="rounded-circle"></div>
                                <div class="media-body">
                                    <p class="mb-2"><b>Cinthela</b> and <b>6 others</b> sent you <a href="#"
                                            class="tm-notification-link">product updates</a>.</p>
                                    <span class="tm-small tm-text-color-secondary">6h ago.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                
        <footer class="tm-footer row tm-mt-small">
            <div class="col-12 font-weight-light">
                <p class="text-center text-white mb-0 px-4 small">
                    Copyright &copy; <b>2018</b> All rights reserved. 
                    
                    Design: <a rel="nofollow noopener" href="https://templatemo.com" class="tm-footer-link">Template Mo</a>
                </p>
            </div>
        </footer>
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="js/moment.min.js"></script>
    <!-- https://momentjs.com/ -->
    <script src="js/Chart.min.js"></script>
    <!-- http://www.chartjs.org/docs/latest/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script src="js/tooplate-scripts.js"></script>
    <script>
        Chart.defaults.global.defaultFontColor = 'white';
        let ctxLine,
            ctxBar,
            ctxPie,
            optionsLine,
            optionsBar,
            optionsPie,
            configLine,
            configBar,
            configPie,
            lineChart;
        barChart, pieChart;
        // DOM is ready
        $(function () {
            drawLineChart(); // Line Chart
            drawBarChart(); // Bar Chart
            drawPieChart(); // Pie Chart

            $(window).resize(function () {
                updateLineChart();
                updateBarChart();                
            });
        })
    </script>
</body>

</html>