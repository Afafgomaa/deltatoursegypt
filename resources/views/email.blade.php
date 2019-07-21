@component('mail::message')
# {{Request()->program_name}}
@component('mail::table')

| Value      | Data         | 
| ------------- |:-------------:|
| {{Request()->name}}    | Name Of Customer | 
| {{Request()->page_name}}   | Page Name | 
| {{Request()->program_name}}  | Program Name | 
| {{Request()->name}}    | Name Of Customer | 
| {{Request()->email}}   | Email| 
| {{Request()->Mobile}}  | Mobile | 
| {{Request()->Country}}    | Nationality | 
| {{Request()->arrivel}}   | Arrival Date | 
| {{Request()->departure}}  | Departure Date | 
| {{Request()->flexible}}    | Dates are flexible ? | 
| {{Request()->Trip_duration}}   | Trip duration | 
| {{Request()->adults}}  |  Number Of Adults | 
| {{Request()->infants}}    | Number Of infants | 
| {{Request()->category}}   | Type category | 
| {{Request()->transportation}}  |  Domestic transportation | 
| {{Request()->child}}    | Number Of Childs All | 
| {{Request()->child0}}    | Number Of Childs (0,2) | 
| {{Request()->child2}}    | Number Of Childs (2,11) | 
| {{Request()->child12}}    | Number Of Childs (+12) | 
| {{Request()->interest}}    | Cities of interest | 
| {{Request()->style}}   | Style  | 
| {{Request()->Addons }}| Addons  | 
| {{Request()->Promo_Referral_code}}  |  Promo/Referral Code |

@component('mail::panel')
Comment : {{Request()->comment}}
@endcomponent

@endcomponent







@component('mail::button', ['url' => url('/')])
Go To Delta
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
