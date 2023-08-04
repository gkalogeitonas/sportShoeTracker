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
                    <td>
                        <a href="{{ route('sportshoes.show', $sportShoe->id) }}" class="btn btn-primary">View</a>
                        <a href="{{ route('sportshoes.edit', $sportShoe->id) }}" class="btn btn-secondary">Edit</a>
                        <a href="{{ route('sportshoes.destroy', $sportShoe->id) }}" class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $sportShoe->id }}').submit();">Delete</a>
                        <form id="delete-form-{{ $sportShoe->id }}" action="{{ route('sportshoes.destroy', $sportShoe->id) }}" method="POST" style="display: none;">
                            @csrf
                            @method('DELETE')
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
