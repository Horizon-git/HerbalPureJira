<li style="list-style-type: none;">
    <a href="<?= \yii\helpers\Url::to(['category/view', 'id' => $category['id_category']]) ?>">
        <?= $category['name']?>
        <?php if( isset($category['childs']) ): ?>
            <span class="badge1 pull-right"><i class="fa fa-plus"></i></span>
        <?php endif;?>
    </a>
    <?php if( isset($category['childs']) ): ?>
        <ul style="margin-left: 15px;padding-left: 0; list-style-type: none;">
            <?= $this->getMenuHtml($category['childs'])?>
        </ul>
    <?php endif;?>
</li>