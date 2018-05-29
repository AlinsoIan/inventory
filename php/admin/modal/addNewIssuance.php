<!-- Multi Column -->

<div class="row clearfix">

    <div class="col-lg-12">

        <div class="modal-body">

                <div class="header">
                    <h2 align="center">
                        REQUISITION AND ISSUE SLIP
                    </h2>
                </div>
                <form action="../php/admin/addNewIssue.php" method="post">
                    <div class="body">
                        <div class="row">
                            <div class="col-md-3">
                                <p class="text-center">Type Of Issuance</p>
                                <select name="type" class="form-control">
                                    <option>PPMP</option>
                                    <option>CONTINGENCY</option>
                                </select>
                            </div>
                            <div class="col-md-3 pull-right">
                                <p class="text-center">Name of Issuer</p>
                                <?php
                                session_start();
                                $a = $_SESSION['user'];
                                $b = $_SESSION['username'];

                                echo "<input class='form-control' type='text' value=' " . strtoupper($b) . "' disabled>";
                                ?>
                            </div>
                        </div>
                    </div>
                    <hr style="height:2px;border:none;color:#333;background-color:#333;"/>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="">
                                <label>Division &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</label>
                                <input type="text" name="division" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="">
                                <label class="label-floating text-center">Responsibility </label>
                                <input type="text" disabled id = "rc" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="">
                                <label  data-toggle="tooltip" title="Requisition and Issue Slip">RIS No.</label>
                                <input type="text" name="ris" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="">
                                <label>Date </label>
                                <?php
                                $d = date('Y/n/j');

                                echo "<input type='text' name = 'd' class='form-control'  placeholder=' " . $d . "'  value = '" . $d . "' required>";
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-md-4">
                            <div class="">
                                <label>Office &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </label>
                                <select name='office' id="office" class="form-control">
                                    <?php

                                    require '../../db.php';
                                    $sql = "SELECT offices.officeName AS a FROM ppmp JOIN offices ON ppmp.officeID = offices.officeID";
                                    $res = $conn->query($sql);
                                    if ($res->num_rows == 0) {
                                        echo "<option disabled> No Office with PPMP</option>";
                                    }else{
                                        while ($row = $res->fetch_assoc()) {
                                            echo "<option value='" . $row['a'] ."'>" . $row['a'] . "</option>";

                                        }
                                    }
                                    ?>

                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="">
                                <label  data-toggle="tooltip" title="FPP">FPP &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp </label>
                                <input type="text" id="fpp" disabled required class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="">
                                <label  data-toggle="tooltip" title="Supplies Availability Inquiry">SAI No. </label>
                                <input type="text" name="sai"  required class="form-control">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="">
                                <label>Date </label>
                                <?php
                                $d = date('Y/n/j/');

                                echo "<input type='text' class = 'form-control' name = ''  placeholder=' " . $d . "' value = '" . $d . "'size='15' required>";
                                ?>

                            </div>
                        </div>
                    </div>
                    <hr style="height:2px;border:none;color:#333;background-color:#333;"/>
                    <div class="row clearfix">
                        <div class="col-md-2">
                            <div class="form-group label-floating">
                                <h4 class="control-label text-center">CODE/STOCK</h4>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group label-floating">
                                <h4 class="control-label text-center">REQUISITION</h4>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group label-floating">
                                <h4 class="control-label text-center">ISSUANCE</h4>
                            </div>
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
                    <div class="row clearfix">
                        <table class="table" id="dynamic_field">
                            <thead class="text-primary">
                            <th width="30%">Item Description</th>
                            <th width="10%">QTY Requested</th>
                            <th width="10%">QTY Issued</th>
                            <th width="20%">Remarks</th>
                            <th width="5%"></th>
                            </thead>
                            <tbody>
                            <tr>

                                <td>
                                    <input list="items" class="form-control" name="des[]">
                                </td>
                                <td>
                                    <input type="number" name="qRequested[]" id="req" min="0"
                                           onkeypress="return isNumberKey(event)" required class="form-control">
                                </td>

                                <td>
                                    <input type="number"  class="form-control" name="qIssued[]" id="iss" min="0"
                                           onkeypress="return isNumberKey(event)" required>
                                </td>
                                <td>
                                    <input type="text" name="remarks[]" size="30px" class="form-control">
                                </td>
                            </tr>

                            </tbody>

                        </table>


                    </div>


                    <div class="modal-footer text-center">
                        <button type="button" name="add" id="add" class="btn btn-primary pull-left">ADD ROW</button>
                        <button type="submit" id="add" class="btn btn-success text-center" value="submit">ADD</button>
                        <a href="../admin/issuance.php" class="btn btn-danger pull-right">CANCEL</a>
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
