<h1>
    Journées liées à la compétition numéro
    <?= $this->Text->toList($competitions) ?>
</h1>

<section>
<?php foreach ($journees as $journee): ?>
    <article>
        <!-- Utilise le HtmlHelper pour créer un lien -->
        <h4><?= $this->Html->link($journee->id, $journee->nomJournée) ?></h4>
        <small><?= h($journee->nomJournée) ?></small>

        <!-- Utilise le TextHelper pour formater le texte -->
        <?= $this->Text->autoParagraph($journee->nomJournée) ?>
    </article>
<?php endforeach; ?>
</section>