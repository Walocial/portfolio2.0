<!-- header.php -->
<?php
    $pageTitle = $pageTitle ?? "TjuulM Portefølje";
    $pageDescription = $pageDescription ?? "Et portefølje der fremviser Tobias Juul Michaelsen's kompetencer og cases.";
    $pageCanonical = $pageCanonical ?? "";
?>
<!DOCTYPE html>
<html lang="da-dk">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= htmlspecialchars($pageTitle) ?></title>
    <meta name="title" content="<?= htmlspecialchars($pageTitle) ?>">
    <meta name="description" content="<?= htmlspecialchars($pageDescription) ?>">
    
    <!-- Faste meta -->
    <meta name="author" content="Tobias Juul Michaelsen">
    <meta name="keywords" content="Portefølje, webudvikler, Multimediedesigner, Webudvikler Portefølje, portfolio">
    <link rel="canonical" href="https://tjuulm.dk/<?= htmlspecialchars($pageCanonical) ?>">
    <meta name="robots" content="index, follow">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://tjuulm.dk/">
    <meta property="og:title" content="<?= htmlspecialchars($pageTitle) ?>">
    <meta property="og:description" content="<?= htmlspecialchars($pageDescription) ?>">
    <meta property="og:image" content="https://tjuulm.dk/assets/media/tjmLogo_default_app.png">

    <!-- CSS + JS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css">
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/animations.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="scripts/main.js" defer></script>
    <script src="scripts/age.js" defer></script>
    <link rel="icon" href="https://tjuulm.dk/assets/media/tjmLogo_default_app.png" type="image/png">
</head>
<body>
    <header>
        <a href="index.php" class="responsiveLogo">
            <picture>
                <source id="logo_default" srcset="assets/media/tjmLogo_default.png" width="486.5" height="135.5" media="(min-width: 725px)">
                <img src="assets/media/tjmLogo_default_app.png" id="logo_app" alt="Logo for Tobias Juul Michaelsen's Portefølje" title="Til forsiden for tjuulm.dk" width="50" height="55">
            </picture>
        </a>
        <h2 class="highlighted_text_color hidden_on_mobile" id="tagLine">Multimediedesigner / Professionsbachelor i Webudvikling</h2>
        <div id="settingsWrapper">
            <i id="settingsChevron" class="fas fa-chevron-left"></i>
            <i id="settingsBtn" class="fas fa-gear headerIcon" title="Skift sidens indstillinger" aria-label="Skift sidens indstillinger" tabindex="0"></i>
            <i class="fas fa-pause subIcon headerIcon" id="animationStop" title="Stop animationer" aria-label="Stop animationer" tabindex="0"></i>
            <i class="fas fa-sun subIcon headerIcon" id="themeChange" title="Skift sidens tema" aria-label="Skift sidens tema" tabindex="0"></i>
        </div>
    </header>
