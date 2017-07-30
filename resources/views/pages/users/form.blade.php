{{ Form::appText('last_name', 'Nachname') }}

{{ Form::appText('first_name', 'Vorname') }}

{{ Form::appEmail('email', 'E-Mail') }}

{{ Form::appText('phone_number', 'Telefon',  $model != null ? $model->default_phone()->number : '') }}

{{ Form::appSelect('qualification_id', 'Qualifikation', \App\Qualification::orderBy('rank')->pluck('name', 'id')) }}

{{ Form::appSelect('driver_license_id', 'Führerscheinklasse', \App\DriverLicense::orderBy('rank')->pluck('name', 'id')) }}

{{ Form::appCheckboxList('selected_vehicles', 'Zugelassene Fahrzeuge', \App\Vehicle::orderBy('rank')->pluck('name', 'id'),
                                                                        $model->vehicles()->pluck('id')->toArray()) }}

{{ Form::appTextarea('comment', 'Kommentar') }}

@if(\Illuminate\Support\Facades\Auth::getUser()->admin)
{{ Form::appPassword('password', 'Passwort') }}

{{ Form::appCheckbox('can_login', 'Login möglich?') }}

{{ Form::appCheckbox('admin', 'Admin?') }}
@endif