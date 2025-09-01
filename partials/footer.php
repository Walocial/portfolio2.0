<!-- footer.php -->
<?php
    $show_socials = $show_socials ?? true;
    $show_to_top = $show_to_top ?? false;
?>
<footer>
    <?php if ($show_socials):?>
        <div class="socials_widget_wrapper">
            <a href="" class="social_button" tabindex="0"><i class="fab fa-linkedin"></i></a>
            <span class="hover_text">Tobias Juul Michalsen<i class="fas fa-external-link"></i></span>
            <a href="mailto:tobias@chakemato.dk" class="social_button" tabindex="0"><i class="fas fa-envelope"></i></a>
            <span class="hover_text">tobias@chakemato.dk<i class="fas fa-external-link"></i></span>
        </div>
    <?php endif; ?>

    <?php if ($show_to_top):?>
        <div id="Scroll_to_top">Tilbage til toppen</div>
    <?php endif;?>
</footer>