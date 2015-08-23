<?php
echo $this->element('navbar');
?>
<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New User Cv'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Job Applications'), ['controller' => 'JobApplications', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Job Application'), ['controller' => 'JobApplications', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="userCvs index large-10 medium-9 columns">
    <div class="table-responsive">
        <table cellpadding="0" cellspacing="0" class="table">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('user_id') ?></th>
                <th><?= $this->Paginator->sort('cv_title') ?></th>
                <th><?= $this->Paginator->sort('cv_file') ?></th>
                <th><?= $this->Paginator->sort('date_created') ?></th>
                <th><?= $this->Paginator->sort('status') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($userCvs as $userCv): ?>
            <tr>
                <td><?= $this->Number->format($userCv->id) ?></td>
                <td>
                    <?= $userCv->has('user') ? $this->Html->link($userCv->user->id, ['controller' => 'Users', 'action' => 'view', $userCv->user->id]) : '' ?>
                </td>
                <td><?= h($userCv->cv_title) ?></td>
                <td><?= h($userCv->cv_file) ?></td>
                <td><?= h($userCv->date_created) ?></td>
                <td><?= h($userCv->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $userCv->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $userCv->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $userCv->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userCv->id)]) ?>
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
