<?php
    $pageTitle = "TjuulM Portefølje | Om mig";
    $pageDescription = "Læs om Tobias Juul Michaelsen som person, hans faglige kompetencer og tidligere erfaringer på Tobias' portefølje.";
    include 'partials/header.php';
?>
    <main>
        <section id="aboutMeSection" class="fullScreenSection">
            <h1 id="aboutMeH1">Om Mig</h1>
            <ul id="infoCard-Container" tabindex="-1">
                <li class="infoCard">
                    <img class="cardImage" src="assets/media/TobiasPortrætSmaller.webp" alt="">
                    <div class="cardInfo">
                        <h2 class="cardTitle">Personlighed & Fritid</h2>
                        <div class="horizontalDivider"></div>
                        <p class="cardText">
                            Mit navn er Tobias Juul Michaelsen, jeg er <span id="age">25</span> år, og er en tålmodig og pålidelig person med en stor passion for webudvikling. Min interesse for design og kodning startede på HTX Hansenberg, hvor jeg først blev fascineret af hjemmesiders visuelle udtryk. Det var dog på IBA Erhvervsakademi, at jeg for alvor fandt glæden ved kodning.
                        </p>
                        <p class="cardText">
                            I min fritid påtager jeg mig oftest kreative og sociale aktiviteter. Jeg elsker at udvikle små, sjove projekter, hvor jeg kan lære nye teknikker og forbedre mine færdigheder. Derudover nyder jeg at spille online spil med venner, hvor strategi og samarbejde er i fokus. Musik har også en stor plads i mit liv - jeg har spillet trompet i <span id="trumpet">18</span> år og får stadig ugentlig undervisning.
                        </p>
                        <p class="cardText">
                            For mig handler både arbejde og fritid om at udvikle mig, lære nyt og dyrke de ting, der giver mig energi og glæde.
                        </p>
                    </div>
                </li>
                <li class="infoCard">
                    <img class="cardImage" src="assets/media/TobiasKompetencer.webp" alt="">
                    <div class="cardInfo">
                        <h2 class="cardTitle">Kompetencer</h2>
                        <div class="horizontalDivider"></div>
                        <p class="cardText">
                            Gennem min uddannelse har jeg opbygget en solid forståelse for webudvikling med fokus på både frontend og backend. Jeg har arbejdet med en bred vifte af teknologier, herunder:
                        </p>
                        <?php include 'skill.php'; ?>
                        <article class="skillsWrapper">
                            <?php foreach ($skills as $sectionTitle => $sectionSkills): ?>
                                <?php 
                                    $skills = $sectionSkills; 
                                    include 'partials/skillList.php'; 
                                ?>
                            <?php endforeach; ?>
                        </article>
                        <p class="cardText">
                            Selvom jeg har erfaring med både frontend og backend, hælder jeg mest til frontend-udvikling, især på grund af min forkærlighed for CSS og designprincipper. Dog er jeg bevidst om, at min begrænsede praktiske erfaring med databaser og server-side udvikling spiller en rolle i denne præference, hvilket jeg meget gerne vil styrke fremadrettet.
                        </p>
                    </div>
                </li>
                <li class="infoCard">
                    <img class="cardImage" src="assets/media/TobiasCoding.webp" alt="">
                    <div class="cardInfo">
                        <h2 class="cardTitle">Uddannelse & Erfaringer</h2>
                        <div class="horizontalDivider"></div>
                        <?php include 'timeline.php'; ?>
                        <ul class="timeline">
                            <?php include 'partials/timelineItem.php'; ?>
                        </ul>
                    </div>
                </li>
            </ul>
        </section>

    </main>
    <?php
        $show_socials = false;
        $show_to_top = true;
        include 'partials/footer.php'
    ?>
</body>
</html>