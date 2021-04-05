<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $category
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Hành động') ?></h4>
            <?= $this->Html->link(__('Danh sách danh mục'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="categories form content">
            <?= $this->Form->create($category) ?>
            <fieldset>
                <legend><?= __('Thêm danh mục') ?></legend>
                <?php
                    echo $this->Form->control('meta_title');
                    echo $this->Form->control('meta_desc');
                    echo $this->Form->control('meta_keyword');
                    echo $this->Form->control('created_at', ['empty' => true]);
                    echo $this->Form->control('updated_at', ['empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Lưu')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
