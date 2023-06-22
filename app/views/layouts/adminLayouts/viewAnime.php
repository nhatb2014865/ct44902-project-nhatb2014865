<?php self::render('block/admin/header', $sub_content) ?>

<div class="option-bar py-3">
    <div class="ctn">
        <a href="<?php echo _web_root; ?>/admin/anime" class="option-item active"><span class="title">View Anime</span></a>
        <a href="<?php echo _web_root; ?>/admin/addAnime" class="option-item"><span class="title">Add Anime</span></a>
    </div>
</div>
<div class="content">
    <div class="category-title mt-3">Anime List</div>
    <div class="category-chose mt-3">
        <select id="category-select" class="form-select">
            <option>Chose category</option>
        </select>
    </div>
    <div class="genre-chose mt-3">
        <select id="genre-select" class="form-select">
            <option>Chose genre</option>
        </select>
    </div>
    <div id="anime-ctn"></div>
</div>
<?php self::render('block/admin/footer') ?>