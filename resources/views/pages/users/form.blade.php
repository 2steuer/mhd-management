{{ Form::appText('last_name', 'Nachname') }}

{{ Form::appText('first_name', 'Vorname') }}

{{ Form::appEmail('email', 'E-Mail') }}

{{ Form::appText('phone_number', 'Telefon',  $model != null ? $model->default_phone()->number : '') }}

{{ Form::appTextarea('comment', 'Kommentar') }}

@if(\Illuminate\Support\Facades\Auth::getUser()->admin)
{{ Form::appPassword('password', 'Passwort') }}

{{ Form::appCheckbox('can_login', 'Login möglich?') }}

{{ Form::appCheckbox('admin', 'Admin?') }}
@endif