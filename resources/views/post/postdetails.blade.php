
@extends('layouts/layout')


@section('main-content')



<section class="banner-area relative">
    <div class="overlay overlay-bg"></div>
    <div class="container">
      <div class="row d-flex align-items-center justify-content-center">
        <div class="about-content col-lg-12">
          <h1 class="text-white">
            Blog Details
          </h1>
          <p class="text-white link-nav"><a href="index-2.html">Home </a> <span class="lnr lnr-arrow-right"></span>
            <a href="blog-details.html">
              Blog Details</a>
          </p>
        </div>
      </div>
    </div>
  </section>


  <section class="blog_area section-gap single-post-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="main_blog_details">
            <img class="img-fluid" src="img/blog/news-blog.jpg" alt="">
            <h4>
              {{$post->title}}
            </h4>
            <div class="user_details">
              <div class="float-left">
                <a href="#">{{$post->Category->title}}</a>
              </div>
              <div class="float-right">
                <div class="media">
                  <div class="media-body">
                    <h5>{{$post->User->name}}</h5>
                    <p>{{$post->created_at}}</p>
                  </div>
                  <div class="d-flex">
                    <img src="img/blog/user-img.jpg" alt="">
                  </div>
                </div>
              </div>
            </div>

            <img src="{{asset('storage/'.$post->image_url)}}" alt="">
            
            <p class="pt-5">
              {{$post->content}}
            </p>

            <div class="news_d_footer">
              <a href="#"><i class="lnr lnr lnr-heart"></i>Lily and 4 people like this</a>
              <a class="justify-content-center ml-auto" href="#"><i class="lnr lnr lnr-bubble"></i>06
                Comments</a>
              <div class="news_socail ml-auto">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-pinterest"></i></a>
                <a href="#"><i class="fa fa-rss"></i></a>
              </div>
            </div>
          </div>
         
          <div class="comments-area">
            <h4>05 Comments</h4>

            @auth
              <div class="p-5">
                <form action="{{Route('addComment',$post->id)}}" method="POST">
                  @csrf
                  <input type="text" name="comment" class="form-control" placeholder="Place your comment here">
                  <input type="submit" value="Post" class="btn btn-primary mt-3">
                </form>
              </div>
            @endauth

            
            
            @foreach ($post->Comments as $comment)

            <div class="comment-list">
              <div class="single-comment justify-content-between d-flex">
                <div class="user justify-content-between d-flex">
                  <div class="thumb">
                    <img src="img/blog/c4.jpg" alt="">
                  </div>
                  <div class="desc">
                    <h5><a href="#">{{$comment->User->name}}</a></h5>
                    <p class="date">{{$comment->created_at}}</p>
                    <p class="comment">
                      {{$comment->comment}}
                    </p>
                  </div>
                </div>
                <div class="reply-btn">
                  <a href="#" class="btn-reply text-uppercase">reply</a>
                </div>
              </div>
            </div>
              
            @endforeach

            
            
          </div>
          <div class="comment-form">
            <h4>Leave a Reply</h4>
            <form>
              <div class="form-group form-inline">
                <div class="form-group col-lg-6 col-md-6 name">
                  <input type="text" class="form-control" id="name" placeholder="Enter Name"
                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Name'">
                </div>
                <div class="form-group col-lg-6 col-md-6 email">
                  <input type="email" class="form-control" id="email" placeholder="Enter email address"
                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'">
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="subject" placeholder="Subject"
                  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Subject'">
              </div>
              <div class="form-group">
                <textarea class="form-control mb-10" rows="5" name="message" placeholder="Messege"
                  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required></textarea>
              </div>
              <a href="#" class="primary-btn submit_btn text-uppercase">Send Message</a>
            </form>
          </div>
        </div>
        <div class="col-lg-4 sidebar">
          <div class="single-widget search-widget">
            <form class="example" action="#" style="margin:auto;max-width:300px">
              <input type="text" placeholder="Search Posts" name="search2">
              <button type="submit"><i class="fa fa-search"></i></button>
            </form>
          </div>
          <div class="single-widget protfolio-widget">
            <img class="img-fluid" src="img/blog/xuser2.png.pagespeed.ic.nc9LeJyQ4n.png" alt="">
            <a href="#">
              <h4>Charlie ALison Barber</h4>
            </a>
            <div class="desigmation">
              <p>Senior blog writer</p>
            </div>
            <p>
              Boot camps have its supporters andit sdetractors. Some people do not understand why you
              should have to spend
              money on boot camp whenyou can get. Boot camps have itssuppor ters andits detractors.
            </p>
            <ul>
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
              <li><a href="#"><i class="fa fa-behance"></i></a></li>
            </ul>
          </div>
          <div class="single-widget popular-posts-widget">
            <h4 class="title">Popular Posts</h4>
            <div class="blog-list ">
              <div class="single-popular-post d-flex flex-row">
                <div class="popular-thumb">
                  <img class="img-fluid" src="img/blog/xr1.jpg.pagespeed.ic.IG13xznSFv.jpg" alt="">
                </div>
                <div class="popular-details">
                  <a href="blog-details.html">
                    <h4>Space Final Frontier</h4>
                  </a>
                  <p class="text-uppercase">02 hours ago</p>
                </div>
              </div>
              <div class="single-popular-post d-flex flex-row">
                <div class="popular-thumb">
                  <img class="img-fluid" src="img/blog/xr2.jpg.pagespeed.ic.iNsvnAB6iw.jpg" alt="">
                </div>
                <div class="popular-details">
                  <a href="blog-details.html">
                    <h4>The Amazing Hubble</h4>
                  </a>
                  <p class="text-uppercase">02 hours ago</p>
                </div>
              </div>
              <div class="single-popular-post d-flex flex-row">
                <div class="popular-thumb">
                  <img class="img-fluid" src="img/blog/xr3.jpg.pagespeed.ic.jQYDq1gh3Q.jpg" alt="">
                </div>
                <div class="popular-details">
                  <a href="blog-details.html">
                    <h4>Astronomy Astrology</h4>
                  </a>
                  <p class="text-uppercase">02 hours ago</p>
                </div>
              </div>
              <div class="single-popular-post d-flex flex-row">
                <div class="popular-thumb">
                  <img class="img-fluid" src="img/blog/xr4.jpg.pagespeed.ic.mQYFNAVl5j.jpg" alt="">
                </div>
                <div class="popular-details">
                  <a href="blog-details.html">
                    <h4>Asteroids telescope</h4>
                  </a>
                  <p class="text-uppercase">02 hours ago</p>
                </div>
              </div>
            </div>
          </div>
          <div class="single-widget category-widget">
            <h4 class="title">Post Categories</h4>
            <ul>
              <li><a href="#" class="justify-content-between align-items-center d-flex">
                  <p>Techlology</p> <span>37</span>
                </a></li>
              <li><a href="#" class="justify-content-between align-items-center d-flex">
                  <p>Lifestyle</p> <span>24</span>
                </a></li>
              <li><a href="#" class="justify-content-between align-items-center d-flex">
                  <p>Fashion</p> <span>59</span>
                </a></li>
              <li><a href="#" class="justify-content-between align-items-center d-flex">
                  <p>Art</p> <span>29</span>
                </a></li>
              <li><a href="#" class="justify-content-between align-items-center d-flex">
                  <p>Food</p> <span>15</span>
                </a></li>
              <li><a href="#" class="justify-content-between align-items-center d-flex">
                  <p>Architecture</p> <span>09</span>
                </a></li>
              <li><a href="#" class="justify-content-between align-items-center d-flex">
                  <p>Adventure</p> <span>44</span>
                </a></li>
            </ul>
          </div>
          <div class="single-widget newsletter-widget">
            <h4 class="title">Newsletter</h4>
            <div id="mc_embed_signup">
              <form target="_blank" novalidate
                action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                class="">
                <div class="form-group" style="width: 100%">
                  <input name="EMAIL" placeholder="Email Address" onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Email Address '" required type="email">
                  <div style="position: absolute; left: -5000px;">
                    <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                  </div>
                  <button class="primary-btn text-uppercase">
                    Subscribe Now
                    <span class="lnr lnr-arrow-right"></span>
                  </button>
                </div>
                <div class="info"></div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
