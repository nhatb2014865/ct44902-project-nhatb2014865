<?php self::render('block/admin/header', $sub_content) ?>
<div class="option-bar py-3">
    <div class="ctn">
        <a href="<?php echo _web_root; ?>/admin/genre" class="option-item"><span class="title">View Genre</span></a>
        <a href="<?php echo _web_root; ?>/admin/addgenre" class="option-item active"><span class="title">Add Genre</span></a>
    </div>
</div>
<div class="content">
    <div class="catefory-title mt-3">Add Genre</div>
    <form action="<?php echo _web_root; ?>/admin/addGenre" method="get">
        <div class="my-3">
            <input name="name" type="text" class="form-control <?php if (!empty($errors['name'])) echo 'border-danger'; ?>" id="name" value="<?php if (!empty($oldData['name'])) echo $oldData['name']; ?>">
            <?php if (!empty($errors['name'])) echo '<span class="form-error-span"><i class="fa-solid fa-exclamation"></i> ' . $errors['name'] . '</span>'; ?>
            <?php if (!empty($success)) echo '<span class="form-success-span"><i class="fa-solid fa-exclamation"></i> ' . $success . '</span>'; ?>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<?php self::render('block/admin/footer'); ?>