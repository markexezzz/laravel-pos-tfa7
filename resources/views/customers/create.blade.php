@extends('layouts.app')

@section('title', 'Add Customer')

@section('content')
    <h1>Add Customer</h1>
    <form class="form-card" method="POST" action="{{ route('customers.store') }}">
        @csrf
        @include('customers.form')
        <div class="actions"><button class="button" type="submit">Save Customer</button><a class="button secondary" href="{{ route('customers.index') }}">Cancel</a></div>
    </form>
@endsection
