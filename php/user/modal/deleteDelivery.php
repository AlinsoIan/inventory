<!-- Modal content-->
<div class="modal-content">
    <div class="modal-header">
        <h3 class="modal-title text-center">DELETE DELIVERY?</h3>
    </div>
    <div class="modal-body">
        <?php
        $a = $_GET['num'];

        echo "<a href=" . '../php/user/deleteDelivery.php?n=' . $a . " " ." class='btn btn-primary pull-left'>Delete</a>";
        ?>

        <a href="../user/delivery.php" class='btn btn-primary pull-right'>Cancel</a>
    </div>
    <div class="modal-footer">

    </div>

</div>