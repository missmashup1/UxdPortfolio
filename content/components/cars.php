<?php include $section . ".subnav.php"?>
<?php
    if ($sub == "") {
        include $section . "/" . $section . ".php";
    } else {
        include $section . "/" . $section . "." . $sub . ".php";
    }
?>

