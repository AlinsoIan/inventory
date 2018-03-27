

<div class='col-md-12'>
    <div class='card''>
    <div class='card-header' data-background-color='red'>
        <h4 class='title text-center'>Delete Supplier?</h4>
    </div>
    <hr>
    <div class='card-content text-center'>
        <?php
            $a = $_GET['num'];

            echo "<a href=" . '../php/admin/supplierDelete.php?n=' . $a . " " ." class='btn btn-primary '>Delete</a>";
        ?>

        ||
        <a href="../admin/supplier.php" class='btn btn-primary ' id='submitB'>Cancel</a>



    </div>
    <br>
</div>









