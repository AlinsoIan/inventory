<!-- Multi Column -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2 align="center">
                    EDIT OFFICE
                </h2>
            </div>

            <?php
            $id = $_GET['num'];
            echo "<form action=" . '../php/admin/updateOffice.php?ii='.$id . " " . "method='post' >";

            ?>
                <div class="body">
                    <div class="row clearfix">
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="form-line">
                                    <label>Office Name</label>
                                    <?php
                                    $i = $_GET['num'];
                                    require '../db.php';
                                    $sql = "SELECT name FROM office where id = '$i'";
                                    $res = $conn->query($sql);
                                    $r = $res->fetch_row();
                                    echo "<input type='text' placeholder='$r[0]' name='offname' class='form-control' >";
                                    ?>
                                </div>
                                
                                </div>
                            </div>
                        </div>
                    <div class="row clearfix">
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="form-line">
                                    <label>Abbreviation</label>
                                    <?php
                                    $i = $_GET['num'];
                                    require '../db.php';
                                    $sql = "SELECT abbr FROM office where id = '$i'";
                                    $res = $conn->query($sql);
                                    $r = $res->fetch_row();
                                    echo "<input type='text' placeholder='$r[0]' name='abbrev' class='form-control' >";
                                    ?>
                                </div>
                                
                                </div>
                            </div>
                        </div>

                    <div class="row clearfix">
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="form-line">
                                    <label>FPP</label>
                                    <?php
                                    $i = $_GET['num'];
                                    require '../db.php';
                                    $sql = "SELECT fpp FROM office where id = '$i'";
                                    $res = $conn->query($sql);
                                    $r = $res->fetch_row();
                                    echo "<input type='text' placeholder='$r[0]' name='fpp' class='form-control' >";
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row clearfix">
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="form-line">
                                    <label>RC CODE</label>
                                    <?php
                                    $i = $_GET['num'];
                                    require '../db.php';
                                    $sql = "SELECT responsibility FROM office where id = '$i'";
                                    $res = $conn->query($sql);
                                    $r = $res->fetch_row();
                                    echo "<input type='text' placeholder='$r[0]' name='rccode' class='form-control' >";
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row clearfix">
                        <div class="col-md-6">
                            <div class="form-group">
                            <div class="text-center">
                                <input type="submit" class="btn btn-primary btn-lg waves-effect" value="UPDATE">
                                <a href="../admin/offices.php" class="btn btn-primary btn-lg waves-effect">CLOSE</a>
                            </div>
                            </div>
                        </div>

                        
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>
<!-- #END# Multi Column -->