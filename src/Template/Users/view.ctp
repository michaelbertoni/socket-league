<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3>DETAILS</h3>

     <div class="row">
            <div class="col-md-3">
              <label> <?= __('LoginUser') ?></label>
            </div>
            <div class="col-md-3">
                <?= h($user->loginUser) ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
              <label><?= __('PasswordUser') ?></label>
            </div>
            <div class="col-md-3">
                <?= h($user->passwordUser) ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
              <label><?= __('Id') ?></label>
            </div>
            <div class="col-md-3">
                <?= $this->Number->format($user->id) ?>
            </div>
        </div>
</div>
