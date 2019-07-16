
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
            <div class="featured_articles_slider_box" style="cursor: pointer;">
            <a class="featured_articles_slider_title" data-toggle="modal" data-target="#noAnimModal">
                    <div class="featured_articles_slider_box_image"  style="background-image: url('{{$post->image}}')"> </div>
                    <div class="featured_articles_slider_box_title">{{$post->title}}</div>
            </a>
            </div>
            <div class="modal" id="noAnimModal" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="noAnimModalLabel">{{$post->title}}</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                            <p> {!!$post->desc!!}</p>
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        @endforeach
       </div>
    </div>
</div>
