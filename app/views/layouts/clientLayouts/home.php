<?php self::render('block/client/header', $sub_content) ?>
<div class="content">
    <div class="focus-wrapper m-0 p-0">
        <div id="focus-carousel" class="carousel slide carousel-fade" data-bs-ride="true" data-bs-interval="6000">
            <a class="focus-img-link" target='_blank' href="#"></a>
            <div class="carousel-indicators px-5 mx-0">
                <button class="mx-0 ms-1 active" type="button" data-bs-target="#focus-carousel" data-bs-slide-to="0" aria-current="true" aria-label="Slide 1"></button>
                <button class="mx-0 ms-1" type="button" data-bs-target="#focus-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button class="mx-0 ms-1" type="button" data-bs-target="#focus-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <a class="focus-item carousel-item carousel-slide-1 active " href="<?php echo _web_root; ?>/watch/">
                    <div class="vertical-layer"></div>
                    <div class="horizontal-layer"></div>
                    <img src="<?php echo _web_root; ?>/uploads/kmsnyb.jpg" class="d-block focus-img" alt="...">
                    <div class="focus-img-character" style="background-image: url('<?php echo _web_root ?>/uploads/71EGDu1ITlL._AC_UF1000,1000_QL80_.png');"></div>
                    <div class="focus-decs-wrapper">
                        <div class="focus-item-name" style="background-image: url('<?php echo _web_root ?>/uploads/1697349-middle.png');"></div>
                        <div class="d-flex text-black mb-2">
                            <div class="focus-item-score"><i class="fa-solid fa-star"></i> 5.0</div>
                            <div class="focus-item-year">2023</div>
                            <div class="focus-item-update">12 Episode</div>
                        </div>
                        <div class="focus-item-desc text-black">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut aliquid velit dolorum. Aperiam provident labore ipsa deleniti ut commodi non, facere esse quaerat alias eligendi, perferendis saepe, vero corporis dolorum. </div>
                    </div>
                </a>
                <a class="focus-item carousel-item carousel-slide-2 " href="#">
                    <div class="vertical-layer"></div>
                    <div class="horizontal-layer"></div>
                    <img src="<?php echo _web_root; ?>/uploads/d86def417c_1808_1017.png" class="d-block focus-img" alt="...">
                    <div class="focus-img-character" style="background-image: url('<?php echo _web_root; ?>/assets/client/images/2.png');"></div>
                    <div class="focus-decs-wrapper">
                        <div class="focus-item-name" style="background-image: url('<?php echo _web_root; ?>/uploads/Tonikaku_kawaii_logo.png');"></div>
                        <div class="d-flex text-black mb-2">
                            <div class="focus-item-score"><i class="fa-solid fa-star"></i> 5.0</div>
                            <div class="focus-item-year">2023</div>
                            <div class="focus-item-update">12 Episode</div>
                        </div>
                        <div class="focus-item-desc text-black">    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officia incidunt tenetur tempora, quaerat veritatis ipsa atque doloremque nisi. Est natus vero illo! Voluptates consequatur iusto repudiandae accusamus hic at soluta molestiae, facere odit cumque esse tempora unde id assumenda dolor quo eligendi magnam reprehenderit. Omnis consequatur necessitatibus atque laborum alias provident natus dolores velit amet veritatis, vel, sapiente ut, temporibus laboriosam consectetur iste. Perspiciatis earum nulla cumque quis vitae dolorum? Perspiciatis nulla possimus dolore nobis velit, assumenda labore eum illum. Nemo, tempore eveniet. Dolor, impedit ipsam! Accusantium asperiores tempore eos quia nihil maiores! Est ducimus neque animi assumenda fugit natus.</div>
                    </div>
                </a>
                <a class="focus-item carousel-item carousel-slide-3 " href="#">
                    <div class="vertical-layer"></div>
                    <div class="horizontal-layer"></div>
                    <img src="<?php echo _web_root; ?>/assets/login/images/ab44954c581b1a66_8af2eb6daf6fa0eb_3486616579698801118684.jpg" class="d-block focus-img" alt="...">
                    <div class="focus-img-character" style="background-image: url('<?php echo _web_root; ?>/assets/client/images/3.png');"></div>
                    <div class="focus-decs-wrapper">
                        <div class="focus-item-name" style="background-image: url('<?php echo _web_root; ?>/assets/client/images/logo-with-brand.png');"></div>
                        <div class="d-flex text-black mb-2">
                            <div class="focus-item-score"><i class="fa-solid fa-star"></i> 5.0</div>
                            <div class="focus-item-year">2023</div>
                            <div class="focus-item-update">12 Episode</div>
                        </div>
                        <div class="focus-item-desc text-black">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut aliquid velit dolorum. Aperiam provident labore ipsa deleniti ut commodi non, facere esse quaerat alias eligendi, perferendis saepe, vero corporis dolorum. </div>
                    </div>
                </a>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#focus-carousel" data-bs-slide="prev">
                <i class="fa-solid fa-chevron-left"></i>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#focus-carousel" data-bs-slide="next">
                <i class="fa-solid fa-chevron-right"></i>
            </button>
        </div>
    </div>
    <div class="row-sliders-container m-0">
        <?php if (!empty($genre_names)) : ?>
            <?php foreach ($genre_names as $key => $genre_name) : ?>
                <div class="row-slider mb-5">
                    <h2 class="title m-0"><?php echo $genre_name ?></h2>
                    <div class="owl-carousel owl-theme owl-loaded">
                        <div class="owl-stage-outer">
                            <div class="owl-stage pt-3">
                                <?php foreach ($animes[$genre_name] as $key => $anime) : ?>
                                    <div class="owl-item">
                                        <a id="<?php echo $anime['anime_id'] ?>" class="card" target='_blank' href="<?php echo 'description/' . strtolower($anime['anime_name']) ?>">
                                            <img src="<?php echo _web_root . '/uploads/' . $anime['anime_img']; ?>" class="card-img-top" alt="...">
                                            <div class="p-1">
                                                <p class="card-text"><?php echo $anime['anime_name'] ?></p>
                                            </div>
                                        </a>
                                    </div>
                                <?php endforeach ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        <?php endif ?>
    </div>
    <?php self::render('block/client/footer') ?>
    <script>
        window.onload = function() {
            if (row_Sliders_Container.length) {
                $(".row-sliders-container .row-slider .owl-carousel .owl-stage-outer .owl-item .card").bind({
                    mouseenter: function() {
                        if ($(window).width() >= 768) {
                            activeAnimeInfoPopup($(this));
                        }
                    }
                });

                function inActiveAnimeInfoPopup() {
                    $(".anime-info-popup").remove();
                }

                function activeAnimeInfoPopup(element) {
                    var obj = element.offset();
                    var h = element.height();
                    var w = element.width();
                    var id = element[0].id;
                    var top = obj.top;
                    var left = obj.left;
                    $.ajax({
                        type: 'post',
                        url: "/home/getAnimeinfo",
                        data: {
                            anime_id: id,
                            top: top,
                            left: left,
                            h: h,
                            w: w
                        },
                        success: function(response) {
                            $("body").append(response);
                            $(".anime-info-popup").bind({
                                mouseleave: function() {
                                    inActiveAnimeInfoPopup();
                                }
                            });
                        },
                        error: function(xhr, status, error) {
                            console.log(xhr.responseText);
                            console.log(error);
                            console.log(status);
                            console.log(xhr);
                        }
                    });
                }
            }
        }
    </script>