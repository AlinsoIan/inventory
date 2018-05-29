<?php
require '../../db.php';
?>

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

                        <?php
                            $n = $_GET['num'];



                            $sql = "SELECT iarNo FROM delivery WHERE deliveryID = '$n'";
                            $res = $conn->query($sql);
                            $r = $res->fetch_row();

                            echo "<input type='number' onkeypress='return isNumberKey(event)' name='iarno' min='0'
                               value='$r[0]' class='form-control' disabled>";
                        ?>

                    </div>
                    <div class="col-md-2 pull-right">
                        <label>DELIVERY DATE</label>
                        <?php
                        $n = $_GET['num'];



                        $sql = "SELECT deliveryDate FROM delivery WHERE deliveryID = '$n'";
                        $res = $conn->query($sql);
                        $r = $res->fetch_row();

                        echo "<input type='date' onkeypress='return isNumberKey(event)' name='iarno' min='0'
                               value='$r[0]' class='form-control' disabled>";
                        ?>
                    </div>
                    <div class="col-md-2 pull-right">
                        <label>PO DATE</label>
                        <?php
                        $n = $_GET['num'];
                        $sql = "SELECT poDate FROM delivery WHERE deliveryID = '$n'";
                        $res = $conn->query($sql);
                        $r = $res->fetch_row();

                        echo "<input type='date' onkeypress='return isNumberKey(event)' name='iarno' min='0'
                               value='$r[0]' class='form-control' disabled>";
                        ?>
                    </div>
                    <div class="col-md-2 pull-right">
                        <label>PO NUMBER</label>
                        <?php
                        $n = $_GET['num'];



                        $sql = "SELECT poNumber FROM delivery WHERE deliveryID = '$n'";
                        $res = $conn->query($sql);
                        $r = $res->fetch_row();

                        echo "<input type='number' onkeypress='return isNumberKey(event)' name='iarno' min='0'
                               value='$r[0]' class='form-control' disabled>";
                        ?>
                    </div>
                    <div class="col-md-2 pull-right">
                        <label>RCPT NUMBER</label>
                        <?php
                        $n = $_GET['num'];
                        $sql = "SELECT rcptNo FROM delivery WHERE deliveryID = '$n'";
                        $res = $conn->query($sql);
                        $r = $res->fetch_row();

                        echo "<input type='text' onkeypress='return isNumberKey(event)' name='iarno' min='0'
                               value='$r[0]' class='form-control' disabled>";
                        ?>
                    </div>


                    <table class="table" id="dynamic_field">
                        <thead class="text-primary">
                        <th style="width: 15%;">Item</th>
                        <th style="width: 15%;">UOM</th>
                        <th style="width: 15%;">BRAND</th>
                        <th style="width: 14%">Supplier</th>
                        <th style="width: 8%">Quantity</th>
                        <th style="width: 8%">Unit Cost</th>
                        <th style="width: 8%">Total Cost</th>
                        <th style="width: 20%">Remarks</th>
                        </thead>
                        <tbody>
                            <?php
                                require '../../db.php';

                                $n = $_GET['num'];

                                $sql = "SELECT *,deliveryitems.unitCost AS a FROM deliveryItems JOIN items ON deliveryItems.itemID = items.itemID
                                  JOIN suppliers ON deliveryItems.supplierID = suppliers.supplierID JOIN units ON deliveryItems.unitID = units.unitID WHERE deliveryID = '$n'";
                                $res = $conn->query($sql);
                                if($res){
                                    while ($row = $res->fetch_assoc()){
                                        echo "<tr>"
                                            . "<td>" . "<input disabled type='text' class='form-control' value='" . $row['description'] . "'></td>"
                                            . "<td>" . "<input disabled type='text' class='form-control' value='" . $row['unitName'] . "'></td>"
                                            . "<td>" . "<input disabled type='text' class='form-control' value='" . $row['brand'] . "'></td>"
                                            . "<td>" . "<input disabled type='text' class='form-control' value='" . $row['supplierName'] . "'></td>"
                                            . "<td>" . "<input disabled type='text' class='form-control' value='" . $row['totalQuantity'] . "'></td>"
                                            . "<td>" . "<input disabled type='text' class='form-control' value='" . $row['a'] . "'></td>"
                                            . "<td>" . "<input disabled type='text' class='form-control' value='" . $row['totalCost'] . "'></td>"
                                            . "<td>" . "<input disabled type='text' class='form-control' value='" . $row['remarks'] . "'></td>";
                                    }
                                }


                            ?>

                        </tbody>

                    </table>


                </div>


                <div class="modal-footer text-center">
                    <a href="../admin/delivery.php" class="btn btn-danger pull-right">CLOSE</a>
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
                '<select name="supplier[]" class="form-control"><?php require '../../db.php'; $r = $conn->query('SELECT supplierName FROM suppliers');if ($r) {
                    while ($row = $r->fetch_assoc()) {
                        echo "<option>" . $row['supplierName'] . "</option>";
                    }
                }?></select>' +
                '</td>' +
                '<td><input type="number" onkeypress="return isNumberKey(event)" name="quantity[]" min="0" class="form-control" required></td>' +
                '<td><input type="number" onkeypress="return isNumberKey(event)" name="unitCost[]" min="0" class="form-control" required></td>' +
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