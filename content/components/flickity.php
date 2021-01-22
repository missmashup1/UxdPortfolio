<div class="m-c main-carousel<?=$context?>">
    <?php
        $path = realpath("../")."/assets/images/$section/slide-show$context";

        $paths = glob($path.'/*.{jpg,JPG,jpeg,JPEG,png,PNG}', GLOB_BRACE);
        foreach ($paths as $file) {
            $fileName = str_replace("/home/p3jd5mp9fei5/public_html", "", $file);
    ?>
    <div class="carousel-cell"><img src="<?=$fileName?>" height="400"></div>
    <?php
        }

        $jsContext = str_replace("-", "_", $context);

    ?>
</div>

<script type="text/javascript" src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<script type="text/javascript">
    window.addEventListener('load', () => {
        var flkty<?=$jsContext?> = new Flickity('.main-carousel<?=$context?>', {
            draggable: '>1',
            freeScroll: false,
            imagesLoaded: true
        });
        var interval<?=$jsContext?> = setInterval(() => {
            var transform = document.querySelector('.main-carousel<?=$context?> .flickity-slider').style.transform;
            flkty<?=$jsContext?>.resize();
            if(15 > +transform.match(/([\d\.]*)/g).find(c => c)) {
                clearInterval(interval<?=$jsContext?>);
            }
        }, 100);
    });
</script>
