<?php
echo $this->element('navbar');
?>

<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Uk Postcodes'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="ukPostcodes form large-10 medium-9 columns">
    <?= $this->Form->create($ukPostcode) ?>
    <fieldset>
        <legend><?= __('Add Uk Postcode') ?></legend>
        <?php
            echo $this->Form->input('eastings');
            echo $this->Form->input('northings');
            echo $this->Form->input('latitude');
            echo $this->Form->input('longitude');
            echo $this->Form->input('town');
            echo $this->Form->input('region');
            echo $this->Form->input('country');
            echo $this->Form->input('country_string');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
