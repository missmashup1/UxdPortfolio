<div class="branding">
    <img src="/uxd/assets/images/ddb/hero.png">
</div>

<div class="content-block">
    <div class="content-with-aside">
        <div>
            <p>
                We Are Unlimited was created to be an Omnicon ad agency devoted to one client:
                <em class="font-i">McDonald's</em>. TV and radio
                commercial campaigns were the bread and butter of their work. The McDonald's website and apps extend and
                promote them in addition to showing products’ nutritional info and driving users to download their app
                and order food through UberEats. I joined the web team to focus on supporting and growing the site and
                its global&nbsp;app.
            </p>
            <p>
                McDonald's is a big target for lawsuits and consequently its website has to give high regard to web
                accessibility compliance. This presented a good opportunity to absorb expertise on this important area
                of usability. Thoroughly following their brand guidelines is also a big part of working for McDonald's.
                Dozens of promotional campaigns cycled through the site in my time with WAU. Below are some that I had
                a hand in&nbsp;designing.
            </p>
        </div>
        <aside>
            <b>My Role:</b> Interaction Designer
            <b>Tools:</b> Photoshop, Sketch, Illustrator, InVision, Keynote
            <b>Team:</b> Three Developers, Interaction Designer, UX designer, Creative Director, Project
            Manager
        </aside>
    </div>

    <div class="section">
        <div class="with-overlay">
            <img src="/uxd/assets/images/ddb/light-box.png" width="930">
            <div class="overlay magnifying-glass" onclick="getPhotoSwipe(photoSwipeImages.promos)"></div>
        </div>
        <!-- <div class="body-link">
            <a href="stitched.images.php" class="font-700" target="_blank">Stitched Image</a>
        </div> -->
    </div>


    <div class="multi-column section">
        <div class="with-overlay">
            <img src="/uxd/assets/images/ddb/senior-leadership-team.png" width="452">
            <div class="overlay" onclick="getPhotoSwipe(photoSwipeImages.slt)"></div>
        </div>
        <div>
            <h3 class="compact">Senior Leadership Team</h3>
            <p>
                An outdated section of the site showing senior team members needed a refresh to put better focus on the
                people, use pre-built CMS components like other, more prominent areas of the live site, be an attractive
                templated design that would be easy to update, and unify the disparately photographed headshots we
                were&nbsp;sent.
            </p>
        </div>
    </div>

    <div class="multi-column section">
        <div>
            <h3 class="compact">Moments</h3>
            <p>
                This was a unique campaign relying on the portrait work of a photographer we partnered with. He shot
                people from all walks of life in McDonalds restaurants across the country. We designed a long-scrolling
                landing page telling their stories, suggesting links between diverse human experiences (with McD in the
                background as a unifying third&nbsp;player).
            </p>
        </div>
        <div class="with-overlay">
            <img src="/uxd/assets/images/ddb/moments.png" width="452">
            <div class="overlay" onclick="getPhotoSwipe(photoSwipeImages.moments)"></div>
        </div>
    </div>

    <div class="multi-column section">
        <div class="with-overlay">
            <img src="/uxd/assets/images/ddb/catering.png" width="452">
            <div class="overlay" onclick="getPhotoSwipe(photoSwipeImages.catering)"></div>
        </div>
        <div>
            <h3 class="compact">Catering Page</h3>
            <p>
                Participating national markets, like this one in Orlando, offer breakfast catering for large groups.
                This page was to outline some bundle options in a way that was easy to scan and not overwhelming.
                Breaking up text lists with product imagery and using background color banding helped to do
                this,&nbsp;visually.
            </p>
        </div>
    </div>

    <h2>A Brighter Face for McDonalds.com</h2>
    <p>
        A cleaner, lighter, more accessible design for McDonalds.com brought with it a new UI framework in 2018. WAU
        assimilated the new look and feel into internal standards and guidelines for the site and reworked all content
        to fit it and go live within a few&nbsp;months.
    </p>
    <div class="band-container">
        <div class="band">
            <img src="/uxd/assets/images/ddb/brighter-face.png" width="930">
        </div>
    </div>

</div>
<?php
    $dirNameList = array("promos", "slt", "moments", "catering");
    include "components/photoswipe.php";
?>
