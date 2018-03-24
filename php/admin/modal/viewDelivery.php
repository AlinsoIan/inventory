<!-- Multi Column -->
<div class="row clearfix">
    <div class="col-lg-12">
        <div class="modal-body">
            <div class="header">
                <h2 align="center">
                    Delivery Item
                </h2>
            </div>

            <hr style="height:2px;border:none;color:#333;background-color:#333;"/>


            <div class="row clearfix">
                <form action="../php/admin/addDelivery.php" method="post">
                    <table class="table">
                        <thead class="text-primary">
                        <th style="width: 10%">IAR No.</th>
                        <th style="width: 8%">Category</th>
                        <th style="width: 30%;">Item</th>
                        <th style="width: 15%">Unit</th>
                        <th style="width: 14%">Supplier</th>
                        <th style="width: 12%";">Qty</th>
                        <th>Delivery Date</th>

                        </thead>
                        <tbody>
                        <tr>

                            <td>
                                <?php
                                require '../../db.php';
                                $id = $_GET['num'];
                                $sql = "SELECT iarno FROM delivery WHERE id = '$id'";
                                $res = $conn->query($sql);
                                $r = $res->fetch_row();
                                echo "<input type='text' disabled class='form-control' placeholder=' " .$r[0] . "' value = '" .$r[0] . "' name = 'division'  required>";
                                ?>
                            </td>
                            <td>
                                <?php
                                require '../../db.php';
                                $id = $_GET['num'];
                                $sql = "SELECT category FROM delivery JOIN items ON delivery.itemNo = items.id WHERE delivery.id = '$id'";
                                $res = $conn->query($sql);
                                $r = $res->fetch_row();
                                echo "<input type='text' disabled class='form-control' placeholder=' " .$r[0] . "' value = '" .$r[0] . "' name = 'division'  required>";
                                ?>
                            </td>
                            <td>
                                <?php
                                require '../../db.php';
                                $id = $_GET['num'];
                                $sql = "SELECT description FROM delivery JOIN items ON delivery.itemNo = items.id WHERE delivery.id = '$id'";
                                $res = $conn->query($sql);
                                $r = $res->fetch_row();
                                echo "<input type='text' disabled class='form-control' placeholder=' " .$r[0] . "' value = '" .$r[0] . "' name = 'division'  required>";
                                ?>
                            </td>
                            </td>
                            <td>
                                <?php
                                require '../../db.php';
                                $id = $_GET['num'];
                                $sql = "SELECT unit FROM delivery JOIN items ON delivery.itemNo = items.id WHERE delivery.id = '$id'";
                                $res = $conn->query($sql);
                                $r = $res->fetch_row();
                                echo "<input type='text' disabled class='form-control' placeholder=' " .$r[0] . "' value = '" .$r[0] . "' name = 'division'  required>";
                                ?>
                            </td>
                            <td>
                                <?php
                                require '../../db.php';
                                $id = $_GET['num'];
                                $sql = "SELECT supplierName FROM delivery JOIN suppliers ON delivery.supplier_id = suppliers.id WHERE delivery.id = '$id'";
                                $res = $conn->query($sql);
                                $r = $res->fetch_row();
                                echo "<input type='text' disabled class='form-control' placeholder=' " .$r[0] . "' value = '" .$r[0] . "' name = 'division'  required>";
                                ?>
                            </td>


                            <td>
                                <?php
                                require '../../db.php';
                                $id = $_GET['num'];
                                $sql = "SELECT quantity FROM delivery WHERE id = '$id'";
                                $res = $conn->query($sql);
                                $r = $res->fetch_row();
                                echo "<input type='text' disabled class='form-control' placeholder=' " .$r[0] . "' value = '" .$r[0] . "' name = 'division'  required>";
                                ?>
                            </td>
                            <td>

                                <?php
                                require '../../db.php';
                                $id = $_GET['num'];
                                $sql = "SELECT dateT FROM delivery WHERE id = '$id'";
                                $res = $conn->query($sql);
                                $r = $res->fetch_row();
                                echo "<input type='text' disabled class='form-control' placeholder=' " .$r[0] . "' value = '" .$r[0] . "' name = 'division'  required>";
                                ?>
                            </td>
                        </tr>

                        </tbody>

                    </table>

                    <a href="../admin/delivery.php" class="btn btn-danger pull-right">CLOSE</a>

                </form>
            </div>


        </div>
    </div>
    <!-- #END# Multi Column -->

