@extends('layouts.app')

@section('title', 'Add User')

@section('content')
    <h1>Add User</h1>
    <form class="form-card" method="POST" action="{{ route('users.store') }}">
        @csrf
        @include('users.form')
        <div class="actions"><button class="button" type="submit">Save User</button><a class="button secondary" href="{{ route('users.index') }}">Cancel</a></div>
    </form>
@endsection
