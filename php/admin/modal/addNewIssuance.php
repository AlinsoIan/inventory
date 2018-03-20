<!-- Multi Column -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2 align="center">
                    NEW ISSUANCE
                </h2>
            </div>
            <form action="../php/admin/addNewIssue.php" method="post">
                <div class="body">
                    <div class="row clearfix">
                <div class="col-md-12">
                    <h4>
                        <p>Type of Issuance</p>
                        <select name = "type" style="width: 15%" class="form-control pull-left">
                            <option>Office Supplies</option>
                            <option>Disposal</option>
                            <option>Expired</option>
                        </select>
                    </h4>

                    <div class="text-center">
                        <label >REQUISITION AND ISSUE SLIP</label>
                    </div>
                </div>
            </div>

            <hr style="height:2px;border:none;color:#333;background-color:#333;" />

            <div class="row">
                <div class="col-md-4">
                    <div class="">
                        <label >Division &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp:</label>
                        <input type="text"  name = "division" class="form-control"  required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="">
                        <label class="label-floating text-center">Responsibility :</label>
                        <input type="text" name = "responsibilityCenter" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="">
                        <label>RIS # :</label>
                        <input type="text" name = "ris" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="">
                        <label>Date :</label>
                        <?php
                        $d = date('Y/n/j');

                        echo "<input type='text' name = 'd' class='form-control'  placeholder=' " . $d . "'  value = '" . $d ."' required>";
                        ?>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-md-4">
                    <div class="">
                        <label >Office &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp :</label>
                        <select name = 'office'  class="form-control">
                         <?php

                                require '../../db.php';
                                $sql = "SELECT office FROM offices";
                                $res = $conn -> query($sql);
                                if($res){
                                    while($row = $res -> fetch_assoc()){
                                        echo "<option>".$row['office'] ."</option>";
                                    }

                                }

                                
                                ?>

                                </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="">
                        <label >FPP &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp :</label>
                        <input type="text" name = "fpp"  required class="form-control">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="">
                        <label>SAi # :</label>
                        <input type="text" name = "sai"  required class="form-control">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="">
                        <label>Date :</label>
                        <?php
                            $d = date('Y/n/j');

                            echo "<input type='text' class = 'form-control' name = ''  placeholder=' " . $d . "' value = '" . $d ."'size='15' required>";
                        ?>

                    </div>
                </div>
            </div>
            <hr style="height:2px;border:none;color:#333;background-color:#333;" />
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
            <div class="row clearfix">
                <table class="table" id="dynamic_field">
                   <thead class="text-primary">
                        <th width="8%">Category</th>
                        <th width="30%">Item Description</th>
                        <th width="10%">Unit</th>
                        <th width="10%">Requested</th>
                        <th width="10%">Issued</th>
                        <th width="10%">Remarks</th>
                        <th width="10%"></th>
                   </thead>
                    <tbody>
                        <tr>
                            <td>
                                <select name="category[]" style="width: 70px;" class="form-control">
                                    <option>01</option>
                                    <option>02</option>
                                    <option>03</option>
                                    <option>04</option>
                                    <option>05</option>
                                </select>
                            </td>
                                <td>
                                    <select class="form-control" name = "des[]">

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

                            <td><input type="number" name="qRequested[]" style="width: 70px;" min="0" onkeypress="return isNumberKey(event)" required class="form-control"></td>
                            <td><input type="number"  class="form-control" name="qIssued[]" min="0" style="width: 70px;" onkeypress="return isNumberKey(event)" required class="form-control"></td>
                            <td><input type="text" name="remarks[]" size="30px" class="form-control"></td>
                        </tr>

                    </tbody>

                </table>


            </div>


                        <div class="text-center">
                            <button type="button" name="add" id="add" class="btn btn-primary btn-lg waves-effect pull-left">Add Row</button>
                            <input type="submit" id ="add" class="btn btn-primary btn-lg waves-effect" value="ADD">
                            <a href="../admin/issuance.php" class="btn btn-primary btn-lg waves-effect">CLOSE</a>
                        </div>

                    </div>

                </div>
            </form>



        </div>
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
                        '<select name="category[]" style="width: 70px;" class="form-control"><option>01</option><option>02</option><option>03</option><option>04</option><option>05</option></select></td>' +
                    '</td>' +
                    '<td>' +
                        '<select class="form-control" name = "des[]"><?php require '../../db.php';$sql = "SELECT description FROM items";$res = $conn->query($sql);if($res){while($row = $res -> fetch_assoc()){echo "<option>". $row['description'] . "</option>";}}?></select>' +
                    '</td>' +
                    '<td>' +
                        '<select name="units[]" class="form-control"><?php require '../../db.php'; $r = $conn->query('SELECT units FROM units');if($r){while ($row = $r->fetch_assoc()){echo "<option>" . $row['units'] . "</option>";}}?></select>' +
                    '</td>' +

                    '<td><input type="number" name="qRequested[]" style="width: 70px;" min="0" onkeypress="return isNumberKey(event)" required class="form-control"></td>' +
                    '<td><input type="number"  class="form-control" name="qIssued[]" min="0" style="width: 70px;" onkeypress="return isNumberKey(event)" required class="form-control"></td>'+
                    '<td><input type="text" name="remarks[]" size="30px" class="form-control"></td>' +

                    '<td class = "text-center"><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove ">X</button>' +
                '</tr>');
        });
        $(document).on('click', '.btn_remove', function(){
            var button_id = $(this).attr("id");
            $('#row'+button_id+'').remove();
        });
        $('#submit').click(function(){
            $.ajax({
                url:"name.php",
                method:"POST",
                data:$('#add_name').serialize(),
                success:function(data)
                {
                    alert(data);
                    $('#add_name')[0].reset();
                }
            });
        });
    });
</script>