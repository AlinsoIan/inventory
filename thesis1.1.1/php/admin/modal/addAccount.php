<!-- Multi Column -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2 align="center">
                    ADD NEW USER
                </h2>
            </div>
            <form action="../php/admin/addAccount.php" method="post">
                <table class="table">
                    <thead class="text-primary">
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Username</th>
                    <th>password</th>
                    <th>User Type</th>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            <input name="first" class="form-control" type="text" required>
                        </td>
                        <td>
                            <input name="last" class="form-control" type="text" required>
                        </td>
                        <td>
                            <input name="username" class="form-control" type="text" required>
                        </td>
                        <td>
                            <input name="pass" class="form-control" type="text" required>
                        </td>
                        <td>
                            <select name="type" class="form-control">
                                <option>User</option>
                                <option>Admin</option>
                            </select>
                        </td>

                    </tr>
                    </tbody>
                </table>
                <div class="modal-footer">
                    <div class="text-center">


                        <input type="submit" value="Add" class="btn btn-primary " id="submitD">


                        <a href="../admin/accounts.php" class="btn btn-primary pull-right">Cancel</a>

                        <br>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- #END# Multi Column -->