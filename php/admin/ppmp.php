<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" data-background-color="purple">
                        <h4 class="title">PPMP</h4>
                        <p class="category">Officess with PPMP</p>
                    </div>
                    <div class="card-content table-responsive">

                        <?php
                            echo "<form action = '../php/addPPMP' method = 'post'>";
                        ?>
                        <table class="table" id = "table">
                            <thead class="text-primary">
                            <th>Code</th>
                            <th>General Description</th>
                            <th>Unit</th>
                            <th>Quantity/Size</th>
                            <th>Unit Cost</th>
                            <th>Estimated Budget</th>
                            <th>Q1</th>
                            <th>Q2</th>
                            <th>Q3</th>
                            <th>Q4</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <select name="code">
                                            <option>01</option>
                                            <option>02</option>
                                            <option>03</option>
                                            <option>04</option>
                                        </select>
                                    </td>
                                    <td><input type="text" name="description" ></td>
                                    <td>
                                        <select name="unit" id="unit">
                                            <?php
                                                require 'global.php';

                                                showUnits();
                                            ?>
                                        </select>
                                    </td>
                                    <td><input type="number" id = "code" name="size[]" onkeydown="numberWithPeriod();" style="width:80px;"></td>
                                    <td><input type="number" id = "code" name="cost[]" onkeydown="numberWithPeriod();" style="width:80px;"></td>
                                    <td><input type="number" id = "code" name="budget[]" onkeydown="numberWithPeriod();" style="width:80px;"></td>
                                    <td><input type="number" id = "code" name="q1[]" onkeydown="numberWithPeriod();" style="width:80px;"></td>
                                    <td><input type="number" id = "code" name="q2[]" onkeydown="numberWithPeriod();" style="width:80px;"></td>
                                    <td><input type="number" id = "code" name="q3[]" onkeydown="numberWithPeriod();" style="width:80px;"></td>
                                    <td><input type="number" id = "code" name="q4[]" onkeydown="numberWithPeriod();" style="width:80px;"></td>
                                </tr>
                            </tbody>
                        </table>
                        <input type="button" class="btn btn-primary" value="Add Row" onclick="addRow()">

                        <a href="../admin/ppmp.php" class='btn btn-primary pull-right' id='submitB'>Cancel</a>

                        <a href="addPPMP.php" class="btn btn-primary pull-right" data-toggle="modal" data-target="#add_ppmp">Add PPMP</a>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>



