<!-- Multi Column -->
<div class="row clearfix">
    <div class="col-lg-12">
        <div class="modal-body">
            <div class="header">
                <h2 align="center">
                    Delivery Item
                </h2>
            </div>
            
            <hr style="height:2px;border:none;color:#333;background-color:#333;" />

            
            <div class="row clearfix">
                <form action="../php/admin/addIAR.php" method="post">
                    <table class="table">
                       <thead class="text-primary">
                                            <th>IAR No.</th>
                                            <th>Delivery Date</th>
                                            <th>Supplier</th>
                                            <th>Category</th>
                                            <th>Item</th>
                                            <th>Unit</th>
                                            <th>Qty</th>

                       </thead>
                        <tbody>
                            <tr>
                                
                                <td>
                                    <input type="text" name="iarno" class="form-control" required>
                                </td>
                                <td>
                                    <input type="text" name="deliveryDate" class="form-control" required>
                                </td>
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
                                    <input type="text" name="category" class="form-control" required>
                                </td>
                                <td>
                                    <input type="text" name="item" class="form-control" required>
                                </td>
                                <td>
                                    <input type="text" name="unit" class="form-control" required>
                                </td>
                                <td>

                                <input type="text" name="qty" class="form-control" required>
                                </td>
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

