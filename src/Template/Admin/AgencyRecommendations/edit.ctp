<?php
echo $this->element('navbar');
?>
<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $agencyRecommendation->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $agencyRecommendation->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Agency Recommendations'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Agencies'), ['controller' => 'Agencies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Agency'), ['controller' => 'Agencies', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="agencyRecommendations form large-10 medium-9 columns">
    <?= $this->Form->create($agencyRecommendation) ?>
    <fieldset>
        <legend><?= __('Edit Agency Recommendation') ?></legend>
        <?php
            echo $this->Form->input('agency_id', ['options' => $agencies]);
            echo $this->Form->input('candidate_id');
            echo $this->Form->input('date_created');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
