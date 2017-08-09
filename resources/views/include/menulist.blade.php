<ul class="{{ $nav_classes }}">
    @if(Auth::guest())
        {{ Html::appNavLink('login', 'Einloggen', [], 0, true) }}
    @else
        {{ Html::appNavLink('home', 'Startseite') }}
        {{ Html::appNavLink('users.index', 'Mitglieder verwalten') }}
        {{ Html::appNavLink('tactics.reports.overview', 'Mitgliederübersicht') }}
        {{ Html::appNavLink('tactics.vehicles.index', 'Fahrzeuge') }}
        {{ Html::appNavLink('tactics.qualifications.index', 'Qualifikationen') }}
        {{ Html::appNavLink('tactics.tactical_qualifications.index', 'Takt. Qualifikationen') }}
        {{ Html::appNavLink('tactics.driver_licenses.index', 'Führerscheinklassen') }}
        {{ Html::appNavLink('login.logout', 'Ausloggen') }}
    @endif
</ul>