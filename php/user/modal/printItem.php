<div class="container-fluid">

    <!-- Exportable Table -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2 class="text-center">
                        Stock Card
                    </h2>
                </div>
                <div class="modal-header">
                    <div class="row">
                        <div class="col-md-4">
                            <label>Item Description</label>
                            <?php
                            require '../../db.php';
                            $a = $_GET['num'];

                            $sql = "SELECT description FROM items WHERE itemID = '$a'";
                            $res = $conn->query($sql);
                            $r = $res->fetch_row();

                            echo "<input type='text' disabled='' value='$r[0]' class='form-control'>";
                            ?>
                        </div>
                        <div class="col-md-2 pull-right">
                            <label>Stock Number</label>
                            <?php
                            $a = $_GET['num'];

                            echo "<input type='text' disabled='' value='$a' class='form-control'>";
                            ?>
                        </div>
                        <div class="col-md-2 pull-right">
                            <label>Reorder Point</label>
                            <?php
                            require '../../db.php';
                            $a = $_GET['num'];

                            $sql = "SELECT reorderPoint FROM inventory WHERE itemID = '$a'";
                            $res = $conn->query($sql);
                            $r = $res->fetch_row();

                            echo "<input type='text' disabled='' value='$r[0]' class='form-control'>";
                            ?>
                        </div>
                    </div>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover dataTable js-exportable">

                            <thead>
                            <tr>
                                <th>Date</th>
                                <th>RIS</th>
                                <th>IAR</th>
                                <th>Starting Quantity</th>
                                <th>Delivery</th>
                                <th>Returns</th>
                                <th>Issuance</th>
                                <th>Balance</th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            require '../../db.php';

                            $a = $_GET['num'];

                            $sql = "SELECT recordDate,risNo,iarNo,startingQuantity,deliveryQuantity,returnsQuantity,issuanceQuantity,
                            currentQuantity,status FROM itemrecords WHERE itemID = '$a'";
                            $res = $conn->query($sql);
                            if ($res) {
                                while ($row = $res->fetch_assoc()) {
                                    echo "<tr>" .
                                        "<td>" . $row['recordDate'] . "</td>" .
                                        "<td>" . $row['risNo'] . "</td>" .
                                        "<td>" . $row['iarNo'] . "</td>" .
                                        "<td>" . $row['startingQuantity'] . "</td>" .
                                        "<td>" . $row['deliveryQuantity'] . "</td>" .
                                        "<td>" . $row['returnsQuantity'] . "</td>" .
                                        "<td>" . $row['issuanceQuantity'] . "</td>" .
                                        "<td>" . $row['currentQuantity'] . "</td>" .

                                        "</tr>";
                                }
                            }

                            ?>
                            <tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Exportable Table -->
</div>
<div class="modal-footer text-center">
    <a href="../user/stockcard.php" class="btn btn-danger pull-right">CLOSE</a>
</div>


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