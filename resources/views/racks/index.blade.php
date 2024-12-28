@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Racks Management</h1>
    <a href="{{ route('racks.create') }}" class="btn btn-primary mb-3">Add New Rack</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Code</th>
                <th>Position</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($racks as $rack)
            <tr>
                <td>{{ $rack->id }}</td>
                <td>{{ $rack->code }}</td>
                <td>{{ $rack->position }}</td>
                <td>
                    <a href="{{ route('racks.edit', $rack->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('racks.destroy', $rack->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection