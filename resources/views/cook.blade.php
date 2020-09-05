@extends('searchcook.master')

@section('cookcontent')

        <div class="shopping">
            <h2 class="heading-2">Viewer Count</h2>
            <!-- <h4>PASTA WITH TOMATO CREAM SAUCE</h4>
            <div class="form-control">
                <h4 class="text-success">Viewer 100</h4>
            </div> -->


                <br><br>
              <div class="div">
                    <h2 style="text-decoration: underline">Relevant Result</h2>
                    <ol style="font-size: 15px">
                       @foreach ($result['relevant_res'] as $item)
                           <ul>{{$item}}</ul>
                       @endforeach
                    </ol>
                </div>


                  <br><br>
              <div class="div">
                    <h2 style="text-decoration: underline">Non-Relevant Result</h2>
                    <ol style="font-size: 15px">
                       @foreach ($result['non_relevant_res'] as $item)
                           <ul>{{$item}}</ul>
                       @endforeach
                    </ol>
                </div>


                  <br><br>
              <div class="div">
                    <h2 style="text-decoration: underline">Final Result</h2>
                    <ol style="font-size: 15px">
                       @foreach ($result['final_result'] as $item)
                           <ul>{{$item}}</ul>
                       @endforeach
                    </ol>
                </div>

                <br><br>
              <div class="div">
                    <h2 style="text-decoration: underline">Accuracy Rate</h2>
                    <ol style="font-size: 15px">
                        {{$result['performance']}}
                    </ol>
                </div>


        </div>



@endsection
