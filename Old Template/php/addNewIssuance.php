<div class="col-md-12">
    <div class="card">
        <div class="card-header" data-background-color="blue">
            <h4 class="title">Issuance</h4>
        </div>
        <div class="card-content">
            <form action="../php/addNewIssue.php" method="post" ">
            <div class="row">
                <div class="col-md-12">
                    <h4>
                        <p>Type of Issuance</p>
                        <select name = "type" class="pull-left">
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
                        <input type="text" name = "division"  required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="">
                        <label class="label-floating text-center">Responsibility :</label>
                        <input type="text" name = "responsibilityCenter"  required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="">
                        <label>RIS # :</label>
                        <input type="text" name = "ris"  required>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="">
                        <label>Date :</label>
                        <?php
                        $d = date('Y/n/j');

                        echo "<input type='text' name = 'd'  placeholder=' " . $d . "' size='15' value = '" . $d ."' required>";
                        ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="">
                        <label >Office &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp :</label>
                        <input type="text" id = "office" name = "office" onkeyup="autoFill()" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="">
                        <label >FPP &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp :</label>
                        <input type="text" name = "fpp"  required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="">
                        <label>SAi # :</label>
                        <input type="text" name = "sai"  required >
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="">
                        <label>Date :</label>
                        <?php
                            $d = date('Y/n/j');

                            echo "<input type='text' name = ''  placeholder=' " . $d . "' value = '" . $d ."'size='15' required>";
                        ?>

                    </div>
                </div>
            </div>
            <hr style="height:2px;border:none;color:#333;background-color:#333;" />
            <div class="row">
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
            <div class="row">
                <table class="table" id="tabb">
                   <thead class="text-primary">
                        <th width="8%">Code</th>
                        <th width="30%">Item Description</th>
                        <th width="10%">Unit</th>
                        <th width="10%">Requested</th>
                        <th width="10%">Issued</th>
                        <th width="10%">Remarks</th>
                   </thead>
                    <tbody>
                        <tr>
                            <td>
                                <select name="category[]" style="width: 50px;">
                                    <option>01</option>
                                    <option>02</option>
                                    <option>03</option>
                                    <option>04</option>
                                </select>
                            </td>
                            <td><input type="text" name = "description[]" size="50px" required></td>
                            <td>
                                <select name="units[]">
                                    <?php
                                        require 'db.php';

                                        $r = $conn->query('SELECT units FROM units');

                                        if($r){
                                            while ($row = $r->fetch_assoc()){
                                                echo "<option>" . $row['units'] . "</option>";
                                            }
                                        }
                                    ?>
                                </select>
                            </td>

                            <td><input type="number" name="qRequested[]" style="width: 60px;" required></td>
                            <td><input type="number" name="qIssued[]" style="width: 60px;" required></td>
                            <td><input type="text" name="remarks[]" size="30px"></td>
                        </tr>

                    </tbody>

                </table>
            </div>





            <input type="button" class="btn btn-primary" value="Add Row" onclick="addRowIssuance()">
            <a href="../admin/issuance.php" class='btn btn-primary pull-right' id='submitB'>Cancel</a>

            <input type="submit" value="Add" class="btn btn-primary pull-right" id="submit">


            <div class="clearfix"></div>
            </form>


        </div>
    </div>
</div>






