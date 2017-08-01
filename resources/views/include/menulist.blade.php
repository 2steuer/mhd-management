<ul class="{{ $nav_classes }}">
    @if(Auth::guest())
        {{ Html::appNavLink('login', 'Einloggen', [], 0, true) }}
    @else
        {{ Html::appNavLink('home', 'Startseite') }}
        {{ Html::appNavLink('reports.overview', 'Mitgliederübersicht') }}
        {{ Html::appNavLink('users.index', 'Mitglieder verwalten') }}
        {{ Html::appNavLink('vehicles.index', 'Fahrzeuge') }}
        {{ Html::appNavLink('qualifications.index', 'Qualifikationen') }}
        {{ Html::appNavLink('tactical_qualifications.index', 'Takt. Qualifikationen') }}
        {{ Html::appNavLink('driver_licenses.index', 'Führerscheinklassen') }}
        {{ Html::appNavLink('login.logout', 'Ausloggen') }}
    @endif
</ul>