<div class="body">
    <div class="col-md-12">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title text-center">Edit Office</h4>
            </div>
            <hr>
            <div class="card-content table-responsive">
                <?php
                $id = $_GET['num'];
                echo "<form action=" . '../php/admin/updateOffice.php?ii='.$id . " " . "method='post' >";

                ?>
                    <table class="table">
                        <thead class="text-primary">
                        <th>Office</th>
                        <th>Abbr</th>
                        <th>Fpp</th>
                        <th>RC</th>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <?php
                                require '../../db.php';
                                $a = $_GET['num'];
                                $sql = "SELECT office FROM offices WHERE id = '$a'";
                                $res = $conn->query($sql);
                                $r = $res->fetch_row();

                                echo "<input name='name' class='form-control' value='" .$r[0] . "' type='text' required>";
                                ?>
                            </td>
                            <td>
                                <?php
                                require '../../db.php';
                                $a = $_GET['num'];
                                $sql = "SELECT abbr FROM offices WHERE id = '$a'";
                                $res = $conn->query($sql);
                                $r = $res->fetch_row();

                                echo "<input name='abbr' class='form-control' value='" .$r[0] . "' type='text' required>";
                                ?>
                            </td>
                            <td>
                                <?php
                                require '../../db.php';
                                $a = $_GET['num'];
                                $sql = "SELECT fpp FROM offices WHERE id = '$a'";
                                $res = $conn->query($sql);
                                $r = $res->fetch_row();

                                echo "<input name='fpp' class='form-control' value='" .$r[0] . "' type='text' required>";
                                ?>
                            </td>
                            <td>
                                <?php
                                require '../../db.php';
                                $a = $_GET['num'];
                                $sql = "SELECT responsibility FROM offices WHERE id = '$a'";
                                $res = $conn->query($sql);
                                $r = $res->fetch_row();

                                echo "<input name='rc' class='form-control' value='" .$r[0] . "' type='text' required>";
                                ?>
                            </td>

                        </tr>
                        </tbody>
                    </table>

                    <div class="modal-footer">
                        <div class="text-center">


                            <input type="submit" value="Update" class="btn btn-primary " id="submitD">


                            <a href="../admin/offices.php" class="btn btn-primary pull-right">Cancel</a>

                            <br>
                        </div>
                    </div>

                </form>


            </div>
        </div>
    </div>
</div>






