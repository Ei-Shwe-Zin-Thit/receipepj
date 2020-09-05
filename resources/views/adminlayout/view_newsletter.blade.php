@extends('adminlayout.master')

@section('admincontent')

<div class="p-5 text-center text-danger"> <h1>Newsletter</h1></div>
<div class="card shadow mb-4">
     
     <div class="card-body">
       <div class="table-responsive">
         <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
           <thead>
             <tr>
               <th>Name</th>
               <th>Email</th>
               <th>Message</th>  
               <th>Action</th>           
             </tr>
           </thead>
           
           <tbody>
             @foreach ($news as $value)
             <tr>
              <td>{{$value['name']}}</td>
               <td>{{$value['email']}}</td>
               <td>{{$value['message']}}</td>
             <td><a href="{{url('delnewsletter/'.$value['id'])}}" class="btn btn-outline-danger mr-3" onclick="return confirm('Are You Sure Delete');"><i class="fa fa-trash mr-2"></i>Delete</a></td>
             </tr>
             @endforeach
             
             
       </div>
     </div>
   </div>

    
@endsection