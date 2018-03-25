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
                    <div class="col-md-2 pull-right">
                        <div class="">
                            <label>Date :</label>
                            <?php
                            $d = date('Y/n/j');

                            echo "<input type='text' class = 'form-control' name = 'd'  placeholder=' " . $d . "' value = '" . $d ."'size='15' required>";
                            ?>

                        </div>
                    </div>
                </div>
                <hr style="height:2px;border:none;color:#333;background-color:#333;" />
                <div class="row clearfix">
                    <table class="table" id="dynamic_field">
                        <thead class="text-primary">
                        <th width="8%">Category</th>
                        <th width="20%">Item Description</th>
                        <th width="8%">Quantity</th>
                        <th width="8%">Unit Cost</th>
                        <th width="8%">Amount</th>
                        <th width="5%"></th>
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

                            <td><input type="number" name="quantity[]" min="0" onkeypress="return isNumberKey(event)" required class="form-control"></td>
                            <td><input type="number"  class="form-control" name="unitCost[]" min="0"  onkeypress="return isNumberKey(event)" required class="form-control"></td>
                            <td><input type="text" name="amount[]" size="30px" class="form-control"></td>
                        </tr>

                        </tbody>

                    </table>


                </div>


                <div class="modal-footer text-center">
                    <button type="button" name="add" id="add" class="btn btn-primary pull-left">ADD ROW</button>
                    <button type="submit" id ="add" class="btn btn-success text-center" value="submit">ADD</button>
                    <a href="../admin/ppmp.php" class="btn btn-danger pull-right">CLOSE</a>
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
                '<select name="category[]" style="width: 70px;" class="form-control"> <option>01</option> <option>02</option> <option>03</option> <option>04</option> <option>05</option> </select>' +
                '</td>' +
                '<td>' +
                '<select class="form-control" name = "des[]"> <?php require '../../db.php'; $sql = "SELECT description FROM items"; $res = $conn->query($sql); if($res){ while($row = $res -> fetch_assoc()){ echo "<option>". $row['description'] . "</option>"; } } ?> </select>' +
                '</td>' +
                '<td>' +
                '<input type="number" name="quantity[]" min="0" onkeypress="return isNumberKey(event)" required class="form-control">' +
                '</td>' +

                '<td><input type="number"  class="form-control" name="unitCost[]" min="0"  onkeypress="return isNumberKey(event)" required class="form-control"></td>' +
                '<td><input type="text" name="amount[]" size="30px" class="form-control"></td>'+


                '<td class = "text-center"><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove ">X</button>' +
                '</tr>');
        });
        $(document).on('click', '.btn_remove', function(){
            var button_id = $(this).attr("id");
            $('#row'+button_id+'').remove();
        });

    });
</script>