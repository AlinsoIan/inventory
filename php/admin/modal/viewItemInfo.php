<!-- Multi Column -->

<div class="row clearfix">

    <div class="col-lg-12">

        <div class="modal-body">

                <div class="header">
                    <h2 align="center">
                        ITEM INFORMATION
                    </h2>
                </div>

                    <div class="body">
                        <div class="row">
                            <div class="col-md-3 ">
                                <p class="text-center">Item Description</p>
                                <?php
                                $i = $_GET['num'];
                                require '../../db.php';
                                $sql = "SELECT description FROM items WHERE id = '$i'";
                                $res = $conn->query($sql);
                                $r = $res->fetch_row();
                                echo "<input type='text' value='$r[0]' name='first' class='form-control' disabled>";
                                ?>
                            </div>
                            <div class="col-md-3 ">
                                <p class="text-center">Item Description</p>
                                <?php
                                $i = $_GET['num'];
                                require '../../db.php';
                                $sql = "SELECT Unit FROM items WHERE id = '$i'";
                                $res = $conn->query($sql);
                                $r = $res->fetch_row();
                                echo "<input type='text' value='$r[0]' name='first' class='form-control' disabled>";
                                ?>
                            </div>
                        </div>
                    </div>

                    <hr style="height:2px;border:none;color:#333;background-color:#333;"/>



                    <hr style="height:2px;border:none;color:#333;background-color:#333;"/>

                    <div class="row clearfix">
                        <table class="table" id="dynamic_field">
                            <thead class="text-primary">
                            <th width="8%">Item</th>
                            <th width="40%">Quantity</th>
                            <th width="12%">Status</th>
                            <th width="12%">Date</th>
                            </thead>
                            <tbody>
                            <?php
                                require '../../db.php';

                                $a = $_GET['num'];

                                $sql = "SELECT items.description AS a,ledger.quantity AS b,ledger.status AS c,ledger.dateT as d FROM ledger JOIN items ON ledger.itemNo = items.id WHERE ledger.itemNo = '$a'";
                                $res = $conn->query($sql);
                                if($res){
                                    while($row = $res->fetch_assoc()){
                                        echo "<tr>".
                                            "<td>" . $row['a'] ."</td>" .
                                            "<td>" . $row['b'] ."</td>".
                                            "<td>" . $row['c'] ."</td>".
                                            "<td>" . $row['d'] ."</td>".
                                            "</tr>";
                                    }
                                }

                            ?>
                            </tbody>

                        </table>


                    </div>


                    <div class="modal-footer text-center">
                        <button type="button" name="add" id="add" class="btn btn-primary pull-left">ADD ROW</button>
                        <button type="submit" id="add" class="btn btn-success text-center" value="submit">ADD</button>
                        <a href="../admin/items2.php" class="btn btn-danger pull-right">CLOSE</a>
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
                '<select name="category[]" style="width: 70px;" class="form-control"><option>01</option><option>02</option><option>03</option><option>04</option><option>05</option></select>' +
                '</td>' +
                '<td>' +
                '<select class="form-control" name = "des[]"><?php require '../../db.php';$sql = "SELECT description FROM items";$res = $conn->query($sql);if ($res) {
                    while ($row = $res->fetch_assoc()) {
                        echo "<option>" . $row['description'] . "</option>";
                    }
                }?></select>' +
                '</td>' +

                '<td><input type="number" name="qRequested[]" min="0" onkeypress="return isNumberKey(event)" required class="form-control"></td>' +
                '<td><input type="number"  class="form-control" name="qIssued[]" min="0"  onkeypress="return isNumberKey(event)" required class="form-control"></td>' +
                '<td><input type="text" name="remarks[]" size="30px" class="form-control"></td>' +

                '<td class = "text-center"><button type="button" name="remove" id="' + i + '" class="btn btn-danger btn_remove ">X</button>' +
                '</tr>');
        });
        $(document).on('click', '.btn_remove', function () {
            var button_id = $(this).attr("id");
            $('#row' + button_id + '').remove();
        });

    });
</script>