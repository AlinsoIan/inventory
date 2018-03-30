
<div class="container-fluid">
    <!-- Basic Examples -->
    <div class="row clearfix">
        <div class="col-lg-12 ">
            <div class="card">
                <div class="header">
                    <h2 class="text-center">ITEM INFORMATION</h2>
                </div>
                <div class="body">
                    <div class="body text-center">
                        <div class="row">
                            <div class="col-md-3 ">
                                <p class="text-center">Item Description</p>
                                <?php
                                $i = $_GET['num'];
                                require '../../db.php';
                                $sql = "SELECT description FROM items WHERE itemID = '$i'";
                                $res = $conn->query($sql);
                                $r = $res->fetch_row();
                                echo "<input type='text' value='$r[0]' name='first' class='form-control' disabled>";
                                ?>
                            </div>
                            <div class="col-md-3 ">
                                <p class="text-center">Item Unit</p>
                                <?php
                                $i = $_GET['num'];
                                require '../../db.php';
                                $sql = "SELECT unitName FROM items JOIN units ON items.unitID = units.unitID  WHERE itemID = '$i'";
                                $res = $conn->query($sql);
                                $r = $res->fetch_row();
                                echo "<input type='text' value='$r[0]' name='first' class='form-control' disabled>";
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="body table-responsive">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                            <tr>
                                <th>Current Quantity</th>
                                <th>Quantity</th>
                                <th>Status</th>
                                <th>Latest Quantity</th>
                                <th>Date</th>
                            </tr>
                            </thead>

                            <tbody>
                            <?php
                            require '../../db.php';

                            $a = $_GET['num'];

                            $sql = "SELECT currentQuantity,quantity,status,latestQuantity,date,itemsrecordsID FROM itemrecords JOIN items ON itemrecords.itemID = items.itemID
                                                    WHERE itemrecords.itemID = '$a' ORDER BY itemrecordsID ASC";
                            $res = $conn->query($sql);
                            if($res){
                                while($row = $res->fetch_assoc()){
                                    echo "<tr>".
                                        "<td>" . $row['currentQuantity'] ."</td>".
                                        "<td>" . $row['quantity'] ."</td>".
                                        "<td>" . $row['status'] ."</td>".
                                        "<td>" . $row['latestQuantity'] ."</td>".
                                        "<td>" . $row['date'] ."</td>".
                                        "</tr>";
                                }
                            }

                            ?>
                            </tbody>
                        </table>

                        <?php
                        session_start();
                        $temp = $_SESSION['temp'];
                        echo "<a href='../admin/$temp' class='btn btn-primary pull-right' >Close</a>";

                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Basic Examples -->
</div>


<!-- Jquery Core Js -->
<script src="../plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap Core Js -->
<script src="../plugins/bootstrap/js/bootstrap.js"></script>


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

<script src="../js/custom.js"></script>