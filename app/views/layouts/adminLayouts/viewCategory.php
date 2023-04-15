<?php self::render('block/admin/header', $sub_content) ?>

<div class="option-bar py-3">
    <div class="ctn">
        <a href="<?php echo _web_root; ?>/admin/category" class="option-item active"><span class="title">View category</span></a>
        <a href="<?php echo _web_root; ?>/admin/addCategory" class="option-item"><span class="title">Add Category</span></a>
    </div>
</div>
<div class="content">
    <div class="catefory-title mt-3">Category</div>
    <?php if (!empty($categorys)) : ?>
        <table class="data-tb mt-3">
            <tr class="data-tb-row">
                <?php foreach ($categorys[0] as $key => $value) : ?>
                    <th class="data-tb-col"> <?php echo $key; ?></th>
                <?php endforeach ?>
                <th class="data-tb-col" style="min-width: 102px;">Modify</th>
            </tr>
            <?php if (!empty($categorys))
                foreach ($categorys as $category) : ?>
                <tr class="data-tb-row">
                    <?php foreach ($category as $key => $value) {
                        echo '<td class="data-tb-col">' . $value . '</td>';
                    }
                    ?>
                    <td class="data-tb-col modify"><a href="#">Edit</a> <a tb-data-id="<?php echo $category['id'] ?>" class="delete-category-btn">Delete</a></td>
                </tr>
            <?php endforeach ?>

        </table>
    <?php endif ?>
</div>
<?php self::render('block/admin/footer') ?>