<fieldset class="form-group">
    <legend>Allg. Daten</legend>

    {{ Form::appText('last_name', 'Nachname') }}

    {{ Form::appText('first_name', 'Vorname') }}

    {{ Form::appEmail('email', 'E-Mail') }}

    {{ Form::appText('phone_number', 'Telefon (Hauptnummer)',  $model != null ? $model->default_phone()->number : '') }}
</fieldset>

<fieldset class="form-group">
    <legend>Taktik</legend>

    {{ Form::appText('comment', 'Kommentar') }}

    {{ Form::appSelect('qualification_id', 'Qualifikation', \App\Model\Tactics\Qualification::orderBy('rank')->pluck('name', 'id')) }}

    {{ Form::appSelect('tactical_qualification_id', 'Takt. Qualifikation', \App\Model\Tactics\TacticalQualification::orderBy('rank')->pluck('name', 'id')) }}

    {{ Form::appSelect('driver_license_id', 'Führerscheinklasse', \App\Model\Tactics\DriverLicense::orderBy('rank')->pluck('name', 'id')) }}

    {{ Form::appCheckboxList('selected_vehicles', 'Zugelassene Fahrzeuge', \App\Model\Tactics\Vehicle::orderBy('rank')->pluck('name', 'id'),
                                                                          $model != null ? $model->vehicles()->pluck('id')->toArray() : []) }}
</fieldset>

@if(\Illuminate\Support\Facades\Auth::getUser()->admin)
    <fieldset class="form-group">
        <legend>Login</legend>
            {{ Form::appPassword('password', 'Passwort') }}

            {{ Form::appCheckbox('can_login', 'Login möglich?') }}

            {{ Form::appCheckbox('admin', 'Admin?') }}
    </fieldset>
@endif
