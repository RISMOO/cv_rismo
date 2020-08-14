
@component('mail::message')

![imt](https://www.imt-atlantique.fr/sites/default/files/users/user336/IMT%20Atlantique%20-%203%20campus.png)
# Bonjour

Vous avez reçu un mail de la part de <h2> {{Auth::user()->name}}</h2>

Message :
@foreach ($data as $d)
    {{ $d }}
@endforeach

@component('mail::button', ['url' => '','color'=>'text-primary'])
Button Text
@endcomponent

Merci,<br>
IMT_LABS
@endcomponent
