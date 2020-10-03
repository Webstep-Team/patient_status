@extends('master')

@section('title')
    analysis
@endsection

@section('content')
<div class="card">
<div class=" card-header">
    <h1>analysis</h1>
</div>
<div class=" card-body">
<table class=" table table-hover table-striped">
<thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Reciever</th>
        <th>cost</th>
        <th colspan="2" style="display: flex; justify-content:center">
            <a href="{{ route('patients.analysis.create',$patient->id) }}" class="btn btn-primary ">Add analysis</a>
        </th>
    </tr>
</thead>
<tbody>
@forelse ($analyzis as $analys)
    <tr>
        <td>{{ $analys->id }}</td>
        <td>
            <a href="{{ route('patients.analys.show',[$patient->id,$analys->id]) }}">
                {{ $analys->name }}
            </a>
            </td>
        <td>{{ $analys->receiver }}</td>
        <td>{{ $analys->cost }}</td>

        <td><a href="{{ route('patients.analys.edit',[$patient->id,$analys->id]) }}" class="btn btn-primary">Edit</a></td>
        <td>
            <form action="{{ route('patients.analys.destroy',[$patient->id,$analysis->id]) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            </td>
    </tr>
@empty
    <tr>
        <th colspan="7" class=" text-danger text-bold text-center" style="font-size: larger">
            NO analysis Yet
        </th>
    </tr>
@endforelse
</tbody>
</table>
</div>
</div>
    <div style="display: flex; justify-content:center">
        {{ $analyzis->links() }}
    </div>

@endsection
