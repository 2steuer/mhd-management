@extends('main')

@section('title', 'Personen')
@section('page_title', 'Personen verwalten')

@section('content')
    <table class="table">
        <tr>
            <th>Nachname</th>
            <th>Vorname</th>
            <th>E-Mail</th>
            <th>Login</th>
            <th>Funktionen</th>
        </tr>

        @foreach($users as $user)
        <tr>
            <td>{{ $user->last_name }}</td>
            <td>{{ $user->first_name }}</td>
            <td>{{ $user->email }}</td>
            <td>
                @if($user->can_login)
                    <span class="glyphicon glyphicon-ok"></span>

                    @if($user->admin)
                    <span class="glyphicon glyphicon-eye-open"></span>
                    @endif
                @endif
            </td>
            <td>
                <a class="btn btn-default" href="{{ route('users.edit', $user->id) }}"><span class="glyphicon glyphicon-edit"></span></a>
                <a class="btn btn-default" href="{{ route('users.edit', $user->id) }}"><span class="glyphicon glyphicon-remove"></span></a>
            </td>
        </tr>
        @endforeach
    </table>
@endsection
