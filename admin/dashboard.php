<?php
session_start();


if(!isset($_SESSION['username'])){
    $m="Please Login First";

    echo "<script type='text/javascript'>
    alert('$m');
    window.location.replace(index.php);    
    </script>";
}
if($_SESSION['type'] == "user"){
    session_destroy();
    $m="Unauthorized Access";

    echo "<script type='text/javascript'>
    alert('$m');
    window.location.replace('../index.index.php    </script>";
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Dashboard</title>
    <!-- Favicon-->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="../css/icons2.css" rel="stylesheet" type="text/css">
    <link href="../css/icons.css" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="../plugins/bootstrap/css/bootstrap.css" rel="stylesheet">



    <!-- Animation Css -->
    <link href="../plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="../css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="../css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-blue">
<!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header" >
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand"><h4>General Services Office</h4></a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                </li>
                    <li>
                        <a class="navbar-brand">
                            <h4>
                                <?php
                                    echo strtoupper($_SESSION['username']);
                                ?>
                            </h4>
                        </a>
                        <!-- Example single danger button -->
                        <li class="dropdown">
                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                        <i class="material-icons">format_align_justify</i>
                    </a>
                    <ul class="dropdown-menu">

                        <li>
                            <a href="../php/logout.php">
                                <h4>Logout</h4>
                            </a>
                        </li>


                    </ul>
                        

                    </li>
                </ul>
            </div>
        </div>
    </nav>
<!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    
                    <li class="active">
                        <a href="dashboard.php">
                            <i class="material-icons">dashboard</i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="delivery.php">
                            <i class="material-icons">event_note</i>
                            <span>Delivery</span>
                        </a>
                    </li>
                    
                    
                    <li>
                        <a href="ppmp.php">
                            <i class="material-icons">event_note</i>
                            <span>PPMP</span>
                        </a>
                    </li>
                    <li>
                        <a href="issuance.php">
                            <i class="material-icons">store_mall_directory</i>
                            <span>Issuance</span>
                        </a>
                    </li>
                    <li>
                        <a href="returns.php">
                            <i class="material-icons">event_note</i>
                            <span>Returns</span>
                        </a>
                    </li>
                    <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">assignment</i>
                        <span>Inventory</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="items2.php"><strong>Category 1</strong></a>
                        </li>
                        <li>
                            <a href="two2.php"><strong>Category 2</strong></a>
                        </li>
                        <li>
                            <a href="three2.php"><strong>Category 3</strong></a>
                        </li>
                        <li>
                            <a href="four2.php"><strong>Category 4</strong></a>
                        </li>
                        <li>
                            <a href="five2.php"><strong>Category 5</strong></a>
                        </li>
                    </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">view_list</i>
                            <span>Reports</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="raos.php"><strong>RAOS</strong></a>
                            </li>
                            <li>
                                <a href="ssmi.php"><strong>SSMI</strong></a>
                            </li>
                            <li>
                                <a href="stockcard.php"><strong>STOCK CARD</strong></a>
                            </li>
                        </ul>
                    </li>
                    
                        <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">settings</i>
                            <span>Monitor</span>
                        </a>
                        <ul class="ml-menu">
                        <li>
                        <a href="reorder.php">
                            <i class="material-icons">error</i>
                            <span>Re-order</span>
                        </a>
                    </li>
                    <li>
                        <a href="toexpire.php">
                            <i class="material-icons">assignment</i>
                            <span>To-Expire</span>
                        </a>
                    </li>
                    <li>
                    <a href="logs.php">
                        <i class="material-icons">view_list</i>
                        <span>Account Logs</span>
                    </a>
                    </li>
                    <li>
                    <a href="history.php">
                        <i class="material-icons">view_list</i>
                        <span>History</span>
                    </a>
                    </li>
                </ul>
                </li>
                <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">settings</i>
                            <span>Manage</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="accounts.php">
                                    <i class="material-icons">people</i>
                                    <span>Accounts</span>
                                </a>
                            </li>
                            <li>
                                <a href="supplier.php">
                                    <i class="material-icons">local_shipping</i>
                                    <span>Suppliers</span>
                                </a>
                            </li>
                            <li>
                                <a href="offices.php">
                                    <i class="material-icons">location_city</i>
                                    <span>Offices</span>
                                </a>
                            </li>
                        </ul>
                        </li>


            </div>
            <!-- #Menu -->

        </aside>
        <!-- #END# Left Sidebar -->

    </section>

<section class="content">
    <div class="container-fluid">
		
        <div class="row clearfix">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-blue hover-expand-effect">
                    <div class="icon">
                        <a href="items2.php"><i class="material-icons">shopping_cart</i></a>
                    </div>
                    <div class="content">
                        <div class="text">ITEMS</div>
                        <?php

                        require '../php/db.php';
                        $sql = "SELECT COUNT(itemID) FROM items";
                        $res = $conn->query($sql);
                        $r = $res->fetch_row();

                        echo "<div class='number count-to' data-from='0' data-to='$r[0]' data-speed='15' data-fresh-interval='20'>" . $r[0] . "</div>";
                        ?>

                    </div>
                </div>
            </div>
			
			
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-blue hover-expand-effect">
                    <div class="icon">
						<a href="toexpire.php"><i class="material-icons">access_alarm</i> </a>
                    </div>
					
                    <div class="content">
						
                        <div class="text">TO EXPIRE</div>
					
                        <?php

                        require '../php/db.php';
                        $sql = "SELECT COUNT(itemID) FROM items WHERE categoryNo = '2' and adddate(CURRENT_DATE(), INTERVAL 3 Month) >= expirationDate";
                        $res = $conn->query($sql);
                        $r = $res->fetch_row();

                        echo "<div class='number count-to' data-from='0' data-to='$r[0]' data-speed='15' data-fresh-interval='20'>" . $r[0] . "</div>";
                        ?>
                    </div>
                </div>
            </div>
			
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-blue hover-expand-effect">
                    <div class="icon">
						<a href="reorder.php"> <i class="material-icons">remove_shopping_cart</i> </a>
                    </div>
                    <div class="content">
                        <div class="text">REORDER</div>
                        <?php

                        require '../php/db.php';
                        $sql = "SELECT COUNT(itemID) FROM inventory WHERE reorderPoint >= currentQuantity";
                        $res = $conn->query($sql);
                        $r = $res->fetch_row();

                        echo "<div class='number count-to' data-from='0' data-to='$r[0]' data-speed='15' data-fresh-interval='20'>" . $r[0] . "</div>";
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-blue hover-expand-effect">
                    <div class="icon">
						<a href="accounts.php"><i class="material-icons">people</i> </a>
                    </div>
                    <div class="content">
                        <div class="text">USERS</div>
                        <?php

                        require '../php/db.php';
                        $sql = "SELECT COUNT(accountID) FROM accounts where status = 'active'";
                        $res = $conn->query($sql);
                        $r = $res->fetch_row();

                        echo "<div class='number count-to' data-from='0' data-to='$r[0]' data-speed='15' data-fresh-interval='20'>" . $r[0] . "</div>";
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-blue hover-expand-effect">
                    <div class="icon">
						<a href="returns.php"><i class="material-icons">autorenew</i> </a>
                    </div>
                    <div class="content">
                        <div class="text">RETURNS</div>
                         <?php

                        require '../php/db.php';
                        $sql = "SELECT COUNT(returnID) FROM returns";
                        $res = $conn->query($sql);
                        $r = $res->fetch_row();

                         echo "<div class='number count-to' data-from='0' data-to='$r[0]' data-speed='15' data-fresh-interval='20'>" . $r[0] . "</div>";
                         ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-blue hover-expand-effect">
                    <div class="icon">
						<a href="issuance.php"> <i class="material-icons">store_mall_directory</i></a>
                    </div>
                    <div class="content">
                        <div class="text">ISSUANCE</div>
                        <?php

                        require '../php/db.php';
                        $sql = "SELECT COUNT(issuanceID) FROM issuance";
                        $res = $conn->query($sql);
                        $r = $res->fetch_row();

                        echo "<div class='number count-to' data-from='0' data-to='$r[0]' data-speed='15' data-fresh-interval='20'>" . $r[0] . "</div>";
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-blue hover-expand-effect">
                    <div class="icon">
						<a href="supplier.php"> <i class="material-icons">local_shipping</i> </a>
                    </div>
                    <div class="content">
                        <div class="text">SUPPLIERS</div>
                        <?php

                        require '../php/db.php';
                        $sql = "SELECT COUNT(supplierID) FROM suppliers";
                        $res = $conn->query($sql);
                        $r = $res->fetch_row();

                        echo "<div class='number count-to' data-from='0' data-to='$r[0]'' data-speed='15' data-fresh-interval='20'>" . $r[0] . "</div>";
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-blue hover-expand-effect">
                    <div class="icon">
						<a href="offices.php"><i class="material-icons">location_city</i> </a>
                    </div>
                    <div class="content">
                        <div class="text">OFFICES</div>
                        <?php

                        require '../php/db.php';
                        $sql = "SELECT COUNT(officeID) FROM offices";
                        $res = $conn->query($sql);
                        $r = $res->fetch_row();

                        echo "<div class='number count-to' data-from='0' data-to='$r[0]' data-speed='15' data-fresh-interval='20'>" . $r[0] . "</div>";
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Jquery Core Js -->
<script src="../plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap Core Js -->
<script src="../plugins/bootstrap/js/bootstrap.js"></script>


<!-- Waves Effect Plugin Js -->
<script src="../plugins/node-waves/waves.js"></script>

<!-- Sparkline Plugin Js -->
<script src="../plugins/jquery-sparkline/jquery.sparkline.js"></script>

<!-- Custom Js -->
<script src="../js/admin.js"></script>
<script src="../js/pages/charts/sparkline.js"></script>

<!-- Demo Js -->
<script src="../js/demo.js"></script>

</body>

</html>
