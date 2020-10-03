@extends('master')

@section('title')
    analizis
@endsection

@section('content')
<div class="card">
<div class=" card-header">
    <h1>{{ $patient->name }}</h1>
</div>
<div class=" card-body">
<table class=" table table-hover table-striped">

    <tr>
        <th>ID</th>
        <td>{{ $analys->id }}</td>
    </tr>
    <tr>
        <th>Name</th>
        <td>{{ $analys->name }}</td>
    </tr>
    <tr>
        <th>receiver</th>
        <td>{{ $analys->receiver }}</td>
    </tr>

    <tr>
        <th>cost</th>
        <td>{{ $analys->cost }}</td>
    </tr>


<tr>
    {{--  <td><a href="{{ route('patients.analysis.edit',[$patient->id,$analys->id]) }}" class="btn btn-primary">Edit</a></td>
    <td>  --}}
        {{--  <form action="{{ route('patients.analysis.destroy',[$patient->id,$analys->id]) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
        </td>  --}}
</tr>

</table>
</div>
</div>


@endsection
