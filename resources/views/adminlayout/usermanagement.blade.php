@extends('adminlayout.master')

@section('admincontent')

<div class="p-5 text-center text-danger"> <h1>User Management</h1></div>
       <div class="card shadow mb-4">
            
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>User Name</th>
                      <th>Email</th>
                      <th>Action</th>
                      
                    
                    </tr>
                  </thead>
                  
                  <tbody>
                      @foreach ($users as $i=>$value)
                          
                    <tr>
                      <td>{{++$i}}</td>

                      <td>{{$value['name']}}</td>
                      <td>{{$value['email']}}</td>
                      <td class="text-center">
                        <a href="{{url('deleteuser/'.$value['id'])}}" class="btn btn-outline-danger mr-3"><i class="fa fa-trash mr-2"></i>Delete</a>
                        
                      </td>
                      
                      @endforeach
                  
                    </tr>
                    {{$users}}
                    
              </div>
            </div>
          </div>

@endsection