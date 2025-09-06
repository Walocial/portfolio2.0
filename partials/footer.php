<!-- footer.php -->
<?php
    $show_socials = $show_socials ?? true;
    $show_to_top = $show_to_top ?? false;
?>
<footer>
    <?php if ($show_socials):?>
        <div class="socials_widget_wrapper">
            <a href="https://www.linkedin.com/in/tobias-juul-michaelsen-8b1769252/" id="social_linkedin" class="social_button" tabindex="0" target="_blank"><i class="fab fa-linkedin"></i></a>
            <span id="social_linkedin_hover_text" class="hover_text">Besøg min LinkedIn profil<i class="fas fa-external-link"></i></span>
            <a href="mailto:tobias@chakemato.dk" id="social_mail" class="social_button" tabindex="0"><i class="fas fa-envelope"></i></a>
            <span id="social_mail_hover_text" class="hover_text">tobias@chakemato.dk<i class="fas fa-external-link"></i></span>
        </div>
    <?php endif; ?>

    <?php if ($show_to_top):?>
        <div id="Scroll_to_top" tabindex="0" title="Tilbage til toppen"><i class="fas fa-chevron-up"></i></div>
    <?php endif;?>
</footer>