<?php
echo $this->element('navbar');
?>
<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Agency Recommendation'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Agencies'), ['controller' => 'Agencies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Agency'), ['controller' => 'Agencies', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="agencyRecommendations index large-10 medium-9 columns">
    <div class="table-responsive">
        <table cellpadding="0" cellspacing="0" class="table">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('agency_id') ?></th>
                <th><?= $this->Paginator->sort('candidate_id') ?></th>
                <th><?= $this->Paginator->sort('date_created') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($agencyRecommendations as $agencyRecommendation): ?>
            <tr>
                <td><?= $this->Number->format($agencyRecommendation->id) ?></td>
                <td>
                    <?= $agencyRecommendation->has('agency') ? $this->Html->link($agencyRecommendation->agency->id, ['controller' => 'Agencies', 'action' => 'view', $agencyRecommendation->agency->id]) : '' ?>
                </td>
                <td><?= $this->Number->format($agencyRecommendation->candidate_id) ?></td>
                <td><?= h($agencyRecommendation->date_created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $agencyRecommendation->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $agencyRecommendation->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $agencyRecommendation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $agencyRecommendation->id)]) ?>
                </td>
            </tr>

        <?php endforeach; ?>
        </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
