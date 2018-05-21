<?php
    session_start();
?>
<div class="body">
<div class="col-md-12">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="title text-center">Edit Item</h4>
        </div>
        <hr>
        <div class="card-content table-responsive">
            <?php
            $id = $_GET['num'];
            echo "<form action=" . '../php/admin/itemUpdate2.php?ii='.$id . " " . "method='post' >";

            ?>
                <table class="table">
                    <thead class="text-primary">
                    <th>CATEGORY</th>
                    <th>ACCT-SN</th>
                    <th>PGSO-SN</th>
                    <th>DESCRIPTION</th>
                    <th>UOM</th>
                    <th>BRAND</th>
                    <th>CURRENT QUANTITY</th>
                    <th>UNIT COST</th>
                    <th>SUPPLIER</th>
                    <th>EXPIRATION DATE</th>
                    </thead>
                    <tbody>
                        <tr>

                            <td>
                                <?php
                                require '../../db.php';
                                $a = $_GET['num'];

                                $sql = "SELECT categoryNo FROM items WHERE itemID = '$a'";
                                $res = $conn->query($sql);
                                $r = $res->fetch_row();


                                $sql = "SELECT DISTINCT categoryNo FROM items";
                                $resss = $conn->query($sql);

                                echo "<select name='category' class='form-control'>";
                                if($conn->query($sql)){
                                    echo "<option selected> " . $r[0] . "</option>";
                                    while ($row = $resss->fetch_assoc()){
                                        echo "<option>" . $row['categoryNo'] . "</option>";
                                    }
                                }
                                echo "</select>";
                                ?>
                            </td>
                            <td>
                                <?php
                                require '../../db.php';
                                $a = $_GET['num'];

                                $sql = "SELECT acctSn FROM items WHERE itemID = '$a'";
                                $res = $conn->query($sql);
                                $r = $res->fetch_row();

                                echo "<input name='acct' placeholder='ACCT-SN' class='form-control' type='text' value='" . $r[0] . "' required>";
                                ?>


                            </td>
                            <td>
                                <?php
                                require '../../db.php';
                                $a = $_GET['num'];

                                $sql = "SELECT pgsoSn FROM items WHERE itemID = '$a'";
                                $res = $conn->query($sql);
                                $r = $res->fetch_row();

                                echo "<input name='pgso' placeholder='PGSO-SN' class='form-control' type='text' value='" . $r[0] . "' required>";
                                ?>
                            </td>
                            <td>
                                <?php
                                require '../../db.php';
                                $a = $_GET['num'];

                                $sql = "SELECT description FROM items WHERE itemID = '$a'";
                                $res = $conn->query($sql);
                                $r = $res->fetch_row();

                                echo "<input name='description' placeholder='description' class='form-control' type='text' value='" . $r[0] . "' required>";
                                ?>
                            </td>
                            <td>
                                <?php
                                require '../../db.php';
                                $a = $_GET['num'];

                                $sql = "SELECT unitID FROM items WHERE itemID = '$a'";
                                $res = $conn->query($sql);
                                $r = $res->fetch_row();

                                $sql = "SELECT unitName,unitID FROM units WHERE unitID = '$r[0]'";
                                $ress = $conn->query($sql);
                                $rr =$ress->fetch_row();

                                $sql = "SELECT unitName,unitID FROM units";
                                $resss = $conn->query($sql);

                                echo "<select name='unit'   class='form-control'>";
                                if($conn->query($sql)){
                                    echo "<option value='" . $rr[1] . "' selected> " . $rr[0] . "</option>";
                                    while ($row = $resss->fetch_assoc()){
                                        echo "<option value='". $row['unitID']."'>" . $row['unitName'] . "</option>";
                                    }
                                }
                                echo "</select>";
                                ?>
                            </td>
                            <td>
                                <?php
                                require '../../db.php';
                                $a = $_GET['num'];

                                $sql = "SELECT brand FROM items WHERE itemID = '$a'";
                                $res = $conn->query($sql);
                                $r = $res->fetch_row();

                                echo "<input name='brand' placeholder='brand' class='form-control' type='text' value='" . $r[0] . "' required>";
                                ?>
                            </td>
                            <td>
                                <?php
                                require '../../db.php';
                                $a = $_GET['num'];

                                $sql = "SELECT currentQuantity FROM inventory WHERE itemID = '$a'";
                                $res = $conn->query($sql);
                                $r = $res->fetch_row();

                                echo "<input type='number' placeholder='starting quantity' value = '" .$r[0] . "' id = 'quantity' onkeydown='NumberOnly();' onkeyup='checkNumber()' name = 'sQuantity' class='form-control'>";
                                ?>


                            </td>
                            <td>
                                <?php
                                require '../../db.php';
                                $a = $_GET['num'];

                                $sql = "SELECT unitCost FROM items WHERE itemID = '$a'";
                                $res = $conn->query($sql);
                                $r = $res->fetch_row();

                                echo "<input type='number' placeholder='starting quantity' value = '" .$r[0] . "' id = 'quantity' onkeydown='NumberOnly2();' onkeyup='checkNumber2()' name = 'unitCost' class='form-control'>";
                                ?>


                            </td>
                            <td>
                                <?php
                                require '../../db.php';
                                $a = $_GET['num'];

                                $sql = "SELECT supplierID FROM items WHERE itemID = '$a'";
                                $res = $conn->query($sql);
                                $r = $res->fetch_row();

                                $sql = "SELECT supplierName,supplierID FROM suppliers WHERE supplierID = '$r[0]'";
                                $ress = $conn->query($sql);
                                $rr = $ress->fetch_row();

                                $sql = "SELECT supplierName,supplierID FROM suppliers";
                                $rz = $conn->query($sql);

                                echo "<select class ='form-control' name='supplier'>";
                                echo "<option value=' " . $rr[1] . "' selected>" . $rr[0] . "</option>";
                                while ($row = $rz->fetch_assoc()){
                                    echo "<option value='" . $row['supplierID']."'>" . $row['supplierName'] . "</option>";
                                }
                                echo "</select>";
                                ?>
                            </td>
                            <td>
                                <?php
                                require '../../db.php';
                                $a = $_GET['num'];

                                $sql = "SELECT expirationDate FROM items WHERE itemID = '$a'";
                                $ress = $conn->query($sql);
                                $rr = $ress->fetch_row();

                                echo "<input type='date' value = '" .$rr[0] . "'  name = 'expiration' class='form-control'>";
                                ?>


                            </td>
                        </tr>
                    </tbody>
                </table>

                <div class="modal-footer">
                    <div class="text-center">


                        <input type="submit" value="UPDATE" class="btn btn-primary " id="submitD">

                        <?php
                        $temp = $_SESSION['temp'];
                        echo "<a href='../admin/$temp' class='btn btn-danger pull-right' >CANCEL</a>";
                        ?>
                        <br>
                    </div>
                </div>

            </form>


        </div>
    </div>
</div>
</div>






