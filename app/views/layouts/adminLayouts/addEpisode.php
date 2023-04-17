<?php self::render('block/admin/header', $sub_content) ?>
<div class="option-bar py-3">
    <div class="ctn">
        <a href="<?php echo _web_root; ?>/admin/episode" class="option-item"><span class="title">View Episode</span></a>
        <a href="<?php echo _web_root; ?>/admin/addEpisode" class="option-item active"><span class="title">Add Episode</span></a>
    </div>
</div>
<div class="content">
    <div class="category-title mt-3">Add Episode</div>

    <form action="<?php echo _web_root; ?>/admin/addEpisode" method="post" enctype="multipart/form-data">
        <div class="anime-chose mt-3">
            <select name="anime_id" id="anime-select" class="form-select <?php if (!empty($errors['anime_id'])) echo 'border-danger'; ?>">
                <?php if (!empty($oldData['anime_id'])) {
                    echo '<option value="' . $oldData['anime_id'] . '">' . $oldData['anime_name'] . '</option>';
                } else echo '<option value="">Chose Anime</option>';
                ?>
            </select>
            <?php if (!empty($errors['anime_id'])) echo '<span class="form-error-span"><i class="fa-solid fa-exclamation"></i> ' . $errors['anime_id'] . '</span>'; ?>
        </div>
        <div class="my-3">
            <label for="episode_num" class="form-label">Number Episode</label>
            <input name="episode_num" type="text" class="form-control <?php if (!empty($errors['episode_num'])) echo 'border-danger'; ?>" id="episode_num" value="<?php if (!empty($oldData['episode_num'])) echo $oldData['episode_num']; ?>">
            <?php if (!empty($errors['episode_num'])) echo '<span class="form-error-span"><i class="fa-solid fa-exclamation"></i> ' . $errors['episode_num'] . '</span>'; ?>
            <?php if (!empty($success)) echo '<span class="form-success-span"><i class="fa-solid fa-exclamation"></i> ' . $success . '</span>'; ?>
        </div>
        <div class="my-3">
            <label for="episode_link" class="form-label">Episode Link</label>
            <input name="episode_link" type="text" class="form-control <?php if (!empty($errors['episode_link'])) echo 'border-danger'; ?>" id="episode_link" value="<?php if (!empty($oldData['episode_link'])) echo $oldData['episode_link']; ?>">
            <?php if (!empty($errors['episode_link'])) echo '<span class="form-error-span"><i class="fa-solid fa-exclamation"></i> ' . $errors['episode_link'] . '</span>'; ?>
        </div>
        <div class="my-3">
            <label for="episode_img" class="form-label">Episode Image</label>
            <input name="episode_img" type="file" class="form-control <?php if (!empty($errors['episode_img'])) echo 'border-danger'; ?>" id="episode_img">
            <?php if (!empty($errors['episode_img'])) echo '<span class="form-error-span"><i class="fa-solid fa-exclamation"></i> ' . $errors['episode_img'] . '</span>'; ?>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<?php self::render('block/admin/footer'); ?>