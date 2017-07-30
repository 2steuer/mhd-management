<ul class="{{ $nav_classes }}">
    @if(Auth::guest())
        {{ Html::appNavLink('login', 'Einloggen', [], 0, true) }}
    @else
        {{ Html::appNavLink('home', 'Startseite') }}
        {{ Html::appNavLink('users.index', 'Mitglieder') }}
        {{ Html::appNavLink('vehicles.index', 'Fahrzeuge') }}
        {{ Html::appNavLink('qualifications.index', 'Qualifikationen') }}
        {{ Html::appNavLink('driver_licenses.index', 'Führerscheinklassen') }}
        {{ Html::appNavLink('login.logout', 'Ausloggen') }}
    @endif
</ul>