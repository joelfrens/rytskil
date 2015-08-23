<?php
echo $this->element('navbar');
?>

<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Uk Postcode'), ['action' => 'edit', $ukPostcode->postcode]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Uk Postcode'), ['action' => 'delete', $ukPostcode->postcode], ['confirm' => __('Are you sure you want to delete # {0}?', $ukPostcode->postcode)]) ?> </li>
        <li><?= $this->Html->link(__('List Uk Postcodes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Uk Postcode'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="ukPostcodes view large-10 medium-9 columns">
    <h2><?= h($ukPostcode->postcode) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Postcode') ?></h6>
            <p><?= h($ukPostcode->postcode) ?></p>
            <h6 class="subheader"><?= __('Town') ?></h6>
            <p><?= h($ukPostcode->town) ?></p>
            <h6 class="subheader"><?= __('Region') ?></h6>
            <p><?= h($ukPostcode->region) ?></p>
            <h6 class="subheader"><?= __('Country') ?></h6>
            <p><?= h($ukPostcode->country) ?></p>
            <h6 class="subheader"><?= __('Country String') ?></h6>
            <p><?= h($ukPostcode->country_string) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Eastings') ?></h6>
            <p><?= $this->Number->format($ukPostcode->eastings) ?></p>
            <h6 class="subheader"><?= __('Northings') ?></h6>
            <p><?= $this->Number->format($ukPostcode->northings) ?></p>
            <h6 class="subheader"><?= __('Latitude') ?></h6>
            <p><?= $this->Number->format($ukPostcode->latitude) ?></p>
            <h6 class="subheader"><?= __('Longitude') ?></h6>
            <p><?= $this->Number->format($ukPostcode->longitude) ?></p>
        </div>
    </div>
</div>
