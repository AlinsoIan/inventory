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
                    <th>DESCRIPTION</th>
                    <th>UOM</th>
                    <th>BRAND</th>
                    <th>STARTING QUANTITY</th>
                    <th>UNIT COST</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <input name="acct" placeholder="ACCT-SN" class="form-control" type="text" required>

                            </td>
                            <td>
                                <input type="number" placeholder="PGSO-SN" name = "pgso" class="form-control" required>
                            </td>
                            <td>
                                <input type="text" placeholder="Description" name = "description" class="form-control" style="width:350px;">
                            </td>
                            <td>
                                <input type="text" placeholder="unit" name = "unit" class="form-control">
                            </td>
                            <td>
                                <input type="text" placeholder="brand" name = "brand" class="form-control">
                            </td>
                            <td>
                                <input type="number" placeholder="starting" id = "quantity" onkeydown="NumberOnly();" onkeyup="checkNumber()" name = "sQuantity" class="form-control">
                                <span id = "confirmMessageAA"></span>
                            </td>
                            <td>
                                <input type="number" placeholder="Cost" id = "quantity2" onkeydown="NumberOnly2();" onkeyup="checkNumber2()" name = "unitCost" class="form-control">
                                <span id = "confirmMessageBB"></span>
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






