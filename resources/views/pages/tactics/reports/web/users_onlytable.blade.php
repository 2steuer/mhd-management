<!DOCTYPE html>
<html>
<head>
    <base href="{{ env('APP_URL') }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Mitgliederübersicht &raquo; {{ env('APP_NAME') }}</title>

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap-colorpicker.min.css" />
    <link rel="stylesheet" type="text/css" href="{{ route('tactics.reports.stylesheet') }}" />
</head>
<body>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/less.min.js"></script>
<script src="js/bootstrap-colorpicker.min.js"></script>

@include('pages.tactics.reports.includes.table', ['users' => $users, 'vehicles' => $vehicles, 'checkboxes' => false])

</body>
</html>