<!-- Multi Column -->
<div class="row clearfix">
    <div class="col-lg-12">
        <div class="modal-body">
            <div class="header">
                <h2 align="center">
                    DELIVERY
                </h2>
            </div>
            <form action="../php/admin/addDelivery.php" method="post">
                <div class="row clearfix">
                    <table class="table" id="dynamic_field">
                        <thead class="text-primary">
                        <th style="width: 10%">IAR No.</th>
                        <th style="width: 8%">Category</th>
                        <th style="width: 30%;">Item</th>
                        <th style="width: 15%">Unit</th>
                        <th style="width: 14%">Supplier</th>
                        <th style="width: 12%";">Qty</th>
                        <th>Delivery Date</th>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <input type="text" name="iarno[]" class="form-control" required>
                            </td>
                            <td>
                                <select name="cat[]" class="form-control">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control" name="item[]">
                                    <?php
                                    require '../../db.php';

                                    $sql = "SELECT description FROM items";
                                    $res = $conn->query($sql);
                                    if($res){
                                        while($row = $res -> fetch_assoc()){
                                            echo "<option>". $row['description'] . "</option>";
                                        }

                                    }

                                    ?>
                                </select>
                            </td>
                            <td>
                                <select name="units[]" class="form-control">
                                    <?php
                                    require '../../db.php';

                                    $r = $conn->query('SELECT units FROM units');

                                    if($r){
                                        while ($row = $r->fetch_assoc()){
                                            echo "<option>" . $row['units'] . "</option>";
                                        }
                                    }
                                    ?>
                                </select>
                            </td>
                            <td>
                                <select class="form-control" name="supplier">
                                    <?php
                                    require '../../db.php';
                                    $sql = "SELECT * FROM suppliers";
                                    $res = $conn->query($sql);
                                    if ($res) {
                                        while ($row = $res->fetch_assoc()) {
                                            echo "<option>" . $row['supplierName'] . "</option>";
                                        }

                                    }


                                    ?>
                                </select>
                            </td>


                            <td>
                                <input type="numbe" name="quantity[]" class="form-control" required>
                            </td>
                            <td>

                                <input type="date" name="d[]" class="form-control" required>
                            </td>
                        </tr>

                        </tbody>

                    </table>


                </div>


                <div class="modal-footer text-center">
                    <button type="button" name="add" id="add" class="btn btn-primary pull-left">ADD ROW</button>
                    <button type="submit" id ="add" class="btn btn-success text-center" value="submit">ADD</button>
                    <a href="../admin/delivery.php" class="btn btn-danger pull-right">CLOSE</a>
                </div>

        </div>

    </div>
    </form>



</div>
</div>
<!-- #END# Multi Column -->
<script>
    $(document).ready(function(){
        var i=1;
        $('#add').click(function(){
            i++;
            $('#dynamic_field').append( '' +
                '<tr id="row'+i+'">' +
                '<td>' +
                '<input type="text" name="iarno[]" class="form-control" required>' +
                '</td>' +
                '<td>' +
                '<select name="cat[]" class="form-control"> <option>1</option> <option>2</option> <option>3</option> <option>4</option> <option>5</option> </select>' +
                '</td>' +
                '<td>' +
                '<select name="item[]" class="form-control"><?php require '../../db.php'; $r = $conn->query('SELECT description FROM items');if($r){while ($row = $r->fetch_assoc()){echo "<option>" . $row['description'] . "</option>";}}?></select>' +
                '</td>' +
                '<td>' +
                '<select name="units[]" class="form-control"><?php require '../../db.php'; $r = $conn->query('SELECT units FROM units');if($r){while ($row = $r->fetch_assoc()){echo "<option>" . $row['units'] . "</option>";}}?></select>' +
                '</td>' +
                '<td>' +
                '<select name="supp[]" class="form-control"><?php require '../../db.php'; $r = $conn->query('SELECT supplierName FROM suppliers');if($r){while ($row = $r->fetch_assoc()){echo "<option>" . $row['supplierName'] . "</option>";}}?></select>' +
                '</td>' +
                '<td><input type="quantity" name="quantity[]" class="form-control" required></td>'+
                '<td><input type="date" name="d[]" class="form-control" required></td>' +

                '<td class = "text-center"><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove ">X</button>' +
                '</tr>');
        });
        $(document).on('click', '.btn_remove', function(){
            var button_id = $(this).attr("id");
            $('#row'+button_id+'').remove();
        });

    });
</script>