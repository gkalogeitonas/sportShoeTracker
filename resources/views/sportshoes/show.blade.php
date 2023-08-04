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
</div>
@endsection
