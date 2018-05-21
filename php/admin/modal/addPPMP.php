<!-- Multi Column -->
<div class="row clearfix">
    <div class="col-lg-12">
        <div class="modal-body">
            <div class="header">
                <h2 align="center">
                    PPMP
                </h2>
            </div>
            <form action="../php/admin/addPPMP.php" method="post">


                <div class="row clearfix">
                    <div class="col-md-3">
                        <div class="">
                            <label >Office &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </label>
                            <select name = "office" id="office"  class="form-control">
                                <?php
                                require '../../db.php';
                                $sql = "SELECT officeName FROM offices";
                                $res = $conn -> query($sql);
                                if($res){
                                    while($row = $res -> fetch_assoc()){
                                        echo "<option>".$row['officeName'] ."</option>";
                                    }
                                }
                                ?>

                            </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <label  data-toggle="tooltip" title="FPP">FPP</label>
                        <input type="text" id="rc" disabled="" class="form-control">
                    </div>
                    <div class="col-md-2">
                        <label  data-toggle="tooltip" title="Responsibility Center">RC</label>
                        <input type="text" id="fpp" disabled="" class="form-control">
                    </div>
                    <div class="col-md-2 pull-right">
                        <div class="">
                            <label>Date </label>
                            <?php
                            $d = date('Y/n/j');
                            echo "<input type='date' class = 'form-control' name = 'd'  placeholder=' " . $d . "' value = '" . $d ."'size='15' required>";

                            ?>

                        </div>
                    </div>
                    <datalist id="items">
                        <?php
                        require '../../db.php';
                        $sql = 'SELECT description FROM items';

                        if($res = $conn->query($sql)){
                            while ($row = $res->fetch_assoc()){
                                echo "<option value='" . $row['description']. "'>";
                            }
                        }
                        ?>
                    </datalist>
                </div>
                <hr style="height:2px;border:none;color:#333;background-color:#333;" />
                <div class="row clearfix">
                    <table class="table" id="dynamic_field">
                        <thead class="text-primary">
                        <th width="20%">Item Description</th>
                        <th width="8%">Quantity</th>
                        <th width="8%">Unit Cost</th>
                        <th width="5%"></th>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <input list="items" class="form-control" name="des[]">

                            </td>

                            <td><input type="number" name="quantity[]" min="1" onkeypress="return isNumberKey(event)" required class="form-control"></td>
                            <td><input type="number"  class="form-control" name="unitCost[]" min="1"  onkeypress="return isNumberKey(event)" required class="form-control"></td>

                        </tr>

                        </tbody>

                    </table>


                </div>


                <div class="modal-footer text-center">
                    <button type="button" name="add" id="add" class="btn btn-primary pull-left">ADD ROW</button>
                    <button type="submit" id ="add" class="btn btn-success text-center" value="submit">ADD</button>
                    <a href="../admin/ppmp.php" class="btn btn-danger pull-right">CANCEL</a>
                </div>

        </div>

    </div>
    </form>



</div>
</div>
<!-- #END# Multi Column -->

<script>
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
    $(document).ready(function () {
        var i = 1;
        $('#add').click(function () {
            i++;
            $('#dynamic_field').append('' +
                '<tr id="row' + i + '">' +
                '<td>' +
                '<input type = "text" list="items" class="form-control" name="des[]"> <datalist id="items">' +
                '</td>' +
                '<td><input type="number" name="quantity[]" min="0" onkeypress="return isNumberKey(event)" required class="form-control"></td>' +
                '<td><input type="number"  class="form-control" name="unitCost[]" min="0"  onkeypress="return isNumberKey(event)" required class="form-control"></td>' +

                '<td class = "text-center"><button type="button" name="remove" id="' + i + '" class="btn btn-danger btn_remove ">X</button>' +
                '</tr>');
        });
    });
    $(document).on('click', '.btn_remove', function () {
        var button_id = $(this).attr("id");
        $('#row' + button_id + '').remove();
    });
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

    $('#office').change(function () {
        $id = $(this).val();
        $.ajax({
            url: 'officeInfo.php',
            data: {office: $id},
            dataType: 'JSON',
            success: function (data) {
                $('#fpp').val(data[0]);
                $('#rc').val(data[1]);
            }
        });

    });




    var x = document.getElementById('office').value;
    $.ajax({
        url: 'officeInfo.php',
        data: {office: x},
        dataType: 'JSON',
        success: function (data) {
            $('#fpp').val(data[0]);
            $('#rc').val(data[1]);
        }
    });
</script>