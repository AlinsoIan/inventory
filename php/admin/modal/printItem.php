
    <div class="container-fluid">

        <!-- Exportable Table -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Print Item
                        </h2>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">

                                <thead>
                                <tr>
                                    <th>Beginning Balance</th>
                                    <th>RIS No.</th>
                                    <th>IAR No.</th>
                                    <th>Receipt Quantity</th>
                                    <th>Receipt Unit Cost</th>
                                    <th>Receipt Supplier</th>
                                    <th>Issuance Quantity</th>
                                    <th>Issuance Unit Cost</th>
                                    <th>Issuance Office</th>
                                    <th>Balance Quantity</th>
                                    <th>Balance Brand</th>
                                    <th>Balance Expiry Date</th>
                                    <th>Running Balance</th>

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
        <div class="modal-footer text-center">
                    <a href="../admin/stockcard.php" class="btn btn-danger pull-right">CLOSE</a>
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