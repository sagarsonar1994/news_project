@extends('front.layouts.master')

@section('title')
<title>Category</title>
@endsection

@section('style')
@endsection

@section('body')

<section id="newsSection">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="latest_newsarea"> <span>ब्रेकिंग न्यूज</span>
          <ul id="ticker01" class="news_sticker">
           @foreach($breaking_posts as $key => $post)
              <li><a href="{{ route('detailsPage', $post->post_slug) }}"><i class="fa fa-hand-o-right" aria-hidden="true"></i> {{$post->post_title}}</a></li>
            @endforeach
          </ul>
          <div class="social_area">
            <ul class="social_nav">
              <li class="facebook"><a href="#"></a></li>
              <li class="twitter"><a href="#"></a></li>
              <li class="flickr"><a href="#"></a></li>
              <li class="pinterest"><a href="#"></a></li>
              <li class="googleplus"><a href="#"></a></li>
              <li class="vimeo"><a href="#"></a></li>
              <li class="youtube"><a href="#"></a></li>
              <li class="mail"><a href="#"></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>




  <section id="contentSection" class="our-experts">
	   
    <div class="row">
		
    <div class="col-lg-8 col-md-8 col-sm-8">
		 <div class="row">
     @foreach($posts as $post)
     <a href="{{ route('detailsPage', $post->post_slug) }}" title="{{ $post->post_title }}">
			<div class="col-md-6">
				<div class="card">
				  <img class="img-fluid" src="{{ get_featured_image_thumbnail_url($post->featured_image) }}" alt="{{ $post->post_title }}">
				  <div class="card-body text-left">
					<h5 class="card-title">{{ $post->post_title }}</h5>
					<p class="card-text mb-2"><i class="fa fa-calendar"></i> <small>{{ date("d F Y", strtotime($post->post_date)) }}</small> </p>
				  </div>
				</div>
			</div>
      </a>
    @endforeach
			
		
		</div>
        <div class="left_content">
          <div class="single_page">
           
            <div class="related_post">
              <h3>बड़ी खबरें: </h3>
			  <hr>
              <ul class="spost_nav wow fadeInDown animated">
               @foreach($posts_b as $key=>$post)
                <li>
                  <div class="media"> <a class="media-left" href="{{ route('detailsPage', $post->post_slug) }}"> <img src="{{ get_featured_image_thumbnail_url($post->featured_image) }}" alt=""> </a>
                    <div class="media-body"> <a class="catg_title" href="{{ route('detailsPage', $post->post_slug) }}">
                      <h4>{{$post->post_title}}</h4></a> 
                      <p>{!! \Illuminate\Support\Str::limit($post->post_details, 200) !!}</p></div>
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
            <h2><span>Latest Post</span></h2>
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
         
         
          </div>
        </aside>
      </div>
    </div>
  </section> 
@endsection


@section('script')
@endsection

