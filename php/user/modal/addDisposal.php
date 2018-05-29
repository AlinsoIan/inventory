<!-- Multi Column -->
<?php

    session_start();
?>
<div class="row clearfix">

    <div class="col-lg-12">

        <div class="modal-body">

                <div class="header">
                    <h2 align="center">
                        DISPOSAL
                    </h2>
                </div>
                <form action="../php/user/addDisposal.php" method="post">

                    <hr style="height:2px;border:none;color:#333;background-color:#333;"/>


                    <div class="row clearfix">

                        <div class="col-md-12">
                            <div class="pull-right">
                                <label>Date </label>
                                <?php
                                $d = date('Y/n/j/');

                                echo "<input type='text' class = 'form-control' name = 'd'  placeholder=' " . $d . "' value = '" . $d . "'size='15' required>";
                                ?>

                            </div>
                        </div>

                    </div>
                    <hr style="height:2px;border:none;color:#333;background-color:#333;"/>

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
                    <div class="row clearfix">
                        <table class="table" id="dynamic_field">
                            <thead class="text-primary">
                            <th>Item</th>
                            <th>Quantity</th>
                            <th>Remarks</th>
                            </thead>
                            <tbody>
                            <tr>

                                <td>
                                    <input list="items" class="form-control" name="des">
                                </td>
                                <td>
                                    <input type="number" name="quantity" id="req" min="0"
                                           onkeypress="return isNumberKey(event)" required class="form-control">
                                </td>
                                <td>
                                    <input type="text" name="remarks" size="30px" class="form-control">
                                </td>
                            </tr>

                            </tbody>

                        </table>


                    </div>


                    <div class="modal-footer text-center">
                        <button type="submit"  class="btn btn-success text-center" value="submit">ADD</button>
                        <a href="../user/disposal.php" class="btn btn-danger pull-right">CANCEL</a>
                    </div>

            </div>

        </div>
        </form>


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
                '<td><input type="number" name="qRequested[]" min="0" onkeypress="return isNumberKey(event)" required class="form-control"></td>' +
                '<td><input type="number"  class="form-control" name="qIssued[]" min="0"  onkeypress="return isNumberKey(event)" required ></td>' +

                '<td><input type="text" name="remarks[]" size="30px" class="form-control"></td>' +
                '<td class = "text-center"><button type="button" name="remove" id="' + i + '" class="btn btn-danger btn_remove ">X</button>' +
                '</tr>');
        });


    });

    $(document).on('click', '.btn_remove', function () {
        var button_id = $(this).attr("id");
        $('#row' + button_id + '').remove();
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




    let x = document.getElementById('office').value;
    $.ajax({
        url: 'officeInfo.php',
        data: {office: x},
        dataType: 'JSON',
        success: function (data) {
            $('#fpp').val(data[0]);
            $('#rc').val(data[1]);
        }
    });




    $('#req').blur(function () {
        var r = $(this).val();
        $('#iss').attr('max',r);
    })




</script>
