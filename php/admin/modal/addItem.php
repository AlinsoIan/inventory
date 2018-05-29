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
                    <th  data-toggle="tooltip" title="Accoutn Serial No." style="width: 8%">ACCT-SN</th>
                    <th  data-toggle="tooltip" title="PGSO Serial No." style="width: 8%">PGSO-SN</th>
                    <th>ITEM DESCRIPTION</th>
                    <th  data-toggle="tooltip" title="Unit of Measurement">UOM</th>
                    <th>STARTING QUANTITY</th>
                    <th>UNIT COST</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <input name="acct"  class="form-control" type="text" required >

                            </td>
                            <td>
                                <input type="text " name = "pgso" class="form-control" required >
                            </td>
                            <td>
                                <input type="text" required  name = "description" class="form-control" >
                            </td>
                            <td>
                                <select class="form-control" name="unit" >
                                    <?php
                                    require '../../db.php';
                                    $sql = "SELECT unitName FROM units";
                                    $res = $conn->query($sql);

                                    if($res){
                                        while ($row = $res->fetch_assoc()){
                                            echo "<option>" . $row['unitName'] . "</option>";
                                        }
                                    }
                                    ?>
                                </select>
                            </td>
                            <td>
                                <input type="number" min="0" required onkeypress="return isNumberKey(event)" min ="1"   id = "quantity"  name = "sQuantity" class="form-control">
                            </td>
                            <td>
                                <input type="number" min="0" onkeypress="return isNumberKey(event)"   id = "quantity2"  name = "unitCost" class="form-control" required>
                            </td>

                        </tr>
                    </tbody>
                </table>

                <div class="modal-footer">
                    <div class="text-center">


                        <input type="submit" value="ADD" class="btn btn-success " id="submitD">

                        <?php
                        session_start();
                        $temp = $_SESSION['temp'];
                        echo "<a href='../admin/$temp' class='btn btn-danger pull-right' >CANCEL</a>";
                        ?>
                        <br>
                    </div>
                </div>

            </form>


        </div>
    </div>
</div>
</div>
