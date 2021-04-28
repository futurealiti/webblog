<div class="jl_home_bw">
                <section class="home_section1">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="jl_mright_wrapper jl_clear_at">
                                    <div class="jl_mix_post">
                                        <div class="jl_m_center blog-style-one blog-small-grid">
                                            <div class="jl_m_center_w jl_radus_e">
                                                <div class="jl_f_img_bg"
                                                    style="background-image: url('img/pexels-daria-shevtsova-1071162-scaled-1000x0.jpg');">
                                                </div><a href="#" class="jl_f_img_link"></a> <span
                                                    class="jl_post_type_icon"><i class="jli-gallery"></i></span>
                                                <div class="text-box"> <span class="jl_f_cat"><a
                                                            class="post-category-color-text"
                                                            style="background: #eba845;" href="#">Business</a></span>
                                                    <h3> <a href="#">It time Rescue restaurant food with these epic
                                                            saving</a> </h3><span class="jl_post_meta"> <span
                                                            class="jl_author_img_w"><i class="jli-user"></i><a href="#"
                                                                title="Posts by Spraya"
                                                                rel="author">Spraya</a></span><span class="post-date"><i
                                                                class="jli-pen"></i>July 24, 2019</span><span
                                                            class="post-read-time"><i class="jli-watch-2"></i>2 Mins
                                                            read</span></span>
                                                </div>
                                            </div>
                                        </div>

                                        <!--List  popular posts-->
                                        <?php if (!empty($popularposts)):
                                            foreach ($popularposts as $item): ?>

                                            <div class="jl_m_right">
                                                <div class="jl_m_right_w">
                                                    <div class="jl_m_right_img jl_radus_e"><a href="<?php echo $item->optional_url; ?>"><img width="120"
                                                                height="120"
                                                                src="img/andre-maliik-v5Kd6MSmzoQ-unsplash-scaled-120x120.jpg"
                                                                class="attachment-sprasa_small_feature size-sprasa_small_feature wp-post-image"
                                                                alt="" loading="lazy"></a></div>
                                                    <div class="jl_m_right_content"> <span class="jl_f_cat"><a
                                                                class="post-category-color-text"
                                                                style="background: #91bd3a;" href="#"><?php echo $item->category_name; ?></a></span>
                                                        <h3 class="entry-title"><a href="<?php echo $item->optional_url; ?>"><?php echo html_escape(character_limiter($item->title, 55, '...')); ?></a></h3>
                                                        
                                                        <span class="jl_post_meta"> 
                                                            <span class="jl_author_img_w">
                                                                <i class="jli-user"></i>
                                                                <a href="#" title="Posts by Spraya" rel="author"><?php echo $item->username; ?></a>
                                                            </span>
                                                            <span class="post-date">
                                                            <i class="jli-pen"></i><?php echo date("F jS, Y", strtotime($item->created_at)); ?>
                                                            </span>
                                                        </span>

                                                        
                                                    </div>
                                                </div>
                                            </div>

                                            <?php endforeach;
                                        endif; ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="home_section2">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div id="blockid_72be465" class="block-section jl-main-block"
                                    data-blockid="blockid_72be465" data-name="jl_mgrid" data-page_max="11"
                                    data-page_current="1" data-author="none" data-order="date_post"
                                    data-posts_per_page="6" data-offset="5">
                                    <div class="jl_grid_wrap_f jl_clear_at g_3col">
                                        <div class="jl-roww content-inner jl-col3 jl-col-row">
                                            <div class="jl_sec_title">
                                                <h3 class="jl_title_c"><span>Editors Picks Post</span></h3>
                                                <p>This is an optional subtitle for post section</p>
                                            </div>




                                            <?php if (!empty($cricketposts)):
                                            foreach ($cricketposts as $item): ?>

                                            <div class="jl-grid-cols">
                                                <div class="p-wraper post-2959">
                                                    <div class="jl_grid_w">
                                                        <div class="jl_img_box jl_radus_e"><a href="<?php echo $item->optional_url; ?>"> <span
                                                                    class="jl_post_type_icon"><i
                                                                        class="jli-gallery"></i></span><img width="500"
                                                                    height="350"
                                                                    src="img/oskar-zhitnitsa-d7bPBiGq668-unsplash-500x350.jpg"
                                                                    class="attachment-sprasa_slider_grid_small size-sprasa_slider_grid_small wp-post-image"
                                                                    alt="" loading="lazy"></a> <span class="jl_f_cat"><a
                                                                    class="post-category-color-text"
                                                                    style="background: #62ce5c;"
                                                                    href="#"><?php echo $item->category_name; ?></a></span></div>
                                                        <div class="text-box">
                                                            <h3><a href="<?php echo $item->optional_url; ?>"><?php echo $item->title; ?></a></h3><span class="jl_post_meta"> <span
                                                                    class="jl_author_img_w"><i class="jli-user"></i><a
                                                                        href="#" title="Posts by Spraya"
                                                                        rel="author"><?php echo $item->username; ?></a></span><span
                                                                    class="post-date"><i class="jli-pen"></i><?php echo date("F jS, Y", strtotime($item->created_at)); ?></span><span class="post-read-time"><i
                                                                        class="jli-watch-2"></i>2 Mins
                                                                    read</span></span>
                                                            <p>Mauris mattis auctor cursus. Phasellus tellus tellus,
                                                                imperdiet ut imperdiet eu, iaculis a sem. Donec vehicula
                                                                luctus nunc in laoreet....</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <?php endforeach;
                                        endif; ?>




                                            <!-- <div class="jl-grid-cols">
                                                <div class="p-wraper post-2959">
                                                    <div class="jl_grid_w">
                                                        <div class="jl_img_box jl_radus_e"><a href="#"> <span
                                                                    class="jl_post_type_icon"><i
                                                                        class="jli-gallery"></i></span><img width="500"
                                                                    height="350"
                                                                    src="img/oskar-zhitnitsa-d7bPBiGq668-unsplash-500x350.jpg"
                                                                    class="attachment-sprasa_slider_grid_small size-sprasa_slider_grid_small wp-post-image"
                                                                    alt="" loading="lazy"></a> <span class="jl_f_cat"><a
                                                                    class="post-category-color-text"
                                                                    style="background: #62ce5c;"
                                                                    href="#">Sports</a></span></div>
                                                        <div class="text-box">
                                                            <h3><a href="#">Wedding guest dresses for every shape, style
                                                                    and budget</a></h3><span class="jl_post_meta"> <span
                                                                    class="jl_author_img_w"><i class="jli-user"></i><a
                                                                        href="#" title="Posts by Spraya"
                                                                        rel="author">Spraya</a></span><span
                                                                    class="post-date"><i class="jli-pen"></i>July 24,
                                                                    2019</span><span class="post-read-time"><i
                                                                        class="jli-watch-2"></i>2 Mins
                                                                    read</span></span>
                                                            <p>Mauris mattis auctor cursus. Phasellus tellus tellus,
                                                                imperdiet ut imperdiet eu, iaculis a sem. Donec vehicula
                                                                luctus nunc in laoreet....</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="jl-grid-cols">
                                                <div class="p-wraper post-2949">
                                                    <div class="jl_grid_w">
                                                        <div class="jl_img_box jl_radus_e"><a href="#"> <span
                                                                    class="jl_post_type_icon"><i
                                                                        class="jli-gallery"></i></span><img width="500"
                                                                    height="350"
                                                                    src="img/brooke-cagle-WHWYBmtn3_0-unsplash-500x350.jpg"
                                                                    class="attachment-sprasa_slider_grid_small size-sprasa_slider_grid_small wp-post-image"
                                                                    alt="" loading="lazy"></a> <span class="jl_f_cat"><a
                                                                    class="post-category-color-text"
                                                                    style="background: #7ebdb4;"
                                                                    href="#">Crazy</a></span></div>
                                                        <div class="text-box">
                                                            <h3><a href="#">Great time for enjoy your coffee with
                                                                    mountain view</a></h3><span class="jl_post_meta">
                                                                <span class="jl_author_img_w"><i class="jli-user"></i><a
                                                                        href="#" title="Posts by Spraya"
                                                                        rel="author">Spraya</a></span><span
                                                                    class="post-date"><i class="jli-pen"></i>July 24,
                                                                    2019</span><span class="post-read-time"><i
                                                                        class="jli-watch-2"></i>2 Mins
                                                                    read</span></span>
                                                            <p>Mauris mattis auctor cursus. Phasellus tellus tellus,
                                                                imperdiet ut imperdiet eu, iaculis a sem. Donec vehicula
                                                                luctus nunc in laoreet....</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> -->
                                        </div>
                                        <!-- <div class="jl_lmore_wrap">
                                            <div class="jl_lmore_c"> <a href="#" class="jl-load-link"><span>load
                                                        more</span></a><span
                                                    class="jl-load-animation"><span></span></span></div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="home_section3">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="jl_sec_title">
                                    <h3 class="jl_title_c">Lifestyle News</h3>
                                    <p>This is an optional subtitle for post section</p>
                                </div>
                                <div class="jl_mg_wrapper jl_clear_at">
                                    <div class="jl_mg_post jl_clear_at">

                                    <?php if (!empty($footballposts)):
                                            foreach ($footballposts as $key => $item): ?>

                                        <div class="jl_mg_<?php echo ($key == 0 ? 'main' : 'sm'); ?>">
                                            <div class="jl_mg_main_w">
                                                <div class="jl_img_box jl_radus_e"><a href="<?php echo $item->optional_url; ?>"><img width="1000"
                                                            height="650"
                                                            src="img/andre-ouellet-lGUJOzDBTJk-unsplash-1000x650.jpg"
                                                            class="attachment-sprasa_feature_large size-sprasa_feature_large wp-post-image"
                                                            alt="" loading="lazy"></a> <span class="jl_f_cat"><a
                                                            class="post-category-color-text"
                                                            style="background: #4dcf8f;" href="#"><?php echo $item->category_name; ?></a></span>
                                                </div>
                                                <div class="text-box">
                                                    <h3 class="entry-title"> <a href="<?php echo $item->optional_url; ?>" tabindex="-1"><?php echo $item->title; ?></a> </h3><span
                                                        class="jl_post_meta"> <span class="jl_author_img_w"><i
                                                                class="jli-user"></i><a href="#" title="Posts by Spraya"
                                                                rel="author"><?php echo $item->username; ?></a></span><span class="post-date"><i
                                                                class="jli-pen"></i><?php echo date("F jS, Y", strtotime($item->created_at)); ?></span><span
                                                            class="post-read-time"><i class="jli-watch-2"></i>2 Mins
                                                            read</span></span>
                                                    <p>Mauris mattis auctor cursus. Phasellus tellus tellus, imperdiet
                                                        ut imperdiet eu, iaculis a sem. Donec vehicula luctus nunc in
                                                        laoreet. Aliquam erat volutpat. Suspendisse vulputate porttitor
                                                        condimentum. Proin viverra orci...</p>
                                                </div>
                                            </div>
                                        </div>

