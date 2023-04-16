<?php self::render('block/admin/header', $sub_content) ?>
<div class="option-bar py-3">
    <div class="ctn">
        <a href="<?php echo _web_root; ?>/admin/genre" class="option-item"><span class="title">View Genre</span></a>
        <a href="<?php echo _web_root; ?>/admin/addgenre" class="option-item active"><span class="title">Add Genre</span></a>
    </div>
</div>
<div class="content">
    <div class="category-title mt-3">Add Genre</div>
    <form action="<?php echo _web_root; ?>/admin/addGenre" method="get">
        <div class="category-chose mt-3">
            <select name="category_id" id="category-select" class="form-select <?php if (!empty($errors['category_id'])) echo 'border-danger'; ?>">
                <?php if (!empty($oldData['category_id'])) {
                    echo '<option value="'.$oldData['category_id'].'">'.$oldData['category_name'].'</option>';
                }
                else echo '<option value="">Chose category</option>';
                ?>
            </select>
            <?php if (!empty($errors['category_id'])) echo '<span class="form-error-span"><i class="fa-solid fa-exclamation"></i> ' . $errors['category_id'] . '</span>'; ?>
        </div>
        <div class="my-3">
            <input name="genre_name" type="text" class="form-control <?php if (!empty($errors['genre_name'])) echo 'border-danger'; ?>" id="name" value="<?php if (!empty($oldData['genre_name'])) echo $oldData['genre_name']; ?>">
            <?php if (!empty($errors['genre_name'])) echo '<span class="form-error-span"><i class="fa-solid fa-exclamation"></i> ' . $errors['genre_name'] . '</span>'; ?>
            <?php if (!empty($success)) echo '<span class="form-success-span"><i class="fa-solid fa-exclamation"></i> ' . $success . '</span>'; ?>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<?php self::render('block/admin/footer'); ?>