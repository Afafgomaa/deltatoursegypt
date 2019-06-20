


Hello Delta Toures,

My name is {{$data->name}}

Email : {{$data->email}}

i want to make reservation 

From : {{$data->arrivel}}

To : {{$data->departure}}

Tour Type Is : {{$data->style}}

@if($data->adults)
 Number Of adults is {{$data->adults}}
@endif 

@if($data->Promo_Referral_code)
 My Referral Code Is :{{$data->Promo_Referral_code}}
@endif 

@if($data->comment)
 Comment :: {{$data->comment}}
@endif 

