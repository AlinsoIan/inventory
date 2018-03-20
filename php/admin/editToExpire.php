<!-- Multi Column -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2 align="center">
                    EDIT TO EXPIRE
                </h2>
            </div>

            <?php
            $id = $_GET['num'];
            echo "<form action=" . '../php/admin/updateToExpire.php?ii='.$id . " " . "method='post' >";

            ?>
                <div class="body">
                    <div class="row clearfix">
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="form-line">
                                    <label>Item Description</label>
                                    <?php
                                    $i = $_GET['num'];
                                    require '../db.php';
                                    $sql = "SELECT description FROM items where id = '$i'";
                                    $res = $conn->query($sql);
                                    $r = $res->fetch_row();
                                    echo "<input type='text' placeholder='$r[0]' name='des' class='form-control' >";
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="form-line">
                                    <label>Brand</label>
                                    <?php
                                    $i = $_GET['num'];
                                    require '../db.php';
                                    $sql = "SELECT brand FROM items where id = '$i'";
                                    $res = $conn->query($sql);
                                    $r = $res->fetch_row();
                                    echo "<input type='text' placeholder='$r[0]' name='brand' class='form-control' >";
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="form-line">
                                    <label>Quantity</label>
                                    <?php
                                    $i = $_GET['num'];
                                    require '../db.php';
                                    $sql = "SELECT startingQuantity FROM items where id = '$i'";
                                    $res = $conn->query($sql);
                                    $r = $res->fetch_row();
                                    echo "<input type='text' placeholder='$r[0]' name='startingQuantity' class='form-control' >";
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="form-line">
                                    <label>Expiration Date</label>
                                    <?php
                                    $i = $_GET['num'];
                                    require '../db.php';
                                    $sql = "SELECT expirationDate FROM items where id = '$i'";
                                    $res = $conn->query($sql);
                                    $r = $res->fetch_row();
                                    echo "<input type='text' placeholder='$r[0]' name='expirationDate' class='form-control' >";
                                    ?>
                                </div>
                            </div>
                        </div>

                        
                        <div class="text-center">
                            <input type="submit" class="btn btn-primary btn-lg waves-effect" value="UPDATE">
                            <a href="../admin/toexpire.php" class="btn btn-primary btn-lg waves-effect">CLOSE</a>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>
<!-- #END# Multi Column -->