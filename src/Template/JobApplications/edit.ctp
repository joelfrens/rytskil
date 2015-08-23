<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $jobApplication->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $jobApplication->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Job Applications'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Jobs'), ['controller' => 'Jobs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Job'), ['controller' => 'Jobs', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List User Cvs'), ['controller' => 'UserCvs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User Cv'), ['controller' => 'UserCvs', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="jobApplications form large-10 medium-9 columns">
    <?= $this->Form->create($jobApplication) ?>
    <fieldset>
        <legend><?= __('Edit Job Application') ?></legend>
        <?php
            echo $this->Form->input('job_id', ['options' => $jobs]);
            echo $this->Form->input('user_id', ['options' => $users]);
            echo $this->Form->input('custom_message');
            echo $this->Form->input('user_cv_id', ['options' => $userCvs]);
            echo $this->Form->input('date_applied');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
