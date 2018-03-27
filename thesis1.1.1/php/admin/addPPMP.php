<!-- Multi Column -->
<div class="row clearfix">
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h2 align="center">
                    NEW PPMP
                </h2>
            </div>
            <form action="../php/admin/addNewUser.php" method="post">
                <div class="body">
                    <div class="row clearfix">
                        <div class="col-md-1">
                            <div class="form-group">
                                <div class="form-line">
                                    <label>Code</label>
                                   <select name="type" class="form-control">
									<option>01</option>
                                        <option>02</option>
									<option>03</option>
                                        <option>04</option>
									       <option>05</option>
									</select>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="form-group">
                                <div class="form-line">
                                    <label>General Description</label>
                                    <input type="text" name="last" class="form-control" >
                                </div>
                            </div>
                        </div>
                   
                    <div class="row clearfix">
                        <div class="col-md-1">
                            <div class="form-group">
                                <div class="form-line">
                                    <label>Unit</label>
                                    <select name="type" class="form-control">
										<?php
										require '../db.php';
											$sql = "SELECT * from units";
											$res = $conn->query($sql);
										if($res) {
											while($row = $res->fetch_assoc()){
												 echo
													  "<option>" . $row['units'] . "</option>" ;
											}
										}
											
										?>
										
									</select>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-1">
                            <div class="form-group">
                                <div class="form-line">
                                    <label>QuantitySize</label>
                                     <input type="text" name="username" class="form-control" >
                                </div>
                            </div>
                        </div>
                    
                    <div class="row clearfix">
                        <div class="col-md-1">
                            <div class="form-group">
                                <div class="form-line">
                                    <label>Unit Cost</label>
                                    <input type="text" name="pass" class="form-control" >
                                </div>
                            </div>
                        </div>

                        <div class="col-md-1">
                            <div class="form-group">
                                <div class="form-line">
                                    <label>Budget</label>
                                    <input type="text"  class="form-control" >
                                </div>
                            </div>
                        </div>
						  <div class="col-md-1">
                            <div class="form-group">
                                <div class="form-line">
                                    <label>Quantity 1</label>
                                    <input type="text"  class="form-control" >
                                </div>
                            </div>
                        </div>
 <div class="col-md-1">
                            <div class="form-group">
                                <div class="form-line">
                                    <label>Quantity 2</label>
                                    <input type="text"  class="form-control" >
                                </div>
                            </div>
                        </div>
						 <div class="col-md-1">
                            <div class="form-group">
                                <div class="form-line">
                                    <label>Quantity 3</label>
                                    <input type="text"  class="form-control" >
                                </div>
                            </div>
                        </div>
						 <div class="col-md-1">
                            <div class="form-group">
                                <div class="form-line">
                                    <label>Quantity 4</label>
                                    <input type="text"  class="form-control" >
                                </div>
                            </div>
                        </div>
						
						</div>
                        <div class="text-center">
                            <input type="submit" class="btn btn-primary btn-lg waves-effect" value="ADD">
                            <a href="../admin/ppmp.php" class="btn btn-primary btn-lg waves-effect">CANCEL</a>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>
<!-- #END# Multi Column -->