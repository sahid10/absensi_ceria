@extends('template')
@section('content')
    <h1>Item Details</h1>
    <p>Name: {{ $item->name }}</p>
    <p>Quantity: {{ $item->quantity }}</p>
    <p>Category: {{ $item->category }}</p>
    <p>Price: {{ $item->price }}</p>

    <a href="{{ route('inventory.index') }}">Back to list</a>
@endsection
