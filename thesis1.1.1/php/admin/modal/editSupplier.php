<div class="body">
<div class="col-md-12">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="title text-center">Edit Supplier</h4>
        </div>
        <hr>
        <div class="card-content table-responsive">
            <?php
            $id = $_GET['num'];
            echo "<form action=" . '../php/admin/updateSupplier.php?ii='.$id . " " . "method='post' >";

            ?>
                <table class="table">
                    <thead class="text-primary">
                    <th>Supplier</th>
                    <th>Tin Number</th>
                    <th>PO Number</th>
                    <th>PO Date</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <?php
                                require '../../db.php';
                                $a = $_GET['num'];

                                $sql = "SELECT supplierName FROM suppliers WHERE id = '$a'";
                                $res = $conn->query($sql);
                                $r = $res->fetch_row();
                                echo "<input name='supplierName' value='" . $r[0] . "' class='form-control' type='text' required>";

                                ?>
                            </td>
                            <td>
                                <?php
                                require '../../db.php';
                                $a = $_GET['num'];

                                $sql = "SELECT tinNumber FROM suppliers WHERE id = '$a'";
                                $res = $conn->query($sql);
                                $r = $res->fetch_row();


                                echo "<input name='tin' value='" . $r[0] . "' class='form-control' type='text' required>";

                                ?>
                            </td>
                            <td>
                                <?php
                                require '../../db.php';
                                $a = $_GET['num'];

                                $sql = "SELECT poNumber FROM suppliers WHERE id = '$a'";
                                $res = $conn->query($sql);
                                $r = $res->fetch_row();


                                echo "<input name='poNumber' value='" . $r[0] . "' class='form-control' type='text' required>";

                                ?>


                            </td>
                            <td>
                                <?php
                                require '../../db.php';
                                $a = $_GET['num'];

                                $sql = "SELECT poDate FROM suppliers WHERE id = '$a'";
                                $res = $conn->query($sql);
                                $r = $res->fetch_row();


                                echo "<input name='poDate' value='" . $r[0] . "' class='form-control' type='text' required>";

                                ?>
                            </td>



                        </tr>
                    </tbody>
                </table>

                <div class="modal-footer">
                    <div class="text-center">


                        <input type="submit" value="Update" class="btn btn-primary " id="submitD">


                        <a href="../admin/supplier.php" class="btn btn-primary pull-right">Cancel</a>

                        <br>
                    </div>
                </div>

            </form>


        </div>
    </div>
</div>
</div>






