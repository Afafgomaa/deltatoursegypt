<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Admin | deltatoursegypt</title>

    <!-- Bootstrap -->
    
    <link href="{{asset('/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{asset('vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="{{asset('vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{asset('vendors/jqvmap/dist/jqvmap.min.css')}}" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{asset('vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">

    
  
    <!-- tostr notifaction -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">

    <!-- include summernote css/js -->
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet">
<!-- Custom Theme Style -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">
<link href="{{asset('build/css/custom.min.css')}}" rel="stylesheet">


<style>
.mb-3 {
margin-bottom:10px;
}

.mt-3{
  margin-top:10px;
}
strong{
  color:green;
  font-size:1em;
}

</style>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">

 

    @yield('content')


    </div>
  </div>
<body>




    <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
    	<!-- jQuery -->
      <script>
$( document ).ready(function() {

 
    $('#addnn').click(function(event){
      event.preventDefault();
    $('#image_gallery')
    .append('<div class="col-md-11 col-xs-11"><input type="url" class="form-control mb-3 mt-3" name="image_gallery[]"></div><div class="col-md-1 col-xs-1 mb-3 mt-3"><a id="remove" href="#" class="btn btn-success">-</a></div>');
    });

    $('#add').click(function(event){
      event.preventDefault();
    $('#image_gallery_add')
    .append('<input type="url" class="form-control col-md-12 col-xs-12 mb-3 mt-3" name="iamge_gallery[]">');
    });
    
    $('#addItinerary').click(function(event){
      event.preventDefault();
    $('#itinerary')
    .append("<div class='col-xs-12 col-sm-12 col-md-12'><div class='form-group'><strong>Itinerary Heading:</strong><input type='text' class='form-control itinerary_h' name='itinerary_heading[]'><strong>Body</strong><textarea  name='itinerary[]' class='form-control' style='height:100px'></textarea>   </div> </div>");
    });

   
});

</script>
 
    <script src="{{asset('/vendors/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{asset('vendors/fastclick/lib/fastclick.js')}}"></script>
    <!-- NProgress -->
    <script src="{{asset('vendors/nprogress/nprogress.js')}}"></script>
    <!-- Chart.js -->
    <script src="{{asset('vendors/Chart.js/dist/Chart.min.js')}}"></script>
    <!-- gauge.js -->
    <script src="{{asset('vendors/gauge.js/dist/gauge.min.js')}}"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{asset('vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
    <!-- iCheck -->
    <script src="{{asset('vendors/iCheck/icheck.min.js')}}"></script>
     <!-- Skycons -->
    <script src="{{asset('vendors/skycons/skycons.js')}}"></script>
    <!-- Flot -->
    <script src="{{asset('vendors/Flot/jquery.flot.js')}}"></script>
    <script src="{{asset('vendors/Flot/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('vendors/Flot/jquery.flot.time.js')}}"></script>
    <script src="{{asset('vendors/Flot/jquery.flot.stack.js')}}"></script>
    <script src="{{asset('vendors/Flot/jquery.flot.resize.js')}}"></script>
    <!-- Flot plugins -->
    <script src="{{asset('vendors/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
    <script src="{{asset('vendors/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
    <script src="{{asset('vendors/flot.curvedlines/curvedLines.js')}}"></script>
    <!-- DateJS -->
    <script src="{{asset('vendors/DateJS/build/date.js')}}"></script>
    <!-- JQVMap -->
    <script src="{{asset('vendors/jqvmap/dist/jquery.vmap.js')}}"></script>
    <script src="{{asset('vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
    <script src="{{asset('vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{asset('vendors/moment/min/moment.min.js')}}"></script>
    <script src="{{asset('vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>


    <script src="https://cdn.jsdelivr.net/npm/clipboard@1/dist/clipboard.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.7.1/clipboard.min.js"></script>

    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  

   
   
<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>
 <!-- Custom Theme Scripts -->
 <script src="{{asset('build/js/custom.min.js')}}"></script>

<script>



@if(Session::has('success'))
// toastr notifaction libiaray
toastr.success('{{Session::get("success")}}');

@endif

new Clipboard('.copy');

$("[multiple = 'multiple']").selectpicker();
// summer not libiaray 
$('textarea').summernote({
  height: 200,
  toolbar: [
      // [groume, [list of button]]
      ['style', ['bold', 'italic', 'underline']],
             ['fontsize', ['fontsize']],
      ['color', ['color']],
      ['height', ['height']],
       ['operation', ['undo', 'redo']],
      ['font', ['strikethrough', 'superscript', 'subscript', 'clear']],
      ['para', ['ul', 'ol', 'paragraph']],
      ['object', ['link', 'table', 'picture', 'video']],
      ['misc', [ 'help', 'fullscreen', 'codeview']]
    ]
  
   
 });



  


</script>
  </body>
</html>