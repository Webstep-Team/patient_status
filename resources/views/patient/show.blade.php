@extends('master')

@section('title')
    patients
@endsection

@section('content')
<div class="card">
<div class=" card-header" style="display: flex;justify-content:space-between;align-items:center">
    <h1>{{ $patient->name }}</h1>
    <a href="{{ route('patients.analysis.create',$patient->id) }}" class=" btn btn-primary">add analysis</a>
</div>
<div class=" card-body">
<table class=" table table-hover table-striped">
    <tr>
        <th>ID</th>
        <td>{{ $patient->id }}</td>
    </tr>
    <tr>
        <th>Age</th>
        <td>{{ $patient->age }}</td>
    </tr>

    <tr>
        <th>Phone</th>
        <td>{{ $patient->phone }}</td>
    </tr>

    <tr>
        <th>Hospital</th>
        <td>{{ $patient->hospital }}</td>
    </tr>
<tr>
    <td><a href="{{ route('patients.edit',[$patient->id]) }}" class="btn btn-primary">Edit</a></td>
    <td>
        <form action="{{ route('patients.destroy',$patient->id) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
        </td>
</tr>

</table>
</div>
</div>


@endsection
