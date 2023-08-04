@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Sport Shoe</h2>
    <form action="{{ route('sportshoes.update', $sportShoe->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="brand">Brand</label>
            <input type="text" class="form-control" id="brand" name="brand" value="{{ $sportShoe->brand }}" required>
        </div>
        <!-- Other input fields for model, size, color, and mileage -->
        <button type="submit" class="btn btn-primary">Update Shoe</button>
    </form>
</div>
@endsection
