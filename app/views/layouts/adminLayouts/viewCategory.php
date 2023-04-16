<?php self::render('block/admin/header', $sub_content) ?>
<div class="option-bar py-3">
    <div class="ctn">
        <a href="<?php echo _web_root; ?>/admin/category" class="option-item active"><span class="title">View Category</span></a>
        <a href="<?php echo _web_root; ?>/admin/addCategory" class="option-item"><span class="title">Add Category</span></a>
    </div>
</div>
<div class="content">
    <div class="category-title mt-3">Category</div>
    <div id="category-ctn"></div>
</div>
<?php self::render('block/admin/footer') ?>