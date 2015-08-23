<?php
echo $this->element('navbar');
?>
<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Job'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Agencies'), ['controller' => 'Agencies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Agency'), ['controller' => 'Agencies', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Uk Postcodes'), ['controller' => 'UkPostcodes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Uk Postcode'), ['controller' => 'UkPostcodes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Job Types'), ['controller' => 'JobTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Job Type'), ['controller' => 'JobTypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Comments'), ['controller' => 'Comments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Comment'), ['controller' => 'Comments', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Job Applications'), ['controller' => 'JobApplications', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Job Application'), ['controller' => 'JobApplications', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="jobs index large-10 medium-9 columns">
    <div class="table-responsive">
        <table cellpadding="0" cellspacing="0" class="table">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('agency_id') ?></th>
                <th><?= $this->Paginator->sort('job_title') ?></th>
                <th><?= $this->Paginator->sort('uk_postcode_id') ?></th>
                <th><?= $this->Paginator->sort('salary') ?></th>
                <th><?= $this->Paginator->sort('job_type_id') ?></th>
                <th><?= $this->Paginator->sort('date_created') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($jobs as $job): ?>
            <tr>
                <td><?= $this->Number->format($job->id) ?></td>
                <td>
                    <?= $job->has('agency') ? $this->Html->link($job->agency->id, ['controller' => 'Agencies', 'action' => 'view', $job->agency->id]) : '' ?>
                </td>
                <td><?= h($job->job_title) ?></td>
                <td>
                    <?= $job->has('uk_postcode') ? $this->Html->link($job->uk_postcode->postcode, ['controller' => 'UkPostcodes', 'action' => 'view', $job->uk_postcode->postcode]) : '' ?>
                </td>
                <td><?= h($job->salary) ?></td>
                <td>
                    <?= $job->has('job_type') ? $this->Html->link($job->job_type->id, ['controller' => 'JobTypes', 'action' => 'view', $job->job_type->id]) : '' ?>
                </td>
                <td><?= h($job->date_created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $job->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $job->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $job->id], ['confirm' => __('Are you sure you want to delete # {0}?', $job->id)]) ?>
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
