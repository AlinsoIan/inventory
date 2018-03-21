<!-- Multi Column -->
<div class="row clearfix">
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h2 align="center">
                   UPDATE
                </h2>
            </div>

            <?php
            $id = $_GET['num'];
            echo "<form action=" . '../php/admin/updateReorder.php?ii='.$id . " " . "method='post' >";

            ?>
                <div class="body">
                    <div class="row clearfix">
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="form-line">
                                    <label>CATEGORY</label>
                                   <input type="CATEGORY" name="category">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="form-line">
                                    <label>ACCT-SN</label>
                                    <input type="ACCT-SN" name="acct">   
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="form-line">
                                    <label>ITEM DESCRIPTION</label>
                                    <input type="ITEM" name="description">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="form-line">
                                    <label>UOM</label>
                                    <input type="UOM" name="unit">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="form-line">
                                    <label>STARTING QUANTITY</label>
                                    <input type="STARTING QUANTITY" name="startingQuantity">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="form-line">
                                    <label>UNIT COST</label>
                                    <input type="UNIT COST" name="unitCost">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="form-line">
                                    <label>BRAND</label>
                                    <input type="BRAND" name="brand">
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    
                        <div class="text-center">
                            <input type="submit" class="btn btn-primary btn-lg waves-effect" value="UPDATE">
                            <a href="../admin/reorder.php" class="btn btn-primary btn-lg waves-effect">CLOSE</a>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>
<!-- #END# Multi Column -->