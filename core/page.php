<?php
    //getting required data
    $pagetitle = "UXD";

    $root = "core/";
    $content = $root . "content/";

    $view = "landing.page";
    $tpl = $view . ".php";
    $header = $content . $view . ".header.php";
    $pageContent = $content . $view . ".content.php";
    $navigation = $content . $view . ".navigation.php";
    $footer = $content . $view . ".footer.php";
    $css = $view . ".css";
    include "template.php";
?>
