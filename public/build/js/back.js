
$( document ).ready(function() {


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

$('.remove_this_filed').click(function(e){
  e.preventDefault(); $(this).parent('div').remove(); 

});
 
var w =  $("#items");
var b =  $(".add_field_button");

var a = '<div class="form-group"><label for="title">Image:</label><input class="form-control col-md-11" type="text" name="image_gallery[]"/><a href="#" class="remove_field"><i class="fa fa-times"></a></div>';

add_new_componente(w,b,a);

var intery =  $("#itinerary");
var btn =  $(".add_itinerary_button");

var append_item = "<div class='itinerary'><div class='form-group'><strong>Itinerary Heading:</strong><input type='text' class='form-control itinerary_h' name='itinerary_heading[]'></div><div class='form-group'><strong></strong><textarea name='itinerary[]' class='form-control' style='height:100px'></textarea></div> <a href='#' class='remove_field'><i class='fa fa-times'></a></div></div>";

add_new_componente(intery,btn,append_item );




var acco_id =  $("#accommodation");
var acco_b =  $(".add_accommodation");

var acco_a = '<div class="col-md-12 col-sm-12 col-xs-12"><label for="title">Image:</label><input type="url" class="form-control col-md-12 col-xs-12 " name="iamge_gallery[]"><a href="#" class="remove_field"><i class="fa fa-times"></a></div>'

add_new_componente(acco_id,acco_b,acco_a );




});






  

