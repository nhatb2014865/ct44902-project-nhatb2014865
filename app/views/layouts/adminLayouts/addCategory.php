<?php self::render('block/admin/header', $sub_content) ?>
<div class="option-bar py-3">
    <div class="ctn">
        <a href="<?php echo _web_root; ?>/admin/category" class="option-item"><span class="title">View Category</span></a>
        <a href="<?php echo _web_root; ?>/admin/addCategory" class="option-item active"><span class="title">Add Category</span></a>
    </div>
</div>
<div class="content">
    <div class="category-title mt-3">Add Category</div>
    <form action="<?php echo _web_root; ?>/admin/addCategory" method="get">
        <div class="my-3">
            <input name="category_name" type="text" class="form-control <?php if (!empty($errors['category_name'])) echo 'border-danger'; ?>" id="name" value="<?php if (!empty($oldData['category_name'])) echo $oldData['category_name']; ?>">
            <?php if (!empty($errors['category_name'])) echo '<span class="form-error-span"><i class="fa-solid fa-exclamation"></i> ' . $errors['category_name'] . '</span>'; ?>
            <?php if (!empty($success)) echo '<span class="form-success-span"><i class="fa-solid fa-exclamation"></i> ' . $success . '</span>'; ?>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<?php self::render('block/admin/footer'); ?>