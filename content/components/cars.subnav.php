<div class="branding">
    <div class="cars-logo">
        <img src="/uxd/assets/images/cars/cars-logo.png" width="195">
    </div>
<?php
    $sub = $_GET["sub"]
?>
    <div class="subnav pills">
        <a class="pill <?php echo ($section == "cars" && $sub == "" ? "active" : "")?>"
            href="content-page.php?topic=cars">VDP Redesign</a>
        <a class="pill <?php echo ($section == "cars" && $sub == "sell" ? "active" : "")?>"
            href="content-page.php?topic=cars&sub=sell">Sell &amp; Trade</a>
        <a class="pill <?php echo ($section == "cars" && $sub == "brand" ? "active" : "")?>"
            href="content-page.php?topic=cars&sub=brand">Brand Path</a>
        <br>
        <a class="pill <?php echo ($section == "cars" && $sub == "ux" ? "active" : "")?>"
            href="content-page.php?topic=cars&sub=ux">UX Competitive Analysis</a>
        <a class="pill <?php echo ($section == "cars" && $sub == "user-personas" ? "active" : "")?>"
            href="content-page.php?topic=cars&sub=user-personas">User Personas</a>
        <br>
        <a class="pill <?php echo ($section == "cars" && $sub == "om" ? "active" : "")?>"
            href="content-page.php?topic=cars&sub=om">Owner&apos;s Manual / UI Kit / S-Guide</a>
    </div>

</div>
