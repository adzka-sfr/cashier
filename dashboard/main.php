<?php
include '../_header.php';
?>
<div class="container" style="padding-left: 0px; padding-right: 0px;">
    <?php

    if (empty($_GET['page'])) {
        $_GET['page'] = "home";
    } else {
        include "content.php";
    }
    ?>

</div>
<?php
include '../_footer.php';
?>