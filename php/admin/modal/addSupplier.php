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
                    <th>Contact Person</th>
                    <th>Contact Number</th>
                    <th>Supplier Name</th>
                    <th>Tax Number</th>
                    <th>Tin Number</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <input name="contactPerson" class="form-control" type="text" required>

                            </td>
                            <td>
                                <input type="number"  name = "contactNumber" class="form-control" required>
                            </td>
                            <td>
                                <input type="text" name = "supplierName" class="form-control" >
                            </td>
                            <td>
                                <input type="text"  name = "taxNumber" class="form-control">
                            </td>
                            <td>
                                <input type="text"  name = "tinNumber" class="form-control">
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






