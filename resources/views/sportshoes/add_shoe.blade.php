@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Add New Sport Shoe</h2>
    <form action="{{ route('sportshoes.add') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="brand">Brand</label>
            <input type="text" class="form-control" id="brand" name="brand" required>
        </div>
        <div class="form-group">
            <label for="model">Model</label>
            <input type="text" class="form-control" id="model" name="model" required>
        </div>
        <div class="form-group">
            <label for="size">Size</label>
            <input type="number" class="form-control" id="size" name="size" required>
        </div>
        <div class="form-group">
            <label for="color">Color</label>
            <input type="text" class="form-control" id="color" name="color" required>
        </div>
        <button type="submit" class="btn btn-primary">Add Shoe</button>
    </form>
</div>
@endsection
