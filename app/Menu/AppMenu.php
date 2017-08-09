<?php
/**
 * Created by PhpStorm.
 * User: merlin.steuer
 * Date: 09.08.2017
 * Time: 15:31
 */

namespace App\Menu;

class AppMenu
{
    public static function getGuestMenu()
    {
        return [
            new MenuItem('login', 'Einloggen')
        ];
    }

    public static function getMenu()
    {
        return [
            new MenuItem('home', 'Startseite'),
            new MenuItem('users.index', 'Mitglieder verwalten'),
            new MenuItem('tactics.reports.overview', 'Taktikboard', [
                new MenuItem('tactics.reports.overview', 'Mitgliederübersicht'),
                new MenuItem('tactics.vehicles.index', 'Fahrzeuge'),
                new MenuItem('tactics.qualifications.index', 'Qualifikationen'),
                new MenuItem('tactics.tactical_qualifications.index', 'Takt. Qualifikationen'),
                new MenuItem('tactics.driver_licenses.index', 'Führerscheinklassen'),
            ]),
            new MenuItem('login.logout', 'Ausloggen')
        ];
    }
}