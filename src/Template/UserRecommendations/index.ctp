<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New User Recommendation'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="userRecommendations index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('user_id') ?></th>
            <th><?= $this->Paginator->sort('candidate_id') ?></th>
            <th><?= $this->Paginator->sort('date_created') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($userRecommendations as $userRecommendation): ?>
        <tr>
            <td><?= $this->Number->format($userRecommendation->id) ?></td>
            <td>
                <?= $userRecommendation->has('user') ? $this->Html->link($userRecommendation->user->id, ['controller' => 'Users', 'action' => 'view', $userRecommendation->user->id]) : '' ?>
            </td>
            <td><?= $this->Number->format($userRecommendation->candidate_id) ?></td>
            <td><?= h($userRecommendation->date_created) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $userRecommendation->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $userRecommendation->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $userRecommendation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userRecommendation->id)]) ?>
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
