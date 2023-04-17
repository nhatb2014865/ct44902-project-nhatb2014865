<?php self::render('block/client/header', $sub_content) ?>
<?php if (!empty($anime)) : ?>
    <div class="content">
        <div class="info-focus-wrapper">
            <div class="wrapper-content">
                <div class="wrapper-img-container">
                    <div class="vertical-layer"></div>
                    <div class="horizontal-layer"></div>
                    <img class="wrapper-img" src="<?php echo _web_root . '/uploads/' . $anime['anime_file'] ?>" alt="">
                </div>
            </div>
            <div class="focus-decs-wrapper mb-4 pb-2">
                <div class="focus-item-name mb-2"> <span><?php echo $anime['anime_name'] ?></span> </div>
                <div class="d-flex text-black mb-2">
                    <div class="focus-item-score"><i class="fa-solid fa-star"></i> 5.0</div>
                    <div class="focus-item-year"><?php echo $anime['anime_year'] ?></div>
                    <div class="focus-item-update"><?php echo $anime['anime_episode'] ?> Episode</div>
                </div>
                <div class="focus-item-dir mb-2">
                    <span class="key"> Director: </span>
                    <span class="text"> <?php echo $anime['anime_dir'] ?> </span>
                </div>
                <div class="focus-item-desc">
                    <span class="key"> Description: </span>
                    <span class="text"><?php echo $anime['anime_des'] ?></span>
                    <div class="btn more-decs"><i class="more-desc-toggler fa-solid fa-chevron-down fa-2xs"></i></div>
                </div>
            </div>
            <div class="info-focus-btn">
                <a class="btn-play btn" href="<?php echo _web_root . '/watch/' . $anime['anime_id'] . '-' . $anime['anime_name'] ?>-episode-1" role="button"><i class="fa-solid fa-play"></i> Play</a>
                <a class="btn-favorite btn ms-2" href="#" role="button"><i class="fa-solid fa-bookmark"></i> Watch later</a>
            </div>
        </div>
        <div class="episodes-list-wrapper container-fluid">
            <hr>
            <div class="row">
                <?php if (!empty($episodes)) : ?>
                    <?php foreach ($episodes as  $key => $episode) : ?>
                        <div class="col-xxl-2 col-lg-3 col-md-4 mb-3">
                            <a href="<?php echo _web_root . '/watch/' . $anime['anime_id'] . '-' . $anime['anime_name'] ?>-episode-<?php echo $episode['episode_num'] ?>" target='_blank' class="episode-wapper card">
                                <img src="<?php echo _web_root . '/uploads/' . $episode['episode_img'] ?>" class="wrapper-img card-img-top" alt="...">
                                <div class="play-icon"><i class="fa-solid fa-play"></i></div>
                                <div class="p-1">
                                    <div class="anime-title"><?php echo $anime['anime_name'] ?> - Episode <?php echo $episode['episode_num'] ?></div>
                                </div>
                            </a>
                        </div>
                    <?php endforeach ?>
                <?php endif ?>
            </div>
        </div>
    </div>
<?php endif ?>
<?php self::render('block/client/footer') ?>