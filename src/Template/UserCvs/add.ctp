<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List User Cvs'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Job Applications'), ['controller' => 'JobApplications', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Job Application'), ['controller' => 'JobApplications', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="userCvs form large-10 medium-9 columns">
    <?= $this->Form->create($userCv) ?>
    <fieldset>
        <legend><?= __('Add User Cv') ?></legend>
        <?php
            echo $this->Form->input('user_id', ['options' => $users]);
            echo $this->Form->input('cv_title');
            echo $this->Form->input('cv_file');
            echo $this->Form->input('date_created');
            echo $this->Form->input('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
