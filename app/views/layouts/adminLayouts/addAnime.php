<?php self::render('block/admin/header', $sub_content) ?>
<div class="option-bar py-3">
    <div class="ctn">
        <a href="<?php echo _web_root; ?>/admin/anime" class="option-item"><span class="title">View Anime</span></a>
        <a href="<?php echo _web_root; ?>/admin/addAnime" class="option-item active"><span class="title">Add Anime</span></a>
    </div>
</div>
<div class="content">
    <div class="category-title mt-3">Add Anime</div>
    <form action="<?php echo _web_root; ?>/admin/addAnime" method="post" enctype="multipart/form-data">
        <div class="category-chose mt-3">
            <select name="category_id" id="category-select" class="form-select <?php if (!empty($errors['category_id'])) echo 'border-danger'; ?>">
                <?php if (!empty($oldData['category_id'])) {
                    echo '<option value="' . $oldData['category_id'] . '">' . $oldData['category_name'] . '</option>';
                } else echo '<option value="">Chose category</option>';
                ?>
            </select>
            <?php if (!empty($errors['category_id'])) echo '<span class="form-error-span"><i class="fa-solid fa-exclamation"></i> ' . $errors['category_id'] . '</span>'; ?>
        </div>
        <div class="genre-chose mt-3">
            <select name="genre_id" id="genre-select" class="form-select <?php if (!empty($errors['genre_id'])) echo 'border-danger'; ?>">
                <?php if (!empty($oldData['genre_id'])) {
                    echo '<option value="' . $oldData['genre_id'] . '">' . $oldData['genre_name'] . '</option>';
                } else echo '<option value="">Chose genre</option>';
                ?>
            </select>
            <?php if (!empty($errors['genre_id'])) echo '<span class="form-error-span"><i class="fa-solid fa-exclamation"></i> ' . $errors['genre_id'] . '</span>'; ?>
        </div>
        <div class="my-3">
            <label for="name" class="form-label">Name</label>
            <input name="anime_name" type="text" class="form-control <?php if (!empty($errors['anime_name'])) echo 'border-danger'; ?>" id="name" value="<?php if (!empty($oldData['anime_name'])) echo $oldData['anime_name']; ?>">
            <?php if (!empty($errors['anime_name'])) echo '<span class="form-error-span"><i class="fa-solid fa-exclamation"></i> ' . $errors['anime_name'] . '</span>'; ?>
            <?php if (!empty($success)) echo '<span class="form-success-span"><i class="fa-solid fa-exclamation"></i> ' . $success . '</span>'; ?>
        </div>
        <div class="my-3">
            <label for="des" class="form-label">Description</label>
            <input name="anime_des" type="text" class="form-control <?php if (!empty($errors['anime_des'])) echo 'border-danger'; ?>" id="des" value="<?php if (!empty($oldData['anime_des'])) echo $oldData['anime_des']; ?>">
            <?php if (!empty($errors['anime_des'])) echo '<span class="form-error-span"><i class="fa-solid fa-exclamation"></i> ' . $errors['anime_des'] . '</span>'; ?>
        </div>
        <div class="my-3">
            <label for="anime_year" class="form-label">Year</label>
            <input name="anime_year" type="text" class="form-control <?php if (!empty($errors['anime_year'])) echo 'border-danger'; ?>" id="anime_year" value="<?php if (!empty($oldData['anime_year'])) echo $oldData['anime_year']; ?>">
            <?php if (!empty($errors['anime_year'])) echo '<span class="form-error-span"><i class="fa-solid fa-exclamation"></i> ' . $errors['anime_year'] . '</span>'; ?>
        </div>
        <div class="my-3">
            <label for="anime_episode" class="form-label">Number Episode</label>
            <input name="anime_episode" type="text" class="form-control <?php if (!empty($errors['anime_episode'])) echo 'border-danger'; ?>" id="anime_episode" value="<?php if (!empty($oldData['anime_episode'])) echo $oldData['anime_episode']; ?>">
            <?php if (!empty($errors['anime_episode'])) echo '<span class="form-error-span"><i class="fa-solid fa-exclamation"></i> ' . $errors['anime_episode'] . '</span>'; ?>
        </div>
        <div class="my-3">
            <label for="anime_dir" class="form-label">Directory</label>
            <input name="anime_dir" type="text" class="form-control <?php if (!empty($errors['anime_dir'])) echo 'border-danger'; ?>" id="anime_dir" value="<?php if (!empty($oldData['anime_dir'])) echo $oldData['anime_dir']; ?>">
            <?php if (!empty($errors['anime_dir'])) echo '<span class="form-error-span"><i class="fa-solid fa-exclamation"></i> ' . $errors['anime_dir'] . '</span>'; ?>
        </div>
        <div class="my-3">
            <label for="anime_file" class="form-label">Thumnail Image</label>
            <input name="anime_file" type="file" class="form-control <?php if (!empty($errors['anime_file'])) echo 'border-danger'; ?>" id="anime_file">
            <?php if (!empty($errors['anime_file'])) echo '<span class="form-error-span"><i class="fa-solid fa-exclamation"></i> ' . $errors['anime_file'] . '</span>'; ?>
        </div>
        <div class="my-3">
            <label for="anime_img" class="form-label">Row Img</label>
            <input name="anime_img" type="file" class="form-control <?php if (!empty($errors['anime_img'])) echo 'border-danger'; ?>" id="anime_img">
            <?php if (!empty($errors['anime_img'])) echo '<span class="form-error-span"><i class="fa-solid fa-exclamation"></i> ' . $errors['anime_img'] . '</span>'; ?>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<?php self::render('block/admin/footer'); ?>