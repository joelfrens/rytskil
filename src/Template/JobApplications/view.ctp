<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Job Application'), ['action' => 'edit', $jobApplication->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Job Application'), ['action' => 'delete', $jobApplication->id], ['confirm' => __('Are you sure you want to delete # {0}?', $jobApplication->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Job Applications'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Job Application'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Jobs'), ['controller' => 'Jobs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Job'), ['controller' => 'Jobs', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List User Cvs'), ['controller' => 'UserCvs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User Cv'), ['controller' => 'UserCvs', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="jobApplications view large-10 medium-9 columns">
    <h2><?= h($jobApplication->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Job') ?></h6>
            <p><?= $jobApplication->has('job') ? $this->Html->link($jobApplication->job->id, ['controller' => 'Jobs', 'action' => 'view', $jobApplication->job->id]) : '' ?></p>
            <h6 class="subheader"><?= __('User') ?></h6>
            <p><?= $jobApplication->has('user') ? $this->Html->link($jobApplication->user->id, ['controller' => 'Users', 'action' => 'view', $jobApplication->user->id]) : '' ?></p>
            <h6 class="subheader"><?= __('User Cv') ?></h6>
            <p><?= $jobApplication->has('user_cv') ? $this->Html->link($jobApplication->user_cv->id, ['controller' => 'UserCvs', 'action' => 'view', $jobApplication->user_cv->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($jobApplication->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Date Applied') ?></h6>
            <p><?= h($jobApplication->date_applied) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Custom Message') ?></h6>
            <?= $this->Text->autoParagraph(h($jobApplication->custom_message)) ?>
        </div>
    </div>
</div>
