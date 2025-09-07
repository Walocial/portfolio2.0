<?php
    $pageTitle = "TjuulM Portefølje | Kontakt";
    $pageDescription = "Skab kontakten - kontakt Tobias Juul Michaelsen på forskellige sociale medier, email eller telefon.";
    include 'partials/header.php';
?>
    <main>
        <section id="contactSection" class="fullScreenSection">
            <ul id="infoCard-Container" tabindex="-1">
                <li class="infoCard">
                    <img class="cardImage" src="assets/media/TobiasCoding.webp" alt="">
                    <div class="cardInfo">
                        <h1 id="contactH1">Kontakt Mig</h1>    
                        <!-- <h2 class="cardTitle">Personlighed & Fritid</h2> -->
                        <div class="horizontalDivider"></div>
                    <nav id="socials_grid">
                        <a href="https://www.linkedin.com/in/tobias-juul-michaelsen-8b1769252/" id="social_linkedin" class="social_button" tabindex="0" target="_blank"><i class="fab fa-linkedin"></i></a>
                        <a href="mailto:tobias@chakemato.dk" id="social_mail" class="social_button" tabindex="0"><i class="fas fa-envelope"></i></a>
                    </nav>
                </li>
            </ul>
        </section>
    </main>

    <?php
        $show_socials = false;
        include 'partials/footer.php'
    ?>
</body>
</html>