<!-- 
                                        <div class="jl_mg_sm">
                                            <div class="jl_mg_sm_w">
                                                <div class="jl_f_img jl_radus_e"><a href="#"><img width="1000"
                                                            height="650"
                                                            src="img/pexels-broken-villages-3991602-1000x650.jpg"
                                                            class="attachment-sprasa_feature_large size-sprasa_feature_large wp-post-image"
                                                            alt="" loading="lazy"></a> <span class="jl_f_cat"><a
                                                            class="post-category-color-text"
                                                            style="background: #91bd3a;" href="#">Inspiration</a></span>
                                                </div>
                                                <div class="jl_mg_content">
                                                    <h3 class="entry-title"><a href="#">The dress style influencers are
                                                            wearing right now</a></h3><span class="jl_post_meta"> <span
                                                            class="jl_author_img_w"><i class="jli-user"></i><a href="#"
                                                                title="Posts by Spraya"
                                                                rel="author">Spraya</a></span><span class="post-date"><i
                                                                class="jli-pen"></i>July 24, 2019</span></span>
                                                </div>
                                            </div>
                                        </div> -->
                                        

                                    <?php endforeach;
                                    endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="home_section4">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div id="blockid_3f9d058" class="block-section jl-main-block">
                                    <div class="jl_grid_wrap_f jl_clear_at g_4col">
                                        <div class="jl-roww content-inner jl-col3 jl-col-row">
                                            <div class="jl_sec_title">
                                                <h3 class="jl_title_c"><span>Health &amp; Fitness</span></h3>
                                                <p>This is an optional subtitle for post section</p>
                                            </div>
                                            

                                            <?php if (!empty($healthfitnessposts)):
                                            foreach ($healthfitnessposts as $key => $item): ?>

                                            <div class="jl-grid-cols">
                                                <div class="p-wraper post-2691">
                                                    <div class="jl_grid_w">
                                                        <div class="jl_img_box jl_radus_e"><a href="<?php echo $item->optional_url; ?>"><img width="500"
                                                                    height="350"
                                                                    src="img/pexels-toni-ph-1834391-scaled-500x350.jpg"
                                                                    class="attachment-sprasa_slider_grid_small size-sprasa_slider_grid_small wp-post-image"
                                                                    alt="" loading="lazy"></a> <span class="jl_f_cat"><a
                                                                    class="post-category-color-text"
                                                                    style="background: #379e63;"
                                                                    href="#"><?php echo $item->category_name; ?></a></span></div>
                                                        <div class="text-box">
                                                            <h3><a href="<?php echo $item->optional_url; ?>"><?php echo $item->title; ?></a></h3><span class="jl_post_meta"> <span
                                                                    class="jl_author_img_w"><i class="jli-user"></i><a
                                                                        href="#" title="Posts by Spraya"
                                                                        rel="author"><?php echo $item->username; ?></a></span><span
                                                                    class="post-date"><i class="jli-pen"></i><?php echo date("F jS, Y", strtotime($item->created_at)); ?></span><span class="post-read-time"><i
                                                                        class="jli-watch-2"></i>2 Mins
                                                                    read</span></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <?php endforeach;
                                            endif; ?>

                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="home_section5">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div id="blockid_5ee403b" class="block-section jl-main-block">
                                    <div class="jl_slide_wrap_f jl_clear_at">
                                        <div class="jl-roww content-inner jl-col-none jl-col-row">
                                            <div class="jl_sec_title">
                                                <h3 class="jl_title_c"><span>Top Of The Week</span></h3>
                                                <p>This is an optional subtitle for post section</p>
                                            </div>
                                            <div class="jl_ar_top">
                                                <div class="jl-w-slider jl_full_feature_w">
                                                    <div class="jl-eb-slider jelly_loading_pro" data-arrows="true"
                                                        data-play="true" data-effect="false" data-speed="500"
                                                        data-autospeed="7000" data-loop="true" data-dots="true"
                                                        data-swipe="true" data-items="1" data-xs-items="1"
                                                        data-sm-items="1" data-md-items="1" data-lg-items="1"
                                                        data-xl-items="1">
                                                        <div class="item-slide jl_radus_e">
                                                            <div class="slide-inner">
                                                                <div class="jl_full_feature">
                                                                    <div class="jl_f_img_bg"
                                                                        style="background-image: url('img/pexels-andrea-piacquadio-3761523-1920x0.jpg')">
                                                                    </div><a href="#" class="jl_f_img_link"></a>
                                                                    <div class="jl_f_postbox"> <span class="jl_f_cat"><a
                                                                                class="post-category-color-text"
                                                                                style="background:#4dcf8f"
                                                                                href="#">Active</a></span>
                                                                        <h3 class="jl_f_title"> <a href="#"
                                                                                tabindex="-1">Outdoor photo shooting
                                                                                with sexy and beautiful</a> </h3> <span
                                                                            class="jl_post_meta"><span
                                                                                class="jl_author_img_w"><i
                                                                                    class="jli-user"></i><a href="#"
                                                                                    title="Posts by Spraya"
                                                                                    rel="author">Spraya</a></span><span
                                                                                class="post-date"><i
                                                                                    class="jli-pen"></i>July 24,
                                                                                2019</span><span
                                                                                class="post-read-time"><i
                                                                                    class="jli-watch-2"></i>2 Mins
                                                                                read</span></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item-slide jl_radus_e">
                                                            <div class="slide-inner">
                                                                <div class="jl_full_feature">
                                                                    <div class="jl_f_img_bg"
                                                                        style="background-image: url('img/pexels-asya-cusima-3097297-1920x0.jpg')">
                                                                    </div><a href="#" class="jl_f_img_link"></a>
                                                                    <div class="jl_f_postbox"> <span class="jl_f_cat"><a
                                                                                class="post-category-color-text"
                                                                                style="background:#d66300"
                                                                                href="#">Science</a></span>
                                                                        <h3 class="jl_f_title"> <a href="#"
                                                                                tabindex="-1">Hiding face is great way
                                                                                make you unique style</a> </h3> <span
                                                                            class="jl_post_meta"><span
                                                                                class="jl_author_img_w"><i
                                                                                    class="jli-user"></i><a href="#"
                                                                                    title="Posts by Spraya"
                                                                                    rel="author">Spraya</a></span><span
                                                                                class="post-date"><i
                                                                                    class="jli-pen"></i>July 24,
                                                                                2019</span><span
                                                                                class="post-read-time"><i
                                                                                    class="jli-watch-2"></i>2 Mins
                                                                                read</span></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item-slide jl_radus_e">
                                                            <div class="slide-inner">
                                                                <div class="jl_full_feature">
                                                                    <div class="jl_f_img_bg"
                                                                        style="background-image: url('img/noah-carter-_TJ22WxXJ8U-unsplash.jpg')">
                                                                    </div><a href="#" class="jl_f_img_link"></a>
                                                                    <div class="jl_f_postbox"> <span class="jl_f_cat"><a
                                                                                class="post-category-color-text"
                                                                                style="background:#d66300"
                                                                                href="#">Science</a></span>
                                                                        <h3 class="jl_f_title"> <a href="#"
                                                                                tabindex="-1">Music will be more
                                                                                attractive if have guitar sound</a>
                                                                        </h3> <span class="jl_post_meta"><span
                                                                                class="jl_author_img_w"><i
                                                                                    class="jli-user"></i><a href="#"
                                                                                    title="Posts by Spraya"
                                                                                    rel="author">Spraya</a></span><span
                                                                                class="post-date"><i
                                                                                    class="jli-pen"></i>July 24,
                                                                                2019</span><span
                                                                                class="post-read-time"><i
                                                                                    class="jli-watch-2"></i>2 Mins
                                                                                read</span></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="home_section6">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 grid-sidebar" id="content">
                                <div id="blockid_e3cb9ed" class="block-section jl-main-block"
                                    data-blockid="blockid_e3cb9ed" data-name="jl_mgrid" data-page_max="3"
                                    data-page_current="1" data-categories="4,6,9" data-author="none"
                                    data-order="date_post" data-posts_per_page="8">
                                    <div class="jl_grid_wrap_f jl_clear_at g_2col">
                                        <div class="jl-roww content-inner jl-col3 jl-col-row">
                                            <div class="jl_sec_title">
                                                <h3 class="jl_title_c"><span>Recent Post</span></h3>
                                                <p>This is an optional subtitle for post section</p>
                                            </div>

                                            <?php if (!empty($recentposts)):
                                            foreach ($recentposts as $item): ?>

                                            <div class="jl-grid-cols">
                                                <div class="p-wraper post-2949">
                                                    <div class="jl_grid_w">
                                                        <div class="jl_img_box jl_radus_e"><a href="<?php echo $item->optional_url; ?>"> <span
                                                                    class="jl_post_type_icon"><i
                                                                        class="jli-gallery"></i></span><img width="500"
                                                                    height="350"
                                                                    src="img/brooke-cagle-WHWYBmtn3_0-unsplash-500x350.jpg"
                                                                    class="attachment-sprasa_slider_grid_small size-sprasa_slider_grid_small wp-post-image"
                                                                    alt="" loading="lazy"></a> <span class="jl_f_cat"><a
                                                                    class="post-category-color-text"
                                                                    style="background: #7ebdb4;"
                                                                    href="#"><?php echo $item->category_name; ?></a></span></div>
                                                        <div class="text-box">
                                                            <h3><a href="<?php echo $item->optional_url; ?>"><?php echo $item->title; ?></a></h3><span class="jl_post_meta">
                                                                <span class="jl_author_img_w"><i class="jli-user"></i><a
                                                                        href="#" title="Posts by Spraya"
                                                                        rel="author"><?php echo $item->username; ?></a></span><span
                                                                    class="post-date"><i class="jli-pen"></i><?php echo date("F jS, Y", strtotime($item->created_at)); ?></span><span class="post-read-time"><i
                                                                        class="jli-watch-2"></i>2 Mins
                                                                    read</span></span>
                                                            <!-- <p><?php echo $item->category_name; ?></p> -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <?php endforeach;
                                            endif; ?>

                                            
                                        </div>
                                        <!-- <div class="jl_lmore_wrap">
                                            <div class="jl_lmore_c"> <a href="#" class="jl-load-link"><span>load
                                                        more</span></a><span
                                                    class="jl-load-animation"><span></span></span></div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4" id="sidebar">
                                <div class="jl_sidebar_w">
                                    <div id="sprasa_widget_social_counter_c-2" class="widget jl-widget-social-counter">
                                        <div class="widget-title">
                                            <h2 class="jl_title_c">Stay Connected</h2>
                                        </div>
                                        <div
                                            class="jl_social_counter social_counter_wraper jl_count_style_2 social_counter_item>">
                                            <div class="jlsocial-element jl-facebook jl_radus_e"><a target="_blank"
                                                    href="https://facebook.com/envato" class="facebook"
                                                    title="facebook"></a> <span class="jlsocial-element-left"> <i
                                                        class="jli-facebook" aria-hidden="true"></i> <span
                                                        class="num-count">228.8k</span></span> <span
                                                    class="jlsocial-element-right">fans</span></div>
                                            <div class="jlsocial-element jl-youtube jl_radus_e"><a target="_blank"
                                                    href="https://www.youtube.com/user/envato" title="Youtube"></a>
                                                <span class="jlsocial-element-left"> <i class="jli-youtube"
                                                        aria-hidden="true"></i> <span
                                                        class="num-count">65.5k</span></span> <span
                                                    class="jlsocial-element-right">subscribers</span></div>
                                            <div class="jlsocial-element jl-vimeo jl_radus_e"><a target="_blank"
                                                    href="https://vimeo.com/beeple" title="vimeo"></a> <span
                                                    class="jlsocial-element-left"> <i class="jli-vimeo"
                                                        aria-hidden="true"></i> <span
                                                        class="num-count">240</span></span> <span
                                                    class="jlsocial-element-right">subscribers</span></div>
                                            <div class="jlsocial-element jl-pinterest jl_radus_e"><a target="_blank"
                                                    href="https://pinterest.com/envato" class="pinterest"
                                                    title="pinterest"></a> <span class="jlsocial-element-left"> <i
                                                        class="jli-pinterest" aria-hidden="true"></i> <span
                                                        class="num-count">9.87k</span></span> <span
                                                    class="jlsocial-element-right">followers</span></div>
                                        </div>
                                    </div>
                                    <div id="sprasa_recent_post_text_widget-9" class="widget post_list_widget">
                                        <div class="widget_jl_wrapper">
                                            <div class="ettitle">
                                                <div class="widget-title">
                                                    <h2 class="jl_title_c">Art &amp; Fashion</h2>
                                                </div>
                                            </div>
                                            <div class="bt_post_widget">
                                            
                                            <?php if (!empty($artfashionsposts)):
                                            foreach ($artfashionsposts as $item): ?>

                                                <div class="jl_m_right jl_sm_list jl_ml jl_clear_at">
                                                    <div class="jl_m_right_w">
                                                        <div class="jl_m_right_img jl_radus_e"><a href="<?php echo $item->optional_url; ?>"><img
                                                                    width="120" height="120"
                                                                    src="img/pexels-daria-shevtsova-1257105-120x120.jpg"
                                                                    class="attachment-sprasa_small_feature size-sprasa_small_feature wp-post-image"
                                                                    alt="" loading="lazy"></a></div>
                                                        <div class="jl_m_right_content">
                                                            <h2 class="entry-title"> <a href="<?php echo $item->optional_url; ?>" tabindex="-1"><?php echo $item->title; ?></a></h2><span
                                                                class="jl_post_meta"><span class="jl_author_img_w"><i
                                                                        class="jli-user"></i><a href="#"
                                                                        title="Posts by Spraya"
                                                                        rel="author"><?php echo $item->username; ?></a></span><span
                                                                    class="post-date"><i class="jli-pen"></i><?php echo date("F jS, Y", strtotime($item->created_at)); ?></span></span>
                                                        </div>
                                                    </div>
                                                </div>

                                            <?php endforeach;
                                            endif; ?>

                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div id="sprasa_ads300x250_widget-2" class="widget jellywp_ads300x250_widget">
                                        <div class="widget_jl_wrapper ads_widget_container">
                                            <div class="widget-title">
                                                <h2 class="jl_title_c">Advertisement</h2>
                                            </div>
                                            <div class="ads300x250-thumb jl_radus_e"><a href="#"><img src="img/ads.png"
                                                        alt=""></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="home_section7">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div id="blockid_84d79c5" class="block-section jl-main-block">
                                    <div class="jl_grid_wrap_f jl_sf_grid jl_clear_at">
                                        <div class="jl-roww content-inner jl-col3 jl-col-row">
                                            <div class="jl_sec_title">
                                                <h3 class="jl_title_c"><span>Today Stories</span></h3>
                                                <p>This is an optional subtitle for post section</p>
                                            </div>

                                            <?php if (!empty($todayposts)):
                                            foreach ($todayposts as $item): ?>

                                            <div class="jl-grid-cols">
                                                <div class="p-wraper post-1614">
                                                    <div class="jl_m_right jl_sm_list jl_ml jl_clear_at">
                                                        <div class="jl_m_right_w">
                                                            <div class="jl_m_right_img jl_radus_e"><a href="<?php echo $item->optional_url; ?>"><img
                                                                        width="450" height="450"
                                                                        src="img/klara-kulikova-f2d9xY93ym0-unsplash-450x450.jpg"
                                                                        class="attachment-sprasa_feature_small size-sprasa_feature_small wp-post-image"
                                                                        alt="" loading="lazy"></a></div>
                                                            <div class="jl_m_right_content"> <span class="jl_f_cat"><a
                                                                        class="post-category-color-text"
                                                                        style="background: #eba845;"
                                                                        href="#"><?php echo $item->category_name; ?></a></span>
                                                                <h2 class="entry-title"><a href="<?php echo $item->optional_url; ?>"><?php echo $item->title; ?></a></h2><span
                                                                    class="jl_post_meta"> <span
                                                                        class="jl_author_img_w"><i
                                                                            class="jli-user"></i><a href="#"
                                                                            title="Posts by Spraya"
                                                                            rel="author"><?php echo $item->username; ?></a></span><span
                                                                        class="post-date"><i class="jli-pen"></i><?php echo date("F jS, Y", strtotime($item->created_at)); ?></span><span class="post-read-time"><i
                                                                            class="jli-watch-2"></i>3 Mins
                                                                        read</span></span>
                                                                <p>Phasellus tellus tellus, imperdiet ut imperdiet Best
                                                                    WrodPress Theme for...</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <?php endforeach;
                                            endif; ?>

                                            
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
</div><!-- end content -->