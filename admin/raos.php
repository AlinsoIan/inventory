<?php
session_start();
if(!isset($_SESSION['username'])){
    $m="Please Login First";

    echo "<script type='text/javascript'>
    alert('$m');
    window.location.replace('../index.html');
    </script>";
}
if($_SESSION['type'] == "user"){
    session_destroy();
    $m="Unauthorized Access";
    echo "<script type='text/javascript'>
    alert('$m');
    window.location.replace('../index.html');
    </script>";
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Reports: RAOS</title>
    <!-- Favicon-->
    <link rel="icon" href="../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="../css/icons2.css" rel="stylesheet" type="text/css">
    <link href="../css/icons.css" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="../plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="../plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="../plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- JQuery DataTable Css -->
    <link href="../plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

    <!-- Custom Css -->
    <link href="../css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="../css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-blue">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="preloader">
            <div class="spinner-layer pl-red">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
        <p>Please wait...</p>
    </div>
</div>
<!-- #END# Page Loader -->

<!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="dashboard.php"><h4>General Services Office</h4></a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="../php/logout.php">
                        <h4>Logout</h4>
                        </a>
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
                    <li class="header"><h3>
                        <?php
                        echo strtoupper($_SESSION['username']);
                        ?>
                    </h3>
                </li>

                <li>
                    <a href="dashboard.php">
                        <i class="material-icons">dashboard</i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="accounts.php">
                        <i class="material-icons">people</i>
                        <span>Accounts</span>
                    </a>
                </li>
                <li>
                    <a href="issuance.php">
                        <i class="material-icons">store_mall_directory</i>
                        <span>Issuance</span>
                    </a>
                </li>
                <li>
                    <a href="reorder.php">
                        <i class="material-icons">error</i>
                        <span>Re-order</span>
                    </a>
                </li>
                <li>
                    <a href="supplier.php">
                        <i class="material-icons">local_shipping</i>
                        <span>Suppliers</span>
                    </a>
                </li>
                <li>
                    <a href="ppmp.php">
                        <i class="material-icons">event_note</i>
                        <span>PPMP</span>
                    </a>
                </li>
                
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">assignment</i>
                        <span>Items</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="items.php"><strong>Category 1</strong></a>
                        </li>
                        <li>
                            <a href="two.php"><strong>Category 2</strong></a>
                        </li>
                        <li>
                            <a href="three.php"><strong>Category 3</strong></a>
                        </li>
                        <li>
                            <a href="four.php"><strong>Category 4</strong></a>
                        </li>
                        <li>
                            <a href="five.php"><strong>Category 5</strong></a>
                        </li>

                    </ul>
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
                    <a href="iar.php">
                        <i class="material-icons">event_note</i>
                        <span>IAR</span>
                    </a>
                </li>
                <li>
                    <a href="toexpire.php">
                        <i class="material-icons">assignment</i>
                        <span>To-Expire</span>
                    </a>
                </li>
                <li>
                    <a href="returns.php">
                        <i class="material-icons">event_note</i>
                        <span>Returns</span>
                    </a>
                </li>
                <li class="active">
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">view_list</i>
                        <span>Reports</span>
                    </a>
                    <ul class="ml-menu">
                        <li class="active">
                            <a href="raos.php"><strong>RAOS</strong></a>
                        </li>
                        <li>
                            <a href="rosi.php"><strong>ROSI</strong></a>
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
                        <i class="material-icons">pie_chart</i>
                        <span>Settings</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="offices.php">Offices</a>
                        </li>
                        <li>
                                <a href="contingency.php">Contingency</a>
							</li>
                    </ul>
                </li>
			</ul>

        </div>
        <!-- #Menu -->

    </aside>
    <!-- #END# Left Sidebar -->

</section>

    <section class="content">
        <div class="container-fluid">

            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                RAOS EXPORTABLE TABLE
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">

                                    <thead>
                                    <tr>
                                        <th>Category</th>
                                        <th>Acct-Sn</th>
                                        <th>Pgso-Sn</th>
                                        <th>Description</th>
                                        <th>Unit</th>
                                        <th>Starting Quantity</th>
                                        <th>Unit Cost</th>
                                        <th>Brand</th>
                                        <th>Order Point</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    <?php
                                    $conn = new mysqli("localhost","root","","inventory");
                                    if(!$conn){
                                        echo "Error Connecting to database !" . $conn->error;
                                    }

                                    $sql = "SELECT * FROM items";
                                    $res = $conn->query($sql);

                                    if($res){
                                        while($row = $res->fetch_assoc()){
                                            echo "<tr>"
                                                . "<td>" . $row['category'] ."</td>"
                                                . "<td>" . $row['acctSn'] ."</td>"
                                                . "<td>" . $row['pgsoSn'] ."</td>"
                                                . "<td>" . $row['description'] ."</td>"
                                                . "<td>" . $row['unit'] ."</td>"
                                                . "<td>" . $row['startingQuantity'] ."</td>"
                                                . "<td>" . $row['unitCost'] ."</td>"
                                                . "<td>" . $row['brand'] ."</td>"
                                                . "<td>" . $row['orderPoint'] ."</td>"
                                                . "</tr>";
                                        }

                                    }

                                    ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->
        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="../plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="../plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../plugins/node-waves/waves.js"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="../plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="../plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="../plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="../plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="../plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="../plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="../plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="../plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="../plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

    <!-- Custom Js -->
    <script src="../js/admin.js"></script>
    <script src="../js/pages/tables/jquery-datatable.js"></script>

    <!-- Demo Js -->
    <script src="../js/demo.js"></script>
</body>

</html>
