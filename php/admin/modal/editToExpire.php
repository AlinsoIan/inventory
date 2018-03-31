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
                echo "<form action=" . '../php/admin/itemUpdate.php?ii='.$id . " " . "method='post' >";

                ?>
                <table class="table">
                    <thead class="text-primary">
                    <th>CATEGORY</th>
                    <th>ACCT-SN</th>
                    <th>PGSO-SN</th>
                    <th>DESCRIPTION</th>
                    <th>UOM</th>
                    <th>BRAND</th>
                    <th>STARTING QUANTITY</th>
                    <th>UNIT COST</th>
                    <th>EXPIRATION DATE</th>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            <?php
                            require '../../db.php';
                            $a = $_GET['num'];

                            $sql = "SELECT category FROM items WHERE id = '$a'";
                            $res = $conn->query($sql);
                            $r = $res->fetch_row();

                            echo "<input disabled name='category' placeholder='category' class='form-control' type='text' value='" . $r[0] . "' required>";
                            ?>


                        </td>
                        <td>
                            <?php
                            require '../../db.php';
                            $a = $_GET['num'];

                            $sql = "SELECT acctSn FROM items WHERE id = '$a'";
                            $res = $conn->query($sql);
                            $r = $res->fetch_row();

                            echo "<input disabled name='acct' placeholder='ACCT-SN' class='form-control' type='text' value='" . $r[0] . "' required>";
                            ?>


                        </td>
                        <td>
                            <?php
                            require '../../db.php';
                            $a = $_GET['num'];

                            $sql = "SELECT pgsoSn FROM items WHERE id = '$a'";
                            $res = $conn->query($sql);
                            $r = $res->fetch_row();

                            echo "<input disabled name='pgso' placeholder='PGSO-SN' class='form-control' type='text' value='" . $r[0] . "' required>";
                            ?>
                        </td>
                        <td>
                            <?php
                            require '../../db.php';
                            $a = $_GET['num'];

                            $sql = "SELECT description FROM items WHERE id = '$a'";
                            $res = $conn->query($sql);
                            $r = $res->fetch_row();

                            echo "<input disabled name='description' placeholder='description' class='form-control' type='text' value='" . $r[0] . "' required>";
                            ?>
                        </td>
                        <td>
                            <?php
                            require '../../db.php';
                            $a = $_GET['num'];

                            $sql = "SELECT unit FROM items WHERE id = '$a'";
                            $res = $conn->query($sql);
                            $r = $res->fetch_row();

                            echo "<input disabled name='unit'  class='form-control' type='text' placeholder='" . $r[0] . "' required>";
                            ?>
                        </td>
                        <td>
                            <?php
                            require '../../db.php';
                            $a = $_GET['num'];

                            $sql = "SELECT brand FROM items WHERE id = '$a'";
                            $res = $conn->query($sql);
                            $r = $res->fetch_row();

                            echo "<input disabled name='brand'  class='form-control' type='text' placeholder='" . $r[0] . "' required>";
                            ?>
                        </td>
                        <td>
                            <?php
                            require '../../db.php';
                            $a = $_GET['num'];

                            $sql = "SELECT startingQuantity FROM inventory WHERE id = '$a'";
                            $res = $conn->query($sql);
                            $r = $res->fetch_row();

                            echo "<input type='number'  value = '" .$r[0] . "' id = 'quantity' onkeydown='NumberOnly();' onkeyup='checkNumber()' name = 'sQuantity' class='form-control'>";
                            ?>


                            <span id = "confirmMessageAA"></span>
                        </td>
                        <td>
                            <?php
                            require '../../db.php';
                            $a = $_GET['num'];

                            $sql = "SELECT unitCost FROM items WHERE id = '$a'";
                            $res = $conn->query($sql);
                            $r = $res->fetch_row();

                            echo "<input disabled type='number'  placeholder = '" .$r[0] . "' id = 'quantity' onkeydown='NumberOnly2();' onkeyup='checkNumber2()' name = 'unitCost' class='form-control'>";
                            ?>

                        </td>
                        <td>
                            <?php
                            require '../../db.php';
                            $a = $_GET['num'];

                            $sql = "SELECT expirationDate FROM items WHERE id = '$a'";
                            $res = $conn->query($sql);
                            $r = $res->fetch_row();

                            echo "<input type='date'  value = '" .$r[0] . "' id = 'quantity' onkeydown='NumberOnly2();' onkeyup='checkNumber2()' name = 'unitCost' class='form-control'>";
                            ?>

                        </td>
                    </tr>
                    </tbody>
                </table>

                <div class="modal-footer">
                    <div class="text-center">


                        <input type="submit" value="UPDATE" class="btn btn-primary " id="submitD">

                        <?php
                        echo "<a href='../admin/toexpire.php' class='btn btn-primary pull-right' >CLOSE</a>";
                        ?>
                        <br>
                    </div>
                </div>

                </form>


            </div>
        </div>
    </div>
</div>






