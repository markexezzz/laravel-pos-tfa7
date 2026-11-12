@extends('layouts.app')

@section('title', 'Edit Customer')

@section('content')
    <h1>Edit Customer</h1>
    <form class="form-card" method="POST" action="{{ route('customers.update', $customer) }}">
        @csrf
        @method('PATCH')
        @include('customers.form')
        <div class="actions"><button class="button" type="submit">Update Customer</button><a class="button secondary" href="{{ route('customers.index') }}">Cancel</a></div>
    </form>
@endsection
