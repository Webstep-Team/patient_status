@extends('master')

@section('title')
    patients
@endsection

@section('content')
<div class="card">
<div class=" card-header">
    <h1>patients</h1>
</div>
<div class=" card-body">
<table class=" table table-hover table-striped">
<thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Age</th>
        <th>Phone</th>
        <th>Hospital </th>
        <th colspan="2" style="display: flex; justify-content:center">
            <a href="{{ route('patients.create') }}" class="btn btn-primary ">Add patient</a>
        </th>
    </tr>
</thead>
<tbody>
@forelse ($patients as $patient)
    <tr>
        <td>{{ $patient->id }}</td>
        <td>
            <a href="{{ route('patients.show',$patient->id) }}">
                {{ $patient->name }}
            </a>
            </td>
        <td>{{ $patient->age }}</td>
        <td>{{ $patient->phone }}</td>
        <td>{{ $patient->hospital }}</td>

        <td><a href="{{ route('patients.edit',[$patient->id]) }}" class="btn btn-primary">Edit</a></td>
        <td>
            <form action="{{ route('patients.destroy',$patient->id) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            </td>
    </tr>
@empty
    <tr>
        <th colspan="7" class=" text-danger text-bold text-center" style="font-size: larger">
            NO patients Yet
        </th>
    </tr>
@endforelse
</tbody>
</table>
</div>
</div>
    <div style="display: flex; justify-content:center">
        {{ $patients->links() }}
    </div>

@endsection
