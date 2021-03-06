
@extends('layouts/layout')


@section('main-content')




<section class="banner-area">
    <div class="container box_1170">
      <div class="row fullscreen d-flex align-items-center justify-content-center">
        <div class="banner-content text-center col-lg-8">
          <h1>
            Charter Yacht <br>
            The Luxury Of Traveling
          </h1>
        </div>
      </div>
    </div>
  </section>


  <section class="post-slider-area">
    <div class="container box_1170">
      <div class="row justify-content-center">
        <div class="col-lg-10">
          <div class="owl-carousel active-post-carusel">
            <div class="post-box mb-30">
              <div class="d-flex">
                <div>
                  <a href="#">
                    <img src="img/author/xa1.png.pagespeed.ic.R5RMjQZ852.png" alt="">
                  </a>
                </div>
                <div class="post-meta">
                  <div class="meta-head">
                    <a href="#">Marvel Maison</a>
                  </div>
                  <div class="meta-details">
                    <ul>
                      <li>
                        <a href="#">
                          <span class="lnr lnr-calendar-full"></span>
                          13th Oct, 2018
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span class="lnr lnr-picture"></span>
                          Image Post
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span class="lnr lnr-coffee-cup"></span>
                          Food & Travel
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span class="lnr lnr-bubble"></span>
                          03 Comments
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
              <div class="post-btn">
                <a href="#" class="primary-btn text-uppercase">Read More</a>
              </div>
            </div>
            <div class="post-box mb-30">
              <div class="d-flex">
                <div>
                  <a href="#">
                    <img src="img/author/xa1.png.pagespeed.ic.R5RMjQZ852.png" alt="">
                  </a>
                </div>
                <div class="post-meta">
                  <div class="meta-head">
                    <a href="#">Marvel Maison</a>
                  </div>
                  <div class="meta-details">
                    <ul>
                      <li>
                        <a href="#">
                          <span class="lnr lnr-calendar-full"></span>
                          13th Oct, 2018
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span class="lnr lnr-picture"></span>
                          Image Post
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span class="lnr lnr-coffee-cup"></span>
                          Food & Travel
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span class="lnr lnr-bubble"></span>
                          03 Comments
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
              <div class="post-btn">
                <a href="#" class="primary-btn text-uppercase">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <div class="main-body section-gap mt--30">
    <div class="container box_1170">
      <div class="row">
        <div class="col-lg-8 post-list">

          <section class="post-area">

            @foreach ($posts as $post)
            
            <div class="single-post-item">
              <figure>
                <img class="post-img img-fluid" src="{{asset("storage/".$post->image_url)}}" alt="">
              </figure>
              <h3>
                <a href="blog-details.html">{{$post->title}}</a>
              </h3>
              <p>{{$post->content}}</p>
              <a href="{{Route('postDetails',$post->id)}}" class="primary-btn text-uppercase mt-15">continue Reading</a>
              @auth
                @if (auth()->user()->id==$post->user_id)
                  <a href="#" class="primary-btn text-uppercase mt-15 ml-3">Edit Post</a>
                @endif
              @endauth
              
              <div class="post-box">
                <div class="d-flex">
                  <div>
                    <a href="#">
                      <img src="img/author/xa1.png.pagespeed.ic.R5RMjQZ852.png" alt="">
                    </a>
                  </div>
                  <div class="post-meta">
                    <div class="meta-head">
                      <a href="#">{{$post->user->name}}</a>
                    </div>
                    <div class="meta-details">
                      <ul>
                        <li>
                          <a href="#">
                            <span class="lnr lnr-calendar-full"></span>
                            {{$post->created_at}}
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <span class="lnr lnr-picture"></span>
                            Image Post
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <span class="lnr lnr-coffee-cup"></span>
                            Food & Travel
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <span class="lnr lnr-bubble"></span>
                            03 Comments
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            @endforeach

            
            
            <nav class="blog-pagination justify-content-center d-flex">
              <ul class="pagination">
                <li class="page-item">
                  <a href="#" class="page-link" aria-label="Previous">
                    <span aria-hidden="true">
                      <span class="lnr lnr-arrow-left"></span>
                    </span>
                  </a>
                </li>
                <li class="page-item"><a href="#" class="page-link">01</a></li>
                <li class="page-item active"><a href="#" class="page-link">02</a></li>
                <li class="page-item"><a href="#" class="page-link">03</a></li>
                <li class="page-item"><a href="#" class="page-link">04</a></li>
                <li class="page-item"><a href="#" class="page-link">09</a></li>
                <li class="page-item">
                  <a href="#" class="page-link" aria-label="Next">
                    <span aria-hidden="true">
                      <span class="lnr lnr-arrow-right"></span>
                    </span>
                  </a>
                </li>
              </ul>
            </nav>
          </section>

        </div>
        <div class="col-lg-4 sidebar">
          <div class="single-widget search-widget">
            <form class="example" action="#" style="margin:auto;max-width:300px">
              <input type="text" placeholder="Search Posts" name="search2">
              <button type="submit"><i class="fa fa-search"></i></button>
            </form>
          </div>
          <div class="single-widget protfolio-widget">
            <img class="img-fluid" src="img/blog/user2.png" alt="">
            <a href="#">
              <h4>Charlie ALison Barber</h4>
            </a>
            <div class="desigmation">
              <p>Senior blog writer</p>
            </div>
            <p>
              Boot camps have its supporters andit sdetractors. Some people do not understand why you should have to
              spend
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
                  <img class="img-fluid" src="img/blog/r2.jpg" alt="">
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
  </div>

    
@endsection