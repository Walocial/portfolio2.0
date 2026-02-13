<?php foreach ($timeline as $index => $item): ?>
    <li class="timeline-item" style="grid-row: <?= $index + 1 ?>;">
        <i class="timeline-icon fas fa-<?= $item['icon'] ?>"></i>
        <div class="timeline-content">
            <h3 class="timeline-title"><?= $item['title'] ?></h3>
            <p class="timeline-date"><?= $item['date'] ?></p>
            <p class="timeline-desc"><?= $item['desc'] ?></p>
            <?php if (!empty($item['skills'])): ?>
                <div class="timeline-skills">
                    <h4>Fagligheder:</h4>
                    <ul>
                        <?php foreach ($item['skills'] as $skill): ?>
                            <li><?= $skill ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>
            <?php if (!empty($item['ref'])): ?>
                <aside class="timeline-quoteblock">
                    <h4>Udtalelse:</h4>
                        <a class="timeline-reference" href="<?= htmlspecialchars($item['ref']) ?>" target="_blank" title="Åbn udtalelse i en ny fane">
                            Læs udtalelsen <i class="fas fa-external-link"></i>
                        </a>
                </aside>
            <?php endif; ?>
        </div>
    </li>
<?php endforeach; ?>