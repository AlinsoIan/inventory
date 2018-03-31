<!-- Modal content-->
<div class="modal-content">
    <div class="modal-header">
        <h3 class="modal-title text-center">ACTIVATE ACCOUNT?</h3>
    </div>
    <div class="modal-body">
        <?php
        $a = $_GET['num'];
        echo "<a href=" . '../php/admin/enableAccount.php?n=' . $a . " " ." class='btn btn-primary pull-left'>Activate</a>";
        ?>
        <a href="../admin/accounts.php" class='btn btn-primary pull-right'>Cancel</a>
    </div>
</div>