<?php
    function makeArray($lightboxPath) {
        $path = realpath("../").$lightboxPath;

        $paths = glob($path.'/*.{jpg,JPG,jpeg,JPEG,png,PNG}', GLOB_BRACE);
        $i = 0;
        $size = count($paths);
        foreach ($paths as $file) {
            $fileName = str_replace("/home/p3jd5mp9fei5/public_html", "", $file);
            list($w, $h) = getimagesize($file);
            echo "{src: '$fileName', w: $w, h: $h}";
            $i++;
            if($i < $size) {
                echo ",\n";
            }
        }
        echo "\n";
    }
?>
