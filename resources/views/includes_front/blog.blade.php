
<div class="special-offer mb-5">
    <div class="container">
           <div class="row center">
             <div class="col-md-12">
                <div class="home_exceptional_title">
                    Posts From Our Blog               
                 </div>
                <div class="home_exceptional_desc">
                From travel tips and tour updates to 
                            country guides, packing lists to little known things to do,
                        you'll find it all in our travel blog.y        
                </div>
            </div>

        @foreach($blog as $post)
        <div class="col-md-3">
            <div class="featured_articles_slider_box">
                <a href="{{$post->image}}">
                    <div class="featured_articles_slider_box_image" title="" style="background-image: url('{{$post->image}}')">
                       <div class="featured_articles_slider_box_title">{{$post->title}}</div>
                   </div>
                </a>
            </div>
        </div> 
        @endforeach
       </div>
    </div>
</div>

