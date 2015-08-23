<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Job'), ['action' => 'edit', $job->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Job'), ['action' => 'delete', $job->id], ['confirm' => __('Are you sure you want to delete # {0}?', $job->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Jobs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Job'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Agencies'), ['controller' => 'Agencies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Agency'), ['controller' => 'Agencies', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Uk Postcodes'), ['controller' => 'UkPostcodes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Uk Postcode'), ['controller' => 'UkPostcodes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Job Types'), ['controller' => 'JobTypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Job Type'), ['controller' => 'JobTypes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Comments'), ['controller' => 'Comments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Comment'), ['controller' => 'Comments', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Job Applications'), ['controller' => 'JobApplications', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Job Application'), ['controller' => 'JobApplications', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="jobs view large-10 medium-9 columns">
    <h2><?= h($job->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Agency') ?></h6>
            <p><?= $job->has('agency') ? $this->Html->link($job->agency->id, ['controller' => 'Agencies', 'action' => 'view', $job->agency->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Job Title') ?></h6>
            <p><?= h($job->job_title) ?></p>
            <h6 class="subheader"><?= __('Uk Postcode') ?></h6>
            <p><?= $job->has('uk_postcode') ? $this->Html->link($job->uk_postcode->postcode, ['controller' => 'UkPostcodes', 'action' => 'view', $job->uk_postcode->postcode]) : '' ?></p>
            <h6 class="subheader"><?= __('Salary') ?></h6>
            <p><?= h($job->salary) ?></p>
            <h6 class="subheader"><?= __('Job Type') ?></h6>
            <p><?= $job->has('job_type') ? $this->Html->link($job->job_type->id, ['controller' => 'JobTypes', 'action' => 'view', $job->job_type->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($job->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Date Created') ?></h6>
            <p><?= h($job->date_created) ?></p>
            <h6 class="subheader"><?= __('Expiry Date') ?></h6>
            <p><?= h($job->expiry_date) ?></p>
        </div>
        <div class="large-2 columns booleans end">
            <h6 class="subheader"><?= __('Status') ?></h6>
            <p><?= $job->status ? __('Yes') : __('No'); ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Job Description') ?></h6>
            <?= $this->Text->autoParagraph(h($job->job_description)) ?>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Comments') ?></h4>
    <?php if (!empty($job->comments)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Job Id') ?></th>
            <th><?= __('User Id') ?></th>
            <th><?= __('Comment') ?></th>
            <th><?= __('Flagged') ?></th>
            <th><?= __('Date Created') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($job->comments as $comments): ?>
        <tr>
            <td><?= h($comments->id) ?></td>
            <td><?= h($comments->job_id) ?></td>
            <td><?= h($comments->user_id) ?></td>
            <td><?= h($comments->comment) ?></td>
            <td><?= h($comments->flagged) ?></td>
            <td><?= h($comments->date_created) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Comments', 'action' => 'view', $comments->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Comments', 'action' => 'edit', $comments->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Comments', 'action' => 'delete', $comments->id], ['confirm' => __('Are you sure you want to delete # {0}?', $comments->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Job Applications') ?></h4>
    <?php if (!empty($job->job_applications)): ?>
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
        <?php foreach ($job->job_applications as $jobApplications): ?>
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
