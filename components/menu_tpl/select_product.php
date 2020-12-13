<option
    value="<?= $category['id_category']?>"
    <?php if($category['id_category'] == $this->model->id_category) echo ' selected'?>
    ><?= $tab . $category['name']?></option>
<?php if( isset($category['childs']) ): ?>
    <ul>
        <?= $this->getMenuHtml($category['childs'], $tab . '-')?>
    </ul>
<?php endif;?>