<?php 
include './templates/header.php'
 ?>
<?php
 $province = $_POST['province'];
 $gender = $_POST['gender'];
 $subjects = $_POST['subject'];
?>
     <div class="card mb-3">
        <div class="card-header">Province</div>
        <div class="card-body">
            <h2 class="display-3"><?php echo $province; ?></h2>
        </div>
    </div>
    <div class="card mb-3">
        <div class="card-header">Gender</div>
        <div class="card-body">
            <?php if ($gender == 'Male') : ?>
                <img src="./images/male.png" alt="Male">
            <?php elseif ($gender == 'Female') : ?>
                <img src="./images/female.png" alt="Female">
            <?php endif; ?>
        </div>
    </div>
    <div class="card">
        <div class="card-header">Subject</div>
        <div class="card-body">
            <?php foreach ($subjects as $subject) : ?>
                <span class="badge bg-primary"><?php echo $subject; ?></span>
            <?php endforeach; ?>
        </div>
    </div>

<?php 
include './templates/footer.php'
 ?>