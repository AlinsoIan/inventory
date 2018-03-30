<!-- Multi Column -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2 align="center">
                    EDIT ISSUANCE
                </h2>
            </div>
            <?php
            $a = $_GET['num'];

            echo "<form action=" . '../php/admin/approveIssuance.php?num=' . $a . " " . "' method='post'>";
            ?>

                <div class="body">
                    <div class="row clearfix">
                <div class="col-md-12">
                    <div class="body">
                        <div class="row">
                            <div class="col-md-3 ">
                                <p class="text-center">Type of Issuance</p>
                                <?php
                                require '../../db.php';
                                $id = $_GET['num'];
                                $sql = "SELECT type FROM issuance WHERE issuanceID = '$id'";
                                $res = $conn->query($sql);
                                $r = $res->fetch_row();
                                echo "<input type='text' disabled placeholder='" .$r[0] . "' value = '" . $r[0] . "' name = 'type' class='form-control pull-left'>";
                                ?>
                            </div>
                            <div class="col-md-3 pull-right">
                                <p class="text-center">Name of Issuer</p>
                                <?php
                                require '../../db.php';
                                $id = $_GET['num'];
                                $sql = "SELECT issuer FROM issuance WHERE issuanceID = '$id'";
                                $ress = $conn->query($sql);
                                $rr = $ress->fetch_row();

                                $sql = "SELECT username FROM accounts WHERE accountID = '$rr[0]'";
                                $res = $conn->query($sql);
                                $r = $res->fetch_row();
                                echo "<input type='text' disabled placeholder='" .$r[0] . "' value = '" . $r[0] . "' name = 'type' class='form-control pull-left'>";
                                ?>
                            </div>
                        </div>
                    </div>



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
                        <?php
                        require '../../db.php';
                            $id = $_GET['num'];
                            $sql = "SELECT division FROM issuance WHERE issuanceID = '$id'";
                            $res = $conn->query($sql);
                            $r = $res->fetch_row();
                            echo "<input type='text' disabled class='form-control' placeholder=' " .$r[0] . "' value = '" .$r[0] . "' name = 'division'  required>";
                        ?>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="">
                        <label class="label-floating text-center">Responsibility :</label>
                        <?php
                        require '../../db.php';
                        $id = $_GET['num'];

                        $sql = "SELECT officeID FROM issuance WHERE issuanceID = '$id'";
                        $res = $conn->query($sql);
                        $r = $res->fetch_row();

                        $sql = "SELECT rcCode FROM offices WHERE officeID = '$r[0]'";
                        $ress = $conn->query($sql);
                        $rr = $ress->fetch_row();
                        echo "<input type='text' disabled class='form-control' value = '" . $rr[0] . "' name = 'responsibilityCenter'  required>";
                        ?>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="">
                        <label>RIS # :</label>
                        <?php
                        require '../../db.php';
                        $id = $_GET['num'];
                        $sql = "SELECT risNo FROM issuance WHERE issuanceID = '$id'";
                        $res = $conn->query($sql);
                        $r = $res->fetch_row();

                        echo "<input type='text' disabled class='form-control' name = 'ris'  placeholder=' " . $r[0] . "' value = '" . $r[0] ."' required>";
                        ?>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="">
                        <label>Date :</label>
                        <?php
                        require '../../db.php';
                        $id = $_GET['num'];
                        $sql = "SELECT issuanceDate FROM issuance WHERE issuanceID = '$id'";
                        $res = $conn->query($sql);
                        $r = $res->fetch_row();

                        echo "<input type='text' disabled class='form-control' name = 'd'  placeholder=' " . $r[0] . "' size='15' value = '" . $r[0] ."' required>";
                        ?>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-md-4">
                    <div class="">
                        <label >Office &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp :</label>
                        <?php
                        require '../../db.php';
                        $id = $_GET['num'];
                        $sql = "SELECT officeID FROM issuance WHERE issuanceID = '$id'";
                        $res = $conn->query($sql);
                        $r = $res->fetch_row();

                        $sql = "SELECT officeName FROM offices WHERE officeID = '$r[0]'";
                        $ress = $conn->query($sql);
                        $rr = $ress->fetch_row();

                        echo "<input type='text' disabled class='form-control' name = 'office'  value = '" . $rr[0] ."' required>";
                        ?>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="">
                        <label >FPP &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp :</label>
                        <?php
                        require '../../db.php';
                        $id = $_GET['num'];
                        $sql = "SELECT officeID FROM issuance WHERE issuanceID = '$id'";
                        $res = $conn->query($sql);
                        $r = $res->fetch_row();

                        $sql = "SELECT fppCode FROM offices WHERE officeID = '$r[0]'";
                        $ress = $conn->query($sql);
                        $rr = $ress->fetch_row();

                        echo "<input type='text' disabled class='form-control' name = 'fpp'   value = '" . $rr[0] ."' required>";
                        ?>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="">
                        <label>SAi # :</label>
                        <?php
                        require '../../db.php';
                        $id = $_GET['num'];
                        $sql = "SELECT saiNo FROM issuance WHERE issuanceID = '$id'";
                        $res = $conn->query($sql);
                        $r = $res->fetch_row();
                            echo "<input type='text' disabled class='form-control' placeholder=' " .$r[0] . "' name = 'sai' value = '" .$r[0] ."''  required >";
                        ?>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="">
                        <label>Date :</label>
                        <?php
                        require '../../db.php';
                        $id = $_GET['num'];
                        $sql = "SELECT issuanceDate FROM issuance WHERE issuanceID = '$id'";
                        $res = $conn->query($sql);
                        $r = $res->fetch_row();

                        echo "<input type='text' disabled class='form-control' name = 'd'  placeholder=' " . $r[0] . "' size='15' value = '" . $r[0] ."' required>";
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
                <table class="table" id="tabb">
                   <thead class="text-primary">
                        <th width="8%">Category</th>
                        <th width="30%">Item Description</th>
                        <th width="5%">Unit</th>
                        <th width="10%">Requested</th>
                        <th width="10%">Issued</th>
                        <th width="10%">Remarks</th>
                   </thead>
                    <tbody>
                    <tr>
                            <?php
                            require '../../db.php';
                            $id = $_GET['num'];


                            $sql = "SELECT items.categoryNo AS a,items.description AS b,units.unitName AS c,itemissuance.quantityRequested AS d,itemissuance.quantityIssued AS e,itemissuance.remarks AS f 
                                        FROM itemissuance JOIN items on itemissuance.itemID = items.itemID JOIN units ON items.unitID = units.unitID
                                         WHERE itemissuance.issuanceID = '$id'";
                            $res = $conn->query($sql);

                            if($res){
                                while($row = $res->fetch_assoc()){
                                    echo "<tr>"
                                        . "<td>" . "<input disabled type = 'text' value = '" .$row['a'] . "'class='form-control'  name = 'category[]'>" . "</td>"
                                        . "<td>" . "<input disabled type = 'text' size = '50px' value = '" .$row['b'] . "' class='form-control'  name = 'description[]'>". "</td>"
                                        . "<td>" . "<input disabled type = 'text' value = '" .$row['c'] . "' class='form-control'  name = 'unit[]'>". "</td>"
                                        . "<td>" . "<input disabled type = 'text' value = '" .$row['d'] . "' class='form-control'  name = 'quantityRequested[]'>". "</td>"
                                        . "<td>" . "<input disabled type = 'text' value = '" .$row['e'] . "' class='form-control'  name = 'quantityIssued[]'>". "</td>"
                                        . "<td>" . "<input disabled type = 'text' value = '" .$row['f'] . "' class='form-control'  name = 'remarks[]'>". "</td>"

                                        . "</tr>";
                                }
                            }

                            ?>
                    </tr>

                    </tbody>

                </table>
            </div>


                        <div class="text-center">
                            <a href="../admin/issuance.php" class="btn btn-primary btn-lg waves-effect">CLOSE</a>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>
<!-- #END# Multi Column -->