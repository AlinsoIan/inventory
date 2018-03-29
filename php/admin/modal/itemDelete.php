<!-- Modal content-->
<div class="modal-content">
    <div class="modal-header">
        <h3 class="modal-title text-center">DELETE ITEM?</h3>
    </div>
    <div class="modal-body">
        <?php
        session_start();
        $temp = $_SESSION['temp'];
        $a = $_GET['num'];

        echo "<a href=" . '../php/admin/deleteItem.php?n=' . $a . " " ." class='btn btn-primary pull-left'>Delete</a>";
        echo "<a href=' ../admin/$temp . ' class='btn btn-primary pull-right'>Cancel</a>";
        ?>


    </div>
    <div class="modal-footer">

    </div>

</div>





