@extends('front.layouts.master') 
@section('title')
    <title>Home</title>
    @endsection 

    @section('style') 
    @endsection 

    @section('body') 
    <a class="scrollToTop" href="#"></a>
    @include('front.layouts.top')
    <div class="container">
        @include('front.layouts.header') 
        @include('front.layouts.navbar')

        <section id="sliderSection">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-9">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="slick_slider">
                                @foreach($lastest_posts as $key => $latest_post)
                                <div class="single_iteam">
                                    <a href="{{ route('detailsPage', $latest_post->post_slug) }}"><img class="img-responsive" src=
                                    "{{get_featured_image_thumbnail_url($latest_post->featured_image)}}" alt=""></a>
                                    <div class="slider_article">
                                        <h2><a class="slider_tittle" href="single_page.html">
                                          {{$latest_post->post_title}}
                                        </a></h2>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single_post_content">
                                <ul class="spost_nav">
                                  @foreach($lastest_posts as $key => $latest_post)
                                    <li>
                                        <div class="media wow fadeInDown">
                                            <a href="single_page.html" class="media-left"><img class="img-responsive"
                                            alt="" src="{{get_featured_image_thumbnail_url($latest_post->featured_image)}}"></a>
                                            <div class="media-body">
                                                <a href="single_page.html" class="catg_title">राजस्थान में करीब 7000
                                                पेट्रोल पंप बंद, पेट्रोल-डीजल पर पड़ोसी राज्यों से ज्यादा वैट वसूली का
                                                विरोध</a>
                                            </div>
                                        </div>
                                    </li>
                                  @endforeach
                              
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <div class="left_content">
                        <div class="fashion_technology_area">
                            <div class="single_post_content"><img src=
                            "{{asset('public/frontend/images/game-add.jpg')}}" class="img-responsive"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="clearfix"></div>
        <section id="contentSection">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8">
                    <div class="left_content mt-20">
                        <div class="single_post_content mt-20">
                            <h2><span>ट्रेंडिंग न्यूज</span></h2>
                        </div>
                        <div class="fashion_technology_area">
                            <div class="fashion">
                                <div class="single_post_content">
                                    <ul class="spost_nav">
                                      @foreach($trandingPosts as $key => $tranding_post)
                                      @if($key >= 0 && $key < 4 )
                                        <li>
                                            <div class="media wow fadeInDown">
                                                <a href="single_page.html" class="media-left"><img class=
                                                "img-responsive" alt="" src=
                                                "{{get_featured_image_thumbnail_url($tranding_post->featured_image)}}"></a>
                                                <div class="media-body">
                                                    <a href="single_page.html" class="catg_title">
                                                      {{$tranding_post->post_title}}
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                      @endif
                                      @endforeach

                                    </ul>
                                </div>
                            </div>
                            <div class="technology">
                                <div class="single_post_content">
                                    <ul class="spost_nav">
                                      @foreach($trandingPosts as $key => $tranding_post)
                                      @if($key > 3 && $key < 9 )
                                        <li>
                                            <div class="media wow fadeInDown">
                                                <a href="single_page.html" class="media-left"><img class=
                                                "img-responsive" alt="" src=
                                                "{{get_featured_image_thumbnail_url($tranding_post->featured_image)}}"></a>
                                                <div class="media-body">
                                                    <a href="single_page.html" class="catg_title">
                                                      {{$tranding_post->post_title}}
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                      @endif
                                      @endforeach
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <aside class="right_content mt-20">
                        <div class="single_sidebar">
                            <div class="single_post_content">
                                <h2><span>बड़ी खबरे</span></h2>
                            </div>
                            <ul class="spost_nav">
                              @foreach($BigNewsPosts as $key => $big_post)
                                <li>
                                    <div class="media wow fadeInDown">
                                        <a href="single_page.html" class="media-left"><img class="img-responsive" alt=
                                        "" src="{{get_featured_image_thumbnail_url($big_post->featured_image)}}"></a>
                                        <div class="media-body">
                                            <a href="single_page.html" class="catg_title">
                                              {{$big_post->post_title}}
                                            </a>
                                        </div>
                                    </div>
                                </li>
                              @endforeach
                            </ul>
                        </div>
                    </aside>
                </div>
                <div class="clearfix"></div>
                <div class="col-md-3">
                    <div class="single_post_content">
                        <h2><span>Desh</span></h2>
                        <ul class="business_catgnav" style="width:100%">
                          @foreach($DeshPosts as $key => $post)
                          @if($key == 0)
                            <li>
                                <figure class="bsbig_fig wow fadeInDown">
                                    <a href="single_page.html" class="featured_img"><img class="img-responsive" alt=""
                                    src="{{get_featured_image_thumbnail_url($post->featured_image)}}"></a>
                                    <figcaption>
                                        <a href="single_page.html">
                                          {{$post->post_title}}
                                        </a>
                                    </figcaption>
                                </figure>
                            </li>
                            @endif
                            @endforeach

                            <ul class="spost_nav">
                              @foreach($DeshPosts as $key => $post)
                              @if($key > 0)
                                <li>
                                    <div class="media wow fadeInDown">
                                        <div class="media-body">
                                            <a href="single_page.html" class="catg_title">
                                              {{$post->post_title}}
                                            </a>
                                        </div>
                                    </div>
                                </li>
                              @endif
                              @endforeach
                            </ul>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="single_post_content">
                        <h2><span>Duniya</span></h2>
                        <ul class="business_catgnav" style="width:100%">
                          @foreach($duniyaPosts as $key => $post)
                          @if($key == 0)
                            <li>
                                <figure class="bsbig_fig wow fadeInDown">
                                    <a href="single_page.html" class="featured_img"><img class="img-responsive" alt=""
                                    src="{{get_featured_image_thumbnail_url($post->featured_image)}}"></a>
                                    <figcaption>
                                        <a href="single_page.html">
                                          {{$post->post_title}}
                                        </a>
                                    </figcaption>
                                </figure>
                            </li>
                            @endif
                            @endforeach

                            <ul class="spost_nav">
                              @foreach($duniyaPosts as $key => $post)
                              @if($key > 0)
                                <li>
                                    <div class="media wow fadeInDown">
                                        <div class="media-body">
                                            <a href="single_page.html" class="catg_title">
                                              {{$post->post_title}}
                                            </a>
                                        </div>
                                    </div>
                                </li>
                              @endif
                              @endforeach
                            </ul>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="single_post_content">
                        <h2><span>Rajya</span></h2>
                        <ul class="business_catgnav" style="width:100%">
                          @foreach($statePosts as $key => $post)
                          @if($key == 0)
                            <li>
                                <figure class="bsbig_fig wow fadeInDown">
                                    <a href="single_page.html" class="featured_img"><img class="img-responsive" alt=""
                                    src="{{get_featured_image_thumbnail_url($post->featured_image)}}"></a>
                                    <figcaption>
                                        <a href="single_page.html">
                                          {{$post->post_title}}
                                        </a>
                                    </figcaption>
                                </figure>
                            </li>
                            @endif
                            @endforeach

                            <ul class="spost_nav">
                              @foreach($statePosts as $key => $post)
                              @if($key > 0)
                                <li>
                                    <div class="media wow fadeInDown">
                                        <div class="media-body">
                                            <a href="single_page.html" class="catg_title">
                                              {{$post->post_title}}
                                            </a>
                                        </div>
                                    </div>
                                </li>
                              @endif
                              @endforeach
                            </ul>
                        </ul>

                    </div>
                </div>
                <div class="col-md-3 mt-35"><img src="{{asset('public/frontend/images/add-th.png')}}" class=
                "img-responsive"></div>
                <div class="clearfix"></div>
                <div class="col-md-12">
                    <br>
                </div>
                <div class="single_post_content col-md-12">
                    <h2><span>Khel</span></h2>
                    <ul class="business_catgnav">
                    @foreach($sportPosts as $key => $post)
                    @if($key == 0) 
                        <li>
                            <figure class="bsbig_fig wow fadeInDown">
                                <a href="single_page.html" class="featured_img"><img class="img-responsive" alt="" src=
                                "{{get_featured_image_thumbnail_url($post->featured_image)}}"></a>
                                <figcaption>
                                    <a href="single_page.html">
                                      {{$post->post_title}}
                                    </a>
                                </figcaption>
                            </figure>
                        </li>
                    </ul>
                    @endif
                    @endforeach

                    <div class="single_post_content_left">
                        <ul class="spost_nav">
                          @foreach($sportPosts as $key => $post)
                          @if($key > 0 && $key < 4) 
                            <li>
                                <div class="media wow fadeInDown">
                                    <a href="single_page.html" class="media-left"><img class="img-responsive" alt=""
                                    src="{{get_featured_image_thumbnail_url($post->featured_image)}}"></a>
                                    <div class="media-body">
                                        <a href="single_page.html" class="catg_title">
                                          {{$post->post_title}}
                                        </a>
                                    </div>
                                </div>
                            </li>
                          @endif
                          @endforeach
                        </ul>
                    </div>
                    <div class="single_post_content_left">
                        <ul class="spost_nav">

                          @foreach($sportPosts as $key => $post)
                          @if($key > 3 && $key < 8) 
                            <li>
                                <div class="media wow fadeInDown">
                                    <a href="single_page.html" class="media-left"><img class="img-responsive" alt=""
                                    src="{{get_featured_image_thumbnail_url($post->featured_image)}}"></a>
                                    <div class="media-body">
                                        <a href="single_page.html" class="catg_title">
                                          {{$post->post_title}}
                                        </a>
                                    </div>
                                </div>
                            </li>
                          @endif
                          @endforeach
                           
                        </ul>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-md-12">
                    <br>
                </div>
                <div class="single_post_content px-15">
                    <h2><span>वेब स्टोरी</span></h2>
                    <div class="carousel-container">
                        <div class="web-series owl-carousel">
                            <div class="item">
                            <div class="feature-tab">
                                <a href="#">
                                <div class="img-overlay-70 img-scale-animate mb-10">
                                    <div class="mask-content-sm">
                                        <h3 class="title-medium-light text"></h3>
                                    </div>Anupama : रुपाली गांगुली से लेकर सुधांशु पांडे तक, जानिए कितने पढ़े-लिखे हैं
                                    आपके ये फेवरेट स्टार्स
                                </div></a>
                            </div><img src="{{asset('public/frontend/images/slider_img1.jpg')}}" alt="news" class=
                            "img-fluid width-100">
                          </div>
                        </div>
                    </div> 
                    
                </div>


