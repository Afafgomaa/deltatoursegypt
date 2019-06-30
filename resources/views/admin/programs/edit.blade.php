@extends('layouts.back')
@section('content')

@include('includes_back.sidebar')
<div class="right_col" role="main" style="min-height: 3787px;">
 <div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
        <h2>Edit pogram : {{$program->name}}</h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
            </ul>
           <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-primary" href="{{ route('Program.index') }}"> Back</a>
                    </div>
                </div>
            </div>
            @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {!! Form::model($program, ['method' => 'PATCH','route' => ['Program.update', $program->id],'files'=>true]) !!}
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Program Name:</strong>
                {!! Form::text('name', null, array('placeholder' => 'Program Name','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Program Price From:</strong>
                {!! Form::number('price', null, array('placeholder' => 'Price','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Program Days:</strong>
                {!! Form::number('days', null, array('placeholder' => 'Days','class' => 'form-control')) !!}
            </div>
        </div>
 
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Program Nights:</strong>
                {!! Form::number('nights', null, array('placeholder' => 'Nights','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Program Main Image:</strong>
                {!! Form::text('main_image', null, array('placeholder' => 'Main Image Url','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Program Type:</strong>
                {!! Form::select('kind', ['0' => 'Private', '1' => 'Public'],null,['class' => 'form-control' ]) !!}
            </div>
        </div>
 
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Place:</strong>
                {!! Form::text('place', null, array('placeholder' => 'Place','class' => 'form-control')) !!}
            </div>
        </div>
 
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                 {!! Form::textarea('brief', null, array('placeholder' => 'Description','class' => 'summernote form-control ','style'=>'height:100px')) !!}                
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Package Highlights:</strong>
                <select class="form-control" name="package_highlights_id[]" multiple= 'multiple'>
                      @foreach($highlights as $highlight)
                             <option value="{{ $highlight->id}}" 
                                 @foreach($program->Highlights as $h)
                                   @if($highlight->id === $h->id)
                                   {{'selected'}}
                                   @endif
                                 @endforeach
                            
                            > {{$highlight->name}}</option>
                      @endforeach 
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Holiday Sights:</strong>
                <select class="form-control" name="holiday_sights_id[]" multiple= 'multiple'>
                      @foreach($sights as $sight)
                             <option value="{{ $sight->id}}" 
                                 
                             @foreach($program->Sights as $s)
                               @if($sight->id ===  $s->id)
                               {{'selected'}}
                               @endif
                             @endforeach

                             >{{$sight->name}}</option>
                      @endforeach 
                </select>
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Program Image Gallery: </strong>
                    <div class="col-md-11 col-sm-11 col-xs-11" id="image_gallery">
                        @foreach(unserialize($program->image_gallery ) as $img)
                      <input type="url" name="image_gallery[]" value="{{$img}}" class="form-control mb-3 mt-3">
                      @endforeach
                    </div>
                    <div class="col-md-1 col-sm-1 col-xs-12">
                       <a id="addnn" href="#" class="btn btn-success">+</a>
                    </div>

           </div>
         </div>
         
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Overview:</strong>
                 {!! Form::textarea('overview', null, array('placeholder' => 'overview','class' => 'summernote form-control', 'style'=>'height:100px')) !!}                
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Accommodations::</strong>
                <select class="form-control" name="accom_id[]" multiple= 'multiple'>
                      @foreach($accommodations as $c)
                             <option value="{{ $c->id}}"
                             @foreach($program->Accommodations as $accom)
                               @if($c->id ===  $accom->id)
                               {{'selected'}}
                               @endif
                             @endforeach
                             
                             >{{$c->name}}</option>
                      @endforeach 
                </select>
            </div>
        </div>
        
            <div class="col-xs-12 col-sm-12 col-md-12" id="itinerary" > 
            <div class="pull-right"><a id="addItinerary" href="#" class="btn btn-success">+</a></div>
            @foreach(array_combine(unserialize($program->itinerary), unserialize($program->itinerary_heading))  as $b => $h  ) 
              
                    <div class="form-group">
                        <strong>Itinerary Heading:</strong> 
                        <input type="text" class="form-control itinerary_h" name="itinerary_heading[]" value="{{$h}}">               
                    </div>
                    <div class="form-group">
                        <strong>itinerary Body:</strong>
                        <textarea  name="itinerary[]" class="form-control" style="height:100px">{{$b}}</textarea>               
                    </div>
              
           
           @endforeach
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Add On:</strong>
                <select class="form-control" name="add_on_id[]" multiple= 'multiple'>
                      @foreach($addons as $a)
                             <option value="{{ $a->id}}" 
                                 @foreach($program->Addons as $add)
                                 @if($a->id === $add->id)
                                        {{'selected'}}
                                 @endif
                             
                             @endforeach
                             >{{$a->title}}</option>
                      @endforeach 
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Price&Children:</strong>
                 {!! Form::textarea('price_children', null, array('placeholder' => 'Price&Children','class' => 'form-control summernote', 'id' => 'summernote','style'=>'height:100px')) !!}                
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Pricing:</strong>
                 {!! Form::textarea('pricing', null, array('placeholder' => 'Pricing', 'id' => 'summernote','class' => 'form-control summernote','style'=>'height:100px')) !!}                
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Related Programs:</strong>
                <select class="form-control" name="related_programs_id[]" multiple= 'multiple'>
                      @foreach($programs->where('id' ,'!==' , $program->id) as $p)
                             <option value="{{ $p->id}}" 
                                 @foreach($program->related as $related_pro)
                                      @if($related_pro === $p->id)
                                 {{'selected'}}
                                 @endif
                                @endforeach
                                 >{{$p->name}}</option>
                      @endforeach 
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Page:</strong>
                <select class="form-control" name="pages_id">
                      @foreach($pages_programs as $pages_program)
                             <option value="{{ $pages_program->id}}"{{$program->pages_id  === $pages_program->id ?  'selected' : ''}} {{$pages_program->parent_id === 0  ? 'disabled' : ' ' }}>{{$pages_program->name}} </option>
                      @endforeach 
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
    {!! Form::close() !!}



        </div>
       </div>
    </div>
  </div>
</div>

@endsection