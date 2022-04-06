@extends('layouts.vote.layout')

@section('title')
    vote for {{$artist->name ?? "somebody"}}
@endsection
@section('content')

<div class="row">
    <div class="col-md-9 col-sm-9">

        <!-- Blog Post -->
        <div class="blog-post">

            <div class="blog-post-type">
                <i class="icon-pen"> </i>
            </div>

            <div class="blog-span">
                <div class="blog-post-featured-img img-overlay">
                    {{-- <img src="{{asset('vote/images/placeholders/blog1.jpg')}}" alt="" /> --}}
                    <img src="{{asset('/storage/artistImages/'.$artist->image)}}" class="img-fluid" height="400px" width="100px">
                    <div class="item-img-overlay">
                        <a class="portfolio-zoom fa fa-plus" href="images/placeholders/blog1.jpg" data-rel="prettyPhoto[portfolio]" title="Title goes here"></a>
                        <div class="item_img_overlay_content">
                            <div class="blog-post-details-item blog-post-details-item-left share-article">
                                <span>Share It On</span>
                                <a href="#" class="icon-facebook">fb</a>
                                <a href="#" class="icon-twitter-alt">ig</a>
                                <a href="#" class="icon-google">watsup</a>
                                {{-- <a href="#" class="icon-email-mail-streamline"></a> --}}
                            </div>
                            <div class="blog-post-details-item blog-post-details-item-right share-article">
                                <a href="#" class="icon-heart">25 likes</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blog-post-details">

                    <!-- Date -->
                    <div class="blog-post-details-item blog-post-details-item-left icon-calendar">
                        Like
                    </div>

                    <div class="blog-post-details-item blog-post-details-item-left icon-user">
                        <a href="">
                                Admin
                            </a>
                    </div>
                    <!-- //Author Name// -->


                    <!-- Tags -->
                    <div class="blog-post-details-item blog-post-details-item-left blog-post-details-tags icon-files">
                        <a href="">
                            @php
                            $votes =  \App\Models\payment::where('artist_code','=',$artist->code)->get();
                           @endphp
                          {{$votes->count()}} votes
                            </a>
                        {{-- <a href="">
                                Investment
                            </a> ,
                        <a href="">
                                Freelancing
                            </a> --}}
                    </div>
                    <!-- //Tags// -->

                    <!-- Comments -->
                    <div class="blog-post-details-item blog-post-details-item-left blog-post-details-item-last icon-comment">
                        <a href="">
                                3 Comments
                            </a>
                    </div>
                    <!-- //Comments// -->


                    <!-- Read More -->
                    <div class="blog-post-details-item blog-post-details-item-right">
                        <a href="">
                               CODE : {{$artist->code ??""}}<i class="fa fa-chevron-right"></i>
                            </a>
                    </div>
                    <!-- //Read More// -->

                </div>
                <div class="row">
                    @include('includes.inc.messages')
                </div>
                <h2>
                    <a href="">
                        Vote for {{$artist->name}}
                        </a>
                </h2>

                <div class="blog-post-body py-4">

                    <form class="form-horizontal" method="post" action="{{route('stk')}}">
                        @csrf
                        <fieldset>
                            {{-- <legend class="text-center header">Vote for {{$artist->name}} </legend> --}}
                            <div class="form-group">
                                <div class="col-md-10 col-md-offset-1">
                                    <input id="fname" value="{{$artist->code}}" name="code" type="text" placeholder=" Code" class="form-control" required disabled>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-10 col-md-offset-1">
                                    <input id="lname" name="vote" type="number" min="1"  placeholder="Votes" class="form-control" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-10 col-md-offset-1">
                                    <input id="phone" name="phone" type="tel" placeholder="enter your phone number" class="form-control" size="12"
                                    required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-success ">Vote</button>
                                </div>
                            </div>
                        </fieldset>

                    </form>
                </div>



            </div>
        </div>
        <!-- Blog Post -->


        <!-- Audio Blog Post ( Soundcloud ) -->
        {{-- <div class="blog-post">

            <div class="blog-post-type">
                <i class="icon-sound"> </i>
            </div>

            <div class="blog-span">


                <div class="blog-post-featured-img">
                    <a href="https://soundcloud.com/haloproject/halo-scenes-from-the-four" class="blog-post-soundcloud">My
                            Audio</a>
                </div>

                <h2>
                    <a href="">
                            Audio Post Type Example
                        </a>
                </h2>

                <div class="blog-post-body">
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata
                    sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. </div>

                <div class="blog-post-details">

                    <!-- Date -->
                    <div class="blog-post-details-item blog-post-details-item-left icon-calendar">
                        22 January, 2014
                    </div>

                    <div class="blog-post-details-item blog-post-details-item-left icon-user">
                        <a href="">
                                Admin
                            </a>
                    </div>
                    <!-- //Author Name// -->


                    <!-- Tags -->
                    <div class="blog-post-details-item blog-post-details-item-left blog-post-details-tags icon-files">
                        <a href="">
                                Business
                            </a> ,
                        <a href="">
                                Investment
                            </a> ,
                        <a href="">
                                Freelancing
                            </a>
                    </div>
                    <!-- //Tags// -->

                    <!-- Comments -->
                    <div class="blog-post-details-item blog-post-details-item-left blog-post-details-item-last icon-comment">
                        <a href="">
                                3 Comments
                            </a>
                    </div>
                    <!-- //Comments// -->


                    <!-- Read More -->
                    <div class="blog-post-details-item blog-post-details-item-right">
                        <a href="">
                                read more <i class="fa fa-chevron-right"></i>
                            </a>
                    </div>
                    <!-- //Read More// -->

                </div>
            </div>
        </div> --}}
        <!-- Audio Blog Post ( Soundcloud ) -->


    </div>
    <div class="col-md-3 col-sm-3">
        <div class="sidebar">


            <!-- Sidebar Block -->
            <div class="sidebar-block">
                <div class="sidebar-content tags blog-search">
                    <form action="#" method="post">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control blog-search-input text-input" placeholder="Search.." />
                            <span class="input-group-addon">
                                        <button class="blog-search-button icon-search ">
                                        </button>
                                    </span>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Sidebar Block -->


            <!-- Sidebar Block -->
            <div class="sidebar-block">
                <h3 class="h3-sidebar-title sidebar-title">
                   {{$artist->name ?? ""}}
                </h3>

                <div class="sidebar-content tags">
                    <a href="" class="nav-link">HTML5</a>
                    <a href="" class="nav-link">CSS3</a>
                    <a href="">jQuery</a>
                    <a href="">JavaScript</a>
                    <a href="">WordPress</a>
                    <a href="">PHP</a>
                    <a href="">CSS</a>
                    <a href="">Social Media</a>
                    <a href="">HTML</a>
                </div>
            </div>
            <!-- Sidebar Block -->


            <!-- Sidebar Block -->
            <div class="sidebar-block">
                <h3 class="h3-sidebar-title sidebar-title">
                    recent posts
                </h3>

                <div class="sidebar-content">
                    <ul class="posts-list">
                        <li>
                            <div class="posts-list-thumbnail">
                                {{-- <a href="">
                                    <img src="images/placeholders/blog1-thumb.jpg" alt="" />
                                </a> --}}
                                <img src="{{asset('/storage/artistImages/'.$artist->image)}}" class="img-fluid" height="50px" width="50px">
                            </div>
                            <div class="posts-list-content">
                                <a href="" class="posts-list-title">Sidebar post example </a>
                                <span class="posts-list-meta">
                                            July 30, 2013
                                        </span>
                            </div>
                        </li>
                        <li>
                            <div class="posts-list-thumbnail">
                                <a href="">
                                    <img src="images/placeholders/blog2-thumb.jpg" alt="" />
                                </a>
                            </div>
                            <div class="posts-list-content">
                                <a href="" class="posts-list-title">Sidebar post example </a>
                                <span class="posts-list-meta">
                                            July 30, 2013
                                        </span>
                            </div>
                        </li>
                        <li>
                            <div class="posts-list-thumbnail">
                                <a href="">
                                    <img src="images/placeholders/blog3-thumb.jpg" alt="" />
                                </a>
                            </div>
                            <div class="posts-list-content">
                                <a href="" class="posts-list-title">Sidebar post example </a>
                                <span class="posts-list-meta">
                                            July 30, 2013
                                        </span>
                            </div>
                        </li>
                        <li>
                            <div class="posts-list-thumbnail">
                                <a href="">
                                    <img src="images/placeholders/blog4-thumb.jpg" alt="" />
                                </a>
                            </div>
                            <div class="posts-list-content">
                                <a href="" class="posts-list-title">Sidebar post example </a>
                                <span class="posts-list-meta">
                                            July 30, 2013
                                        </span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Sidebar Block -->
        </div>
    </div>
    <!-- //Blog Post, Type:Quote// -->




</div>

<div class="row">
    <div class="col-md-12 col-sm-12">
        <div class="title-block clearfix">
            <h3 class="h3-body-title">related Artists</h3>
            <div class="title-seperator"></div>
        </div>            </div>
</div>

<div class="row">
    <div class="col-md-12 col-sm-12">
        <div class="portfolio-items">

            <!-- Portfolio Item -->
           @forelse ( $artists as $artist)
           <div class="thumb-label-item web-design">
            <div class="img-overlay thumb-label-item-img">
                <img src="{{asset('/storage/artistImages/'.$artist->image)}}" class="img-fluid" height="200px" width="100px">

                <div class="item-img-overlay">

                    <a class="portfolio-zoom fa fa-plus" href="images/placeholders/portfolio1.jpg"
                       data-rel="prettyPhoto[portfolio]" title="Title goes here"></a>
                    <div class="item_img_overlay_content">
                        <h3 class="thumb-label-item-title">
                            <a href="{{route('vote.show',[$artist->id])}}"> VOTE {{$artist->name}} </a>
                        </h3>
                    </div>

                </div>
            </div>



        </div>
           @empty

           @endforelse
            <!-- //Portfolio Item// -->
            {{$artists->links()}}


        </div>
    </div>
</div>



@endsection
