@extends('master')
@section('title')
    Edit
@endsection

@section('content')
    <div class=" card">
<div class=" card-header">
<h1>Edit patient</h1>
</div>
<div class=" card-body">
    <form action="{{ route('patients.update',[$patient->id]) }}" method="POST" >
        @csrf
        @method('PATCH')
        <div class=" form-group pl-3">
            <button type="submit" class="btn btn-primary ml-3">
            <strong>Edit patient</strong>
            </button>
                    </div>
        <div class=" form-group "style="flex-basis:800px; margin-right:5px" >
            <input type="text" name="name" class=" form-control " placeholder="Enter patient Name" title="Enter patient Name" autocomplete="off" required value="{{ $patient->name }}">
        </div>

        <div class=" form-group "style="flex-basis:800px; margin-right:5px" >
            <input type="number" name="age" class=" form-control " placeholder="Enter patient Age" title="Enter patient Age" autocomplete="off" required value="{{ $patient->age }}">
        </div>

        <div class=" form-group "style="flex-basis:800px; margin-right:5px" >
            <input type="text" name="hospital" class=" form-control " placeholder="Enter hospital fie number" title="Enter hospital fie number" autocomplete="off" required value="{{ $patient->hospital }}">
        </div>

        <div class=" form-group "style="flex-basis:800px; margin-right:5px" >
            <input type="text" name="phone" class=" form-control " placeholder="Enter parents phone number" title="Enter parents phone number" autocomplete="off" required value="{{ $patient->phone }}">
        </div>



    </form>
    <div class=" card-deck">
    <form action="{{ route('update_status',$patient->id)  }}" method="post" >

        @csrf


    <select name="status" id="status" onchange="this.form.submit()" class="form-control col-5">
       <option value="1" {{ ($patient->status ==1)?'selected':'' }} >نشط</option>
        <option value="2" {{ ($patient->status ==2)?'selected':'' }} >غير نشط</option>
        <option value="3" {{ ($patient->status ==3)?'selected':'' }}>متوفي</option>
        <option value="3" {{ ($patient->status ==4)?'selected':'' }}>مشفي</option>
        </select>
                       </form> </div>
</div>
</div>
@endsection
