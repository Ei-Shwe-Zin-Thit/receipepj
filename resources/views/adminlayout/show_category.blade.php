@extends('adminlayout.master')

@section('admincontent')

          <div class="p-5 text-center text-danger"> <h1>Category</h1></div>
       <div class="card shadow mb-4">
            
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Category Name</th>
                      <th>Action</th>
                    
                    </tr>
                  </thead>
                  
                  <tbody>
                    @foreach ($cat as $value)                        
                    <tr>
                    <td>{{$value['cat_name']}}</td>
                        <td class="text-center">
                        <a href="{{url('catdelete/'.$value['id'])}}" class="btn btn-outline-danger mr-3" onclick="return confirm('Are You Sure Delete');"><i class="fa fa-trash mr-2"></i>Delete</a>
                        <a href="{{url('catedit/'.$value['id'])}}" class="btn btn-outline-primary"><i class="fa fa-edit mr-2"></i>Edit</a>
                      </td>  
                    </tr>
                    @endforeach
                    
              </div>
            </div>
          </div>
        
    
@endsection