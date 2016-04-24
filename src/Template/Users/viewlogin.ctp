<div class="container">
<?= $this->Form->create('users/viewlogin'); ?>
    <div class="col-md-4">
        <fieldset>
            <legend><?= __('Login') ?></legend>
            <?php
                echo $this->Form->input('username', array('class' => 'form-control'));
                echo $this->Form->input('password', array('class' => 'form-control'));
            ?>
        </fieldset>
        <div style="padding-top:10px;">
            <?= $this->Form->button(__('Valider'), array('class' => 'btn btn-success')) ?>
        </div>
    </div>
    <?= $this->Form->end() ?>
    </div>

    <div></div>