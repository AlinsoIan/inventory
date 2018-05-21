<!-- Multi Column -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2 align="center">
                    RETURNS
                </h2>
            </div>
            <form action="../php/admin/addReturn.php" method="post">
                <div class="body">
                    <div class="row">
                        <div class="col-md-3">
                            <label>OFFICE</label>
                            <select class="form-control" name="office">
                                <?php
                                require '../../db.php';
                                $sql = "SELECT officeName FROM offices";
                                $res = $conn->query($sql);

                                if ($res) {
                                    while ($row = $res->fetch_assoc()) {
                                        echo "<option>" . $row['officeName'] . "</option>";
                                    }
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col-md-3 pull-right">
                            <label>Date</label>
                            <?php
                            $d = date('Y/n/j');

                            echo "<input type='text' name = 'd' class='form-control'  placeholder=' " . $d . "'  value = '" . $d . "' required>";
                            ?>
                            </select>
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
                <table class="table">
                    <thead class="text-primary">
                    <th style="width: 30%">Item</th>
                    <th style="20%">Reason</th>
                    <th style="width: 8%;">Quantity</th>
                    <th style="width: 20%;">Status</th>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            <input list="items" class="form-control" name="des">
                        </td>
                        <td>
                            <input name="res" class="form-control" type="text" required>
                        </td>
                        <td>
                            <input name="quantity" min="0" class="form-control" onkeypress="return isNumberKey(event)"
                                   type="number" required>
                        </td>
                        <td>
                            <select name="status" class="form-control">
                                <option value="usable">Usable</option>
                                <option value="disposable">Disposable</option>
                            </select>
                        </td>

                    </tr>
                    </tbody>
                </table>
                <div class="modal-footer">
                    <div class="text-center">


                        <input type="submit" value="ADD" class="btn btn-success " id="submitD">


                        <a href="../admin/returns.php" class="btn btn-danger pull-right">CANCEL</a>

                        <br>
                    </div>
                </div>
            </form>
        </div>
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