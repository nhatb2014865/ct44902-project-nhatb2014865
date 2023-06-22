<?php self::render('block/admin/header', $sub_content) ?>

<div class="option-bar py-3">
    <div class="ctn">
        <a href="<?php echo _web_root; ?>/admin/episode" class="option-item active"><span class="title">View Episode</span></a>
        <a href="<?php echo _web_root; ?>/admin/addEpisode" class="option-item"><span class="title">Add Episode</span></a>
    </div>
</div>
<div class="content">
    <div class="category-title mt-3">Episode List</div>
    <div class="category-chose mt-3">
        <select id="anime-select" class="form-select">
            <option>Chose anime</option>
        </select>
    </div>
    <div id="episode-ctn"></div>
</div>
<?php self::render('block/admin/footer') ?>