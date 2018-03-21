<!-- Multi Column -->
<div class="row clearfix">
    <div class="col-lg-12">
        <div class="modal-body">
            <div class="header">
                <h2 align="center">
                    INSPECTION AND ACCEPTANCE REPORT
                </h2>
            </div>
            
            <hr style="height:2px;border:none;color:#333;background-color:#333;" />

            
            <div class="row clearfix">
                <form action="../php/admin/addIAR.php" method="post">
                    <table class="table">
                       <thead class="text-primary">
                            <th>SUPPLIER</th>
                            <th>IAR NO</th>
                            <th>IAR DATE</th>
                            <th>IAR AMOUNT</th>
                            <th>TOTAL QUANTITY</th>
                            <th>TOTAL ITEMS</th>
                       </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <select class="form-control" name="supplier" style="width:300px">
                                    <?php
                                        require '../../db.php';
                                    $sql = "SELECT * FROM suppliers";
                                    $res = $conn -> query($sql);
                                    if($res){
                                        while($row = $res -> fetch_assoc()){
                                            echo "<option>".$row['supplierName'] ."</option>";
                                        }

                                    }

                                    
                                    ?>
                                    </select>
                                </td>
                                <td>
                                    <input type="text" name="iarno" class="form-control" required>
                                </td>
                                <td>
                                    <input type="DATE" name="iarDate" class="form-control" required>
                                </td>

                                <td>
                                    <input type="text" name="amount" min="0" required class="form-control"></td>
                                <td>
                                    <input type="number"  class="form-control" name="totalQuantity" min="0"  onkeypress="return isNumberKey(event)" required class="form-control">
                                </td>
                                <td><input type="text" name="totalItems" onkeypress="return isNumberKey(event)" size="30px" class="form-control"></td>
                            </tr>

                            </tbody>

                    </table>
                        <input type="submit" value="ADD" class="btn btn-success text-center">
                        <a href="../admin/iar.php" class="btn btn-danger pull-right">CLOSE</a>

                </form>
            </div>



        </div>
</div>
<!-- #END# Multi Column -->

