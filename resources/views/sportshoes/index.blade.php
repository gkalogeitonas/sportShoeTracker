@extends('layouts.app')

@section('content')
<div class="container">
    <h2>List of Sport Shoes</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Brand</th>
                <th>Model</th>
                <th>Size</th>
                <th>Color</th>
                <th>Mileage (in kilometers)</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sportShoes as $sportShoe)
                <tr>
                    <td>{{ $sportShoe->brand }}</td>
                    <td>{{ $sportShoe->model }}</td>
                    <td>{{ $sportShoe->size }}</td>
                    <td>{{ $sportShoe->color }}</td>
                    <td>{{ $sportShoe->mileage }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
