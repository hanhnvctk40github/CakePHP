<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $article
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Hành động') ?></h4>
            <?= $this->Html->link(__('Sửa bài viết'), ['action' => 'edit', $article->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Xóa bài viết'), ['action' => 'delete', $article->id], ['confirm' => __('Bạn có chắc chắn muốn xóa #{0}?', $article->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Danh sách bài viết'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Thêm bài viết mới'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="articles view content">
            <h3><?= h($article->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($article->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('CategoryId') ?></th>
                    <td><?= $this->Number->format($article->categoryId) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created At') ?></th>
                    <td><?= h($article->created_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Updated At') ?></th>
                    <td><?= h($article->updated_at) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Meta Title') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($article->meta_title)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Meta Desc') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($article->meta_desc)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Meta Image') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($article->meta_image)); ?>
                    <img src="<?= $article->meta_image ?>" alt="">
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Meta Keyword') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($article->meta_keyword)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($article->description)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
