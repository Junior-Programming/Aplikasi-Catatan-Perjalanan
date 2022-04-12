<?php 
                    
if(isset($_GET['message'])) :

    if($_GET['type'] == 'success') :

    ?>

    <div class="alert bg-success text-light">
        <?= $_GET['message'] ?>
    </div>

    <?php

    endif;

    if($_GET['type'] == 'error') :

    ?>

    <div class="alert bg-danger text-light">
        <?= $_GET['message'] ?>
    </div>

    <?php

    endif;

endif;

?>