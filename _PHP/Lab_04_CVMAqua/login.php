<?php
    require_once("action/LoginAction.php");

    $action = new LoginAction();
    $data = $action->execute();

    require_once("partial/header.php");
?>



<?php
    require_once("partial/footer.php");