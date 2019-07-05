<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="{{url('/')}}/public/images/favicon.ico" type="image/ico" />

    <title>Admin | deltatoursegypt</title>

    <!-- Bootstrap -->
   <link href="{{url('/')}}/public//vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
   <link href="{{url('/')}}/public//vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- tostr notifaction -->
  <link href="{{url('/')}}/public/build/css/toastr.css" rel="stylesheet">
  <!-- include summernote css/js -->
 <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">


<!-- Custom Theme Style -->
<link href="{{url('/')}}/public/build/css/custom.min.css" rel="stylesheet">


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

    <!-- Bootstrap -->
    <script src="{{url('/')}}/public/vendors/bootstrap/dist/js/bootstrap.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/clipboard@1/dist/clipboard.min.js"></script>

  <!--  <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.7.1/clipboard.min.js"></script>-->

  <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.js"></script>
   
<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>


<script src="{{url('/')}}/public/build/js/toastr.js"></script>
 <!-- Custom Theme Scripts -->

 <script src="{{url('/')}}/public/build/js/custom.min.js"></script>
 
<script>
 @if(Session::has('success'))
// toastr notifaction libiaray
toastr.success('{{Session::get("success")}}');

@endif
  // summer not libiaray 
  $("textarea").summernote({
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

 $("[multiple = 'multiple']").selectpicker(); 
 
 <script src="{{url('/')}}/public/build/js/back.js"></script>  

new Clipboard('.copy');
</script>
  </body>
</html>