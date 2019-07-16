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
                            <input name="email" type="email" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-2 col-xs-12">
                        <label>Mobile *</label>
                        <div class="form-group label-floating">
                            <div id="Arrival2">
                                    <input name="Mobile" value="" type="number" class="form-control"
                                        placeholder="" required="">
                            </div>
                        </div>
                    </div>
                                                        
                <div class="col-md-2 col-xs-12">
                        <label>	Nationality *</label>
                    <div class="form-group label-floating">
                            <div id="Arrival2">
                                    <input name="Nationality" value="" type="text" class="form-control"
                                            required="">
                            </div>
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
                <label>Dates are flexible*</label>
                <div class="form-group label-floating">
                    <div id="Arrival2">
                       <select class="form-control">
                           <option>yes</option>
                           <option>no</option>
                       </select>
                    </div>
                    
                </div>
            </div>
            <div class="col-md-4 col-xs-12">
                <label>Trip duration (1 to 20) Days</label>
                <div class="form-group label-floating">
                    <div id="Arrival2">
                    <input name="Trip_duration" value="" type="number" class="form-control"required="" pattern="{1,20}">
                    </div>
                    
                </div>
            </div>

             <div class="col-md-2 col-xs-12">
                <label> Number Of Adults </label>
                <br>
                <div class="form-group label-floating is-empty">
                    <input name="adults"  type="number" class="form-control">
                </div>
            </div>
            <div class="col-md-2 col-xs-12">
                <label> Number Of infants </label>
                <br>
                <div class="form-group label-floating is-empty">
                    <input name="infants"  type="number" class="form-control">
                </div>
            </div>
            <div class="col-md-4 col-xs-12">
                <label>Type category *</label>
                <div class="form-group label-floating">
                    <div id="Arrival2">
                       <select class="form-control">
                           <option>budget</option>
                           <option>Classical</option>
                           <option>Luxury</option>
                           <option>Adventure</option>

                       </select>
                    </div>
                    
                </div>
            </div>
            <div class="col-md-4 col-xs-12">
                <label>Domestic transportation *</label>
                <div class="form-group label-floating">
                    <div id="Arrival2">
                       <select class="form-control">
                           <option>Flight</option>
                           <option>sleeper train</option>
                           <option>Coach</option>
                       </select>
                    </div> 
                </div>
            </div>
            <div class="col-md-4 col-xs-12">
                <label>Cities of interest*</label>
                <div class="form-group label-floating">
                    <div id="Arrival2">
                       <select class="form-control">
                           <option>Alex</option>
                           <option>Cairo</option>
                           <option>Aswan</option>
                           <option>Sharm</option>
                           <option>Luxor</option>
                           <option>Hurghada</option>
                           <option>Dahab</option>
                           <option>Oasis</option>

                       </select>
                    </div>
                    
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

