@extends('searchcook.master')

@section('cookcontent')
<h1 style="text-align: center;">Performance Results</h1>
<table class="table">
    <thead>
        <tr>
            <th>Item Name</th>
            <th>Result</th>
            <th>Performance Value</th>
        </tr>
    </thead>
    <tbody>
        
        @if(Session::get('reciped')!='')
        @foreach (Session::get('reciped') as $value)
        <tr>
            <td>{{Session::get('ses_cat_name')}}</td>
            <td>{{$value['name']}}</td>
            <td>{{$result['performance']}}</td>
            
        </tr>
        @endforeach
        @endif
    </tbody>
</table>

@endsection