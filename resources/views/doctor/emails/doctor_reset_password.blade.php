@component('mail::message')
# Reset Account
Welcome {{ $data['data']->name }} <br>

@component('mail::button', ['url' => durl('reset/password/'.$data['token'])])
Click Here To Reset Your Password
@endcomponent
Or <br>
copy this link
<a href="{{ durl('reset/password/'.$data['token']) }}">{{ durl('reset/password/'.$data['token']) }}</a>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
