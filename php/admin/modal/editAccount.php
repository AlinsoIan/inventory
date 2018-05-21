<div class="body">
    <div class="col-md-12">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title text-center">Edit Account</h4>
            </div>
            <hr>
            <div class="card-content table-responsive">
                <?php
                $id = $_GET['num'];
                echo "<form action=" . '../php/admin/updateAccount.php?ii='.$id . " " . "method='post' >";

                ?>
                <table class="table">
                    <thead class="text-primary">
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Username</th>
                    <th>password</th>
                    <th>User Type</th>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            <?php
                            require '../../db.php';
                            $a = $_GET['num'];
                            $sql = "SELECT firstName FROM accounts WHERE accountID = '$a'";
                            $res = $conn->query($sql);
                            $r = $res->fetch_row();

                            echo "<input name='firstName' class='form-control' value='" .$r[0] . "' type='text' required>";
                            ?>
                        </td>
                        <td>
                            <?php
                            require '../../db.php';
                            $a = $_GET['num'];
                            $sql = "SELECT lastName FROM accounts WHERE accountID = '$a'";
                            $res = $conn->query($sql);
                            $r = $res->fetch_row();

                            echo "<input name='lastName' class='form-control' value='" .$r[0] . "' type='text' required>";
                            ?>
                        </td>
                        <td>
                            <?php
                            require '../../db.php';
                            $a = $_GET['num'];
                            $sql = "SELECT username FROM accounts WHERE accountID = '$a'";
                            $res = $conn->query($sql);
                            $r = $res->fetch_row();

                            echo "<input name='username' class='form-control' value='" .$r[0] . "' type='text' required>";
                            ?>
                        </td>
                        <td>
                            <?php
                            require '../../db.php';
                            $a = $_GET['num'];
                            $sql = "SELECT password FROM accounts WHERE accountID = '$a'";
                            $res = $conn->query($sql);
                            $r = $res->fetch_row();

                            echo "<input name='pass' class='form-control' value='" .$r[0] . "' type='text' required>";
                            ?>
                        </td>
                        <td>
                            <select name="userType" class="form-control">
                                <option>User</option>
                                <option>Admin</option>
                            </select>
                        </td>

                    </tr>
                    </tbody>
                </table>

                <div class="modal-footer">
                    <div class="text-center">


                        <input type="submit" value="Update" class="btn btn-primary " id="submitD">


                        <a href="../admin/accounts.php" class="btn btn-danger pull-right">CANCEL</a>

                        <br>
                    </div>
                </div>

                </form>


            </div>
        </div>
    </div>
</div>






