<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $articles
 */
?>
<div class="articles index content">
    <?= $this->Html->link(__('Thêm bài viết'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Danh sách bài viết') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('Thuộc danh mục') ?></th>
                    <th><?= $this->Paginator->sort('Tiêu đề') ?></th>
                    <th><?= $this->Paginator->sort('Ảnh nền') ?></th>
                    <th><?= $this->Paginator->sort('Ngày tạo') ?></th>
                    <th class="actions"><?= __('Hành động') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($articles as $article): ?>
                <tr>
                    <td><?= $this->Number->format($article->id) ?></td>
                    <td><?= $this->Number->format($article->categoryId) ?></td>
                    <td><?= $article->meta_title ?></td>
                    <td><img src="<?= $article->meta_image ?>" alt="" height="70"></td>
                    <td><?= h($article->created_at) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Xem'), ['action' => 'view', $article->id]) ?>
                        <?= $this->Html->link(__('Sửa'), ['action' => 'edit', $article->id]) ?>
                        <?= $this->Form->postLink(__('Xóa'), ['action' => 'delete', $article->id], ['confirm' => __('Bạn có chắc chắn muốn xóa # {0}?', $article->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?php if($this->Paginator->numbers()): ?>
                <?= $this->Paginator->first('<< ' . __('Đầu')) ?>
                <?= $this->Paginator->prev('< ' . __('Trước')) ?>
                <?= $this->Paginator->numbers() ?>
                <?= $this->Paginator->next(__('Sau') . ' >') ?>
                <?= $this->Paginator->last(__('Cuối') . ' >>') ?>
            <?php endif; ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Trang {{page}} / {{pages}}, hiển thị {{current}} trên tổng số {{count}} bài viết')) ?></p>
    </div>
</div>
