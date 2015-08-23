<?php
echo $this->element('navbar');
?>
<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit User Cv'), ['action' => 'edit', $userCv->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User Cv'), ['action' => 'delete', $userCv->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userCv->id)]) ?> </li>
        <li><?= $this->Html->link(__('List User Cvs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User Cv'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Job Applications'), ['controller' => 'JobApplications', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Job Application'), ['controller' => 'JobApplications', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="userCvs view large-10 medium-9 columns">
    <h2><?= h($userCv->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('User') ?></h6>
            <p><?= $userCv->has('user') ? $this->Html->link($userCv->user->id, ['controller' => 'Users', 'action' => 'view', $userCv->user->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Cv Title') ?></h6>
            <p><?= h($userCv->cv_title) ?></p>
            <h6 class="subheader"><?= __('Cv File') ?></h6>
            <p><?= h($userCv->cv_file) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($userCv->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Date Created') ?></h6>
            <p><?= h($userCv->date_created) ?></p>
        </div>
        <div class="large-2 columns booleans end">
            <h6 class="subheader"><?= __('Status') ?></h6>
            <p><?= $userCv->status ? __('Yes') : __('No'); ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Job Applications') ?></h4>
    <?php if (!empty($userCv->job_applications)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Job Id') ?></th>
            <th><?= __('User Id') ?></th>
            <th><?= __('Custom Message') ?></th>
            <th><?= __('User Cv Id') ?></th>
            <th><?= __('Date Applied') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($userCv->job_applications as $jobApplications): ?>
        <tr>
            <td><?= h($jobApplications->id) ?></td>
            <td><?= h($jobApplications->job_id) ?></td>
            <td><?= h($jobApplications->user_id) ?></td>
            <td><?= h($jobApplications->custom_message) ?></td>
            <td><?= h($jobApplications->user_cv_id) ?></td>
            <td><?= h($jobApplications->date_applied) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'JobApplications', 'action' => 'view', $jobApplications->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'JobApplications', 'action' => 'edit', $jobApplications->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'JobApplications', 'action' => 'delete', $jobApplications->id], ['confirm' => __('Are you sure you want to delete # {0}?', $jobApplications->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
