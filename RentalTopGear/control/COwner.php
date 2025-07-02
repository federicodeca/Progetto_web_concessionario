<?php

class COwner {




    /**
     * this method is used to check if the owner is logged in, if not it will redirect to the user home  page
     * @return void
     */
    public static function isLogged(): bool {

        $logged= false;
        
        if (session_status() === PHP_SESSION_NONE) {
            USession::getInstance(); //control PHPSESSID , eventually start session
        }

        
        if(USession::isSetSessionElement('owner')) {
            $logged = true; // 
            
        }
        if(!$logged) {
        
        header('Location: /RentalTopGear/User/login'); // Redirect to login page if not logged in
        exit();}

        return $logged;
        
    }

    /**
     * this method is used to show the user profile, if the user is logged in
     * @return void
     */
    public static function getOwnerStatus() {

        if (session_status() === PHP_SESSION_NONE) USession::getInstance();

        $isLogged = USession::isSetSessionElement('owner'); 
        $username = $isLogged ? USession::getElementFromSession('username') : null;

        return [
            'isLogged' => $isLogged,
            'username' => $username,
            'permission' => 'owner'
        ];
    }

    

    /**
     * this method show an home page for the owner, if the owner is logged in
     * @return void
     */
    public static function home() {
    $saleOrders = [];
    $rentOrders = [];

    
    

    $infout=COwner::getOwnerStatus();

    $saleOrders = FPersistentManager::getInstance()->getSaleOrders(ESale::class);
    $rentOrders = FPersistentManager::getInstance()->getRentOrders(ERent::class);




    $rentTotalPerDay = [];
    foreach ($rentOrders as $order) {
        $date = $order->getOrderDate()->format('Y-m-d');
        if (!isset($rentTotalPerDay[$date])) {
            $rentTotalPerDay[$date] = 0;
        }
        $rentTotalPerDay[$date] += $order->getTotalPrice();
        
    }

    $saleTotalPerDay = [];  
    foreach ($saleOrders as $order) {
        $date = $order->getOrderDate()->format('Y-m-d');
        if (!isset($saleTotalPerDay[$date])) {
            $saleTotalPerDay[$date] = 0;
        }
        $saleTotalPerDay[$date] += $order->getPrice();
        
    }

    $view = new VOwner();
    $view->showOwnerHome($saleOrders, $rentOrders,$rentTotalPerDay,$saleTotalPerDay,$infout);

    }


    public static function showRentStatsForPeriod() {
        if (COwner::isLogged()){
            $infout=COwner::getOwnerStatus();
            $view=new VOwner();
            $view->showDateSelection($infout);
        }
    }


    public static function getRentStatsForPeriod() {

        if (COwner::isLogged()) {
            $period = UHTTPMethods::post('period');
            $MonthYear=explode('-', $period);
            $month = (int)$MonthYear[1];
            $year = (int)$MonthYear[0];
          

            $start = new DateTime("$year-$month-01");
            $end = (clone $start)->modify('+1 month');
            
            $rentsPerPeriod=FPersistentManager::getInstance()->getRentsForPeriod($start, $end);
            $rentTotalPerDay = [];
            foreach ($rentsPerPeriod as $order) {
                $date = $order->getOrderDate()->format('Y-m-d');
                if (!isset($rentTotalPerDay[$date])) {
                    $rentTotalPerDay[$date] = 0;
                }
                $rentTotalPerDay[$date] += $order->getTotalPrice();
             
            }

           
            $infout = COwner::getOwnerStatus();
            $view = new VOwner();
            $view->showSelectedPeriodStats($infout,$rentTotalPerDay);
        }
    }

    public static function showSaleStatsForPeriod() {
        if (COwner::isLogged()){
            $infout=COwner::getOwnerStatus();
            $view=new VOwner();
            $view->showDateSelectionSale($infout);
        }
    }

    public static function getNumberOfSalePerPeriod() {
    
        if (COwner::isLogged()) {
            $year= UHTTPMethods::post('year');
            $start = new DateTime("$year-01-01");
            $end = (clone $start)->modify('+1 year');
      
     
            
            $salesPerPeriod=FPersistentManager::getInstance()->getSalesForPeriod($start, $end);
            $salesPerMonth = [];
            $salesPerName = [];
            if(!empty($salesPerPeriod)){
                foreach ($salesPerPeriod as $order) {
                    $date = $order->getOrderDate()->format('Y-m-d');
                    $month = (int)$order->getOrderDate()->format('m');
                    if (!isset($salesPerMonth[$month])) {
                        $salesPerMonth[$month] = 0;
                    }
                    $salesPerMonth[$month] += 1;
                }
                
                $salesPerName['January']=$salesPerMonth[1] ?? 0;
                $salesPerName['February']=$salesPerMonth[2] ?? 0;
                $salesPerName['March']=$salesPerMonth[3] ?? 0; 
                $salesPerName['April']=$salesPerMonth[4] ?? 0;
                $salesPerName['May']=$salesPerMonth[5] ?? 0;
                $salesPerName['June']=$salesPerMonth[6] ?? 0;
                $salesPerName['July']=$salesPerMonth[7] ?? 0;
                $salesPerName['August']=$salesPerMonth[8] ?? 0;
                $salesPerName['September']=$salesPerMonth[9] ?? 0;
                $salesPerName['October']=$salesPerMonth[10] ?? 0;
                $salesPerName['November']=$salesPerMonth[11] ?? 0;
                $salesPerName['December']=$salesPerMonth[12] ?? 0;

                
            }    
            


           
            $infout = COwner::getOwnerStatus();
            $view = new VOwner();
            $view->showCountPerMonth($infout,$salesPerName);
        }
    }
    






}