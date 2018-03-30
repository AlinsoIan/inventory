<!-- Multi Column -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2 align="center">
                    RETURNS
                </h2>
            </div>
            <form action="../php/user/addReturn.php" method="post">
                <div class="body">
                <div class="row">
                    <div class="col-md-3">
                        <label>OFFICE</label>
                        <select class="form-control" name="office">
                            <?php
                            require '../../db.php';
                            $sql = "SELECT officeName FROM offices";
                            $res = $conn->query($sql);

                            if($res){
                                while ($row = $res->fetch_assoc()){
                                    echo "<option>" . $row['officeName'] . "</option>";
                                }
                            }
                            ?>
                        </select>
                    </div>
                </div>
                </div>
                <table class="table">
                    <thead class="text-primary">
                    <th style="width: 8%">Category</th>
                    <th style="width: 30%">Item</th>
                    <th style="20%">Reason</th>
                    <th style="width: 8%;">Quantity</th>
                    <th style="width: 20%;">Status</th>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            <select name="category" id="cat1" onchange="getDesc('1')" class="form-control">
                                <option value="1">01</option>
                                <option value="2">02</option>
                                <option value="3">03</option>
                                <option value="4">04</option>
                                <option value="5">05</option>
                            </select>
                        </td>
                        <td>
                            <select id="desc1" class="form-control description" name="item">
                                <?php
                                require '../../db.php';
                                $sql = "SELECT * FROM items WHERE categoryNo = 1";
                                $res = $conn->query($sql);
                                if ($res) {
                                    while ($row = $res->fetch_assoc()) {
                                        echo "<option>" . $row['description'] . "</option>";
                                    }

                                }
                                ?>
                            </select>
                        </td>
                        <td>
                            <input name="res" class="form-control" type="text" required>
                        </td>
                        <td>
                            <input name="quantity" class="form-control" onkeypress="return isNumberKey(event)" type="number" required>
                        </td>
                        <td>
                            <select name="status" class="form-control" >
                                <option value="usable">Usable</option>
                                <option value="disposable">Disposable</option>
                            </select>
                        </td>

                    </tr>
                    </tbody>
                </table>
                <div class="modal-footer">
                    <div class="text-center">


                        <input type="submit" value="Add" class="btn btn-primary " id="submitD">


                        <a href="../user/returns.php" class="btn btn-primary pull-right">Cancel</a>

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