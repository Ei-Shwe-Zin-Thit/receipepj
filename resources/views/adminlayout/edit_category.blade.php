@extends('adminlayout.master')

@section('admincontent')

<div class="p-5 text-center text-danger"> <h1>Category Edit</h1></div>
<div class="form">
<form action="{{url('catupdate/'.$cat['id'])}}" method="post">
        {{ csrf_field() }}
    <div class="form-group row p-2 justify-content-center">
        <label for="colFormLabel" class="col-sm-2 col-form-label">Category Title</label>
        <div class="col-sm-6">
        <input type="text" class="form-control" id="colFormLabel" name="cat_name" value="{{$cat['cat_name']}}" required>
        </div>
    </div>

    <div class="form-group row p-2 justify-content-center">
        <div class="col-sm-6">
        <button type="submit" class="btn btn-danger" value="submit" style="width: 50%;margin-left: 100px;">Update</button>
        </div>
    </div>
    </form>
</div>

@endsection