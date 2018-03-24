<!-- Multi Column -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2 align="center">
                    RETURNS
                </h2>
            </div>
            <form action="../php/admin/addReturn.php" method="post">
                <table class="table">
                    <thead class="text-primary">
                    <th style="width: 25%;">Office</th>
                    <th>Item</th>
                    <th style="width: 8%;">Unit</th>
                    <th style="20%">Reason</th>
                    <th style="width: 8%;">Quantity</th>
                    <th style="width: 20%;">Status</th>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                        <select class="form-control" name="office">
                            <?php
                            require '../../db.php';
                            $sql = "SELECT id,office FROM offices";
                            $res = $conn->query($sql);

                            if($res){
                                while ($row = $res->fetch_assoc()){
                                    echo "<option value=' " .$row['id']  . "'>" . $row['office'] . "</option>";
                                }
                            }
                            ?>
                        </select>
                        </td>
                        <td>
                            <select name="item" class="form-control">
                            <?php
                            require '../../db.php';
                            $sql = "SELECT description FROM items";
                            $res = $conn->query($sql);

                            if($res){
                                while ($row = $res->fetch_assoc()){
                                    echo "<option value=' " .$row['description']  . "'>" . $row['description'] . "</option>";
                                }
                            }
                            ?>
                            </select>
                        </td>
                        <td>
                            <select class="form-control">
                                <?php
                                require '../../db.php';
                                $sql = "SELECT units FROM units";
                                $res = $conn->query($sql);

                                if($res){
                                    while ($row = $res->fetch_assoc()){
                                        echo "<option>" . $row['units'] . "</option>";
                                    }
                                }
                                ?>
                            </select>
                        </td>
                        <td>
                            <input name="res" class="form-control" type="text" required>
                        </td>
                        <td>
                            <input name="quantity" class="form-control" onkeypress="return isNumberKey(event)" type="number" required>
                        </td>
                        <td>
                            <select name="status" class="form-control" >
                                <option>Usable</option>
                                <option>Unusable</option>
                            </select>
                        </td>

                    </tr>
                    </tbody>
                </table>
                <div class="modal-footer">
                    <div class="text-center">


                        <input type="submit" value="Add" class="btn btn-primary " id="submitD">


                        <a href="../admin/returns.php" class="btn btn-primary pull-right">Cancel</a>

                        <br>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- #END# Multi Column -->