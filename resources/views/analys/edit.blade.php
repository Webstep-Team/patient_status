@extends('master')
@section('title')
    Edit
@endsection

@section('content')
    <div class=" card">
<div class=" card-header">
<h1>Edit analysis</h1>
</div>
<div class=" card-body">
    <form action="{{ route('analysis.update',[$analysis->id]) }}" method="POST" style="display: flex;flex-wrap:wrap;padding:5px">
        @csrf
        @method('PATCH')
        <div class=" form-group "style="flex-basis:800px; margin-right:5px" >
            <input type="text" name="name" class=" form-control " placeholder="Enter analysis Name" title="Enter analysis Name" autocomplete="off" required value="{{ old('name') }}">
        </div>

        <div class=" form-group "style="flex-basis:800px; margin-right:5px" >
            <input type="text" name="reciever" class=" form-control " placeholder="Enter analys reciever" title="Enter analysis reciever" autocomplete="off" required value="{{ old('reciever') }}">
        </div>

        <div class=" form-group "style="flex-basis:800px; margin-right:5px" >
            <input type="number" name="cost" class=" form-control " placeholder="Enter analysis cost " title="Enter analysis cost " autocomplete="off" required value="{{ old('cost') }}">
        </div>


        <div class=" form-group pl-3">
<button type="submit" class="btn btn-primary ml-3">
<strong>ADD analysis</strong>
</button>
        </div>
    </form>
</div>
</div>
@endsection
