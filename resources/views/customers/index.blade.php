@extends('layouts.app')

@section('title', 'Customers')

@section('content')
    <div class="page-head"><h1>Customers</h1><a class="button" href="{{ route('customers.create') }}">Add Customer</a></div>

    @if ($customers->isEmpty())
        <div class="empty">No customers found. Run <code>php artisan db:seed</code>.</div>
    @else
        <table>
            <thead>
                <tr><th>ID</th><th>Full Name</th><th>Email</th><th>Phone</th><th>Action</th></tr>
            </thead>
            <tbody>
                @foreach ($customers as $customer)
                    <tr>
                        <td>{{ $customer->id }}</td>
                        <td>{{ $customer->full_name }}</td>
                        <td>{{ $customer->email }}</td>
                        <td>{{ $customer->phone ?: '—' }}</td>
                        <td><a class="button small secondary" href="{{ route('customers.edit', $customer) }}">Edit</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
