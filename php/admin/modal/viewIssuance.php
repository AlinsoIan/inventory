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
                    <h4>
                        <p>Type of Issuance</p>
                        <?php
                            require '../../db.php';
                            $id = $_GET['num'];
                            $sql = "SELECT typeT FROM issuance WHERE id = '$id'";
                            $res = $conn->query($sql);
                            $r = $res->fetch_row();
                            echo "<input type='text' placeholder='" .$r[0] . "' value = '" . $r[0] . "' name = 'type' class='pull-left'>";
                        ?>
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
                        <?php
                        require '../../db.php';
                            $id = $_GET['num'];
                            $sql = "SELECT division FROM issuance WHERE id = '$id'";
                            $res = $conn->query($sql);
                            $r = $res->fetch_row();
                            echo "<input type='text' placeholder=' " .$r[0] . "' value = '" .$r[0] . "' name = 'division'  required>";
                        ?>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="">
                        <label class="label-floating text-center">Responsibility :</label>
                        <?php
                        require '../../db.php';
                        $id = $_GET['num'];
                        $sql = "SELECT responsibility FROM issuance WHERE id = '$id'";
                        $res = $conn->query($sql);
                        $r = $res->fetch_row();
                        echo "<input type='text' placeholder=' " .$r[0] . "' value = '" . $r[0] . "' name = 'responsibilityCenter'  required>";
                        ?>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="">
                        <label>RIS # :</label>
                        <?php
                        require '../../db.php';
                        $id = $_GET['num'];
                        $sql = "SELECT ris FROM issuance WHERE id = '$id'";
                        $res = $conn->query($sql);
                        $r = $res->fetch_row();

                        echo "<input type='text' name = 'ris'  placeholder=' " . $r[0] . "' value = '" . $r[0] ."' required>";
                        ?>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="">
                        <label>Date :</label>
                        <?php
                        require '../../db.php';
                        $id = $_GET['num'];
                        $sql = "SELECT dateT FROM issuance WHERE id = '$id'";
                        $res = $conn->query($sql);
                        $r = $res->fetch_row();

                        echo "<input type='text' name = 'd'  placeholder=' " . $r[0] . "' size='15' value = '" . $r[0] ."' required>";
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
                        $sql = "SELECT office FROM issuance WHERE id = '$id'";
                        $res = $conn->query($sql);
                        $r = $res->fetch_row();

                        echo "<input type='text' name = 'office'  placeholder=' " . $r[0] . "' value = '" . $r[0] ."' required>";
                        ?>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="">
                        <label >FPP &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp :</label>
                        <?php
                        require '../../db.php';
                        $id = $_GET['num'];
                        $sql = "SELECT fpp FROM issuance WHERE id = '$id'";
                        $res = $conn->query($sql);
                        $r = $res->fetch_row();

                        echo "<input type='text' name = 'fpp'  placeholder=' " . $r[0] . "' value = '" . $r[0] ."' required>";
                        ?>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="">
                        <label>SAi # :</label>
                        <?php
                        require '../../db.php';
                        $id = $_GET['num'];
                        $sql = "SELECT sai FROM issuance WHERE id = '$id'";
                        $res = $conn->query($sql);
                        $r = $res->fetch_row();
                            echo "<input type='text' placeholder=' " .$r[0] . "' name = 'sai' value = '" .$r[0] ."''  required >";
                        ?>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="">
                        <label>Date :</label>
                        <?php
                        require '../../db.php';
                        $id = $_GET['num'];
                        $sql = "SELECT dateT FROM issuance WHERE id = '$id'";
                        $res = $conn->query($sql);
                        $r = $res->fetch_row();

                        echo "<input type='text' name = 'd'  placeholder=' " . $r[0] . "' size='15' value = '" . $r[0] ."' required>";
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
                        <th width="8%">Code</th>
                        <th width="30%">Item Description</th>
                        <th width="2%">Unit</th>
                        <th width="10%">Requested</th>
                        <th width="10%">Issued</th>
                        <th width="10%">Remarks</th>
                   </thead>
                    <tbody>
                    <tr>
                            <?php
                            require '../../db.php';
                            $id = $_GET['num'];
                            $sql = "SELECT * FROM itemissuance WHERE issue_id = '$id'";
                            $res = $conn->query($sql);

                            if($res){
                                while($row = $res->fetch_assoc()){
                                    echo "<tr>"
                                        . "<td>" . "<input type = 'text' value = '" .$row['category'] . "' placeholder = '" . $row['category'] ."' name = 'category[]'>" . "</td>"
                                        . "<td>" . "<input type = 'text' size = '50px' value = '" .$row['description'] . "' placeholder = '" . $row['description'] ."' name = 'description[]'>". "</td>"
                                        . "<td>" . "<input type = 'text' value = '" .$row['unit'] . "' placeholder = '" . $row['unit'] ."' name = 'unit[]'>". "</td>"
                                        . "<td>" . "<input type = 'text' value = '" .$row['quantityRequested'] . "' placeholder = '" . $row['quantityRequested'] ."' name = 'quantityRequested[]'>". "</td>"
                                        . "<td>" . "<input type = 'text' value = '" .$row['quantityIssued'] . "' placeholder = '" . $row['quantityIssued'] ."' name = 'quantityIssued[]'>". "</td>"
                                        . "<td>" . "<input type = 'text' value = '" .$row['remarks'] . "' placeholder = '" . $row['remarks'] ."' name = 'remarks[]'>". "</td>"

                                        . "</tr>";
                                }
                            }
                            
                                
                                
                            
                            
                            

                            ?>
                    </tr>

                    </tbody>

                </table>
            </div>


                        <div class="text-center">
                            <input type="submit" class="btn btn-primary btn-lg waves-effect" value="APPROVE">
                            <a href="../admin/issuance.php" class="btn btn-primary btn-lg waves-effect">CLOSE</a>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>
<!-- #END# Multi Column -->