<div class="branding centered">
    <img src="/uxd/assets/images/ideo/IDEO-logo.png">
</div>
<div class="content-block">
    <div class="content-with-aside">
        <div>
            <p>
                Koss Corp., known for inventing the first stereophone in the late 1950s. Almost 50 years later,
                Koss approached IDEO to redesign a core portfolio of their headphones. They wanted to
                reimagine the design of their major headphone types in the $100+ price range – Over Ear, On
                Ear, Earbuds, and Wireless – to be more up to date with marketplace&nbsp;competitors.
            </p>
            <p>
                I was brought on at the “expression” phase of the project to work on its visual identity and
                capture the work that had been done in materials that could be presented to the client together
                with the new headphones. It involved getting up to speed very quickly on what had been done
                until that point, learn as much as possible about the world of audiophiles, and collaborate with a
                team of industrial designers. It was an extraordinary and very lucky&nbsp;opportunity.
            </p>
        </div>
        <aside>
            <b>My Role:</b> VIsual Designer
            <br><b>Duration:</b> 3 Month Contract
            <br><b>Tools:</b> Photoshop, Illustrator, InDesign
            <br><b>Team:</b> 5 Industrial Designers, Copywriter, Project Lead
        </aside>
    </div>
    <div class="multi-column section">
        <div class="with-overlay">
            <img src="/uxd/assets/images/ideo/UserCards.png" width="452">
            <div class="overlay" onclick="getPhotoSwipe(photoSwipeImages['user-cards'])"></div>
        </div>
        <div>
            <h3 class="compact">User Research Cards</h3>
            <p>
                The human-centered design process starts by understanding real people and their needs.
                During an early immersive research phase, the project team observed people, listened to
                conversations online, and held individual user sessions. These cards were made to respresent
                some of these people and use cases. Rather than synthesize or summarize research, they were
                to be more a source of inspiration to spark conversations about people’s listening experiences
                and the role of headphones in their&nbsp;lives.
            </p>
        </div>
    </div>
    <div class="multi-column section">
        <div class="with-overlay">
            <img src="/uxd/assets/images/ideo/ProjectBoards.png" width="452">
            <div class="overlay" onclick="getPhotoSwipe(photoSwipeImages.boards)"></div>
        </div>
        <div>
            <h3 class="compact">Team Room Process Boards</h3>
            <p>
                Sketches, sticky notes, competitor product photos, photos of shopping isles, 3D renderings,
                material samples... For every design direction, piles of these collected in the team room. To
                create a system of organization, boards dedicated to each major idea were created. These
                helped keep everyone on the same page, and focus movement on a quickly changing&nbsp;project.
            </p>
        </div>
    </div>

    <div class="centered top-30">
        <h2>Project Concepts</h2>
        <p>
            Comfort and fit were guiding factors in the physical design of the final four concepts.
            These 3D renderings would get physically prototyped and presented to&nbsp;Koss.
        </p>
         <div class="with-overlay">
            <img src="/uxd/assets/images/ideo/ProductConcepts.png" width="930">
            <div class="overlay magnifying-glass" onclick="getPhotoSwipe(photoSwipeImages['product-concepts'])"></div>
        </div>
    </div>

    <div class="band-container">
        <div class="band">
            <img src="/uxd/assets/images/ideo/SoundTexturesGraphic.png" width="950">

            <div class="section centered">
                <h2>The Textures of Sound</h2>
                <p>
                    We wanted to visually express sound through our design language. Discovering new things in
                    listening like details and textures inspired this graphic that would be used as a visual identity for
                    the product packaging and project&nbsp;booklet.
                </p>
            </div>

        </div>
    </div>

    <div class="centered top-30">
        <?php $context = "-booklet"; include "flickity.php"; ?>
        <h2>Pages From Printed Booklet</h2>
        <p>
            To elegantly and concisely summarize the final work on this project, this booklet containing a
            CD were designed to give away to the client in the final&nbsp;presentation.
        </p>
    </div>

</div>
<?php
    $dirNameList = array("user-cards", "boards", "product-concepts");
    include "components/photoswipe.php";
?>
