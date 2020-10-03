@extends('master')
@section('title')
    Add patient
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
<h1>Add patient
</h1>        </div>
    <div class=" card-body">
        <form action="{{ route('patients.store') }}" method="POST" style="display: flex;flex-wrap:wrap;padding:5px">
            @csrf
            <div class=" form-group "style="flex-basis:800px; margin-right:5px" >
                <input type="text" name="name" class=" form-control " placeholder="Enter patient Name" title="Enter patient Name" autocomplete="off" required value="{{ old('name') }}">
            </div>

            <div class=" form-group "style="flex-basis:800px; margin-right:5px" >
                <input type="number" name="age" class=" form-control " placeholder="Enter patient Age" title="Enter patient Age" autocomplete="off" required value="{{ old('age') }}">
            </div>

            <div class=" form-group "style="flex-basis:800px; margin-right:5px" >
                <input type="text" name="hospital" class=" form-control " placeholder="Enter hospital fie number" title="Enter hospital fie number" autocomplete="off" required value="{{ old('hospital') }}">
            </div>

            <div class=" form-group "style="flex-basis:800px; margin-right:5px" >
                <input type="text" name="phone" class=" form-control " placeholder="Enter parents phone number" title="Enter parents phone number" autocomplete="off" required value="{{ old('phone') }}">
            </div>
            <div class=" form-group pl-3">
<button type="submit" class="btn btn-primary ml-3">
    <strong>ADD patient</strong>
</button>
            </div>
        </form>
    </div>
    </div>
@endsection