{{-- Manoranjan start here --}}

 <div class="clearfix"></div>
    <div class="col-md-12">
        <br>
    </div>
    <div class="single_post_content px-15">
        <h2><span>Manoranjan</span></h2>
        <ul class="business_catgnav">
            @foreach($entertainmentPosts as $key => $post)
            @if($key == 0) 
            <li>
                <figure class="bsbig_fig wow fadeInDown">
                    <a href="single_page.html" class="featured_img"><img class="img-responsive" alt="" src=
                    "{{get_featured_image_thumbnail_url($post->featured_image)}}"></a>
                    <figcaption>
                        <a href="single_page.html">{{$post->post_title}}</a>
                    </figcaption>
                </figure>
            </li>
            @endif
            @endforeach
        </ul>
        <div class="single_post_content_left">
            <ul class="spost_nav">
                @foreach($entertainmentPosts as $key => $post)
                @if($key > 0 && $key < 4)
                <li>
                    <div class="media wow fadeInDown">
                        <a href="single_page.html" class="media-left"><img class="img-responsive" alt="" src=
                        "{{get_featured_image_thumbnail_url($post->featured_image)}}"></a>
                        <div class="media-body">
                            <a href="single_page.html" class="catg_title">{{$post->post_title}}</a>
                        </div>
                    </div>
                </li>
                @endif
                @endforeach
            </ul>
        </div>
        <div class="single_post_content_right">
            <ul class="spost_nav">
                @foreach($entertainmentPosts as $key => $post)
                @if($key > 3 && $key < 8) 
                <li>
                    <div class="media wow fadeInDown">
                        <a href="single_page.html" class="media-left"><img class="img-responsive" alt="" src=
                        "{{get_featured_image_thumbnail_url($post->featured_image)}}"></a>
                        <div class="media-body">
                            <a href="single_page.html" class="catg_title">{{$post->post_title}}</a>
                        </div>
                    </div>
                </li>
                @endif
                @endforeach
            </ul>
        </div>
    </div>


    {{-- Manoranjan end here --}}


    {{-- PHOTOS start here --}}
    <div class="col-md-12">
        <br>
    </div>
    <div class="col-md-12">
        <div class="single_post_content mt-20" style="margin-bottom:0px;">
            <h2><span>Photos</span></h2>
        </div>
        <div class="carousel-container">
            <div class="feature owl-carousel">
            @foreach($photoPosts as $key => $post)
                <div class="item">
                    <div class="feature-tab">
                        <a href="#">
                        <div class="img"><img src="{{featured_image_thumbnail_url($post->featured_image)}}" alt="news" class=
                        "img-fluid width-100"></div>
                        <h4 class="title-medium-light mt-20 mb-0"></h4></a><a href="single-news-3.html">{{$post->post_title}}</a>
                    </div>
                </div>
            @endforeach    
            </div>
        </div>
    </div>

    {{-- PHOTOS end here --}}


    <div class="col-md-12">
        <br>
    </div>
    <div class="col-md-3">
        <div class="single_post_content">
            <h2><span>बिज़नेस</span></h2>
            <ul class="business_catgnav" style="width:100%">
                @foreach($businessPosts as $key => $post)
                @if($key == 0) 
                <li>
                    <figure class="bsbig_fig wow fadeInDown">
                        <a href="single_page.html" class="featured_img"><img class="img-responsive" alt="" src=
                        "{{featured_image_thumbnail_url($post->featured_image)}}"></a>
                        <figcaption class="text2">
                            <a href="single_page.html">राजस्थान में वैक्सीन का संकट: आधे से ज्यादा वैक्सीनेशन सेंटर
                            बंद, सप्लाई नहीं होने पर रुक जाएगा टीकाकरण</a>
                        </figcaption>
                    </figure>
                </li>
                @endif
                @endforeach
                <ul class="spost_nav">
                @foreach($businessPosts as $key => $post)
                @if($key > 0) 
                    <li>
                        <div class="media wow fadeInDown">
                            <div class="media-body">
                                <a href="single_page.html" class="catg_title">{{$post->post_title}}</a>
                            </div>
                        </div>
                    </li>
                @endif
                @endforeach   
                </ul>
            </ul>
        </div>
    </div>
    <div class="col-md-3">
        <div class="single_post_content">
            <h2><span>प्रौद्योगिकी</span></h2>
            <ul class="business_catgnav" style="width:100%">
                <li>
                    <figure class="bsbig_fig wow fadeInDown">
                        <a href="single_page.html" class="featured_img"><img class="img-responsive" alt="" src=
                        "{{asset('public/frontend/images/featured_img3.jpg')}}"></a>
                        <figcaption class="text2">
                            <a href="single_page.html">{{$post->post_title}}</a>
                        </figcaption>
                    </figure>
                </li>
                <ul class="spost_nav">
                    <li>
                        <div class="media wow fadeInDown">
                            <div class="media-body">
                                <a href="single_page.html" class="catg_title">रिजर्व बैंक ने नीतिगत दरों में नहीं किया
                                कोई बदलाव, लोन की मासिक किश्त कम होने की उम्मीद नहीं</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="media wow fadeInDown">
                            <div class="media-body">
                                <a href="single_page.html" class="catg_title">कोरोना के बढ़ते मामलों से शेयर बाजार में
                                हाहाकार, सेंसेक्स 871 अंक और निफ्टी 230 अंक लुढ़का</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="media wow fadeInDown">
                            <div class="media-body">
                                <a href="single_page.html" class="catg_title">रिजर्व बैंक ने नीतिगत दरों में नहीं किया
                                कोई बदलाव, लोन की मासिक किश्त कम होने की उम्मीद नहीं</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </ul>
        </div>
    </div>
    <div class="col-md-3">
        <div class="single_post_content">
            <h2><span>लाइफस्टाइल</span></h2>
            <ul class="business_catgnav" style="width:100%">
                <li>
                    <figure class="bsbig_fig wow fadeInDown">
                        <a href="single_page.html" class="featured_img"><img class="img-responsive" alt="" src=
                        "{{asset('public/frontend/images/featured_img3.jpg')}}"></a>
                        <figcaption class="text2">
                            <a href="single_page.html">राजस्थान में वैक्सीन का संकट: आधे से ज्यादा वैक्सीनेशन सेंटर
                            बंद, सप्लाई नहीं होने पर रुक जाएगा टीकाकरण</a>
                        </figcaption>
                    </figure>
                </li>
                <ul class="spost_nav">
                    <li>
                        <div class="media wow fadeInDown">
                            <div class="media-body">
                                <a href="single_page.html" class="catg_title">ब्याज दरें यथावत रहने से उछला शेयर बाजार,
                                सेंसेक्स में 460 अंक और निफ्टी में 136 अंकों की बढ़त</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="media wow fadeInDown">
                            <div class="media-body">
                                <a href="single_page.html" class="catg_title">रिजर्व बैंक ने नीतिगत दरों में नहीं किया
                                कोई बदलाव, लोन की मासिक किश्त कम होने की उम्मीद नहीं</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="media wow fadeInDown">
                            <div class="media-body">
                                <a href="single_page.html" class="catg_title">कोरोना के बढ़ते मामलों से शेयर बाजार में
                                हाहाकार, सेंसेक्स 871 अंक और निफ्टी 230 अंक लुढ़का</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </ul>
        </div>
    </div>
    <div class="col-md-3"><img src="{{asset('public/frontend/images/add-th.png')}}" class="img-responsive"></div>




    {{-- Videos start here --}}

    <div class="col-md-12">
        <br>
    </div>
    <div class="col-md-9">
        <div class="single_post_content" style="margin-bottom:0px;">
            <h2><span>Videos</span></h2>
        </div>
        <div class="carousel-container">
            <div class="feature owl-carousel">
                <div class="item">
                    <div class="feature-tab">
                        <a href="#">
                        <div class="img"><img src="{{asset('public/frontend/images/sl2.webp')}}" alt="news" class=
                        "img-fluid width-100"></div>
                        <h4 class="title-medium-light mt-20 mb-0 text2"></h4></a><a href="single-news-3.html">Bollywood
                        & TV LIVE Updates : सुशांत सिंह पर बन रही फिल्मों पर रोक लगाने वाली याचिका खारिज, बंगाली
                        फिल्ममेकर बुद्धादेब दासगुप्ता का निधन</a>
                    </div>
                </div>
                <div class="item">
                    <div class="feature-tab">
                        <a href="#">
                        <div class="img"><img src="{{asset('public/frontend/images/sl3.webp')}}" alt="news" class=
                        "img-fluid width-100"></div>
                        <h4 class="title-medium-light mt-20 mb-0 text2"></h4></a><a href="single-news-3.html">Bollywood
                        & TV LIVE Updates : सुशांत सिंह पर बन रही फिल्मों पर रोक लगाने वाली याचिका खारिज, बंगाली
                        फिल्ममेकर बुद्धादेब दासगुप्ता का निधन</a>
                    </div>
                </div>
                <div class="item">
                    <div class="feature-tab">
                        <a href="#">
                        <div class="img"><img src="{{asset('public/frontend/images/sl4.webp')}}" alt="news" class=
                        "img-fluid width-100"></div>
                        <h4 class="title-medium-light mt-20 mb-0 text2"></h4></a><a href="single-news-3.html">Bollywood
                        & TV LIVE Updates : सुशांत सिंह पर बन रही फिल्मों पर रोक लगाने वाली याचिका खारिज, बंगाली
                        फिल्ममेकर बुद्धादेब दासगुप्ता का निधन</a>
                    </div>
                </div>
                <div class="item">
                    <div class="feature-tab">
                        <a href="#">
                        <div class="img"><img src="{{asset('public/frontend/images/sl4.webp')}}" alt="news" class=
                        "img-fluid width-100"></div>
                        <h4 class="title-medium-light mt-20 mb-0 text2"></h4></a><a href="single-news-3.html">Bollywood
                        & TV LIVE Updates : सुशांत सिंह पर बन रही फिल्मों पर रोक लगाने वाली याचिका खारिज, बंगाली
                        फिल्ममेकर बुद्धादेब दासगुप्ता का निधन</a>
                    </div>
                </div>
                <div class="item">
                    <div class="feature-tab">
                        <a href="#">
                        <div class="img"><img src="{{asset('public/frontend/images/sl3.webp')}}" alt="news" class=
                        "img-fluid width-100"></div>
                        <h4 class="title-medium-light mt-20 mb-0 text2"></h4></a><a href="single-news-3.html">Bollywood
                        & TV LIVE Updates : सुशांत सिंह पर बन रही फिल्मों पर रोक लगाने वाली याचिका खारिज, बंगाली
                        फिल्ममेकर बुद्धादेब दासगुप्ता का निधन</a>
                    </div>
                </div>
                <div class="item">
                    <div class="feature-tab">
                        <a href="#">
                        <div class="img"><img src="{{asset('public/frontend/images/sl4.webp')}}" alt="news" class=
                        "img-fluid width-100"></div>
                        <h4 class="title-medium-light mt-20 mb-0 text2"></h4></a><a href="single-news-3.html">Bollywood
                        & TV LIVE Updates : सुशांत सिंह पर बन रही फिल्मों पर रोक लगाने वाली याचिका खारिज, बंगाली
                        फिल्ममेकर बुद्धादेब दासगुप्ता का निधन</a>
                    </div>
                </div>
                <div class="item">
                    <div class="feature-tab">
                        <a href="#">
                        <div class="img"><img src="{{asset('public/frontend/images/sl2.webp')}}" alt="news" class=
                        "img-fluid width-100"></div>
                        <h4 class="title-medium-light mt-20 mb-0 text2"></h4></a><a href="single-news-3.html">Bollywood
                        & TV LIVE Updates : सुशांत सिंह पर बन रही फिल्मों पर रोक लगाने वाली याचिका खारिज, बंगाली
                        फिल्ममेकर बुद्धादेब दासगुप्ता का निधन</a>
                    </div>
                </div>
                <div class="item">
                    <div class="feature-tab">
                        <a href="#">
                        <div class="img"><img src="{{asset('public/frontend/images/sl3.webp')}}" alt="news" class=
                        "img-fluid width-100"></div>
                        <h4 class="title-medium-light mt-20 mb-0 text2"></h4></a><a href="single-news-3.html">Bollywood
                        & TV LIVE Updates : सुशांत सिंह पर बन रही फिल्मों पर रोक लगाने वाली याचिका खारिज, बंगाली
                        फिल्ममेकर बुद्धादेब दासगुप्ता का निधन</a>
                    </div>
                </div>
                <div class="item">
                    <div class="feature-tab">
                        <a href="#">
                        <div class="img"><img src="{{asset('public/frontend/images/sl4.webp')}}" alt="news" class=
                        "img-fluid width-100"></div>
                        <h4 class="title-medium-light mt-20 mb-0 text2"></h4></a><a href="single-news-3.html">Bollywood
                        & TV LIVE Updates : सुशांत सिंह पर बन रही फिल्मों पर रोक लगाने वाली याचिका खारिज, बंगाली
                        फिल्ममेकर बुद्धादेब दासगुप्ता का निधन</a>
                    </div>
                </div>
                <div class="item">
                    <div class="feature-tab">
                        <a href="#">
                        <div class="img"><img src="{{asset('public/frontend/images/sl4.webp')}}" alt="news" class=
                        "img-fluid width-100"></div>
                        <h4 class="title-medium-light mt-20 mb-0 text2"></h4></a><a href="single-news-3.html">Bollywood
                        & TV LIVE Updates : सुशांत सिंह पर बन रही फिल्मों पर रोक लगाने वाली याचिका खारिज, बंगाली
                        फिल्ममेकर बुद्धादेब दासगुप्ता का निधन</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <br>
        <img src="{{asset('public/frontend/images/add-five.jpg')}}" class="img-responsive"><br>
    </div>

    {{-- Videos end here --}}



    {{-- Carrer start here --}}


        <div class="col-md-12">
        <br>
    </div>
    <div class="single_post_content px-15">
        <h2><span>Career</span></h2>
        <ul class="business_catgnav">
            <li>
                <figure class="bsbig_fig wow fadeInDown">
                    <a href="single_page.html" class="featured_img"><img class="img-responsive" alt="" src=
                    "{{asset('public/frontend/images/featured_img3.jpg')}}"></a>
                    <figcaption>
                        <a href="single_page.html">राजस्थान में वैक्सीन का संकट: आधे से ज्यादा वैक्सीनेशन सेंटर बंद,
                        सप्लाई नहीं होने पर रुक जाएगा टीकाकरण</a>
                    </figcaption>
                </figure>
            </li>
        </ul>
        <div class="single_post_content_left">
            <ul class="spost_nav">
                <li>
                    <div class="media wow fadeInDown">
                        <a href="single_page.html" class="media-left"><img class="img-responsive" alt="" src=
                        "{{asset('public/frontend/images/post_img1.jpg')}}"></a>
                        <div class="media-body">
                            <a href="single_page.html" class="catg_title">ब्याज दरें यथावत रहने से उछला शेयर बाजार,
                            सेंसेक्स में 460 अंक और निफ्टी में 136 अंकों की बढ़त</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="media wow fadeInDown">
                        <a href="single_page.html" class="media-left"><img class="img-responsive" alt="" src=
                        "{{asset('public/frontend/images/post_img2.jpg')}}"></a>
                        <div class="media-body">
                            <a href="single_page.html" class="catg_title">रिजर्व बैंक ने नीतिगत दरों में नहीं किया कोई
                            बदलाव, लोन की मासिक किश्त कम होने की उम्मीद नहीं</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="media wow fadeInDown">
                        <a href="single_page.html" class="media-left"><img class="img-responsive" alt="" src=
                        "{{asset('public/frontend/images/post_img1.jpg')}}"></a>
                        <div class="media-body">
                            <a href="single_page.html" class="catg_title">कोरोना के बढ़ते मामलों से शेयर बाजार में
                            हाहाकार, सेंसेक्स 871 अंक और निफ्टी 230 अंक लुढ़का</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="media wow fadeInDown">
                        <a href="single_page.html" class="media-left"><img class="img-responsive" alt="" src=
                        "{{asset('public/frontend/images/post_img2.jpg')}}"></a>
                        <div class="media-body">
                            <a href="single_page.html" class="catg_title">जीएसटी कलेक्शन का नया रिकॉर्ड, मार्च में करीब
                            1.24 लाख करोड़ रुपए का राजस्व मिला</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="single_post_content_right">
            <ul class="spost_nav">
                <li>
                    <div class="media wow fadeInDown">
                        <a href="single_page.html" class="media-left"><img class="img-responsive" alt="" src=
                        "{{asset('public/frontend/images/post_img1.jpg')}}"></a>
                        <div class="media-body">
                            <a href="single_page.html" class="catg_title">ब्याज दरें यथावत रहने से उछला शेयर बाजार,
                            सेंसेक्स में 460 अंक और निफ्टी में 136 अंकों की बढ़त</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="media wow fadeInDown">
                        <a href="single_page.html" class="media-left"><img class="img-responsive" alt="" src=
                        "{{asset('public/frontend/images/post_img2.jpg')}}"></a>
                        <div class="media-body">
                            <a href="single_page.html" class="catg_title">रिजर्व बैंक ने नीतिगत दरों में नहीं किया कोई
                            बदलाव, लोन की मासिक किश्त कम होने की उम्मीद नहीं</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="media wow fadeInDown">
                        <a href="single_page.html" class="media-left"><img class="img-responsive" alt="" src=
                        "{{asset('public/frontend/images/post_img1.jpg')}}"></a>
                        <div class="media-body">
                            <a href="single_page.html" class="catg_title">कोरोना के बढ़ते मामलों से शेयर बाजार में
                            हाहाकार, सेंसेक्स 871 अंक और निफ्टी 230 अंक लुढ़का</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="media wow fadeInDown">
                        <a href="single_page.html" class="media-left"><img class="img-responsive" alt="" src=
                        "{{asset('public/frontend/images/post_img2.jpg')}}"></a>
                        <div class="media-body">
                            <a href="single_page.html" class="catg_title">जीएसटी कलेक्शन का नया रिकॉर्ड, मार्च में करीब
                            1.24 लाख करोड़ रुपए का राजस्व मिला</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="add_banner"><img src="images/hr-add.png" class="d-none"></div>


    {{-- carrer end here --}}



    {{-- Astha start here --}}


    <div class="single_post_content px-15 mt-20">
        <h2><span>Aastha/Jyotish</span></h2>
        <ul class="business_catgnav">
            <li>
                <figure class="bsbig_fig wow fadeInDown">
                    <a href="single_page.html" class="featured_img"><img class="img-responsive" alt="" src=
                    "{{asset('public/frontend/images/featured_img3.jpg')}}"></a>
                    <figcaption>
                        <a href="single_page.html">राजस्थान में वैक्सीन का संकट: आधे से ज्यादा वैक्सीनेशन सेंटर बंद,
                        सप्लाई नहीं होने पर रुक जाएगा टीकाकरण</a>
                    </figcaption>
                </figure>
            </li>
        </ul>
        <div class="single_post_content_left">
            <ul class="spost_nav">
                <li>
                    <div class="media wow fadeInDown">
                        <a href="single_page.html" class="media-left"><img class="img-responsive" alt="" src=
                        "{{asset('public/frontend/images/post_img1.jpg')}}"></a>
                        <div class="media-body">
                            <a href="single_page.html" class="catg_title">ब्याज दरें यथावत रहने से उछला शेयर बाजार,
                            सेंसेक्स में 460 अंक और निफ्टी में 136 अंकों की बढ़त</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="media wow fadeInDown">
                        <a href="single_page.html" class="media-left"><img class="img-responsive" alt="" src=
                        "{{asset('public/frontend/images/post_img2.jpg')}}"></a>
                        <div class="media-body">
                            <a href="single_page.html" class="catg_title">रिजर्व बैंक ने नीतिगत दरों में नहीं किया कोई
                            बदलाव, लोन की मासिक किश्त कम होने की उम्मीद नहीं</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="media wow fadeInDown">
                        <a href="single_page.html" class="media-left"><img class="img-responsive" alt="" src=
                        "{{asset('public/frontend/images/post_img1.jpg')}}"></a>
                        <div class="media-body">
                            <a href="single_page.html" class="catg_title">कोरोना के बढ़ते मामलों से शेयर बाजार में
                            हाहाकार, सेंसेक्स 871 अंक और निफ्टी 230 अंक लुढ़का</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="media wow fadeInDown">
                        <a href="single_page.html" class="media-left"><img class="img-responsive" alt="" src=
                        "{{asset('public/frontend/images/post_img2.jpg')}}"></a>
                        <div class="media-body">
                            <a href="single_page.html" class="catg_title">जीएसटी कलेक्शन का नया रिकॉर्ड, मार्च में करीब
                            1.24 लाख करोड़ रुपए का राजस्व मिला</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="single_post_content_right">
            <ul class="spost_nav">
                <li>
                    <div class="media wow fadeInDown">
                        <a href="single_page.html" class="media-left"><img class="img-responsive" alt="" src=
                        "{{asset('public/frontend/images/post_img1.jpg')}}"></a>
                        <div class="media-body">
                            <a href="single_page.html" class="catg_title">ब्याज दरें यथावत रहने से उछला शेयर बाजार,
                            सेंसेक्स में 460 अंक और निफ्टी में 136 अंकों की बढ़त</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="media wow fadeInDown">
                        <a href="single_page.html" class="media-left"><img class="img-responsive" alt="" src=
                        "{{asset('public/frontend/images/post_img2.jpg')}}"></a>
                        <div class="media-body">
                            <a href="single_page.html" class="catg_title">रिजर्व बैंक ने नीतिगत दरों में नहीं किया कोई
                            बदलाव, लोन की मासिक किश्त कम होने की उम्मीद नहीं</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="media wow fadeInDown">
                        <a href="single_page.html" class="media-left"><img class="img-responsive" alt="" src=
                        "{{asset('public/frontend/images/post_img1.jpg')}}"></a>
                        <div class="media-body">
                            <a href="single_page.html" class="catg_title">कोरोना के बढ़ते मामलों से शेयर बाजार में
                            हाहाकार, सेंसेक्स 871 अंक और निफ्टी 230 अंक लुढ़का</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="media wow fadeInDown">
                        <a href="single_page.html" class="media-left"><img class="img-responsive" alt="" src=
                        "{{asset('public/frontend/images/post_img2.jpg')}}"></a>
                        <div class="media-body">
                            <a href="single_page.html" class="catg_title">जीएसटी कलेक्शन का नया रिकॉर्ड, मार्च में करीब
                            1.24 लाख करोड़ रुपए का राजस्व मिला</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    {{-- Astha end here --}}


    </div>
           

  </section>
    </div>

  @section('script') 
@endsection
