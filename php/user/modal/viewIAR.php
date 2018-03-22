<!-- Multi Column -->
<div class="row clearfix">
    <div class="col-lg-12">
        <div class="modal-body">
            <div class="header">
                <h2 align="center">
                    INSPECTION AND ACCEPTANCE REPORT
                </h2>
            </div>
            
            <hr style="height:2px;border:none;color:#333;background-color:#333;" />

            
            <div class="row clearfix">
                <form action="../php/user/addIAR.php" method="post">
                    <table class="table">
                       <thead class="text-primary">
                            <th>SUPPLIER</th>
                            <th>IAR NO</th>
                            <th>IAR DATE</th>
                            <th>IAR AMOUNT</th>
                            <th>TOTAL QUANTITY</th>
                            <th>TOTAL ITEMS</th>
                       </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <?php
                                    require '../../db.php';
                                    $a = $_GET['num'];
                                    $sql = "SELECT supplierName FROM suppliers JOIN iar ON suppliers.id = iar.supplier_id WHERE iar.id = '$a'";
                                    $res = $conn->query($sql);
                                    $r = $res->fetch_row();
                                    echo "<input type='text' value='$r[0]' class='form-control' disabled>"
                                    ?>
                                   
                                </td>
                                <td>
                                    <?php
                                    require '../../db.php';
                                    $a = $_GET['num'];
                                    $sql = "SELECT iarno FROM iar WHERE id = '$a'";
                                    $res = $conn->query($sql);
                                    $r = $res->fetch_row();
                                    echo "<input type='text' value='$r[0]' class='form-control' disabled>"
                                    ?>
                                </td>
                                <td>
                                     <?php
                                    require '../../db.php';
                                    $a = $_GET['num'];
                                    $sql = "SELECT iarDate FROM iar WHERE id = '$a'";
                                    $res = $conn->query($sql);
                                    $r = $res->fetch_row();
                                    echo "<input type='text' value='$r[0]' class='form-control' disabled>"
                                    ?>
                                </td>

                                <td>
                                     <?php
                                    require '../../db.php';
                                    $a = $_GET['num'];
                                    $sql = "SELECT amount FROM iar WHERE id = '$a'";
                                    $res = $conn->query($sql);
                                    $r = $res->fetch_row();
                                    echo "<input type='text' value='$r[0]' class='form-control' disabled>"
                                    ?>
                                <td>
                                     <?php
                                    require '../../db.php';
                                    $a = $_GET['num'];
                                    $sql = "SELECT totalQuantity FROM iar WHERE id = '$a'";
                                    $res = $conn->query($sql);
                                    $r = $res->fetch_row();
                                    echo "<input type='text' value='$r[0]' class='form-control' disabled>"
                                    ?>
                                </td>
                                <td>
                                     <?php
                                        require '../../db.php';
                                        $a = $_GET['num'];
                                        $sql = "SELECT totalItems FROM iar WHERE id = '$a'";
                                        $res = $conn->query($sql);
                                        $r = $res->fetch_row();
                                        echo "<input type='text' value='$r[0]' class='form-control' disabled>"
                                        ?>
                                </td>
                            </tr>

                            </tbody>

                    </table>
                        <a href="../user/iar.php" class="btn btn-danger pull-right">CLOSE</a>

                </form>
            </div>



        </div>
</div>
<!-- #END# Multi Column -->

