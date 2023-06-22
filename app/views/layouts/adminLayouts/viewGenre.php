<?php self::render('block/admin/header', $sub_content) ?>

<div class="option-bar py-3">
    <div class="ctn">
        <a href="<?php echo _web_root; ?>/admin/genre" class="option-item active"><span class="title">View Genre</span></a>
        <a href="<?php echo _web_root; ?>/admin/addGenre" class="option-item"><span class="title">Add Genre</span></a>
    </div>
</div>
<div class="content">
    <div class="category-title mt-3">Genre</div>
    <div class="category-chose mt-3">
        <select id="category-select" class="form-select">
            <option>Chose category</option>
        </select>
    </div>
    <div id="genre-ctn"></div>
</div>
<?php self::render('block/admin/footer') ?>