<div class="search_form_menu_personal">
                <div class="menu_mobile_large_close"> <span
                        class="jl_close_wapper search_form_menu_personal_click"><span class="jl_close_1"></span><span
                            class="jl_close_2"></span></span></div>
                <form method="get" class="searchform_theme" action="#"><input type="text" placeholder="Search..."
                        value="" name="s" class="search_btn" /><button type="submit" class="button"><i
                            class="jli-search"></i></button></form>
            </div>
            <div class="mobile_menu_overlay"></div>
            <section id="content_main" class="clearfix jl_spost">
                <div class="container">
                    <div class="row main_content">
                        <div class="col-md-8 loop-large-post" id="content">
                            <div class="widget_container content_page">
                                <!-- start post -->
                                <div class="post-2970 post type-post status-publish format-gallery has-post-thumbnail hentry category-business tag-inspiration tag-morning tag-tip tag-tutorial post_format-post-format-gallery"
                                    id="post-2970">
                                    <div class="single_section_content box blog_large_post_style">
                                        <div class="jl_single_style2">
                                            <div
                                                class="single_post_entry_content single_bellow_left_align jl_top_single_title jl_top_title_feature">
                                                <span class="meta-category-small single_meta_category"><a
                                                        class="post-category-color-text" style="background:#eba845"
                                                        href="#"><?php echo $post->category_name; ?></a></span>
                                                <h1 class="single_post_title_main"> <?php echo $post->title; ?></h1>
                                                <p class="post_subtitle_text"></p> <span
                                                    class="jl_post_meta"><span class="jl_author_img_w"><i
                                                            class="jli-user"></i><a href="#" title="Posts by Spraya"
                                                            rel="author"><?php echo $post->username; ?></a></span><span class="post-date"><i
                                                            class="jli-pen"></i><?php echo date("F jS, Y", strtotime($post->created_at)); ?></span><span
                                                        class="post-read-time"><i class="jli-watch-2"></i>2 Mins
                                                        read</span><span class="meta-comment"><i
                                                            class="jli-comments"></i><a href="#respond">0
                                                            Comment</a></span></span>
                                            </div>
                                            <div class="jl_slide_wrap_s jl_clear_at">
                                                <div class="jl_ar_top jl_clear_at">
                                                    <div class="jl-w-slider jl_full_feature_w">
                                                        <div class="jl-eb-slider jelly_loading_pro" data-arrows="true"
                                                            data-play="true" data-effect="false" data-speed="500"
                                                            data-autospeed="7000" data-loop="true" data-dots="true"
                                                            data-swipe="true" data-items="1" data-xs-items="1"
                                                            data-sm-items="1" data-md-items="1" data-lg-items="1"
                                                            data-xl-items="1">
                                                            <div class="slide">
                                                                <div class="slide-inner jl_radus_e"><img
                                                                        src="img/pexels-daria-shevtsova-1071162-scaled-1000x650.jpg"
                                                                        alt="">
                                                                    <div class="background_over_image"></div>
                                                                </div>
                                                            </div>
                                                            <div class="slide">
                                                                <div class="slide-inner jl_radus_e"><img
                                                                        src="img/taylor-friehl-2xcrqyi95iQ-unsplash-1000x650.jpg"
                                                                        alt="" />
                                                                    <div class="background_over_image"></div>
                                                                </div>
                                                            </div>
                                                            <div class="slide">
                                                                <div class="slide-inner jl_radus_e"><img
                                                                        src="img/taylor-friehl-dyTCdSo5diI-unsplash-1000x650.jpg"
                                                                        alt="" />
                                                                    <div class="background_over_image"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="post_content_w">
                                            <div class="post_sw">
                                                <div class="post_s">
                                                    <div class="jl_single_share_wrapper jl_clear_at">
                                                        <ul class="single_post_share_icon_post">
                                                            <li class="single_post_share_facebook"><a href="#"
                                                                    target="_blank"><i class="jli-facebook"></i></a>
                                                            </li>
                                                            <li class="single_post_share_twitter"><a href="#"
                                                                    target="_blank"><i class="jli-twitter"></i></a></li>
                                                            <li class="single_post_share_pinterest"><a href="#"
                                                                    target="_blank"><i class="jli-pinterest"></i></a>
                                                            </li>
                                                            <li class="single_post_share_linkedin"><a href="#"
                                                                    target="_blank"><i class="jli-linkedin"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div><span class="single-post-meta-wrapper jl_sfoot"><a href="#"
                                                            class="jm-post-like" data-post_id="2970" title="Like"><i
                                                                class="jli-love"></i><span>3</span></a><span
                                                            class="view_options"><i
                                                                class="jli-view-o"></i><span>5.5k</span></span></span>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="single_tag_share ">
                                            <div class="tag-cat">
                                                <ul class="single_post_tag_layout">
                                                <?php if (!empty($post_tags)):
                                            foreach ($post_tags as $item): ?>
                                                    <li><a href="#" rel="tag"><?php echo $item->tag;?></a></li>
                                                    <?php endforeach;
                                            endif; ?>
                                                    
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="postnav_w">
                                            <div class="postnav_left">
                                                <div class="single_post_arrow_content"><a href="#" id="prepost"> <span
                                                            class="jl_cpost_nav"> <span class="jl_post_nav_link"><i
                                                                    class="jli-left-arrow"></i>Previous post</span><span
                                                                class="jl_cpost_title">It's time to look at the best
                                                                structures of our society</span></span></a></div>
                                            </div>
                                        </div>
                                        <div class="auth">
                                            <div class="author-info jl_info_auth">
                                                <div class="author-avatar"><img
                                                        src="img/woman-sitting-and-smiling-1858175.jpg" width="165"
                                                        height="165" alt="Spraya"
                                                        class="avatar avatar-165 wp-user-avatar wp-user-avatar-165 alignnone photo">
                                                </div>
                                                <div class="author-description">
                                                    <h5><a href="#"> Spraya</a></h5>
                                                    <ul class="jl_auth_link clearfix">
                                                        <li><a href="#" target="_blank"><i class="jli-link"></i></a>
                                                        </li>
                                                        <li><a href="#" target="_blank"><i class="jli-linkedin"></i></a>
                                                        </li>
                                                        <li><a href="#" target="_blank"><i class="jli-rss"></i></a></li>
                                                    </ul>
                                                    <p>Etiam vitae dapibus rhoncus eget etiam aenean nisi montes felis
                                                        pretium donec veni pede vidi condimentum et aenean hendrerit.
                                                        Quis sem justo nisi varius Phasellus tellus tellus, imperdiet ut
                                                        imperdiet eu, iaculis a sem</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="related-posts">
                                            <h4>Related Articles</h4>
                                            <div class="single_related_post">
                                                <div class="jl_m_right jl_m_list jl_m_img">
                                                    <div class="jl_m_right_w">
                                                        <div class="jl_m_right_img jl_radus_e"><a href="#"><img
                                                                    width="500" height="350"
                                                                    src="img/taylor-friehl-yqMPFPj-BWA-unsplash-500x350.jpg"
                                                                    class="attachment-sprasa_slider_grid_small size-sprasa_slider_grid_small wp-post-image"
                                                                    alt="" loading="lazy"></a></div>
                                                        <div class="jl_m_right_content"> <span class="jl_f_cat"><a
                                                                    class="post-category-color-text"
                                                                    style="background:#eba845"
                                                                    href="#">Business</a></span>
                                                            <h2 class="entry-title"> <a href="#" tabindex="-1">Nice
                                                                    photo shooting with hand classic style</a></h2><span
                                                                class="jl_post_meta"><span class="jl_author_img_w"><i
                                                                        class="jli-user"></i><a href="#"
                                                                        title="Posts by Spraya"
                                                                        rel="author">Spraya</a></span><span
                                                                    class="post-date"><i class="jli-pen"></i>July 24,
                                                                    2019</span><span class="post-read-time"><i
                                                                        class="jli-watch-2"></i>2 Mins
                                                                    read</span></span>
                                                            <p>Mauris mattis auctor cursus. Phasellus tellus tellus,
                                                                imperdiet ut imperdiet eu, iaculis a sem. Donec vehicula
                                                                luctus nunc...</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jl_m_right jl_m_list jl_m_img">
                                                    <div class="jl_m_right_w">
                                                        <div class="jl_m_right_img jl_radus_e"><a href="#"><img
                                                                    width="500" height="350"
                                                                    src="img/alex-block-O6PS-ts5C2A-unsplash-500x350.jpg"
                                                                    class="attachment-sprasa_slider_grid_small size-sprasa_slider_grid_small wp-post-image"
                                                                    alt="" loading="lazy"></a></div>
                                                        <div class="jl_m_right_content"> <span class="jl_f_cat"><a
                                                                    class="post-category-color-text"
                                                                    style="background:#eba845"
                                                                    href="#">Business</a></span>
                                                            <h2 class="entry-title"> <a href="#" tabindex="-1">It’s
                                                                    always fun time and smile in the summer</a></h2>
                                                            <span class="jl_post_meta"><span class="jl_author_img_w"><i
                                                                        class="jli-user"></i><a href="#"
                                                                        title="Posts by Spraya"
                                                                        rel="author">Spraya</a></span><span
                                                                    class="post-date"><i class="jli-pen"></i>July 24,
                                                                    2019</span><span class="post-read-time"><i
                                                                        class="jli-watch-2"></i>2 Mins
                                                                    read</span></span>
                                                            <p>Mauris mattis auctor cursus. Phasellus tellus tellus,
                                                                imperdiet ut imperdiet eu, iaculis a sem. Donec vehicula
                                                                luctus nunc...</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jl_m_right jl_m_list jl_m_img">
                                                    <div class="jl_m_right_w">
                                                        <div class="jl_m_right_img jl_radus_e"><a href="#"><img
                                                                    width="500" height="350"
                                                                    src="img/pexels-ichad-windhiagiri-3993407-scaled-500x350.jpg"
                                                                    class="attachment-sprasa_slider_grid_small size-sprasa_slider_grid_small wp-post-image"
                                                                    alt="" loading="lazy"></a></div>
                                                        <div class="jl_m_right_content"> <span class="jl_f_cat"><a
                                                                    class="post-category-color-text"
                                                                    style="background:#eba845"
                                                                    href="#">Business</a></span>
                                                            <h2 class="entry-title"> <a href="#" tabindex="-1">Best
                                                                    inspire dark photo in the winter season</a></h2>
                                                            <span class="jl_post_meta"><span class="jl_author_img_w"><i
                                                                        class="jli-user"></i><a href="#"
                                                                        title="Posts by Spraya"
                                                                        rel="author">Spraya</a></span><span
                                                                    class="post-date"><i class="jli-pen"></i>July 23,
                                                                    2016</span><span class="post-read-time"><i
                                                                        class="jli-watch-2"></i>2 Mins
                                                                    read</span></span>
                                                            <p>Mauris mattis auctor cursus. Phasellus tellus tellus,
                                                                imperdiet ut imperdiet eu, iaculis a sem. Donec vehicula
                                                                luctus nunc...</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="respond" class="comment-respond">
                                            <h3 id="reply-title" class="comment-reply-title">Leave a Reply</h3>
                                            <form action="http://jellywp.com/html/sprasa-preview/post-layout-1.html"
                                                method="post" id="commentform" class="comment-form">
                                                <p class="comment-notes"><span id="email-notes">Your email address will
                                                        not be published.</span> Required fields are marked <span
                                                        class="required">*</span></p>
                                                <p class="comment-form-comment"><textarea class="u-full-width"
                                                        id="comment" name="comment" cols="45" rows="8"
                                                        aria-required="true" placeholder="Comment"></textarea></p>
                                                <div class="form-fields row"><span
                                                        class="comment-form-author col-md-4"><input id="author"
                                                            name="author" type="text" value="" size="30"
                                                            placeholder="Fullname"></span><span
                                                        class="comment-form-email col-md-4"><input id="email"
                                                            name="email" type="text" value="" size="30"
                                                            placeholder="Email Address"></span><span
                                                        class="comment-form-url col-md-4"><input id="url" name="url"
                                                            type="text" value="" size="30" placeholder="Web URL"></span>
                                                </div>
                                                <p class="comment-form-cookies-consent"><input
                                                        id="wp-comment-cookies-consent"
                                                        name="wp-comment-cookies-consent" type="checkbox"
                                                        value="yes"><label for="wp-comment-cookies-consent">Save my
                                                        name, email, and website in this browser for the next time I
                                                        comment.</label></p>
                                                <p class="form-submit"><input name="submit" type="submit" id="submit"
                                                        class="submit" value="Post Comment"><input type="hidden"
                                                        name="comment_post_ID" id="comment_post_ID"></p>
                                            </form>
                                        </div><!-- #respond -->
                                    </div>
                                </div><!-- end post -->
                                <div class="brack_space"></div>
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
                                                href="https://www.youtube.com/user/envato" title="Youtube"></a> <span
                                                class="jlsocial-element-left"> <i class="jli-youtube"
                                                    aria-hidden="true"></i> <span class="num-count">65.5k</span></span>
                                            <span class="jlsocial-element-right">subscribers</span></div>
                                        <div class="jlsocial-element jl-vimeo jl_radus_e"><a target="_blank"
                                                href="https://vimeo.com/beeple" title="vimeo"></a> <span
                                                class="jlsocial-element-left"> <i class="jli-vimeo"
                                                    aria-hidden="true"></i> <span class="num-count">240</span></span>
                                            <span class="jlsocial-element-right">subscribers</span></div>
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
                                            <div class="jl_m_right jl_sm_list jl_ml jl_clear_at">
                                                <div class="jl_m_right_w">
                                                    <div class="jl_m_right_img jl_radus_e"><a href="#"><img width="120"
                                                                height="120"
                                                                src="img/pexels-daria-shevtsova-1257105-120x120.jpg"
                                                                class="attachment-sprasa_small_feature size-sprasa_small_feature wp-post-image"
                                                                alt="" loading="lazy"></a></div>
                                                    <div class="jl_m_right_content">
                                                        <h2 class="entry-title"> <a href="#" tabindex="-1">This place
                                                                really good place for reading</a></h2><span
                                                            class="jl_post_meta"><span class="jl_author_img_w"><i
                                                                    class="jli-user"></i><a href="#"
                                                                    title="Posts by Spraya"
                                                                    rel="author">Spraya</a></span><span
                                                                class="post-date"><i class="jli-pen"></i>July 24,
                                                                2016</span></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="jl_m_right jl_sm_list jl_ml jl_clear_at">
                                                <div class="jl_m_right_w">
                                                    <div class="jl_m_right_img jl_radus_e"><a href="#"><img width="120"
                                                                height="120"
                                                                src="img/jo-jo-M46Z1FXmD-c-unsplash-120x120.jpg"
                                                                class="attachment-sprasa_small_feature size-sprasa_small_feature wp-post-image"
                                                                alt="" loading="lazy"></a></div>
                                                    <div class="jl_m_right_content">
                                                        <h2 class="entry-title"> <a href="#" tabindex="-1">Having fun
                                                                with DJ and the best music drop</a></h2><span
                                                            class="jl_post_meta"><span class="jl_author_img_w"><i
                                                                    class="jli-user"></i><a href="#"
                                                                    title="Posts by Spraya"
                                                                    rel="author">Spraya</a></span><span
                                                                class="post-date"><i class="jli-pen"></i>July 24,
                                                                2016</span></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="jl_m_right jl_sm_list jl_ml jl_clear_at">
                                                <div class="jl_m_right_w">
                                                    <div class="jl_m_right_img jl_radus_e"><a href="#"><img width="120"
                                                                height="120"
                                                                src="img/melanie-van-leeuwen-QA-qQfWJM0E-unsplash-120x120.jpg"
                                                                class="attachment-sprasa_small_feature size-sprasa_small_feature wp-post-image"
                                                                alt="" loading="lazy"></a></div>
                                                    <div class="jl_m_right_content">
                                                        <h2 class="entry-title"> <a href="#" tabindex="-1">This guitar
                                                                sound is so good and i need it more</a></h2><span
                                                            class="jl_post_meta"><span class="jl_author_img_w"><i
                                                                    class="jli-user"></i><a href="#"
                                                                    title="Posts by Spraya"
                                                                    rel="author">Spraya</a></span><span
                                                                class="post-date"><i class="jli-pen"></i>July 24,
                                                                2016</span></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="jl_m_right jl_sm_list jl_ml jl_clear_at">
                                                <div class="jl_m_right_w">
                                                    <div class="jl_m_right_img jl_radus_e"><a href="#"><img width="120"
                                                                height="120"
                                                                src="img/daniel-korpai-_RYbP9O-vTU-unsplash-120x120.jpg"
                                                                class="attachment-sprasa_small_feature size-sprasa_small_feature wp-post-image"
                                                                alt="" loading="lazy"></a></div>
                                                    <div class="jl_m_right_content">
                                                        <h2 class="entry-title"> <a href="#" tabindex="-1">Technology
                                                                can make your live easy and fast</a></h2><span
                                                            class="jl_post_meta"><span class="jl_author_img_w"><i
                                                                    class="jli-user"></i><a href="#"
                                                                    title="Posts by Spraya"
                                                                    rel="author">Spraya</a></span><span
                                                                class="post-date"><i class="jli-pen"></i>July 24,
                                                                2016</span></span>
                                                    </div>
                                                </div>
                                            </div>
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
            </section><!-- end content -->