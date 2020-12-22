@extends('frontend')

@section('content')

	<!-- Slider Area Start Here-->
        <div class="slider-area">
            <div class="bend niceties preview-2">
                <div id="ensign-nivoslider" class="slides">
                    <img src="{{asset('frontend_asset/images/slider/slide_3.jpg')}}" alt="" title="#slider-direction-1" />
                    <img src="{{asset('frontend_asset/images/slider/slide_4.jpg')}}" alt="" title="#slider-direction-2" />
                </div>
                <!-- direction 2 -->
                <div id="slider-direction-1" class="slider-direction">
                    <div class="slider-content t-cn s-tb slider-1">
                        <div class="title-container s-tb-c">
                            <h1 class="title1 uppercase"><span>Your Best</span> Photo Graphy Shop </h1>
                            <div class="slider-botton">
                                <ul>
                                    <li><a class="radius-0" href="shop.html">Shop Now <i class="fa fa-angle-right"></i></a></li>
                                    <li class="acitve"><a class="radius-0" href="about.html">About Us <i class="fa fa-angle-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- direction 2 -->
                <div id="slider-direction-2" class="slider-direction">
                    <div class="slider-content t-cn s-tb slider-2">
                        <div class="title-container s-tb-c">
                            <h1 class="title1 uppercase"><span>Creative</span> Photo Graphy Agency</h1>
                            <div class="slider-botton">
                                <ul>
                                    <li class="acitve"><a class="radius-0" href="winners.html">More Details <i class="fa fa-angle-right"></i></a></li>
                                    <li><a class="radius-0" href="contact.html">Contact Us <i class="fa fa-angle-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slider Area End Here-->

        <!-- Home Two Slider Button Services Start Here -->
        <div class="home-two-services-area">
            <div class="container-fluid acurate">
                <div class="row acurate">
                    <ul>
                        <li>
                            <div class="single-services">
                                <i class="fa fa-camera-retro"></i>
                                <h3><a href="#">Photo Contest Services</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet non ducimus hic vel minus numquam neque iusto, expedita nemo</p>
                                <div class="read-more"><a href="#">Read More</a></div>
                            </div>
                        </li>
                        <li class="hidden-sm">
                            <div class="single-services">
                                <i class="fa fa-camera-retro"></i>
                                <h3><a href="#">Photo Contest Services</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet non ducimus hic vel minus numquam neque iusto, expedita nemo</p>
                                <div class="read-more"><a href="#">Read More</a></div>
                            </div>
                        </li>
                        <li class="hidden-sm hidden-sm">
                            <div class="single-services">
                                <i class="fa fa-camera-retro"></i>
                                <h3><a href="#">Photo Contest Services</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet non ducimus hic vel minus numquam neque iusto, expedita nemo</p>
                                <div class="read-more"><a href="#">Read More</a></div>
                            </div>
                        </li>
                        <li class="hidden-sm hidden-sm">
                            <div class="single-services">
                                <i class="fa fa-camera-retro"></i>
                                <h3><a href="#">Photo Contest Services</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet non ducimus hic vel minus numquam neque iusto, expedita nemo</p>
                                <div class="read-more"><a href="#">Read More</a></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Home Two Slider Button Services End Here -->       

        <!-- Home About Start Here -->
        <div class="home-about-area pt-100 pb-100 gray-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 mb-md-30">
                        <div class="about-content-area">
                            <div class="about-content-area">
                                <h2>You Know About <span>Shooter</span></h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non natus cumque quidem quo repellat pariatur voluptatum numquam aut soluta, voluptatibus laboriosam dignissimos eaque, illo.</p>
                                <p class="hidden-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean bibendum nec risus et suscipit Curabitur metus ipsum.simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                <div class="botton-area">
                                    <a class="radius-0" href="about.html">About Us   <i class="fa fa-angle-right"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="about-featured-image">
                            <a href="about.html"><img src="{{asset('frontend_asset/images/about/about.jpg')}}" alt="image"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Home About End Here -->

        <!-- Single Photo Contest Start Here --> 
        <div class="home-single-contest pt-90 pb-90 white-bg">
            <div class="home-single single-photo-contest-area inner">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="section-title">
                                <h2>Our Running <span>Contests</span></h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mihi vero, inquit, placet agi subtilius et, ut ipse dixisti, pressius.Photograhy HTML is very </p>
                            </div>                  
                            <div class="about-content">
                                <h2>Running Contests</h2>
                                <ul class="home-single-slide">
                                    <li>
                                        <div class="item">
                                            <div class="about-image">
                                                <img src="{{asset('frontend_asset/images/about/3.jpg')}}" alt="">
                                                <div class="overley">
                                                    <h4><a href="single-contest1.html">A way of feeling</a></h4>
                                                </div>
                                            </div>
                                            <div class="about-text">
                                                <h3><a href="single-contest1.html">Professional Photo Grapher Contest</a></h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt doloremque odit, animi sapiente sunt. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                <div class="countdown-section">
                                                    <div class="row">
                                                        <div class="col-sm-11"><div class="CountDownTimer" data-date="2018-04-01 00:00:00"></div></div>
                                                        </div>
                                                </div>
                                                <a class="radius-0" href="single-contest1.html">Join Now <i class="fa fa-angle-right"></i></a>
                                            </div>  
                                        </div>                                  
                                    </li>

                                    <li>
                                        <div class="item">
                                            <div class="about-image">
                                                <img src="{{asset('frontend_asset/images/about/4.jpg')}}" alt="">
                                                <div class="overley">
                                                    <h4><a href="single-contest1.html">Meet Bird Eye View</a></h4>
                                                </div>
                                            </div>
                                            <div class="about-text">
                                                <h3><a href="single-contest1.html">New Photo Grapher Contest</a></h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt doloremque odit, animi sapiente sunt. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                <div class="countdown-section">
                                                    <div class="row">
                                                        <div class="col-sm-11"><div class="CountDownTimer" data-date="2018-04-01 00:00:00"></div></div>
                                                    </div>
                                                </div>
                                                <a class="radius-0" href="single-contest1.html">Register Now <i class="fa fa-angle-right"></i></a>
                                            </div> 
                                        </div>                                       
                                    </li>
                                    <li>
                                        <div class="item">
                                            <div class="about-image">
                                                <img src="{{asset('frontend_asset/images/about/4.jpg')}}" alt="">
                                                <div class="overley">
                                                    <h4><a href="single-contest1.html">Meet Bird Eye View</a></h4>
                                                </div>
                                            </div>
                                            <div class="about-text">
                                                <h3><a href="single-contest1.html">New Photo Grapher Contest</a></h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt doloremque odit, animi sapiente sunt. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                {{-- <div class="countdown-section">
                                                    <div class="row">
                                                        <div class="col-sm-11"><div class="CountDownTimer" data-date="2018-12-01 00:00:00"></div></div>
                                                    </div>
                                                </div>
                                                <a class="radius-0" href="single-contest1.html">Register Now <i class="fa fa-angle-right"></i></a> --}}
                                            </div> 
                                        </div>                                   
                                    </li>
                                    <li>
                                        <div class="item">
                                            <div class="about-image">
                                                <img src="{{asset('frontend_asset/images/about/4.jpg')}}" alt="">
                                                <div class="overley">
                                                    <h4><a href="single-contest1.html">Meet Bird Eye View</a></h4>
                                                </div>
                                            </div>
                                            <div class="about-text">
                                                <h3><a href="single-contest1.html">New Photo Grapher Contest</a></h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt doloremque odit, animi sapiente sunt. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>   
                                                {{-- <div class="countdown-section">
                                                    <div class="row">
                                                        <div class="col-sm-11"><div class="CountDownTimer" data-date="2018-04-01 00:00:00"></div></div>
                                                    </div>
                                                </div>
                                                <a class="radius-0" href="single-contest1.html">Register Now <i class="fa fa-angle-right"></i></a> --}}
                                            </div>  
                                        </div>                                      
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       </div>
        <!-- Single Photo Contest End Here --> 

        <!-- Services Start -->
        <section id="rs-services" class="rs-services-3 gray-bg pt-90 pb-100">
            <div class="container">
                <div class="section-title">
                    <h2>Photo Contest Features</h2>
                    </div>
                    <div class="row rs-vertical-middle">
                            <div class="row">
                                <!-- 1st -->
                                <div class="col-md-4 col-sm-12 mb-30">
                                    <div class="common">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <div class="icon-part">
                                                    <i class="fa fa-camera-retro"></i>
                                                </div>
                                            </div>
                                            <div class="col-sm-9">
                                                <div class="text">
                                                    <a href="services-details.html"><h4>Shop Intregated</h4></a>
                                                    <p>Lorem ipsum dolor sit amet dolore, consectetur adipisicing elit. Nulla, quam dolore nemo.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-12 mb-30">
                                    <div class="common">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <div class="icon-part">
                                                    <i class="fa fa-pencil-square-o"></i>
                                                </div>
                                            </div>
                                            <div class="col-sm-9">
                                                <div class="text">
                                                    <a href="services-details.html"><h4>Photo Capture</h4></a>
                                                    <p>Lorem ipsum dolor sit amet dolore, consectetur adipisicing elit. Nulla, quam dolore nemo.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- 2nd -->

                                <div class="col-md-4 col-sm-12 mb-30">
                                    <div class="common">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <div class="icon-part">
                                                    <i class="fa fa-upload"></i>
                                                </div>
                                            </div>
                                            <div class="col-sm-9">
                                                <div class="text">
                                                    <a href="services-details.html"><h4>Images Upload</h4></a>
                                                    <p>Lorem ipsum dolor sit amet dolore, consectetur adipisicing elit. Nulla, quam dolore nemo.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- 1st -->
                                <div class="col-md-4 col-sm-12 mb-sm-30">
                                    <div class="common">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <div class="icon-part">
                                                    <i class="fa fa-camera-retro"></i>
                                                </div>
                                            </div>
                                            <div class="col-sm-9">
                                                <div class="text">
                                                    <a href="services-details.html"><h4>Photo Branding</h4></a>
                                                    <p>Lorem ipsum dolor sit amet dolore, consectetur adipisicing elit. Nulla, quam dolore nemo.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-12 mb-sm-30">
                                    <div class="common">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <div class="icon-part">
                                                    <i class="fa fa-pencil-square-o"></i>
                                                </div>
                                            </div>
                                            <div class="col-sm-9">
                                                <div class="text">
                                                    <a href="services-details.html"><h4>Photo Editing</h4></a>
                                                    <p>Lorem ipsum dolor sit amet dolore, consectetur adipisicing elit. Nulla, quam dolore nemo.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- 2nd -->
                                <div class="col-md-4 col-sm-12">
                                    <div class="common">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <div class="icon-part">
                                                    <i class="fa fa-upload"></i>
                                                </div>
                                            </div>
                                            <div class="col-sm-9">
                                                <div class="text">
                                                    <a href="services-details.html"><h4>Photo Collection</h4></a>
                                                    <p>Lorem ipsum dolor sit amet dolore, consectetur adipisicing elit. Nulla, quam dolore nemo.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 4th -->

                </div>
            </section>
            <!-- Services End -->

        <!-- Home Page Shop Start Here -->
        <div class="related-winners-area home-shop pt-90 pb-90 white-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="section-title">
                            <h2>Our <span>Shop</span></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mihi vero, inquit, placet agi subtilius et, ut ipse dixisti, pressius.Photograhy HTML is very </p>
                        </div>
                    </div>
                </div>
                <div class="home-ralated">
                    <div class="single-shop-area">
                        <div class="single-winners">
                            <div class="images">
                                <a href="#"><img src="{{asset('frontend_asset/images/shop/1.jpg')}}" alt=""></a>
                                <div class="overley">
                                    <div class="winners-details">
                                        <ul class="product-info">
                                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                            <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                            <li><a href="#"><i class="fa fa-compress"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <h3><a href="product-details.html">Camera Lence</a></h3>
                            <div class="price-details">
                                <ul>
                                    <li>
                                        <del>$150 </del> $120</li>
                                </ul>
                            </div>
                        </div>
                        <div class="single-winners">
                            <div class="images">
                                <a href="#"><img src="{{asset('frontend_asset/images/shop/2.jpg')}}" alt=""></a>
                                <div class="overley">
                                    <div class="winners-details">
                                        <ul class="product-info">
                                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                            <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                            <li><a href="#"><i class="fa fa-compress"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <h3><a href="product-details.html">Camera Lence</a></h3>
                            <div class="price-details">
                                <ul>
                                    <li>
                                        <del>$150 </del> $120</li>
                                </ul>
                            </div>
                        </div>
                        <div class="single-winners">
                            <div class="images">
                                <a href="#"><img src="{{asset('frontend_asset/images/shop/3.jpg')}}" alt=""></a>
                                <div class="overley">
                                    <div class="winners-details">
                                        <ul class="product-info">
                                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                            <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                            <li><a href="#"><i class="fa fa-compress"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <h3><a href="product-details.html">Camera Lence</a></h3>
                            <div class="price-details">
                                <ul>
                                    <li>
                                        <del>$150 </del> $120</li>
                                </ul>
                            </div>
                        </div>
                        <div class="single-winners">
                            <div class="images">
                                <a href="#"><img src="{{asset('frontend_asset/images/shop/4.jpg')}}" alt=""></a>
                                <div class="overley">
                                    <div class="winners-details">
                                        <ul class="product-info">
                                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                            <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                            <li><a href="#"><i class="fa fa-compress"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <h3><a href="product-details.html">Camera Lence</a></h3>
                            <div class="price-details">
                                <ul>
                                    <li>
                                        <del>$150 </del> $120</li>
                                </ul>
                            </div>
                        </div>
                        <div class="single-winners">
                            <div class="images">
                                <a href="#"><img src="{{asset('frontend_asset/images/shop/5.jpg')}}" alt=""></a>
                                <div class="overley">
                                    <div class="winners-details">
                                        <ul class="product-info">
                                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                            <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                            <li><a href="#"><i class="fa fa-compress"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <h3><a href="product-details.html">Camera Lence</a></h3>
                            <div class="price-details">
                                <ul>
                                    <li>
                                        <del>$150 </del> $120</li>
                                </ul>
                            </div>
                        </div>
                        <div class="single-winners">
                            <div class="images">
                                <a href="#"><img src="{{asset('frontend_asset/images/shop/6.jpg')}}" alt=""></a>
                                <div class="overley">
                                    <div class="winners-details">
                                        <ul class="product-info">
                                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                            <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                            <li><a href="#"><i class="fa fa-compress"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <h3><a href="product-details.html">Camera Lence</a></h3>
                            <div class="price-details">
                                <ul>
                                    <li>
                                        <del>$150 </del> $120</li>
                                </ul>
                            </div>
                        </div>
                        <div class="single-winners">
                            <div class="images">
                                <a href="#"><img src="{{asset('frontend_asset/images/shop/7.jpg')}}" alt=""></a>
                                <div class="overley">
                                    <div class="winners-details">
                                        <ul class="product-info">
                                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                            <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                            <li><a href="#"><i class="fa fa-compress"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <h3><a href="product-details.html">Camera Lence</a></h3>
                            <div class="price-details">
                                <ul>
                                    <li>
                                        <del>$150 </del> $120</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Home Page Shop End Here -->

        <!-- Counter Up Section Start Here-->
        {{-- <div class="project-activation-area pt-100 pb-100">
            <div class="container">
                <div class="ab-count md-padding-0">
                    <div class="row">
                        <!-- ABOUT-COUNTER-LIST START -->
                        <div class="col-lg-3 col-md-3 col-sm-12 mb-sm-30 wow fadeInUp" data-wow-duration=".3s" data-wow-delay="300ms">
                            <div class="about-counter-list">
                                <i class="fa fa-picture-o"></i>
                                <h1 class="about-counter">10222</h1>                      
                                <p>Photos</p>
                            </div>
                        </div>
                        <!-- ABOUT-COUNTER-LIST END -->
                        <!-- ABOUT-COUNTER-LIST START -->
                        <div class="col-lg-3 col-md-3 col-sm-12 mb-sm-30 wow fadeInUp" data-wow-duration=".7s" data-wow-delay="300ms">
                            <div class="about-counter-list">
                                <i class="fa fa-heart"></i>
                                <h1 class="about-counter">6000</h1>                      
                                <p>Rated</p>
                            </div>
                        </div>
                        <!-- ABOUT-COUNTER-LIST END -->
                        <!-- ABOUT-COUNTER-LIST START -->
                        <div class="col-lg-3 col-md-3 col-sm-12 mb-sm-30 wow fadeInUp" data-wow-duration=".9s" data-wow-delay="300ms">
                            <div class="about-counter-list">
                                <i class="fa fa-users"></i>
                                <h1 class="about-counter">15642</h1>                     
                                <p>Viewers</p>
                            </div>
                        </div>
                        <!-- ABOUT-COUNTER-LIST END -->
                        <!-- ABOUT-COUNTER-LIST START -->
                        <div class="col-lg-3 col-md-3 col-sm-12 wow fadeInUp" data-wow-duration="1.2s" data-wow-delay="300ms">
                            <div class="about-counter-list">
                                <i class="fa fa-trophy"></i>
                                <h1 class="about-counter">97</h1>                        
                                <p>Winners </p>''
                            </div>
                        </div>
                        <!-- ABOUT-COUNTER-LIST END -->
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- Counter Down Section End Here-->

        <!-- Home Blog Start Here -->
       {{--  <div class="fix home-blog-area pt-90 pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h2>Recent <span>Blog</span> Posts</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mihi vero, inquit, placet agi subtilius et, ut ipse dixisti, pressius.Photograhy HTML is very </p>
                        </div>
                    </div>
                </div>
                <div class="blog-slider">
                    <div class="single-blog-slide">
                        <div class="images">
                            <a href="single-blog.html"><img src="{{asset('frontend_asset/images/blog/1.jpg')}}" alt=""></a>
                            <span>04 <br/>May</span>
                            <div class="overley">
                                <ul>
                                    <li><a href="single-html.html"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="{{asset('frontend_asset/images/blog/1.jpg')}}" data-lightbox="example-set" data-title="Image Title"><i class="fa fa-search"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="blog-informations">
                            <ul>
                                <li><i class="fa fa-user"></i> By Admin</li>
                                <li><i class="fa fa-comments"></i> 2 Comments</li>
                            </ul>
                            <div class="blog-details">
                                <h3><a href="single-blog.html">Loking After Our Photo Contest</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem eligendi culpa modi omnis quos voluptatibus.</p>
                                <div class="read-more">
                                    <a href="single-blog.html">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-blog-slide">
                        <div class="images">
                            <a href="single-blog.html"><img src="{{asset('frontend_asset/images/blog/2.jpg')}}" alt=""></a>
                            <span>05 <br/>May</span>
                            <div class="overley">
                                <ul>
                                    <li><a href="single-html.html"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="{{asset('frontend_asset/images/blog/2.jpg')}}" data-lightbox="example-set" data-title="Image Title"><i class="fa fa-search"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="blog-informations">
                            <ul>
                                <li><i class="fa fa-user"></i> By Admin</li>
                                <li><i class="fa fa-comments"></i> 2 Comments</li>
                            </ul>
                            <div class="blog-details">
                                <h3><a href="single-blog.html">Loking After Our Photo Contest</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem eligendi culpa modi omnis quos voluptatibus.</p>
                                <div class="read-more">
                                    <a href="single-blog.html">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-blog-slide">
                        <div class="images">
                            <a href="single-blog.html"><img src="{{asset('frontend_asset/images/blog/3.jpg')}}" alt=""></a>
                            <span>07 <br/>May</span>
                            <div class="overley">
                                <ul>
                                    <li><a href="single-html.html"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="{{asset('frontend_asset/images/blog/3.jpg')}}" data-lightbox="example-set" data-title="Image Title"><i class="fa fa-search"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="blog-informations">
                            <ul>
                                <li><i class="fa fa-user"></i> By Admin</li>
                                <li><i class="fa fa-comments"></i> 2 Comments</li>
                            </ul>
                            <div class="blog-details">
                                <h3><a href="single-blog.html">Loking After Our Photo Contest</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem eligendi culpa modi omnis quos voluptatibus.</p>
                                <div class="read-more">
                                    <a href="single-blog.html">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-blog-slide">
                        <div class="images">
                            <a href="single-blog.html"><img src="{{asset('frontend_asset/images/blog/4.jpg')}}" alt=""></a>
                            <span>10 <br/>May</span>
                            <div class="overley">
                                <ul>
                                    <li><a href="single-html.html"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="{{asset('frontend_asset/images/blog/4.jpg')}}" data-lightbox="example-set" data-title="Image Title"><i class="fa fa-search"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="blog-informations">
                            <ul>
                                <li><i class="fa fa-user"></i> By Admin</li>
                                <li><i class="fa fa-comments"></i> 2 Comments</li>
                            </ul>
                            <div class="blog-details">
                                <h3><a href="single-blog.html">Loking After Our Photo Contest</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem eligendi culpa modi omnis quos voluptatibus.</p>
                                <div class="read-more">
                                    <a href="single-blog.html">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- Home Blog End Here -->

        <!-- Partner Logo Area Start Here -->
        <div class="fix client-logo-area pt-90 pb-90">
            <div class="container">
                <div class="client-logo">
                    <div class="single-logo">
                        <a href="#"><img src="{{asset('frontend_asset/images/client/1.jpg')}}" alt=""></a>
                    </div>
                    <div class="single-logo">
                        <a href="#"><img src="{{asset('frontend_asset/images/client/2.jpg')}}" alt=""></a>
                    </div>
                    <div class="single-logo">
                        <a href="#"><img src="{{asset('frontend_asset/images/client/3.jpg')}}" alt=""></a>
                    </div>
                    <div class="single-logo">
                        <a href="#"><img src="{{asset('frontend_asset/images/client/4.jpg')}}" alt=""></a>
                    </div>
                    <div class="single-logo">
                        <a href="#"><img src="{{asset('frontend_asset/images/client/5.jpg')}}" alt=""></a>
                    </div>
                    <div class="single-logo">
                        <a href="#"><img src="{{asset('frontend_asset/images/client/6.jpg')}}" alt=""></a>
                    </div>
                    <div class="single-logo">
                        <a href="#"><img src="{{asset('frontend_asset/images/client/7.jpg')}}" alt=""></a>
                    </div>
                    <div class="single-logo">
                        <a href="#"><img src="{{asset('frontend_asset/images/client/1.jpg')}}" alt=""></a>
                    </div>
                    <div class="single-logo">
                        <a href="#"><img src="{{asset('frontend_asset/images/client/2.jpg')}}" alt=""></a>
                    </div>
                    <div class="single-logo">
                        <a href="#"><img src="{{asset('frontend_asset/images/client/3.jpg')}}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Partner Logo Area End Here -->

@endsection