<?php
echo $this->element('navbar');
?>
<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Occupation'), ['action' => 'edit', $occupation->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Occupation'), ['action' => 'delete', $occupation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $occupation->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Occupations'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Occupation'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Parent Occupations'), ['controller' => 'Occupations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Parent Occupation'), ['controller' => 'Occupations', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="occupations view large-10 medium-9 columns">
    <h2><?= h($occupation->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Occuption Name') ?></h6>
            <p><?= h($occupation->occuption_name) ?></p>
            <h6 class="subheader"><?= __('Parent Occupation') ?></h6>
            <p><?= $occupation->has('parent_occupation') ? $this->Html->link($occupation->parent_occupation->id, ['controller' => 'Occupations', 'action' => 'view', $occupation->parent_occupation->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($occupation->id) ?></p>
        </div>
        <div class="large-2 columns booleans end">
            <h6 class="subheader"><?= __('Status') ?></h6>
            <p><?= $occupation->status ? __('Yes') : __('No'); ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Occupations') ?></h4>
    <?php if (!empty($occupation->child_occupations)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Occuption Name') ?></th>
            <th><?= __('Parent Id') ?></th>
            <th><?= __('Status') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($occupation->child_occupations as $childOccupations): ?>
        <tr>
            <td><?= h($childOccupations->id) ?></td>
            <td><?= h($childOccupations->occuption_name) ?></td>
            <td><?= h($childOccupations->parent_id) ?></td>
            <td><?= h($childOccupations->status) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Occupations', 'action' => 'view', $childOccupations->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Occupations', 'action' => 'edit', $childOccupations->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Occupations', 'action' => 'delete', $childOccupations->id], ['confirm' => __('Are you sure you want to delete # {0}?', $childOccupations->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
