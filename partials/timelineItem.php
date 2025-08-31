<li class="timeline-item">
    <i class="timeline-icon fas fa-<?= $item['type'] ?>"></i>
    <div class="timeline-content">
        <h3><?= $item['title'] ?></h3>
        <p><?= $item['years'] ?></p>
        <?php if (!empty($item['skills'])): ?>
            <div class="timeline-skills">
                <h4>Fagligheder:</h4>
                <ul>
                    <?php foreach ($item['skills'] as $skill): ?>
                        <li><?= $skill ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <?php if (!empty($item['rec'])): ?>
                <a class="timeline-recommendation" href="<?= htmlspecialchars($item['rec']) ?>" target="_blank" title="Åbn anbefaling fra <?= $item['title']?> i en ny fane">
                    Anbefaling <i class="fas fa-external-link"></i>
                </a>
            <?php endif; ?>
        <?php endif; ?>
    </div>
</li>