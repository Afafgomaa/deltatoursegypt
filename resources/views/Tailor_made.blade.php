@extends('layouts.front')

@section('content')

<div id="sub_category_top" class="home_sites_box" style="background-image: url('{{url('/')}}/public/images/plan.jpg');
height: 360px;background-repeat: no-repeat;background-size:cover">
</div>
 <div class="home-intro" id="home-intro">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <p>
                     Custumized Egypt Holidays .
                    <span>Our long history enabled us to arrange all type of Egypt Holiday packages ,
                         Kindly fill the form below to enable us to customize your holiday to Egypt according to your needs . .</span>
                </p>
            </div>
        </div>
    </div>
</div>
<div class="container">
<form id="build_form" method="post" action="{{route('mail')}}">  
   @csrf
    <div class="container">
        <div class="row">
           <div class="col-md-4 col-xs-12">
                <label>Your Name </label>
                <br>
                <div class="form-group label-floating is-empty">
                    <input name="name" type="text" class="form-control" required>
               </div>
           </div>
            <div class="col-md-4 col-xs-12">
                <label> Your Email </label>
                <br>
                <div class="form-group label-floating is-empty">
                    <input name="email" type="text" class="form-control" required>
                </div>
            </div>

            <div class="col-md-2 col-xs-12">
                <label>Arrival Date *</label>
                <div class="form-group label-floating">
                    <div id="Arrival2">
                        <input name="arrivel" type="text" class="form-control datepicker"
                          placeholder=" dd/mm/yyy " required>
                        <button type="button" class="ui-datepicker-trigger" >
                        <i class="fa fa-calendar-alt"></i></button>
                    </div>
                    
                </div>
            </div>
            <div class="col-md-2 col-xs-12">
                <label>Departure Date *</label>
                <div class="form-group label-floating">
                    <div id="Arrival2">
                        <input name="departure"  type="text" class="form-control datepicker"
                         placeholder=" dd/mm/yyy " required>
                        <button type="button" class="ui-datepicker-trigger">
                        <i class="fa fa-calendar-alt"></i></button>
                    </div>
                    
                </div>
            </div>

             <div class="col-md-4 col-xs-12">
                <label> Number Of Adults </label>
                <br>
                <div class="form-group label-floating is-empty">
                    <input name="adults"  type="number" class="form-control">
                </div>
            </div>


            <div class="col-md-4 col-xs-12">
                <label>Style </label>
                <br>
                <div class="form-group label-floating is-empty">
                    <select name="style" class="form-control" required>
                        <option selected disabled>Select Your Style</option>
                        <option value="private">Private</option>
                        <option value="public">Public</option>
                    </select>
                </div>
            </div>

            <div class="col-md-4 col-xs-12">
                <label> Promo/Referral Code </label>
                <br>
                <div class="form-group label-floating is-empty">
                    <input name="Promo_Referral_code"  type="text" class="form-control">
                </div>
            </div>

             <div class="col-md-12 col-xs-12">
                <label> Comments (Special)</label>
                <br>
                <div class="form-group label-floating is-empty">
                  <textarea name="comment" class="form-control" cols="4" rows="5"></textarea>
                </div>
            </div>
            <div class="col-md-12">
                <button type="submit" class="new_btn_inquire" id="SubmitButton">
                            Send Message  
                </button>
            </div>
        </div>
    </div>

</form>
</div>
<br><br><br><br><br><br><br><br>
@endsection

