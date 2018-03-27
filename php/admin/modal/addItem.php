<div class="body">
<div class="col-md-12">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="title text-center">Add Item</h4>
        </div>
        <hr>
        <div class="card-content table-responsive">
            <form action="../php/admin/addItem.php" method="post">
                <table class="table">
                    <thead class="text-primary">
                    <th>ACCT-SN</th>
                    <th>PGSO-SN</th>
                    <th>ITEM DESCRIPTION</th>
                    <th>UOM</th>
                    <th>BRAND</th>
                    <th style="width: 10px">STARTING QUANTITY</th>
                    <th>UNIT COST</th>
                    <th>SUPPLIER</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <input name="acct"  class="form-control" type="text" required style="width:120px;">

                            </td>
                            <td>
                                <input type="text " name = "pgso" class="form-control" required style="width:120px;">
                            </td>
                            <td>
                                <input type="text"  name = "description" class="form-control" style="width:350px;">
                            </td>
                            <td>
                                <select class="form-control" name="unit" style="width: 100px">
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
                                <input type="text"  name = "brand" style="width:150px;" class="form-control">
                            </td>
                            <td>
                                <input type="number" onkeypress="return isNumberKey(event)" min ="1"  style="width:100px;" id = "quantity"  name = "sQuantity" class="form-control">
                            </td>
                            <td>
                                <input type="number" onkeypress="return isNumberKey(event)"  style="width:120px;" id = "quantity2"  name = "unitCost" class="form-control">
                            </td>
                            <td>
                                <select class="form-control" name="supplier" style="width:150px">
                                <?php
                                    require '../../db.php';
                                    $sql = "SELECT supplierName FROM suppliers";
                                    $res = $conn->query($sql);

                                    if($res){
                                        while ($row = $res->fetch_assoc()){
                                            echo "<option>" . $row['supplierName'] . "</option>";
                                        }
                                    }
                                ?>
                                </select>

                            </td>
                        </tr>
                    </tbody>
                </table>

                <div class="modal-footer">
                    <div class="text-center">


                        <input type="submit" value="Add" class="btn btn-primary " id="submitD">

                        <?php
                        session_start();
                        $temp = $_SESSION['temp'];
                        echo "<a href='../admin/$temp' class='btn btn-primary pull-right' >Cancel</a>";
                        ?>
                        <br>
                    </div>
                </div>

            </form>


        </div>
    </div>
</div>
</div>
