<?php
echo $this->element('navbar');
?>

<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Uk Postcode'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="ukPostcodes index large-10 medium-9 columns">
    <div class="table-responsive">
        <table cellpadding="0" cellspacing="0" class="table">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('postcode') ?></th>
                <th><?= $this->Paginator->sort('eastings') ?></th>
                <th><?= $this->Paginator->sort('northings') ?></th>
                <th><?= $this->Paginator->sort('latitude') ?></th>
                <th><?= $this->Paginator->sort('longitude') ?></th>
                <th><?= $this->Paginator->sort('town') ?></th>
                <th><?= $this->Paginator->sort('region') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($ukPostcodes as $ukPostcode): ?>
            <tr>
                <td><?= h($ukPostcode->postcode) ?></td>
                <td><?= $this->Number->format($ukPostcode->eastings) ?></td>
                <td><?= $this->Number->format($ukPostcode->northings) ?></td>
                <td><?= $this->Number->format($ukPostcode->latitude) ?></td>
                <td><?= $this->Number->format($ukPostcode->longitude) ?></td>
                <td><?= h($ukPostcode->town) ?></td>
                <td><?= h($ukPostcode->region) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $ukPostcode->postcode]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ukPostcode->postcode]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ukPostcode->postcode], ['confirm' => __('Are you sure you want to delete # {0}?', $ukPostcode->postcode)]) ?>
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
