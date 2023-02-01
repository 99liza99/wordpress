<?php
/**
 * Testimonial Block Template.
 */
$text = get_field('testimonial') ?: 'Testimonials';
$info = get_field('sub_text') ?: 'Excepteur sint occaecat cupidatat non proident';

?>
<div class="reviews container">
    <div class="title">
        <h1><?= $text ?>
            <h1>
                <p><?= $info ?></p>
    </div>
    <div class="content-reviews">
        <!-- Swiper -->
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="card">
                        <p class="description">
                            Nulla vitae elit libero, a pharetra augue. Aenean lacinia
                            bibendum nulla sed consectetur.
                        </p>
                        <div class="contact">
                            <div class="icon">
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/person_1.png') ?>"
                                     alt="avatar"/>
                            </div>
                            <div class="info">
                                <b>Dianne Russell</b>
                                <p>Marketing Coordinator</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card">
                        <p class="description">
                            Nulla vitae elit libero, a pharetra augue. Aenean lacinia
                            bibendum nulla sed consectetur.
                        </p>
                        <div class="contact">
                            <div class="icon">
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/person_2.png') ?>"
                                     alt="avatar"/>
                            </div>
                            <div class="info">
                                <b>Robert Johnson</b>
                                <p>Graphic Designer</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card">
                        <p class="description">
                            Nulla vitae elit libero, a pharetra augue. Aenean lacinia
                            bibendum nulla sed consectetur.
                        </p>
                        <div class="contact">
                            <div class="icon">
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/person_3.png') ?>"
                                     alt="avatar"/>
                            </div>
                            <div class="info">
                                <b>Floyd Miles</b>
                                <p>President of Sales</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card">
                        <p class="description">
                            Nulla vitae elit libero, a pharetra augue. Aenean lacinia
                            bibendum nulla sed consectetur.
                        </p>
                        <div class="contact">
                            <div class="icon">
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/person_1.png') ?>"
                                     alt="avatar"/>
                            </div>
                            <div class="info">
                                <b>Dianne Russell</b>
                                <p>Marketing Coordinator</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card">
                        <p class="description">
                            Nulla vitae elit libero, a pharetra augue. Aenean lacinia
                            bibendum nulla sed consectetur.
                        </p>
                        <div class="contact">
                            <div class="icon">
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/person_2.png') ?>"
                                     alt="avatar"/>
                            </div>
                            <div class="info">
                                <b>Robert Johnson</b>
                                <p>Graphic Designer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</div>