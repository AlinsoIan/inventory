<div class="body">
<div class="col-md-12">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="title text-center">Add Item</h4>
        </div>
        <hr>
        <div class="card-content table-responsive">
            <form action="../php/admin/addSupplier.php" method="post">
                <table class="table">
                    <thead class="text-primary">
                    <th>Supplier</th>
                    <th>Tin Number</th>
                    <th>PO Number</th>
                    <th>PO Date</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <input name="name" class="form-control" type="text" required>

                            </td>
                            <td>
                                <input type="text"  name = "tinNumber" class="form-control">
                            </td>
                            <td>
                                <input type="text"  name = "poNumber" class="form-control">
                            </td>
                            <td>
                                <input type="date"  name = "poDate" class="form-control">
                            </td>

                        </tr>
                    </tbody>
                </table>

                <div class="modal-footer">
                    <div class="text-center">


                        <input type="submit" value="Add" class="btn btn-primary " id="submitD">


                        <a href="../admin/supplier.php" class="btn btn-primary pull-right">Cancel</a>

                        <br>
                    </div>
                </div>

            </form>


        </div>
    </div>
</div>
</div>






