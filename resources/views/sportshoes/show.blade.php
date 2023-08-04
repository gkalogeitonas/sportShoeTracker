@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Sport Shoe Details</h2>
    <ul>
        <li><strong>Brand:</strong> {{ $sportshoe->brand }}</li>
        <li><strong>Model:</strong> {{ $sportshoe->model }}</li>
        <li><strong>Size:</strong> {{ $sportshoe->size }}</li>
        <li><strong>Color:</strong> {{ $sportshoe->color }}</li>
        <li><strong>Mileage:</strong> {{ $sportshoe->mileage }}</li>
    </ul>

    <!-- Edit Link -->
    <a href="{{ route('sportshoes.edit', $sportshoe->id) }}" class="btn btn-primary">Edit</a>

    <!-- Delete Button Form -->
    <form action="{{ route('sportshoes.destroy', $sportshoe->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
</div>
@endsection
