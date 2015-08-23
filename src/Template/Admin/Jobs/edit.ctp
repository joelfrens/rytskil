<?php
echo $this->element('navbar');
?>
<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $job->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $job->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Jobs'), ['action' => 'index']) ?></li>
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
<div class="jobs form large-10 medium-9 columns">
    <?= $this->Form->create($job) ?>
    <fieldset>
        <legend><?= __('Edit Job') ?></legend>
        <?php
            echo $this->Form->input('agency_id', ['options' => $agencies]);
            echo $this->Form->input('job_title');
            echo $this->Form->input('job_description');
            echo $this->Form->input('uk_postcode_id', ['options' => $ukPostcodes]);
            echo $this->Form->input('salary');
            echo $this->Form->input('job_type_id', ['options' => $jobTypes]);
            echo $this->Form->input('date_created');
            echo $this->Form->input('expiry_date');
            echo $this->Form->input('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
