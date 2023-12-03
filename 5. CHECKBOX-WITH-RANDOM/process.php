<?php require_once 'templates/header.php' ?>
<?php

$colors = ['primary', 'danger', 'info', 'warning', 'success', 'secondary', 'dark'];
$subject = isset($_POST['subject']) ?$_POST['subject'] : [];
      
?>
    <div class="card">
        
        <div class="card-body">
            <?php
            for($i =0; $i<count($subject);$i++ ){
                echo "<button class='btn btn-$colors[$i] mx-2'>$subject[$i]</button>";
            }
            ?>
        </div>
    </div>


<?php require_once 'templates/footer.php' ?>