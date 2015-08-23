<?php
echo $this->element('navbar');
?>
<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit User Recommendation'), ['action' => 'edit', $userRecommendation->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User Recommendation'), ['action' => 'delete', $userRecommendation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userRecommendation->id)]) ?> </li>
        <li><?= $this->Html->link(__('List User Recommendations'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User Recommendation'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="userRecommendations view large-10 medium-9 columns">
    <h2><?= h($userRecommendation->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('User') ?></h6>
            <p><?= $userRecommendation->has('user') ? $this->Html->link($userRecommendation->user->id, ['controller' => 'Users', 'action' => 'view', $userRecommendation->user->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($userRecommendation->id) ?></p>
            <h6 class="subheader"><?= __('Candidate Id') ?></h6>
            <p><?= $this->Number->format($userRecommendation->candidate_id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Date Created') ?></h6>
            <p><?= h($userRecommendation->date_created) ?></p>
        </div>
    </div>
</div>
