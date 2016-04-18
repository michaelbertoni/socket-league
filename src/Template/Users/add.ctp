<div class="row">
    <div class="col-sm-2 sidebar">
        <ul class="nav nav-sidebar">
            <li class="heading"><?= __('Actions') ?></li>
            <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
        </ul>
    </div>
    <div class="col-sm-6 main">
        <?= $this->Form->create($user) ?>
        <fieldset>
            <legend><?= __('Add User') ?></legend>
            <?php
                echo $this->Form->input('loginUser', array('class' => 'form-control'));
                echo $this->Form->input('passwordUser', array('class' => 'form-control'));
            ?>
        </fieldset>
        <?= $this->Form->button(__('Submit'), array('class' => 'btn btn-default', 'style' => "margin-top: 30px")) ?>
        <?= $this->Form->end() ?>
    </div>
</div>