<?php
$typeRight= true;
ob_start();
?>
<div class="container-fluid fadeInLeft">
    <div class="row">
        <div class="col-7">
            <?php 
                if($_SERVER['REQUEST_METHOD'] == 'POST' && empty($errorsArray)){
                    include(dirname(__FILE__).'/../template/goodInscription.php');
                }else{
                    include(dirname(__FILE__).'/../template/formInscription.php');  
                }
                    ?>
                <?= isset($error)? $error : ''?>
        </div>
    </div>
</div>
<?php
$mainContent = ob_get_clean();
require('../template/main.php');
?>