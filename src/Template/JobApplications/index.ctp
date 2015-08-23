<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Job Application'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Jobs'), ['controller' => 'Jobs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Job'), ['controller' => 'Jobs', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List User Cvs'), ['controller' => 'UserCvs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User Cv'), ['controller' => 'UserCvs', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="jobApplications index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('job_id') ?></th>
            <th><?= $this->Paginator->sort('user_id') ?></th>
            <th><?= $this->Paginator->sort('user_cv_id') ?></th>
            <th><?= $this->Paginator->sort('date_applied') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($jobApplications as $jobApplication): ?>
        <tr>
            <td><?= $this->Number->format($jobApplication->id) ?></td>
            <td>
                <?= $jobApplication->has('job') ? $this->Html->link($jobApplication->job->id, ['controller' => 'Jobs', 'action' => 'view', $jobApplication->job->id]) : '' ?>
            </td>
            <td>
                <?= $jobApplication->has('user') ? $this->Html->link($jobApplication->user->id, ['controller' => 'Users', 'action' => 'view', $jobApplication->user->id]) : '' ?>
            </td>
            <td>
                <?= $jobApplication->has('user_cv') ? $this->Html->link($jobApplication->user_cv->id, ['controller' => 'UserCvs', 'action' => 'view', $jobApplication->user_cv->id]) : '' ?>
            </td>
            <td><?= h($jobApplication->date_applied) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $jobApplication->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $jobApplication->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $jobApplication->id], ['confirm' => __('Are you sure you want to delete # {0}?', $jobApplication->id)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
