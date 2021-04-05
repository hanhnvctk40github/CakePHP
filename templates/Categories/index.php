<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $categories
 */
?>
<div class="categories index content">
    <?= $this->Html->link(__('Thêm danh mục'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Danh sách danh mục') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('Tiêu đề') ?></th>
                    <th><?= $this->Paginator->sort('Mô tả') ?></th>
                    <th><?= $this->Paginator->sort('Ngày tạo') ?></th>
                    <th class="actions"><?= __('Hành động') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($categories as $category): ?>
                <tr>
                    <td><?= $this->Number->format($category->id) ?></td>
                    <td><?= $category->meta_title ?></td>
                    <td><?= $category->meta_desc ?></td>
                    <td><?= h($category->created_at) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Xem'), ['action' => 'view', $category->id]) ?>
                        <?= $this->Html->link(__('Sửa'), ['action' => 'edit', $category->id]) ?>
                        <?= $this->Form->postLink(__('Xóa'), ['action' => 'delete', $category->id], ['confirm' => __('Bạn muốn xóa danh mục có id # {0}?', $category->id)]) ?>
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
        <p><?= $this->Paginator->counter(__('Trang {{page}} / {{pages}}, hiển thị {{current}} trên tổng số {{count}} danh mục')) ?></p>
    </div>
</div>
