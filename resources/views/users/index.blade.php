@extends('layouts.app')

@section('title', 'Users')

@section('content')
    <div class="page-head"><h1>Users</h1><a class="button" href="{{ route('users.create') }}">Add User</a></div>

    @if ($users->isEmpty())
        <div class="empty">No users found. Run <code>php artisan db:seed</code>.</div>
    @else
        <table>
            <thead>
                <tr><th>Avatar</th><th>ID</th><th>Username</th><th>Full Name</th><th>Action</th></tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>
                            @if ($user->avatar)
                                <img class="avatar" src="{{ asset('storage/' . $user->avatar) }}" alt="{{ $user->full_name }} avatar">
                            @else
                                <span class="avatar-placeholder">{{ strtoupper(substr($user->full_name, 0, 1)) }}</span>
                            @endif
                        </td>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->full_name }}</td>
                        <td><a class="button small secondary" href="{{ route('users.edit', $user) }}">Edit</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
