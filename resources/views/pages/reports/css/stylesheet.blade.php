@media print {
    *, .yes, .no {
        -webkit-print-color-adjust: exact;
    }
}

.quali, .tquali, .license {
    font-weight: bold;
    text-align: center;
}

/* Qualifications */
@foreach(\App\Qualification::all() as $quali)
    {{ Html::stripedCssClass('quali', $quali->id, $quali->color1, $quali->color2, $quali->text_color) }}
@endforeach

/* Tact. Qualifications */
@foreach(\App\TacticalQualification::all() as $tquali)
    {{ Html::stripedCssClass('tquali', $tquali->id, $tquali->color1, $tquali->color2, $tquali->text_color) }}
@endforeach

/* Licenses */
.license {
    font-weight: bold;
}
@foreach(\App\DriverLicense::all() as $license)
    {{ Html::stripedCssClass('license', $license->id, $license->color1, $license->color2, $license->text_color) }}
@endforeach

/* vehicle existence */
.centered {
    text-align: center;
}
.yes {
    background: repeating-linear-gradient(
        #00FF00 0%,
        #00FF00 100%
    ) !important;
}

.no {
    background: repeating-linear-gradient(
        #FF7733 0%,
        #FF7733 100%
    ) !important;
}

span {
    background: transparent;
}