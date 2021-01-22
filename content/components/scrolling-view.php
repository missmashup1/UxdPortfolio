<?php

    $basePath = "/uxd/assets/images/cars/vdp-evolution-screens/";
    $imgPaths = array(
        $basePath . "1-VDP-original.png",
        $basePath . "2-VDP-newstyles.jpg",
        $basePath . "2.5-VDP-NewLayout.jpg",
        $basePath . "2.6-Icons.jpg",
        $basePath . "3-VDP-NewLayout.jpg",
        $basePath . "4-VDP-NewLayout2.jpg",
        $basePath . "5-VDP-NewLayout3.jpg",
        $basePath . "6-VDP-NewLayout4.jpg",
        $basePath . "6.3-VDP-NewMap&Calc.png",
        $basePath . "6.4-VDP-NewMap&Calc.jpg",
        $basePath . "6.5-VDP-NewMap&Calc.png",
        $basePath . "6.6-VDP-LongScroll.jpg",
        $basePath . "7-VDP-LongScroll.jpg"
    );
?>

<?php foreach ($imgPaths as &$imgPath): ?>
    <div><img src="<?=$imgPath?>"></div>
<?php endforeach ?>
