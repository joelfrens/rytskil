<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Agency Recommendation'), ['action' => 'edit', $agencyRecommendation->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Agency Recommendation'), ['action' => 'delete', $agencyRecommendation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $agencyRecommendation->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Agency Recommendations'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Agency Recommendation'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Agencies'), ['controller' => 'Agencies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Agency'), ['controller' => 'Agencies', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="agencyRecommendations view large-10 medium-9 columns">
    <h2><?= h($agencyRecommendation->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Agency') ?></h6>
            <p><?= $agencyRecommendation->has('agency') ? $this->Html->link($agencyRecommendation->agency->id, ['controller' => 'Agencies', 'action' => 'view', $agencyRecommendation->agency->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($agencyRecommendation->id) ?></p>
            <h6 class="subheader"><?= __('Candidate Id') ?></h6>
            <p><?= $this->Number->format($agencyRecommendation->candidate_id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Date Created') ?></h6>
            <p><?= h($agencyRecommendation->date_created) ?></p>
        </div>
    </div>
</div>
