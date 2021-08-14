@extends('front.layouts.master')

@section('title')
<title>{{ $post->post_title }}</title>
@endsection
@section('meta')
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="{{ $post->meta_title }}" />
	
    <meta name="description" content={{ $post->meta_keywords }} />
    		
		<meta property="og:title" content={{ $post->meta_keywords }}." | The India Times"/>
		<meta property="og:description" content= {{ $post->meta_description }} />
		<meta property="og:image" content={{ get_featured_image_thumbnail_url($post->featured_image) }} />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
@endsection

@section('style')
@endsection

@section('body')
<a class="scrollToTop" href="#"></a>
@include('front.layouts.top')
<div class="container">
    @include('front.layouts.header') 
    @include('front.layouts.navbar')




<section id="contentSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="left_content">
          <div class="single_page">
            <!--<ol class="breadcrumb">-->
            <!--  <li><a href="{{url('/')}}">Home</a></li>-->
            <!--  <li><a href="{{ route('categoryPage', $post->category->id) }}">{{ $post->category->category_name }}</a></li>-->
            <!--  <li class="active" id="detail_title">{{ $post->post_title }}</li>-->
            <!--</ol>-->
            
            <ol class="breadcrumb"><div class="trin"></div>
              <li class="ml-14"><a href="{{url('/')}}">Home</a></li>
              <li><a href="{{ route('categoryPage', $post->category->id) }}">{{ $post->category->category_name }}</a></li>
              <li class="active" id="detail_title">{{ $post->post_title }}</li>
            </ol>
            
            
            <h1>{{ $post->post_title }}</h1>
            <div class="post_commentbox"> <a href="#"><i class="fa fa-user"></i>{{ $post->user->name }}</a> <span><i class="fa fa-calendar"></i>{{ date("d F Y", strtotime($post->post_date)) }}</span> <a href="#"><i class="fa fa-tags"></i>{{ $post->category->category_name }}</a> </div>
            <div class="single_page_content desc"> 
            <img class="img-center" src="{{ featured_image_thumbnail_url($post->featured_image) }}" alt="">
            {!! $post->post_details !!}
              
              
            </div>
            
            <div class="share_section">
                <ul>
                    <li>
                        <?php
                        $fb_url = "https://www.facebook.com/sharer/sharer.php?u=http://theindiatimes.net/details/$post->post_slug&display=popup";
                        ?>
                        <a href="{{$fb_url}}" target="_blank" rel="nofollow">
                        <button style="background-color:#1877f2;font-size:17px;" class="btn btn-primary">Share <i class="fa fa-facebook"></i></button>
                        </a>
                    </li>
                    <li>
                        
                       <?php
                        $tw_url = "https://twitter.com/intent/tweet?url=http://theindiatimes.net/details/$post->post_slug&text=$post->post_title";
                        ?>
                        <a href="{{$tw_url}}" target="_blank" rel="nofollow">
                        <button style="background-color:#39a2f2;font-size:17px;" class="btn btn-info">Share <i class="fa fa-twitter"></i></button>
                        </a>
                    </li>
                    <li>
                        <?php
                        $wp_url = "https://api.whatsapp.com/send?text=http://theindiatimes.net/details/$post->post_slug";
                        ?>
                        <a href="{{$wp_url}}" target="_blank" rel="nofollow">
                        <button style="background-color:#62d467;font-size:17px;" class="btn btn-info">Share <i class="fa fa-whatsapp" aria-hidden="true"></i></button>
                        </a>
                    </li>
                    <li>
                        
                        <?php
                        $tle_url = "https://telegram.me/share/url?url=http://theindiatimes.net/details/$post->post_slug&text=$post->post_title";
                        ?>
                        <a href="{{$tle_url}}" target="_blank" rel="nofollow">
                            
                        <button style="background-color:#3ea1cd;font-size:17px;" class="btn btn-info">Share <i class="fa fa-telegram" aria-hidden="true" style="color:white;"></i></button>
                        </a>
                    </li>
                    
                    
                    
                    
                </ul>
            </div>
            <div class="massage-box"> 
				<h3>स्वतंत्र और निस्पक्ष पत्रकारिता  
					का साथ दे क्योंकि सच जानना
					आपका अधिकार है</h3>
				<h4>स्वतंत्र और निस्पक्ष पत्रकारिता  <br>
					का साथ दे क्योंकि सच जानना<br>
					आपका अधिकार है</h4>	
				<div class="btn btn-white">द इंडिया टाइम्स</div>	
			</div>
            <div class="related_post">
              <h3>बड़ी खबरें: </h3>
			  <hr>
              <ul class="spost_nav wow fadeInDown animated">
              @foreach($posts as $key=>$post)
                <li>
                  <div class="media"> <a class="media-left" href="{{ route('detailsPage', $post->post_slug) }}"> <img src="{{ get_featured_image_thumbnail_url($post->featured_image) }}" alt=""> </a>
                    <div class="media-body"> <a class="catg_title" href="{{ route('detailsPage', $post->post_slug) }}">
					<h4>{{$post->post_title}}</h4></a> 
					<p>{!! \Illuminate\Support\Str::limit($post->post_details, 120) !!}</p></div>
                  </div>
                </li>
              @endforeach
              </ul>
            </div>
          </div>
        </div>
      </div>
      
      <div class="col-lg-4 col-md-4 col-sm-4">
        <aside class="right_content">
          <div class="single_sidebar">
            <h2><span>Latest post</span></h2>
            <ul class="spost_nav">
              @foreach($lastest_posts as $key => $post)
              <li>
                <div class="media"> <a href="{{ route('detailsPage', $post->post_slug) }}" class="media-left"> <img alt="" src="{{ get_featured_image_thumbnail_url($post->featured_image) }}"> </a>
                  <div class="media-body"> <a href="{{ route('detailsPage', $post->post_slug) }}" class="catg_title"> {{$post->post_title}}</a> </div>
                </div>
              </li>
              @endforeach
            </ul>
          </div>
          <div class="single_sidebar">
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="#category" aria-controls="home" role="tab" data-toggle="tab">Category</a></li>
              <li role="presentation"><a href="#video" aria-controls="profile" role="tab" data-toggle="tab">Video</a></li>
              <li role="presentation"><a href="#comments" aria-controls="messages" role="tab" data-toggle="tab">Tags</a></li>
            </ul>
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="category">
                <ul>
                    @foreach($categories as $key => $category)
                        <li class="cat-item"><a href="{{ route('categoryPage', $category->id) }}">{{$category->category_name}}</a></li> 
                    @endforeach
                </ul>
              </div>
              <div role="tabpanel" class="tab-pane" id="video">
                <div class="vide_area">
                  <iframe width="100%" height="250" src="http://www.youtube.com/embed/h5QWbURNEpA?feature=player_detailpage" frameborder="0" allowfullscreen></iframe>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane" id="comments">
                <ul>
                  
                    @foreach($tags as $key => $tag)
                        <li class="cat-item"><a href="{{ route('tagPage', $tag->id) }}" title="{{ $tag->tag_name }}">{{$tag->tag_name}}</a></li> 
                    @endforeach
                
                </ul>
              </div>
            </div>
          </div>
          <!--<div class="single_sidebar wow fadeInDown">
            <h2><span>Sponsor</span></h2>
            <a class="sideAdd" href="#"><img src="images/add.png" alt=""></a> </div>-->
         
          <div class="single_sidebar wow fadeInDown">
            <h2><span>वीडियो गैलरी</span></h2>
			<div role="tabpanel" class="tab-pane active" id="video">
                <div class="vide_area">
                  <iframe src="http://www.youtube.com/embed/h5QWbURNEpA?feature=player_detailpage" allowfullscreen="" width="100%" height="250" frameborder="0"></iframe>
                </div>
              </div>
			    </div>
          </div>
        </aside>
      </div>
    </div>
  </section>
</div>

@endsection


@section('script')
@endsection

<style>
    @media only screen and (max-width: 600px) {
  #detail_title {
    display: none;
  }
}
.desc a {
  color: blue;
}


.share_section ul
{ 
overflow-x:hidden;
white-space:nowrap; 

width: 100%;
} 

.share_section li
{ 
display:inline; 
}   


/*.btn-facebook {*/
/*background: #3b5998;*/
/*border-radius: 3px;*/
/*color: #fff;*/
/*padding: 8px 16px;*/
/*}*/

/*.btn-facebook:link, .btn-facebook:visited {*/
/*color: #fff;*/
/*}*/

/*.btn-facebook:active, .btn-facebook:hover {*/
/*background: #30477a;*/
/*color: #fff;*/
/*}*/


/*.btn-telegram {*/
/*background: #3b5998;*/
/*border-radius: 3px;*/
/*color: #fff;*/
/*padding: 8px 16px;*/
/*}*/

</style>

