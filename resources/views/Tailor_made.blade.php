@extends('layouts.front')

@section('content')

<div id="sub_category_top" class="home_sites_box" style="background-image: url('images/plan.jpg');
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
<form id="build_form" method="post" action="/Egypt/reservation_forms/requests/mail/" novalidate="novalidate">    
    <div class="container">
        <div class="row">
           <div class="col-md-3 col-xs-12">
                <label>Your Name </label>
                <br>
                <div class="form-group label-floating is-empty">
                    <input name="name" value="" type="text" class="form-control">
               </div>
           </div>
            <div class="col-md-3 col-xs-12">
                <label> Your Email </label>
                <br>
                <div class="form-group label-floating is-empty">
                    <input name="email" value="" type="text" class="form-control">
                </div>
            </div>
            <div class="col-md-3 col-xs-12">
                <label> Departure date </label>
                <br>
                <div class="form-group label-floating is-empty">
                    <input name="departure_date" value="" type="text" id="datepicker" class="datepicker form-control" placeholder="dd/mm/yyy *">
                </div>
            </div>
            <div class="col-md-3 col-xs-12">
                <label> Number Of Adults </label>
                <br>
                <div class="form-group label-floating is-empty">
                    <input name="number" value="" type="text" class="form-control">
                </div>
            </div>
        </div>
    </div>
</form>
</div>
<br><br><br><br><br><br><br><br>
@endsection

