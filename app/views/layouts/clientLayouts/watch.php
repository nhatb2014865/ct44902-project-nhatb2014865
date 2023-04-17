<?php self::render('block/client/header', $sub_content) ?>
<?php if (!empty($episodes) && !empty($current_episode)) : ?>
    <div class="content">
        <div class="watch-area-container row p-0 bg-e8f3ee">
            <div class="col-lg-8 col-12 p-0">
                <div class="player-ctn">
                    <video id="video-player" class="video-js vjs-16-9" muted controls preload="auto" poster="<?php echo _web_root . '/uploads/' . $current_episode['episode_img'] ?>" data-setup="{}">
                        <source src="<?php echo $current_episode['episode_link'] ?>" type="video/mp4" />
                        <p class="vjs-no-js"> To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
                    </video>
                </div>
            </div>
            <div class="col-lg-4 col-12 p-3">
                <div class="player-slider-bar bg-e8f3ee">
                    <ul class="player-slider-header nav nav-tabs">
                        <li class="nav-item">
                            <button class="slider-item nav-link active" data-bbt-target="#episodes-list">Episodes</button>
                        </li>
                        <li class="nav-item ms-auto">
                            <button class="slider-item nav-link" data-bbt-target="#comments-list">Comment</button>
                        </li>
                    </ul>
                    <div class="player-slider-body">
                        <div id="episodes-list" class="episodes-list body-item list-group expand">
                            <?php foreach ($episodes as $key => $episode) : ?>
                                <a href="<?php echo _web_root . '/watch/' . $anime['anime_id'] . '-' . $anime['anime_name'] ?>-episode-<?php echo $episode['episode_num'] ?>" class="episode-wrapper list-group-item list-group-item-action <?php if ($episode['episode_num'] == $current_episode['episode_num']) echo 'playing' ?>">
                                    <img class="episode-wrapper-img" src="<?php echo _web_root . '/uploads/' . $episode['episode_img'] ?>" alt="thumnail">
                                    <div class="title ms-2">Episode - <?php echo $episode['episode_num'] ?></div>
                                    <?php if ($episode['episode_num'] == $current_episode['episode_num']) : ?>
                                        <div class="play-icon">
                                            <span class="bar n1">A</span>
                                            <span class="bar n2">B</span>
                                            <span class="bar n3">C</span>
                                            <span class="bar n4">D</span>
                                            <span class="bar n5">E</span>
                                            <span class="bar n6">F</span>
                                            <span class="bar n7">G</span>
                                            <span class="bar n8">H</span>
                                            <span class="bar n9">J</span>
                                        </div>
                                    <?php endif ?>
                                </a>
                            <?php endforeach ?>
                        </div>
                        <div id="comments-list" class="comments-list body-item list-group">
                            <div class="comment-input-ctn list-group-item list-group-item-action">
                                <div class="textarea-box position-relative">
                                    <textarea class="comment-input" rows="2" placeholder="Comment"></textarea>
                                    <div class="char-count">0/280</div>
                                </div>
                                <div class="btn-ctn mt-2 ms-auto">
                                    <button class="cancel-btn btn">Cancel</button>
                                    <button class="submit-btn btn">Submit</button>
                                </div>
                            </div>
                            <div class="list-group-item list-group-item-action pb-2">
                                <div class="comment-left">
                                    <div class="author-avata">
                                        <img class="pic" src="../assets/client/images/1.png" alt="avata">
                                    </div>
                                </div>
                                <div class="comment-right ms-2">
                                    <div class="author-name">Minh Nhật</div>
                                    <div class="comment-ctn mt-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Natus eveniet, ipsa ea vel nobis aut vero aspernatur quae dicta totam pariatur voluptatibus sed earum tempora modi quos, eos, ratione harum.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="watch-area-info">
            <div class="player-name-title mb-2"><a class="more-info" target="_blank" href="#"><?php echo $anime['anime_name'] ?></a> - Episode <?php echo $current_episode['episode_num'] ?></div>
            <div class="player-info-ctn">
                <div class="rating-ctn mb-2">
                    <div class="player-info-score"><i class="fa-solid fa-star"></i> 5.0</div>
                    <div class="rating-count ms-1">( <span>999 ratings</span> )</div>
                    <div class="own-rating btn-group dropend ms-1">
                        <div class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" autoClose="false">Rating now</div>
                        <ul class="dropdown-menu p-0">
                            <li class="rating-drop dropdown-item p-0">
                                <div class="own-score">
                                    <input name="own-score" type="radio" id="st5" value="5">
                                    <label for="st5"></label>
                                    <input name="own-score" type="radio" id="st4" value="4">
                                    <label for="st4"></label>
                                    <input name="own-score" type="radio" id="st3" value="3">
                                    <label for="st3"></label>
                                    <input name="own-score" type="radio" id="st2" value="2">
                                    <label for="st2"></label>
                                    <input name="own-score" type="radio" id="st1" value="1">
                                    <label for="st1"></label>
                                </div>
                            </li>
                            <li class="rt-score text-center mb-2">Click to rate</li>
                        </ul>
                    </div>
                </div>
                <div class="d-flex text-black align-items-center">
                    <div class="player-info-year"><?php echo $anime['anime_year'] ?></div>
                    <div class="player-info-update"><?php echo $anime['anime_episode'] ?> Episode</div>
                    <div class="btn show-more"></div>
                </div>
                <div class="player-desc">
                    <span class="key"> Description: </span>
                    <span class="text"><?php echo $anime['anime_des'] ?></span>
                </div>
            </div>
        </div>
    </div>
<?php endif ?>
<?php self::render('block/client/footer') ?>