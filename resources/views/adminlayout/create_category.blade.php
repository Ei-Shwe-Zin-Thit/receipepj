@extends('adminlayout.master')

@section('admincontent')

<div class="p-5 text-center text-danger"> <h1>Category Add</h1></div>
<div class="form">
<form action="{{url('/catcreate')}}" method="post">
        {{ csrf_field() }}
    <div class="form-group row p-2 justify-content-center">
        <label for="colFormLabel" class="col-sm-2 col-form-label">Category Title</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" id="colFormLabel" name="cat_name" required>
            <button type="submit" class="btn btn-danger" value="submit" style="width: 50%;margin-top:20px;">Confirm identity</button>
        
        </div>
    </div>

  
    </form>
</div>

@endsection