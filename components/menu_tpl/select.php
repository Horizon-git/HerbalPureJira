<option
    value="<?= $category['id_category']?>"
    <?php if($category['id_category'] == $this->model->parent_id) echo ' selected'?>
    <?php if($category['id_category'] == $this->model->id_category) echo ' disabled'?>
><?= $tab . $category['name']?></option>
<?php if( isset($category['childs']) ): ?>
    <ul>
        <?= $this->getMenuHtml($category['childs'], $tab . ' -')?>
    </ul>
<?php endif;?>