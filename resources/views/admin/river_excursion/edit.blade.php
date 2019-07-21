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
                        <a class="btn btn-primary" href="{{ route('river_excursion.index') }}"> Back</a>
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
    {!! Form::model($program, ['method' => 'PATCH','route' => ['river_excursion.update', $program->id],'files'=>true]) !!}
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>Program Name:</strong>
                {!! Form::text('name', null, array('placeholder' => 'Program Name','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>Program Main Image:</strong>
                {!! Form::text('main_image', null, array('placeholder' => 'Main Image Url','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="form-group">
                <strong>Program Price From:</strong>
                {!! Form::number('price', null, array('placeholder' => 'Price','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="form-group">
                <strong>Program Start Day:</strong>
                {!! Form::date('start_day', null, array('placeholder' => 'start_day','class' => 'form-control')) !!}
            </div>
        </div>
 
        <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="form-group">
                <strong>Program duration 1:</strong>
                {!! Form::text('days_1', null, array('placeholder' => ' duration 1','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="form-group">
                <strong>Program duration 2:</strong>
                {!! Form::text('days_2', null, array('placeholder' => ' duration 2','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Program Small Brief:</strong>
                {!! Form::text('small_brief', null, array('placeholder' => 'Small Brief','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>include:</strong>
                {!! Form::textarea('include', null, array('placeholder' => 'sperate your include by comma','class' => 'noSummernote form-control ','style'=>'height:100px')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>exclude:</strong>
                {!! Form::textarea('exclude', null, array('placeholder' => 'sperate your exclude by comma','class' => 'noSummernote form-control ','style'=>'height:100px')) !!}
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
                <strong>facilitis:</strong>
                 {!! Form::textarea('facilitis', null, array('placeholder' => 'sperate your facilitis by comma','class' => ' form-control noSummernote', 'style'=>'height:100px')) !!}                
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>General:</strong>
                 {!! Form::textarea('general', null, array('placeholder' => 'general','class' => ' form-control', 'style'=>'height:100px')) !!}                
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

                <div id="items">
                    <strong>Program Image Gallery: </strong>
                      
                        @foreach(unserialize($program->image_gallery ) as $img)
                        <div class="from-group">
                         <input type="url" name="image_gallery[]" value="{{$img}}" class="form-control mb-3 mt-3">
                        <button type="button" class="remove_this_filed">Remove</button>
                        </div>
                      @endforeach
                   
                   
                </div>
                <button type="button" class="add_field_button">Add New Image</button>
         </div>
           <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>Place 1 :</strong>
                {!! Form::text('place_1', null, array('placeholder' => 'place 1 ','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>Place 2 :</strong>
                {!! Form::text('place_2', null, array('placeholder' => 'place 2 ','class' => 'form-control')) !!}
            </div>
        </div>
      
        
            <div class="col-xs-12 col-sm-12 col-md-12" id="itinerary" > 

            @if(!empty(unserialize($program->itinerary_heading_1) ) && !empty(unserialize($program->itinerary_body_1) ))
                @foreach(array_combine(unserialize($program->itinerary_heading_1), unserialize($program->itinerary_body_1))  as $b => $h  ) 
                <div class="itinerary">
                        <div class="form-group">
                            <strong>Itinerary Heading:</strong> 
                            <input name="itinerary_heading_1[]" type="text" class="form-control itinerary_h"  value="{{$b}}">               
                        </div>
                        <div class="form-group">
                            <strong>itinerary Body:</strong>
                            <textarea  name="itinerary_body_1[]" class="form-control" style="height:100px">{{$h}}</textarea>               
                        </div>
                        <button type="button" class="remove_this_filed">remove</button>
                    </div>
            
            @endforeach
           @endif
          
        </div>
        <button type="button" class="add_itinerary_button">Add another Itinerary 2</button> 


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong><hr style="border:1px solid #000"> </strong>
            </div>
        </div>
<br>
       

        <div class="col-xs-12 col-sm-12 col-md-12" id="itinerary_2" > 
            @if(!empty(unserialize($program->itinerary_heading_2) ) && !empty(unserialize($program->itinerary_body_2) ))
                @foreach(array_combine(unserialize($program->itinerary_heading_2), unserialize($program->itinerary_body_2))  as $b => $h  ) 
                <div class="itinerary">
                        <div class="form-group">
                            <strong>Itinerary Heading:</strong> 
                            <input name="itinerary_heading_2[]" type="text" class="form-control itinerary_h"  value="{{$b}}">               
                        </div>
                        <div class="form-group">
                            <strong>itinerary Body:</strong>
                            <textarea name="itinerary_body_2[]" class="form-control" style="height:100px">{{$h}}</textarea>               
                        </div>
                        <button type="button" class="remove_this_filed">remove</button>
                    </div>
            
            @endforeach
           @endif

        </div>
        <button type="button" class="add_itinerary_button_2">Add another Itinerary </button> 

      <!-- intanery 2-->
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Pricing:</strong>
                 {!! Form::textarea('pricing', null, array('placeholder' => 'Pricing','class' => 'form-control noSummernote','style'=>'height:100px')) !!}  
                 <button class="remove_this_filed" type="button">remove</button>               
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Related Programs:</strong>
                <select class="form-control" name="related_programs_id[]" multiple= 'multiple'>
                      @foreach($river_excursions->where('id' ,'!==' , $program->id) as $p)
                             <option value="{{ $p->id}}" 
                             @foreach($related_programs_collection as  $program_from_releated)
                              @foreach($programs->where('id' , $program_from_releated->related_id) as $program_from_related_programs )
                                         @if($program_from_related_programs->id === $p->id)

                                           {{'selected'}}
                                         @endif
                              @endforeach
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
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Small Group:</strong>
                     <input type="checkbox" name="small_group" value="1" {{$program->small_group  == 1 ? 'checked' : ''}} >
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