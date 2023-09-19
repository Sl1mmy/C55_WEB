<?php
    require_once("action/emptyAction.php");

    $action = new emptyAction();
    $data = $action->execute();

    require_once("partial/header.php");
?>

<?php
    require_once("partial/footer.php");