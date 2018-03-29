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
                                <?php
                                $i = $_GET['num'];
                                require '../../db.php';
                                $sql = "SELECT offices.officeName AS a FROM ppmp JOIN offices ON ppmp.officeID = offices.officeID WHERE ppmp.ppmpID = '$i'";
                                $res = $conn -> query($sql);
                                $r = $res->fetch_row();
                                echo "<input type = 'text' value = '".$r[0] ."' disabled class = 'form-control'>";

                                ?>
                        </div>
                    </div>
                    <div class="col-md-2 pull-right">
                        <div class="">
                            <label>Date :</label>
                            <?php
                            $i = $_GET['num'];
                            require '../../db.php';
                            $sql = "SELECT ppmpDate FROM ppmp WHERE ppmpID= '$i'";
                            $res = $conn -> query($sql);
                            $r = $res->fetch_row();
                            echo "<input type = 'text' value = '".$r[0] ."' disabled class = 'form-control'>";

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
                            <?php
                            require '../../db.php';
                            $id = $_GET['num'];


                            $sql = "SELECT items.categoryNo AS c,items.description AS a,itemQuantity,ppmpitems.unitCost AS b,totalAmount FROM ppmpitems JOIN items
                                      ON ppmpitems.itemID = items.itemID WHERE ppmpID = '$id'";

                            $res = $conn->query($sql);

                            if($res){
                                while($row = $res->fetch_assoc()){
                                    echo "<tr>"
                                        . "<td>" . "<input disabled type = 'text' value = '" .$row['c'] . "'class='form-control'  name = 'category[]'>" . "</td>"
                                        . "<td>" . "<input disabled type = 'text' value = '" .$row['a'] . "'class='form-control'  name = 'category[]'>" . "</td>"
                                        . "<td>" . "<input disabled type = 'text' size = '50px' value = '" .$row['itemQuantity'] . "' class='form-control'  name = 'description[]'>". "</td>"
                                        . "<td>" . "<input disabled type = 'text' value = '" .$row['b'] . "' class='form-control'  name = 'unit[]'>". "</td>"
                                        . "<td>" . "<input disabled type = 'text' value = '" .$row['totalAmount'] . "' class='form-control'  name = 'quantityRequested[]'>". "</td>"
                                        . "</tr>";
                                }
                            }

                            ?>
                        </tr>

                        </tbody>

                    </table>


                </div>


                <div class="modal-footer text-center">
                    <a href="../admin/ppmp.php" class="btn btn-danger pull-right">CLOSE</a>
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
                '<select id=cat' + i + ' onchange=getDesc(' + i + ') name="category[]" style="width: 70px;" class="form-control">' +
                '<option value=1>01</option>' +
                '<option value=2>02</option>' +
                '<option value=3>03</option>' +
                '<option value=4>04</option>' +
                '<option value=5>05</option>' +
                '</select>' +
                '</td>' +
                '<td>' +
                '<select id=desc' + i + ' class="form-control" name = "des[]"> <?php require '../../db.php'; $sql = "SELECT description FROM items WHERE category = 1"; $res = $conn->query($sql); if($res){ while($row = $res -> fetch_assoc()){ echo "<option>". $row['description'] . "</option>"; } } ?> </select>' +
                '</td>' +

                '<td><input type="number" name="quantity[]" min="0" onkeypress="return isNumberKey(event)" required class="form-control"></td>' +
                '<td><input type="number"  class="form-control" name="unitCost[]" min="0"  onkeypress="return isNumberKey(event)" required class="form-control"></td>' +
                '<td><input type="text" name="amount[]" size="30px" class="form-control"></td>' +

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
</script>