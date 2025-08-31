<aside class="skillsSection">
    <h2 class="skillsTitle"><?= $sectionTitle ?></h2>
    <ul class="skillsList">
        <?php foreach ($skills as $skill): ?>
            <li class="skill">
                <h4 class="skillName"><?= $skill['name'] ?></h4>
                <div class="progressBar">
                    <div class="progress" id="<?= $skill['id'] ?>"></div>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>
</aside>
