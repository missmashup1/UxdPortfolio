<?php
    $back;
    $next;
    switch ($section) {
        case "process":
            $back = "fine-art";
            $next = "app-design";
            break;
        case "app-design":
            $back = "process";
            $next = "cars";
            break;
        case "cars":
            $back = "app-design";
            $next = "ddb";
            break;
        case "ddb":
            $back = "cars";
            $next = "orbitz";
            break;
        case "orbitz":
            $back = "ddb";
            $next = "emmis";
            break;
        case "emmis":
            $back = "orbitz";
            $next = "ideo";
            break;
        case "ideo":
            $back = "emmis";
            $next = "logos";
            break;
        case "logos":
            $back = "ideo";
            $next = "fine-art";
            break;
        case "fine-art":
            $back = "logos";
            $next = "process";
            break;
    }
?>
<script src="/uxd/core/scripts/sticky-header.js"></script>
<script>
    var start = '/uxd/content/content-page.php?topic=process';
    if ('<?=$section?>' === 'cars') {
        var carSubs = ['', 'sell', 'brand', 'ux', 'user-personas', 'om'];
        var nextSub = carSubs[carSubs.indexOf('<?=$sub?>') + 1] || carSubs[0];
        start = '/uxd/content/content-page.php?topic=<?=$section?>&sub=' + nextSub
    }
    stickyHeader.init(
        '/uxd/content/content-page.php?topic=<?=$back?>',
        '/uxd/content/content-page.php?topic=<?=$next?>',
        '/uxd',
        start
    );
</script>
<div class="sticky-header">
    <a class="sticky-link back" href="/uxd/content/content-page.php?topic=<?=$back?>">
        <div>Back</div>
        <!-- <div class="hint"><?=$back?></div> -->
    </a>
    <div class="logo">
        <a href="/uxd">
            <img src="../assets/images/m-logo.png">
        </a>
    </div>
    <a class="sticky-link next" href="/uxd/content/content-page.php?topic=<?=$next?>">
        <div>Next</div>
        <!-- <div class="hint"><?=$next?></div> -->
    </a>
</div>
