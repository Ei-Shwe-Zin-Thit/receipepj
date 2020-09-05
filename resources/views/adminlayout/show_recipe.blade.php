@extends('adminlayout.master')

@section('admincontent')

  <div class="p-5 text-center text-danger"> 
    <h1>Recipe List</h1>
  </div>
    <div class="card shadow mb-4">
            
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Name</th>
                <th>Category</th>
                <th>Image</th>
                <th>Publisher</th>
                <th>Action</th>
              
              </tr>
            </thead>
            
            <tbody>
              @foreach ($recipe as $value)
                  
              <tr>
                <td>{{$value['name']}}</td>
                <td>{{$value->category? $value->category->cat_name : 'null'}}</td>
                <td><img src="{{asset('image/'.$value['img'])}}" alt="Error" width="100px"></td>
                <td>{{$value['publisher']}}</td>
                <td class="text-center">
                  <a href="{{url('deleterecipe/'.$value['id'])}}" class="btn btn-outline-danger mr-3" onclick="return confirm('Are You Sure Delete?')"><i class="fa fa-trash mr-2"></i>Delete</a>
                  <a href="{{url('editrecipe/'.$value['id'])}}" class="btn btn-outline-primary"><i class="fa fa-edit mr-2"></i>Edit</a>
                </td>                              
              </tr>      
              @endforeach 
            </tbody>       
        </div>
      </div>

    </div>

@endsection