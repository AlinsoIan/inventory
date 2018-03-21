<!-- Multi Column -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2 align="center">
                    EDIT USER
                </h2>
            </div>

            <?php
            $id = $_GET['num'];
            echo "<form action=" . '../php/admin/updateAccount.php?ii='.$id . " " . "method='post' >";

            ?>
                <div class="body">
                    <div class="row clearfix">
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="form-line">
                                    <label>First Name</label>
                                    <?php
                                    $i = $_GET['num'];
                                    require '../db.php';
                                    $sql = "SELECT firstName FROM accounts where id = '$i'";
                                    $res = $conn->query($sql);
                                    $r = $res->fetch_row();
                                    echo "<input type='text' placeholder='$r[0]' name='first' class='form-control' >";
                                    ?>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="form-line">
                                    <label>Last Name</label>
                                    <?php
                                    $i = $_GET['num'];
                                    require '../db.php';
                                    $sql = "SELECT lastName FROM accounts where id = '$i'";
                                    $res = $conn->query($sql);
                                    $r = $res->fetch_row();
                                    echo "<input type='text' placeholder='$r[0]' name='last' class='form-control' >";
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="form-line">
                                    <label>Username</label>
                                    <?php
                                    $i = $_GET['num'];
                                    require '../db.php';
                                    $sql = "SELECT username FROM accounts where id = '$i'";
                                    $res = $conn->query($sql);
                                    $r = $res->fetch_row();
                                    echo "<input type='text' placeholder='$r[0]' name='username' class='form-control' >";
                                    ?>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="form-line">
                                    <label>User Type</label>
                                    <select name="type" class="form-control">
                                        <option>User</option>
                                        <option>Admin</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="form-line">
                                    <label>Password</label>
                                    <?php
                                    $i = $_GET['num'];
                                    require '../db.php';
                                    $sql = "SELECT password FROM accounts where id = '$i'";
                                    $res = $conn->query($sql);
                                    $r = $res->fetch_row();
                                    echo "<input type='text' placeholder='$r[0]' name='pass' class='form-control' >";
                                    ?>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="form-line">
                                    <label>Confirm Password</label>
                                    <?php
                                    $i = $_GET['num'];
                                    require '../db.php';
                                    $sql = "SELECT password FROM accounts where id = '$i'";
                                    $res = $conn->query($sql);
                                    $r = $res->fetch_row();
                                    echo "<input type='text' placeholder='$r[0]'  class='form-control' >";
                                    ?>
                                </div>
                            </div>
                        </div>

                        <div class="text-center">
                            <input type="submit" class="btn btn-primary btn-lg waves-effect" value="UPDATE">
                            <a href="../admin/accounts.php" class="btn btn-primary btn-lg waves-effect">CLOSE</a>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>
<!-- #END# Multi Column -->