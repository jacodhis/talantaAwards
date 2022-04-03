<div class="row">
    <div class="col-md-9 col-sm-9">
        <div class="portfolio-filter-container">

            <ul class="portfolio-filter">

                <li>
                    <a href="#" class="portfolio-selected" data-filter="*"  wire:click = "allArtists">All</a>
                </li>
                <li>
                    <a href="#" wire:click = "femaleArtist" data-filter=".web-design">Female artist</a>
                </li>
                <li>
                    <a href="#" data-filter=".branding"  wire:click = "maleArtist">Male Artists</a>
                </li>
                <li>
                    <a href="#" data-filter=".seo" wire:click="topMale">Top Male Artists</a>
                </li>
                <li>
                    <a href="#" data-filter=".videos" wire:click="topFemale">Top Female Artists</a>
                </li>
            </ul>
        </div>
        @forelse ($artists as $artist)
        <div class="thumb-label-item col-md-3">
            <div class="img-overlay thumb-label-item-img">
               <img src="{{asset('/storage/artistImages/'.$artist->image)}}" class="img-fluid" height="200px" width="100px">
                <div class="item-img-overlay">
                    <div class="item_img_overlay_content">
                        <h3 class="thumb-label-item-title">
                            <a href="{{route('vote.show',[$artist->id])}}"> VOTE {{$artist->name}} </a>
                        </h3>
                    </div>

                </div>
            </div>


        </div>
    @empty
      0
    @endforelse



    </div>
    <div class="col-md-3 col-sm-3">
        <div class="sidebar">


            <!-- Sidebar Block -->
            <div class="sidebar-block">
                <div class="sidebar-content tags blog-search">
                    <p>@php if(isset($eventName))
                    {
                        echo  '<h1>'.$eventName.'</h1>';
                    }else{
                        echo "";
                    }
                    @endphp</p>
                    {{-- <form action="#" method="post"> --}}
                        <div class="input-group">

                            <input type="text" name="q" wire:model="searchEvent" class="form-control blog-search-input text-input" placeholder="Search.." />
                            <span class="input-group-addon">
                                        <button class="blog-search-button icon-search ">
                                        </button>
                                    </span>
                                    {{-- {{$searchEvent}} --}}
                        </div>
                    {{-- </form> --}}
                </div>
            </div>
            <!-- Sidebar Block -->


            <!-- Sidebar Block -->
            {{-- <div class="sidebar-block">
                <h3 class="h3-sidebar-title sidebar-title">
                EVENTS
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
            </div> --}}
            <!-- Sidebar Block -->


            <!-- Sidebar Block -->
            <div class="sidebar-block">
                <h3 class="h3-sidebar-title sidebar-title">
                   EVENTS
                </h3>

                <div class="sidebar-content">
                   @forelse ($events as $event)
                   <ul class="posts-list">
                    <li>
                        <div class="posts-list-thumbnail">
                            <a href="javascript:void(0);" wire:click="event({{$event->id}})">{{$event->event_name}}</a>
                        </div>
                        {{-- <div class="posts-list-content">

                        </div> --}}
                    </li>
                </ul>
                   @empty

                   @endforelse

                </div>
            </div>
            <!-- Sidebar Block -->
        </div>
    </div>
    {{-- <div class="col-md-12 col-sm-12">
     <div class="portfolio-filter-container">

       <ul class="portfolio-filter">

           <li>
            <a href=""  wire:click="category">select Category</a>
            <select name="" id="" class="form-control">
                @forelse ($events as $event)
                <option value="{{$event->id}}">{{$event->event_name}}</option>
                @empty

                @endforelse
            </select>
           </li>
           <li>
               <a href="#" class="portfolio-selected" data-filter="*"  wire:click = "allArtists">All</a>
           </li>
           <li>
               <a href="#" wire:click = "femaleArtist" data-filter=".web-design">Female artist</a>
           </li>
           <li>
               <a href="#" data-filter=".branding"  wire:click = "maleArtist">Male Artists</a>
           </li>
           <li>
               <a href="#" data-filter=".seo" wire.click="topMale">Top Male Artists</a>
           </li>
           <li>
               <a href="#" data-filter=".videos" wire.click="topFemale">Top Female Artists</a>
           </li>
       </ul>
   </div>
       @forelse ($artists as $artist)
           <div class="thumb-label-item col-md-3">
               <div class="img-overlay thumb-label-item-img">
                  <img src="{{asset('/storage/artistImages/'.$artist->image)}}" class="img-fluid" height="200px" width="100px">
                   <div class="item-img-overlay">
                       <div class="item_img_overlay_content">
                           <h3 class="thumb-label-item-title">
                               <a href="{{route('vote.show',[$artist->id])}}"> VOTE {{$artist->name}} </a>
                           </h3>
                       </div>

                   </div>
               </div>


           </div>
       @empty
         0
       @endforelse
   </div>
   </div> --}}
   </div>

