<!-- File: src/Template/Users/login.ctp -->

<div class="users form" style='width:300px;margin:0 auto'>
<?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Admin Login') ?></legend>
        <?= $this->Form->input('username') ?>
        <?= $this->Form->input('password') ?>
    </fieldset>
<?= $this->Form->button(__('Login')); ?>
<?= $this->Form->end() ?>
</div>