<div class="body">
<div class="col-md-12">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="title text-center">View Item</h4>
        </div>
        <hr>
        <div class="card-content table-responsive">
            <?php
            $id = $_GET['num'];
            echo "<form action=" . '../php/admin/itemUpdate.php?ii='.$id . " " . "method='post' >";

            ?>
                <table class="table">
                    <thead class="text-primary">
                    <th>CATEGORY</th>
                    <th>ACCT-SN</th>
                    <th>PGSO-SN</th>
                    <th>DESCRIPTION</th>
                    <th data-toggle="tooltip" title="Unit of Measurement">UOM</th>
                    <th>BRAND</th>
                    <th>CURRENT QUANTITY</th>
                    <th>UNIT COST</th>
                    <th>SUPPLIER</th>
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

                                echo "<input disabled name='category' placeholder='category' class='form-control' type='text' value='" . $r[0] . "' required>";
                                ?>


                            </td>
                            <td>
                                <?php
                                require '../../db.php';
                                $a = $_GET['num'];

                                $sql = "SELECT acctSn FROM items WHERE itemID = '$a'";
                                $res = $conn->query($sql);
                                $r = $res->fetch_row();

                                echo "<input disabled name='acct' placeholder='ACCT-SN' class='form-control' type='text' value='" . $r[0] . "' required>";
                                ?>


                            </td>
                            <td>
                                <?php
                                require '../../db.php';
                                $a = $_GET['num'];

                                $sql = "SELECT pgsoSn FROM items WHERE itemID = '$a'";
                                $res = $conn->query($sql);
                                $r = $res->fetch_row();

                                echo "<input disabled name='pgso' placeholder='PGSO-SN' class='form-control' type='text' value='" . $r[0] . "' required>";
                                ?>
                            </td>
                            <td>
                                <?php
                                require '../../db.php';
                                $a = $_GET['num'];

                                $sql = "SELECT description FROM items WHERE itemID = '$a'";
                                $res = $conn->query($sql);
                                $r = $res->fetch_row();

                                echo "<input disabled name='description' placeholder='description' class='form-control' type='text' value='" . $r[0] . "' required>";
                                ?>
                            </td>
                            <td>
                                <?php
                                require '../../db.php';
                                $a = $_GET['num'];

                                $sql = "SELECT unitID FROM items WHERE itemID = '$a'";
                                $res = $conn->query($sql);
                                $r = $res->fetch_row();

                                $sql = "SELECT unitName FROM units WHERE unitID = '$r[0]'";
                                $ress = $conn->query($sql);
                                $rr =$ress->fetch_row();

                                echo "<input disabled name='unit'  class='form-control' type='text' value='" . $rr[0] . "' required>";
                                ?>
                            </td>
                            <td>
                                <?php
                                require '../../db.php';
                                $a = $_GET['num'];

                                $sql = "SELECT brand FROM items WHERE itemID = '$a'";
                                $res = $conn->query($sql);
                                $r = $res->fetch_row();

                                echo "<input disabled name='brand' placeholder='brand' class='form-control' type='text' value='" . $r[0] . "' required>";
                                ?>
                            </td>
                            <td>
                                <?php
                                require '../../db.php';
                                $a = $_GET['num'];

                                $sql = "SELECT currentQuantity FROM inventory WHERE itemID = '$a'";
                                $res = $conn->query($sql);
                                $r = $res->fetch_row();

                                echo "<input disabled type='number' placeholder='starting quantity' value = '" .$r[0] . "' id = 'quantity' onkeydown='NumberOnly();' onkeyup='checkNumber()' name = 'sQuantity' class='form-control'>";
                                ?>


                            </td>
                            <td>
                                <?php
                                require '../../db.php';
                                $a = $_GET['num'];

                                $sql = "SELECT unitCost FROM items WHERE itemID = '$a'";
                                $res = $conn->query($sql);
                                $r = $res->fetch_row();

                                echo "<input disabled type='number' placeholder='starting quantity' value = '" .$r[0] . "' id = 'quantity' onkeydown='NumberOnly2();' onkeyup='checkNumber2()' name = 'unitCost' class='form-control'>";
                                ?>


                            </td>
                            <td>
                                <?php
                                require '../../db.php';
                                $a = $_GET['num'];

                                $sql = "SELECT supplierID FROM items WHERE itemID = '$a'";
                                $res = $conn->query($sql);
                                $r = $res->fetch_row();

                                $sql = "SELECT supplierName FROM suppliers WHERE supplierID = '$r[0]'";
                                $ress = $conn->query($sql);
                                $rr = $ress->fetch_row();

                                echo "<input disabled type='text' value = '" .$rr[0] . "'  name = 'supplier' class='form-control'>";
                                ?>


                            </td>
                        </tr>
                    </tbody>
                </table>

                <div class="modal-footer">
                    <div class="text-center">


                        <?php
                        session_start();
                        $temp = $_SESSION['temp'];
                        echo "<a href='../user/$temp' class='btn btn-primary pull-right' >CANCEL</a>";
                        ?>
                        <br>
                    </div>
                </div>

            </form>


        </div>
    </div>
</div>
</div>






