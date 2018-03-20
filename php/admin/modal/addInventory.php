<div class="body">
<div class="col-md-12">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="title text-center">Add Item</h4>
        </div>
        <hr>
        <div class="card-content table-responsive">
            <form action="../php/admin/addInventory.php" method="post">
                <table class="table">
                    <thead class="text-primary">
                    <th>Item</th>
                    <th>Logical Count</th>
                    <th>Physical Count</th>
                    <th>Difference</th>
                    <th>Remarks</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <input name="name" class="form-control" type="text" required>

                            </td>
                            <td>
                                <input type="text"  name = "logicalCount" class="form-control">
                            </td>
                            <td>
                                <input type="text"  name = "physicalCount" class="form-control">
                            </td>
                            <td>
                                <input type="text"  name = "difference" class="form-control">
                            </td>
                            <td>
                                <input type="text"  name = "remarks" class="form-control">
                            </td>

                        </tr>
                    </tbody>
                </table>

                <div class="modal-footer">
                    <div class="text-center">


                        <input type="submit" value="Add" class="btn btn-primary " id="submitD">


                        <a href="../admin/inventory.php" class="btn btn-primary pull-right">Cancel</a>

                        <br>
                    </div>
                </div>

            </form>


        </div>
    </div>
</div>
</div>