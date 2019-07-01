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
  <!-- tostr notifaction -->
  <link href="{{asset('build/css/toastr.css')}}" rel="stylesheet">
  <!-- include summernote css/js -->
 <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">
<!-- Custom Theme Style -->
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

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>

<script>
$( document ).ready(function() {
    $('#add').click(function(event){
      event.preventDefault();
    $('#image_gallery_add')
    .append('<input type="url" class="form-control col-md-12 col-xs-12 mb-3 mt-3" name="iamge_gallery[]">');
    });
    

function add_new_componente(w,b,a){

var max_fields = 50; //maximum input boxes allowed
var x = 1; //initlal text box count
$(b).click(function(e){ //on add input button click
e.preventDefault();
if(x < max_fields){ //max input box allowed
x++; //text box increment
$(w).append(a); //add input box
}

});
$(w).on("click",".remove_field", function(e){ //user click on remove field
e.preventDefault(); $(this).parent('div').remove(); x--;
});


}
 
var w =  $("#items");
var b =  $(".add_field_button");

var a = '<div class="form-group"><label for="title">Image:</label><input class="form-control col-md-11"  type="text" name="image_gallery[]"/><a href="#" class="remove_field"><i class="fa fa-times"></a></div>';

add_new_componente(w,b,a);

var intery =  $("#itinerary");
var btn =  $(".add_itinerary_button");

var append_item = "<div id='itinerary'><div class='form-group'><strong>Itinerary Heading:</strong><input type='text' class='form-control itinerary_h' name='itinerary_heading[]'><strong>Body</strong><textarea  name='itinerary[]' class='form-control' style='height:100px'></textarea></div> <a href='#' class='remove_field'><i class='fa fa-times'></a></div></div>";

add_new_componente(intery,btn,append_item);

});

</script>
 
   
    <!-- Bootstrap -->
    <script src="{{asset('vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>

    <script src="https://cdn.jsdelivr.net/npm/clipboard@1/dist/clipboard.min.js"></script>

  <!--  <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.7.1/clipboard.min.js"></script>-->

  <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.js"></script>
   
<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>
<script src="{{asset('build/js/toastr.js')}}"></script>
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