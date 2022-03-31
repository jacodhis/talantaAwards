<div class="row">
    <div class="col-md-12 col-sm-12">
     <div class="portfolio-filter-container">
       <ul class="portfolio-filter">

           <li>
            <a href=""  wire:click="category">select Category</a>
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


   <div class="portfolio-items">

       @forelse ($artists as $artist)


           <!-- Portfolio Item -->
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
           <!-- //Portfolio Item// -->

       @empty
         0
       @endforelse



   </div>
   </div>
   </div>

