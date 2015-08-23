<?php
echo $this->element('navbar');
?>
<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Job Type'), ['action' => 'edit', $jobType->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Job Type'), ['action' => 'delete', $jobType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $jobType->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Job Types'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Job Type'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Jobs'), ['controller' => 'Jobs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Job'), ['controller' => 'Jobs', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="jobTypes view large-10 medium-9 columns">
    <h2><?= h($jobType->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Job Type Name') ?></h6>
            <p><?= h($jobType->job_type_name) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($jobType->id) ?></p>
        </div>
        <div class="large-2 columns booleans end">
            <h6 class="subheader"><?= __('Status') ?></h6>
            <p><?= $jobType->status ? __('Yes') : __('No'); ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Jobs') ?></h4>
    <?php if (!empty($jobType->jobs)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Agency Id') ?></th>
            <th><?= __('Job Title') ?></th>
            <th><?= __('Job Description') ?></th>
            <th><?= __('Uk Postcode Id') ?></th>
            <th><?= __('Salary') ?></th>
            <th><?= __('Job Type Id') ?></th>
            <th><?= __('Date Created') ?></th>
            <th><?= __('Expiry Date') ?></th>
            <th><?= __('Status') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($jobType->jobs as $jobs): ?>
        <tr>
            <td><?= h($jobs->id) ?></td>
            <td><?= h($jobs->agency_id) ?></td>
            <td><?= h($jobs->job_title) ?></td>
            <td><?= h($jobs->job_description) ?></td>
            <td><?= h($jobs->uk_postcode_id) ?></td>
            <td><?= h($jobs->salary) ?></td>
            <td><?= h($jobs->job_type_id) ?></td>
            <td><?= h($jobs->date_created) ?></td>
            <td><?= h($jobs->expiry_date) ?></td>
            <td><?= h($jobs->status) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Jobs', 'action' => 'view', $jobs->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Jobs', 'action' => 'edit', $jobs->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Jobs', 'action' => 'delete', $jobs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $jobs->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
