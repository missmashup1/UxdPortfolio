<div class="branding centered">
    <img src="/uxd/assets/images/orbitz/orbitz-logo.png">
</div>
<h2>Orbitz.com Rebranding</h2>
<div class="content-block">
    <div class="content-with-aside">
        <div>
            <p>
                The market of online travel agencies is saturated by a lot of sameness and price-focused messaging. At
                the time of this project, Orbitz was losing its position rank and the brand struggled for an identity
                that achieved relevance and differentiation. Consumers saw Orbitz as “middle of the road” and standing
                for nothing unique. The  vision for a redesign had to be far from safe and go beyond being an
                incremental change to existing design. It had to try to improve on best practices and address wider
                screens and ad placement within them. It had to unify desktop, mobile, email, social media, and online
                advertising.
            </p>
            <p>
                “Orbitz unlocks the joy of travel with tools that amplify every travel experience.” This would be the
                core brand idea that the redesign had to bring alive. Some creative workshoping produced “Fun Lovin’
                Renegade” as the new brand personality. It would be loud, colorful, and cheekily fun. It would use much
                more photography and a vivid color palette. It would be inspiring and unconventional. Audaciously, it
                would to be completed in under four months in tandem with a back-end replatforming.

            </p>
        </div>
        <aside>
            <b>My Role:</b> UI & UX Designer
            <br><b>Duration:</b> 9 months (Contract)
            <br><b>Tools:</b> Fireworks, Photoshop, Illustrator, Axure
            <br><b>Team:</b> Five Interaction Designers, Project Manager, Creative Director
        </aside>
    </div>

    <div class="multi-column">
        <div>
            <h3>Competitive Analysis</h3>
            <div class="subsection">
                <div class="with-overlay">
                    <img src="/uxd/assets/images/orbitz/competitive-analysis.png" width="453">
                    <div class="overlay" onclick="getPhotoSwipe(photoSwipeImages.companalysis)"></div>
                </div>
            </div>
            <p>
                First, the team did an audit of competitors’ brand identity and points of differentiation. Expedia,
                Travelocity, Priceline, Booking.com, Hotels.com, and Kayak were the core ones. For each, we looked at
                Desktop, Mobile, Web and Smartphone experiences, looking at handling of Home, Product, and Search
                Results and Details pages.
            </p>
        </div>
        <div>
            <h3>User Personas</h3>
            <div class="subsection">
                <div class="with-overlay">
                    <img src="/uxd/assets/images/orbitz/user-personas.png" width="453">
                    <div class="overlay" onclick="getPhotoSwipe(photoSwipeImages.personas)"></div>
                </div>
            </div>
            <p>
                Some work was done to update User Personas, representating demographics and psychographics of the target
                audience. Prior research for this had been done by two UX architects outside of our immediate group.
            </p>
        </div>
    </div>

    <div class="multi-column">
        <div>
            <h3>Spectrum Workshop</h3>
            <div class="subsection">
                <div class="with-overlay">
                    <img src="/uxd/assets/images/orbitz/spectrum-workshop.png" width="453">
                    <div class="overlay" onclick="getPhotoSwipe(photoSwipeImages.spectrum)"></div>
                </div>
            </div>
            <p>
                We gathered visual sources of inspiration that reflected our new brand attributes. This started to get
                creative juices flowing and helped key stakeholders discuss and agree about visual interpretation of the
                new&nbsp;personality.
            </p>
        </div>
        <div>
            <h3>Brand Boards</h3>
            <div class="subsection">
                <div class="with-overlay">
                    <img src="/uxd/assets/images/orbitz/brand-boards.png" width="453">
                    <div class="overlay" onclick="getPhotoSwipe(photoSwipeImages.brandboards)"></div>
                </div>
            </div>
            <p>
                Rather than jump into screen design, the next step was to explore directions for a visual language to
                encompass a color palette, voice, typography, iconography, photography etc. Five directions were
                presented and narrowed down to&nbsp;one.
            </p>
        </div>
    </div>
    <div class="centered top-30">
        <h2>Reskin Concepts</h2>
        <p>
            Finally, the group got to work skinning the home and a core inner page with elements from the chosen brand
            board.There were four rounds of presentational reviews before one was voted to move forward on. There wasn’t
            time to design all UX components. A lot would get resolved down the road. The slideshow below shows all of
            the contributed&nbsp;ideas.
        </p>
    </div>
    <div class="band-container reskin">
        <div class="band reskin">
            <div class="section">
                <?php include "flickity.php"; ?>
                <!-- div class="with-overlay">
                    <a href="/uxd/content/blank.php?topic=scrolling-view" class="font-700" target="_blank">
                        <img src="/uxd/assets/images/orbitz/reskin-concepts.png" width="930">
                        <div class="overlay magnifying-glass" onclick="getPhotoSwipe(photoSwipeImages.reskins)"></div>
                    </a>
                </div -->
            </div>
        </div>
    </div>

    <div class="centered">
        <h2>Design System Elements</h2>
        <img src="/uxd/assets/images/orbitz/design-system-1.png">
        <img src="/uxd/assets/images/orbitz/design-system-2.png" width="930">
    </div>

    <div class="band-container design-system-2">
        <div class="band">
            <div class="section centered">
                <h2>Out with the Old, In with the New</h2>
                <p>
                    As the new design elements got applied to more pages down the purchase path, it expanded to
                    include more patterns. The site went from having a mostly blue-hued and even toned UI to a
                    more vibrant one, rich in color and&nbsp;contrast.
                </p>
            </div>
            <img src="/uxd/assets/images/orbitz/before-after.png">
        </div>
    </div>

    <div class="centered">
        <h2>Visual System for Centerspot Ads</h2>
        <p>
            Branding would be applied to the hero section of the Homepage that featured ads. One member
            of the team was dedicated to creating a system of badges and typography to apply to this and
            related ad areas. The result was a family of “drops” and
            typographic banners that would overlay editorial on-brand editorial photos. This enabled
            advertising to actually enhance the site’s&nbsp;appeal.
        </p>
        <?php
            $context = "-centerspots";
            include "flickity.php";
        ?>
    </div>
</div>


<?php
    $dirNameList = array("companalysis", "personas", "spectrum", "brandboards", "reskins");
    include "components/photoswipe.php";
?>
