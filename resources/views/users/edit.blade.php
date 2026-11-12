@extends('layouts.app')

@section('title', 'Edit User')

@section('content')
    <h1>Edit User</h1>
    <form class="form-card" method="POST" action="{{ route('users.update', $user) }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        @include('users.form')
        <label for="avatar">Profile Picture</label>
        <input id="avatar" type="file" name="avatar" accept=".jpg,.jpeg,.png,image/jpeg,image/png">
        <small>Optional JPG or PNG image, maximum 2 MB. It will be cropped to a 300 × 300 thumbnail.</small>
        @error('avatar')<span class="field-error">{{ $message }}</span>@enderror
        <div class="actions"><button class="button" type="submit">Update User</button><a class="button secondary" href="{{ route('users.index') }}">Cancel</a></div>
    </form>
@endsection
