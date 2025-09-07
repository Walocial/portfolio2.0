<?php
    $pageTitle = "TjuulM Portefølje | Forside";
    $pageDescription = "Et portefølje der fremviser Tobias Juul Michaelsen's som person, samt cases og kompetencer som en uddannet multimediedesigner og webudvikler.";
    include 'partials/header.php';
?>
    <main>
        <section id="landingPage" class="fullScreenSection">
            <h1 id="landingPageH1" class="extra_padding_above"><span class="dialogueBox-author">Tobias siger:</span><span class="dialogueBox-content"> Velkommen til min portefølje</span><span id="closeDialogue" class="dialogueButton" title="Luk dialogboks" aria-label="Luk dialogboks" tabindex="0"><i class="fas fa-x"></i></span></h1>
            <div id="openDialogue" class="dialogueButton" title="Åben dialogboks" aria-label="Åben dialogboks" tabindex="0"><i class="fas fa-ellipsis"></i></div>
            <div class="bck_image_container"></div>
            <nav id="floating_nav_wrapper">
                <ul class="ctaNavigation">
                    <li id="cta_about" class="left_btn link_list_item" data-hovertext="Her kan du lære mig at kende" aria-label="Læs mere om mig"><a href="about.php" data-hovertext="Lær mig at kende">Om mig</a></li>
                    <li id="cta_cases" class="left_btn link_list_item" data-hovertext="Se mine tidligere projekter" aria-label="Se mine cases"><a href="cases.php">Cases</a></li>
                    <li id="cta_CV" class="right_btn link_list_item" data-hovertext="Download en pdf af mit CV" aria-label="Download mit CV"><a href="assets/downloads/TobiasJuulMichaelsenCV-2025.pdf" download>Hent CV<i class="fas fa-download"></i></a></li>
                    <li id="cta_contact" class="right_btn link_list_item" data-hovertext="Klik for at skabe kontakten" aria-label="Kontakt mig"><a href="contact.php">Kontakt mig</a></li>
                </ul>
            </nav>
        </section>
        <section id="navContent">
            <nav>
                <ul class="ctaNavigation">
                    <li class="link_list_item"><a href="cases.php">Cases</a></li>
                    <li class="link_list_item"><a href="about.php">Om mig</a></li>
                    <li class="link_list_item"><a href="assets/downloads/TobiasJuulMichaelsenCV-2024.pdf" download>Hent CV<i class="fas fa-download"></i></a></li>
                    <li class="link_list_item"><a href="contact.php">Kontakt mig</a></li>
                </ul>
            </nav>
        </section>
    </main>

    <?php
        include 'partials/footer.php'
    ?>
</body>
</html>