<!-- Multi Column -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2 align="center">
                    RETURNS
                </h2>
            </div>
            <form action="../php/user/addReturn.php" method="post">
                <div class="body">
                <div class="row">
                    <div class="col-md-3">
                        <label>OFFICE</label>
                            <?php
                            require '../../db.php';
                            $i = $_GET['num'];
                            $sql = "SELECT officeName FROM offices JOIN returns ON offices.officeID = returns.officeID 
                                    WHERE returns.returnID = '$i'";
                            $res = $conn->query($sql);
                            $r = $res->fetch_row();

                            echo "<input type = 'text' value='". $r[0] ."' class ='form-control' disabled>";


                            ?>
                    </div>
                </div>
                </div>
                <table class="table">
                    <thead class="text-primary">
                    <th style="width: 8%">Category</th>
                    <th style="width: 30%">Item</th>
                    <th style="20%">Reason</th>
                    <th style="width: 8%;">Quantity</th>
                    <th style="width: 20%;">Status</th>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            <?php
                            require '../../db.php';
                            $i = $_GET['num'];
                            $sql = "SELECT categoryNo FROM items JOIN returns ON items.itemID = returns.itemID 
                                    WHERE returns.returnID = '$i'";
                            $res = $conn->query($sql);
                            $r = $res->fetch_row();

                            echo "<input type = 'text' value='". $r[0] ."' class ='form-control' disabled>";


                            ?>
                        </td>
                        <td>
                            <?php
                            require '../../db.php';
                            $i = $_GET['num'];
                            $sql = "SELECT description FROM items JOIN returns ON items.itemID = returns.itemID 
                                    WHERE returns.returnID = '$i'";
                            $res = $conn->query($sql);
                            $r = $res->fetch_row();

                            echo "<input type = 'text' value='". $r[0] ."' class ='form-control' disabled>";


                            ?>
                        </td>
                        <td>
                            <?php
                            require '../../db.php';
                            $i = $_GET['num'];
                            $sql = "SELECT reason FROM returns WHERE returns.returnID = '$i'";
                            $res = $conn->query($sql);
                            $r = $res->fetch_row();

                            echo "<input type = 'text' value='". $r[0] ."' class ='form-control' disabled>";


                            ?>
                        </td>
                        <td>
                            <?php
                            require '../../db.php';
                            $i = $_GET['num'];
                            $sql = "SELECT itemQuantity FROM returns WHERE returns.returnID = '$i'";
                            $res = $conn->query($sql);
                            $r = $res->fetch_row();

                            echo "<input type = 'text' value='". $r[0] ."' class ='form-control' disabled>";


                            ?>
                        </td>
                        <td>
                            <?php
                            require '../../db.php';
                            $i = $_GET['num'];
                            $sql = "SELECT status FROM returns WHERE returns.returnID = '$i'";
                            $res = $conn->query($sql);
                            $r = $res->fetch_row();

                            echo "<input type = 'text' value='". $r[0] ."' class ='form-control' disabled>";


                            ?>
                        </td>

                    </tr>
                    </tbody>
                </table>
                <div class="modal-footer">
                    <div class="text-center">



                        <a href="../user/returns.php" class="btn btn-primary pull-right">Close</a>

                        <br>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- #END# Multi Column -->
