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
                    <div class="col-md-2">
                        <label  data-toggle="tooltip" title="Inspection and Acceptance Report">IAR No.</label>
                        <input type="number" onkeypress="return isNumberKey(event)" name="iarno" min="0"
                               class="form-control" required>
                    </div>
                    <div class="col-md-2 pull-right">
                        <label>DELIVERY DATE</label>
                        <input type="date" onkeypress="return isNumberKey(event)" name="d" min="0" class="form-control"
                               required>
                    </div>
                    <div class="col-md-2 pull-right">
                        <label>PO DATE</label>
                        <input type="date" onkeypress="return isNumberKey(event)" name="pod" min="0" class="form-control"
                               required>
                    </div>
                    <div class="col-md-2 pull-right">
                        <label>PO NUMBER</label>
                        <input type="number" onkeypress="return isNumberKey(event)" name="pon" min="0" class="form-control"
                               required>
                    </div>
                    <div class="col-md-2 pull-right">
                        <label>RCPT NUMBER</label>
                        <input type="text"  name="rcpt" min="0" class="form-control"
                               required>
                    </div>

                    <datalist id="items">
                        <?php
                        require '../../db.php';
                        $sql = 'SELECT description,itemID FROM items';
                        if ($res = $conn->query($sql)) {
                            while ($row = $res->fetch_assoc()) {
                                echo "<option value='" . $row['description'] . "'>";
                            }
                        }
                        ?>
                    </datalist>

                    <table class="table" id="dynamic_field">
                        <thead class="text-primary">
                        <th style="width: 15%;">Item</th>
                        <th style="width: 10%;">UOM</th>
                        <th style="width: 15%;">Brand</th>
                        <th style="width: 14%">Supplier</th>
                        <th style="width: 8%">Quantity</th>
                        <th style="width: 8%">Unit Cost</th>
                        <th style="width: 8%">Total Cost</th>
                        <th style="width: 20%">Remarks</th>
                        <th width="5%"></th>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <input list="items" class="form-control" name="des[]">
                            </td>
                            <td>
                                <select name = 'unit[]' class="form-control">
                                <?php
                                    require '../../db.php';

                                    $sql = "SELECT unitID,unitName FROM units";
                                    $res = $conn->query($sql);

                                    while ($row = $res->fetch_assoc()){
                                        echo "<option value='" . $row['unitID'] . "'>" . $row['unitName'] . "</option>";
                                    }

                                ?>
                                </select>
                            </td>
                            <td>
                                <input type="text" class="form-control" name="brand[]">
                            </td>
                            <td>
                                <select class="form-control" name="supplier[]">
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
                                <input type="number" onkeypress="return isNumberKey(event)" min="0" name="quantity[]"
                                       class="form-control" required>
                            </td>
                            <td>
                                <input type="number" onkeypress="return isNumberKey(event)" min="0" name="unitCost[]"
                                       class="form-control" required>
                            </td>
                            <td>
                                <input type="number"  min="0" name="totalCost[]"
                                       class="form-control" required step="any">
                            </td>
                            <td>
                                <input type="text" name="remarks[]"
                                       class="form-control" required>
                            </td>
                        </tr>

                        </tbody>

                    </table>


                </div>


                <div class="modal-footer text-center">
                    <button type="button" name="add" id="add" class="btn btn-primary pull-left">ADD ROW</button>
                    <button type="submit" id="add" class="btn btn-success text-center" value="submit">ADD</button>
                    <a href="../admin/delivery.php" class="btn btn-danger pull-right">CANCEL</a>
                </div>

            </form>
        </div>
    </div>
</div>
<!-- #END# Multi Column -->

<script>
    $(document).ready(function () {
        var i = 1;
        $('#add').click(function () {
            i++;
            $('#dynamic_field').append('' +
                '<tr id="row' + i + '">' +
                '<td>' +
                '<input type = "text" list="items" class="form-control" name="des[]"> <datalist id="items">' +
                '</td>' +
                '<td>' +
                '<select name = "unit[]" class="form-control"><?php
                    require '../../db.php'; $r = $conn->query('SELECT unitID,unitName FROM units');if ($r) {
                    while ($row = $r->fetch_assoc()) {
                        echo "<option value=" .$row['unitID'] . ">" . $row['unitName'] . "</option>";
                    }
                }?></select>' +
                '</td>' +
                '<td><input type="text"  name="brand[]"  class="form-control" required></td>' +

                '<td>' +
                '<select class="form-control" name="supplier[]"><?php
                                  require '../../db.php';
                                    $sql = 'SELECT * FROM suppliers';
                                    $res = $conn->query($sql);
                                    if ($res) {
                                        while ($row = $res->fetch_assoc()) {
                                            echo "<option>" . $row['supplierName'] . "</option>";
                                        }
                                    }?></select>'+
                            '</td>' +
                '<td><input type="number" step="any" name="quantity[]" min="0" class="form-control" required></td>' +
                '<td><input type="number" step="any" name="unitCost[]" min="0" class="form-control" required></td>' +
                '<td><input type="number" step="any" name="totalCost[]" min="0" class="form-control" required></td>' +
                '<td><input type="text"  name="remarks[]" min="0" class="form-control" required></td>' +
                '<td><button type="button" name="remove" id="' + i + '" class="btn btn-danger btn_remove ">X</button>' +
                '</tr>');
        });
        $(document).on('click', '.btn_remove', function () {
            var button_id = $(this).attr("id");
            $('#row' + button_id + '').remove();
        });
    });
    function getDesc($i) {
        $id = $('#cat' + $i).val();
        $.ajax({
            url: 'category.php',
            data: {category: $id},
            dataType: 'JSON',
            success: function (data) {
                $('#desc' + $i).html(data);
            }
        });
    }
    $('#des').change(function () {
        $id = $(this).val();
        $.ajax({
            url: 'quantity.php',
            data: {des: $id},
            dataType: 'JSON',
            success: function (data) {
                $('#desc1').html(data);
            }
        });
    });
</script>