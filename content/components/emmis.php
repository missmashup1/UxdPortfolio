<div class="branding">
    <img src="/uxd/assets/images/emmis/hero.png">
</div>
<h1><img src="/uxd/assets/images/emmis/emmis-interactive.png"></h1>

<div class="content-block">
    <div class="content-with-aside">
        <div>
            <p>
                Emmis Interactive was Chicago’s digital shop of Indiana’s media conglomerate
                Emmis Communications. With the backing of a large company, it was formed to
                hybridize software development and creative agency offerings and serve a media
                market threatened by the rise of the internet – radio entertainment.
            </p>
            <p>
                I got to support the creation of their homegrown content management system (CMS),
                BaseStation, and honed Photoshop muscle designing templates for numerous radio stations.
                We also made custom sites for recognizable brands in banking, health care, retail, and
                publishing. A comfort with designing visually rich, textured, dimensional assets like
                this proved very useful later when designing for mobile apps.
            </p>
        </div>
        <aside>
            <b>My Role:</b> Interaction Designer
            <br><b>Tools:</b> Photoshop, Illustrator, Flash, HTML, CSS
            <br><b>Team:</b> Interaction Designer, Front End Developer, Back End Dev
        </aside>
    </div>

    <h2>Basestation, a Homegrown CMS</h2>
    <p>
        In designing Basestation, we looked at big CMS players like WordPress, Drupal, and Joomla. We
        used card sorting with a few groups of people to help establish information architecture. The
        look and feel aimed to be neutral but branded and the UX, intuitive. User testing was informal
        and mostly happened on the fly at any opportunity, by pulling people in to use different parts
        of the app and look for pain points.
    </p>
    <div class="section">
        <img src="/uxd/assets/images/emmis/basestation.png">
    </div>

    <div class="multi-column">
        <div>
            <div class="subsection">
                <div class="with-overlay">
                    <img src="/uxd/assets/images/emmis/thumbnails.png" width="453">
                    <div class="overlay" onclick="getPhotoSwipe(photoSwipeImages.css)"></div>
                </div>
            </div>
            <p>
                Early plans for would-be CSS/HTML templated layouts that offer some range of positioning
                flexibility for published content. These were offered as starting points built into the CMS.
            </p>
        </div>
        <div>
            <div class="subsection">
                <div class="with-overlay">
                    <img src="/uxd/assets/images/emmis/wireframes.png" width="453">
                    <div class="overlay"onclick="getPhotoSwipe(photoSwipeImages.wireframes)"></div>
                </div>
            </div>
            <p>
                Wireframes for CMS controls created to visually plot functional requirements. Programmers
                would used these to engineer these modules. They would later be skinned to fit into
                different template styles and published through the CMS.
            </p>
        </div>
    </div>

    <h3>Designing Site Templates</h3>
    <p>
        Once Basestation was developed and tested for release as a publishing platform, EI sold its use
        to local and later, national radio stations. The design team created templates based in part on
        client preferences. Any special features Basestation didn’t have were handled on a custom basis.
        Over time, site templates and features expanded and evolved.  Below is a sampling of ones I worked on.
    </p>

    <div class="band-container">
        <div class="band band-templates">
            <div class="section">
                <div class="with-overlay">
                    <img src="/uxd/assets/images/emmis/site-templates.png" width="930">
                    <div class="overlay magnifying-glass dst" onclick="getPhotoSwipe(photoSwipeImages.sites)"></div>
                </div>
            </div>
        </div>
    </div>
    <p>
        As part of the basic CMS site package of a designed homepage and inner page, we delivered a
        color scheme based on client preferences, a custom masthead showing requested artists, 2-3
        visual skins for modules, and, when there was an appetite for it, a logo redesign. Below are a
        few&nbsp;examples.
    </p>

    <div class="section">
        <img src="/uxd/assets/images/emmis/rxp-101-9.png">

        <img src="/uxd/assets/images/emmis/wawa-scene.png">
    </div>

    <div class="band-container">
        <div class="band band-custom">
            <div class="section">
                <div class="multi-column">
                    <img src="/uxd/assets/images/emmis/custom-design.png">
                    <div class="custom-design-content">
                        <h3>Custom Design &amp; Development</h3>
                        <p>
                            Outside of contractual site stand-up work, the business regularly won projects for
                            stand-alone brands. We created many custom microsites and motion media projects for
                            companies like Atlanta Magazine, Horseshoe Casino, Puma, National City Bank,
                            Anderson Cancer Research Center and&nbsp;more.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    $dirNameList = array("sites", "wireframes", "css");
    include "components/photoswipe.php";
?>
