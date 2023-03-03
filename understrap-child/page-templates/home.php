<?php
/**
 * Template Name: Home Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );

if ( is_front_page() ) {
	get_template_part( 'global-templates/hero' );
}

$wrapper_id = 'full-width-page-wrapper';
if ( is_page_template( 'page-templates/no-title.php' ) ) {
	$wrapper_id = 'no-title-page-wrapper';
}
?>

    <!-- Revolution slider start -->
    <div class="tp-banner-container">
        <div class="tp-banner">
            <ul>
                <li data-slotamount="7" data-transition="3dcurtain-horizontal" data-masterspeed="1000" data-saveperformance="on"> <img alt="" src="<?php echo get_template_directory_uri(); ?>/img/slider.jpg" data-lazyload="<?php echo get_template_directory_uri(); ?>/img/slider.jpg">
                    <div class="caption lft large-title tp-resizeme slidertext2" data-x="center" data-y="150" data-speed="600" data-start="1600"><span> Momager-On-Set </span></div>
                    <div class="caption lfb large-title tp-resizeme slidertext3" data-x="center" data-y="260" data-speed="600" data-start="2200"> Your child's guide to a fun and successful filming experience with a Momager-On-Set set sitter</div>
                    <div class="caption lfb large-title tp-resizeme slidertext4" data-x="340" data-y="330" data-speed="600" data-start="2800"> <a href="contact.html"><i class="fas fa-edit"></i> Enroll Today</a> </div>
                    <div class="caption lfb large-title tp-resizeme slidertext4 slidertext5" data-x="600" data-y="330" data-speed="600" data-start="3400"> <a href="about.html"><i class="fa fa-calendar-alt"></i> Schedule a Tour</a> </div>
                </li>
                <li data-slotamount="7" data-transition="3dcurtain-horizontal" data-masterspeed="1000" data-saveperformance="on"> <img alt="" src="<?php echo get_template_directory_uri(); ?>/img/slider1.jpg" data-lazyload="<?php echo get_template_directory_uri(); ?>/img/slider1.jpg">
                    <div class="caption lft large-title tp-resizeme slidertext2" data-x="center" data-y="150" data-speed="600" data-start="1600"><span> Momager-On-Set </span></div>
                    <div class="caption lfb large-title tp-resizeme slidertext3" data-x="center" data-y="260" data-speed="600" data-start="2200"> <br />
                        Contact us today to learn more about how we can support your child's journey in the entertainment industry.</div>
                    <div class="caption lfb large-title tp-resizeme slidertext4" data-x="340" data-y="330" data-speed="600" data-start="2800"> <a href="contact.html"><i class="fas fa-edit"></i> Enroll Today</a> </div>
                    <div class="caption lfb large-title tp-resizeme slidertext4 slidertext5" data-x="600" data-y="330" data-speed="600" data-start="3400"> <a href="about.html"><i class="fa fa-calendar-alt"></i> Schedule a Tour</a> </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- Revolution slider end -->

    <!-- School Start -->
    <div class="school-wrap">
        <div class="container">
            <div class="school_sec">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="school_box card border-0 rounded-0">
                            <div class="schoolImg card-img" ><img src="<?php echo get_template_directory_uri(); ?>/img/IMG_2998.jpg" alt=""></div>
                            <h3><a href="courses-detail.html"> CPS Permit </a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus nibh dolor, gravida faucibus dolor, pulvinar rhoncus risus. Fusce vel rutrum mi.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="school_box card border-0 rounded-0">
                            <div class="schoolImg card-img"><img src="<?php echo get_template_directory_uri(); ?>/img/IMG_2996.jpg" alt=""></div>
                            <h3><a href="courses-detail.html"> Set-Sitter </a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus nibh dolor, gravida faucibus dolor, pulvinar rhoncus risus. Fusce vel rutrum mi.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="school_box card border-0 rounded-0">
                            <div class="schoolImg card-img"><img src="<?php echo get_template_directory_uri(); ?>/img/IMG_2999.jpg" alt=""></div>
                            <h3><a href="courses-detail.html"> Trasnportation </a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus nibh dolor, gravida faucibus dolor, pulvinar rhoncus risus. Fusce vel rutrum mi.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- School End -->

    <!-- About Start -->
    <div class="about-wrap" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="about_box">
                        <div class="title">
                            <p>Set Sitter</p>
                            <h1>Fusce eu diam ac risus <span>fusce ut ante urna.</span></h1>
                        </div>
                        <div class="subText">Mauris maximus neque augue ut commodo</div>
                        <p>A Momager-On-Set set sitter is an essential part of a child star's journey in the entertainment industry! Not only do they provide a familiar and comfortable environment for the child on set, but they also act as a trusted guide, helping to make the experience a fun and exciting one.</p>
                        <ul class="tick">
                            <li>A comfortable home away from home: A Momager-On-Set is like a cozy blanket on a cold day, they create a familiar and comfortable environment for the child star, so they can relax and have fun on set!</li>
                            <li>A trustworthy adventure buddy: A Momager-On-Set is like having a trusty sidekick, they guide the child star through the exciting world of show biz, making sure they have a blast while they work!</li>
                            <li>A fun-loving personal cheerleader: A Momager-On-Set is like a personal cheerleader, they make sure the child star is having the time of their life on set, making sure they're happy and comfortable so they can shine!</li>
                        </ul>
                        <div class="readmore"><a href="about.html">Read More</a></div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="aboutImg"><img src="<?php echo get_template_directory_uri(); ?>/img/IMG_2997.jpg" alt=""></div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Enrol Start -->
    <div class="enrol-wrap">
        <div class="container">
            <div class="title">
                <p>Get Started</p>
                <h1>On Set Child Sitter</h1>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus nibh dolor, gravida faucibus dolor consectetur, pulvinar rhoncus risus. Fusce vel rutrum mi. Suspendisse pretium tellus eu ipsum pellentesque convallis. Ut mollis libero eu massa imperdiet faucibus vitae non diam. Sed egestas felis libero, ut suscipit nisl varius non.</p>
            <div class="readmore"><a href="contact.html">Contact Us</a></div>
        </div>
    </div>
    <!-- Enrol End -->

    <!-- Gallery Start -->
    <div class="gallery-wrap d-none">
        <div class="container">
            <div class="title title_center">
                <h1>Our Gallery</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="galleryImg"><img src="<?php echo get_template_directory_uri(); ?>/img/gallery01.jpg" alt="">
                        <div class="portfolio-overley">
                            <div class="content"> <a href="<?php echo get_template_directory_uri(); ?>/img/gallery01.jpg" class="fancybox image-link" data-fancybox="images" title="Image Caption Here"><i class="fa fa-plus" aria-hidden="true"></i></a> </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="galleryImg"><img src="<?php echo get_template_directory_uri(); ?>/img/gallery02.jpg" alt="">
                        <div class="portfolio-overley">
                            <div class="content"> <a href="<?php echo get_template_directory_uri(); ?>/img/gallery02.jpg" class="fancybox image-link" data-fancybox="images" title="Image Caption Here"><i class="fa fa-plus" aria-hidden="true"></i></a> </div>
                        </div>
                    </div>
                    <div class="galleryImg"><img src="<?php echo get_template_directory_uri(); ?>/img/gallery03.jpg" alt="">
                        <div class="portfolio-overley">
                            <div class="content"> <a href="<?php echo get_template_directory_uri(); ?>/img/gallery03.jpg" class="fancybox image-link" data-fancybox="images" title="Image Caption Here"><i class="fa fa-plus" aria-hidden="true"></i></a> </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="galleryImg"><img src="<?php echo get_template_directory_uri(); ?>/img/gallery04.jpg" alt="">
                        <div class="portfolio-overley">
                            <div class="content"> <a href="<?php echo get_template_directory_uri(); ?>/img/gallery04.jpg" class="fancybox image-link" data-fancybox="images" title="Image Caption Here"><i class="fa fa-plus" aria-hidden="true"></i></a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Gallery End -->

    <!-- Flight Path Start -->
    <div class="flight-wrap d-none">
        <div class="container">
            <div class="title">
                <h1> Flight Path </h1>
            </div>
            <ul class="owl-carousel">
                <li class="item">
                    <div class="flight">
                        <div class="flightImg"><img src="<?php echo get_template_directory_uri(); ?>/img/program.jpg" alt=""></div>
                        <div class="path_box">
                            <h3><a href="courses.html">Learning Programs</a></h3>
                            <div class="time_box">Class Time: <span>08:00 am - 10:00 am</span></div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus nibh dolor, gravida faucibus dolor consectetur.</p>
                        </div>
                    </div>
                </li>
                <li class="item">
                    <div class="flight">
                        <div class="flightImg"><img src="<?php echo get_template_directory_uri(); ?>/img/discover.jpg" alt=""></div>
                        <div class="path_box">
                            <h3><a href="courses.html">Discovery Points</a></h3>
                            <div class="time_box">Class Time: <span>08:00 am - 10:00 am</span></div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus nibh dolor, gravida faucibus dolor consectetur.</p>
                        </div>
                    </div>
                </li>
                <li class="item">
                    <div class="flight">
                        <div class="flightImg"><img src="<?php echo get_template_directory_uri(); ?>/img/curriculum.jpg" alt=""></div>
                        <div class="path_box">
                            <h3><a href="courses.html">Our Curriculum</a></h3>
                            <div class="time_box">Class Time: <span>08:00 am - 10:00 am</span></div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus nibh dolor, gravida faucibus dolor consectetur.</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- Flight Path End -->

    <!-- Testimonials Start -->
    <div class="testimonials-wrap">
        <div class="container">
            <div class="title">
                <p>Testimoinials</p>
                <h1> What Parents Say </h1>
            </div>
            <ul class="owl-carousel testimonials_list unorderList">
                <li class="item">
                    <div class="testimonials_sec">
                        <div class="client_box">
                            <div class="clientImg"><img alt="" src="<?php echo get_template_directory_uri(); ?>/img/client1.jpg"></div>
                            <ul class="unorderList starWrp">
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                            </ul>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur elit. Phasellus porttitor leo id tortor cursus, a gravida sem feugiat. Maecenas nisl libero, lobortis id hendrerit sed, fermentum ut nunc. Duis condimentum tincidunt posuere. Donec at dui sit amet nisl semper laoreet. Sed volutpat tincidunt ante, non malesuada massa.</p>
                        <h3>David Malan <span>Aliquam sodales</span></h3>
                        <div class="quote_icon"><i class="fas fa-quote-left"></i></div>
                    </div>
                </li>
                <li class="item">
                    <div class="testimonials_sec">
                        <div class="client_box">
                            <div class="clientImg"><img alt="" src="<?php echo get_template_directory_uri(); ?>/img/client1.jpg"></div>
                            <ul class="unorderList starWrp">
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                            </ul>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur elit. Phasellus porttitor leo id tortor cursus, a gravida sem feugiat. Maecenas nisl libero, lobortis id hendrerit sed, fermentum ut nunc. Duis condimentum tincidunt posuere. Donec at dui sit amet nisl semper laoreet. Sed volutpat tincidunt ante, non malesuada massa.</p>
                        <h3>David Malan <span>Aliquam sodales</span></h3>
                        <div class="quote_icon"><i class="fas fa-quote-left"></i></div>
                    </div>
                </li>
                <li class="item">
                    <div class="testimonials_sec">
                        <div class="client_box">
                            <div class="clientImg"><img alt="" src="<?php echo get_template_directory_uri(); ?>/img/client1.jpg"></div>
                            <ul class="unorderList starWrp">
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                            </ul>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur elit. Phasellus porttitor leo id tortor cursus, a gravida sem feugiat. Maecenas nisl libero, lobortis id hendrerit sed, fermentum ut nunc. Duis condimentum tincidunt posuere. Donec at dui sit amet nisl semper laoreet. Sed volutpat tincidunt ante, non malesuada massa.</p>
                        <h3>David Malan <span>Aliquam sodales</span></h3>
                        <div class="quote_icon"><i class="fas fa-quote-left"></i></div>
                    </div>
                </li>
                <li class="item">
                    <div class="testimonials_sec">
                        <div class="client_box">
                            <div class="clientImg"><img alt="" src="<?php echo get_template_directory_uri(); ?>/img/client1.jpg"></div>
                            <ul class="unorderList starWrp">
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                            </ul>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur elit. Phasellus porttitor leo id tortor cursus, a gravida sem feugiat. Maecenas nisl libero, lobortis id hendrerit sed, fermentum ut nunc. Duis condimentum tincidunt posuere. Donec at dui sit amet nisl semper laoreet. Sed volutpat tincidunt ante, non malesuada massa.</p>
                        <h3>David Malan <span>Aliquam sodales</span></h3>
                        <div class="quote_icon"><i class="fas fa-quote-left"></i></div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- Testimonials End -->

    <!-- Contact Start -->
    <div class="contact-wrap" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="title">
                        <h1>Fusce eu diam ac risus
                            fusce ut ante urna.</h1>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 align-middle">
                            <div class="conInfo phonewrp emailWrp"><span>E-MAIL</span> <a href="mailto:info@domainname.com">info@domainname.com</a></div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="conInfo phonewrp"><span>Phone</span> <a href="tel:7704251234">(770) 123 4567</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="contact_form">
                        <div class="title">
                            <h1>GET CONSULTATION!</h1>
                        </div>
                        <form>
                            <div class="input-group">
                                <input type="text" name="Name" class="form-control" placeholder="Name">
                            </div>
                            <div class="input-group">
                                <input type="email" name="Email" class="form-control" placeholder="Email">
                            </div>
                            <div class="input-group">
                                <input type="number" name="Phone" class="form-control" placeholder="Phone">
                            </div>
                            <div class="input-group">
                                <textarea class="form-control" placeholder="Comments"></textarea>
                            </div>
                            <div class="input-group">
                                <input type="submit" value="Contact Us" name="submit" class="sub">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact End -->

    <!--Newsletter Start-->
    <div class="newsletter-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="title">
                        <h1>Newsletter</h1>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur.</p>
                </div>
                <div class="col-lg-6">
                    <div class="news-info">
                        <form>
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Email Address">
                                <div class="form_icon"><i class="fas fa-envelope"></i></div>
                            </div>
                            <button class="sigup"><i class="fas fa-paper-plane"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Newsletter End-->

<?php
get_footer();
?>