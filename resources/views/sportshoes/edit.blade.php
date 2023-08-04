@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Sport Shoe</h2>
    <form action="{{ route('sportshoes.update', $sportshoe->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="brand">Brand</label>
            <input type="text" class="form-control" id="brand" name="brand" value="{{ $sportshoe->brand }}" required>
        </div>
        <div class="form-group">
            <label for="model">Model</label>
            <input type="text" class="form-control" id="model" name="model" value="{{ $sportshoe->model }}" required>
        </div>
        <div class="form-group">
            <label for="size">Size</label>
            <input type="number" class="form-control" id="size" name="size" value="{{ $sportshoe->size }}" required>
        </div>
        <div class="form-group">
            <label for="color">Color</label>
            <input type="text" class="form-control" id="color" name="color" value="{{ $sportshoe->color }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Shoe</button>
    </form>
</div>
@endsection
