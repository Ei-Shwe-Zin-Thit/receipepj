@extends('adminlayout.master')

@section('admincontent')

    <div class="p-5 text-center text-danger"> <h1>Recipe Edit</h1></div>
    <div class="form">
    <form action="{{url('updaterecipe/'.$recipe['id'])}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group row p-2 justify-content-center">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Recipe Name</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="colFormLabel" name="name" value="{{$recipe['name']}}" required>
            </div>
        </div>

        <div class="form-group row p-2 justify-content-center">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Recipe Image</label>
            <div class="col-sm-6">
              <input type="file" class="form-control p-1 " id="colFormLabel" name="img" required><br>
                <img src="{{asset('image/'.$recipe['img'])}}" alt="Error" width="100px">
            </div>
        </div>

        <div class="form-group row p-2 justify-content-center">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Time</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="colFormLabel" name="time" value="{{$recipe['time']}}" required>
            </div>
        </div>

        <div class="form-group row p-2 justify-content-center">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Ingredient</label>
            <div class="col-sm-6">
              <!-- <input type="text" class="form-control p-1 " id="colFormLabel" name="ingredient" value="{{$recipe['ingredient']}}" required> -->
            <textarea name="ingredient" id="editor" cols="30" rows="10" >{{$recipe['ingredient']}}</textarea>
            </div>
        </div>

        <div class="form-group row p-2 justify-content-center">
            <label for="colFormLabel" class="col-sm-2 col-form-label">How to cook</label>
            <div class="col-sm-6">
              <input type="text" class="form-control p-1 " id="colFormLabel" name="howtocook" value="{{$recipe['howtocook']}}" required>
            </div>
        </div>

        <div class="form-group row p-2 justify-content-center">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Serving</label>
            <div class="col-sm-6">
              <input type="number" class="form-control p-1 " id="colFormLabel" name="serving" value="{{$recipe['serving']}}" required>
            </div>
        </div>

        <div class="form-group row p-2 justify-content-center">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Publisher</label>
            <div class="col-sm-6">
              <input type="text" class="form-control p-1 " id="colFormLabel" name="publisher" value="{{$recipe['publisher']}}" required>
            </div>
        </div>

        <div class="form-group row p-2 justify-content-center">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Category</label>
            <div class="col-sm-6">
              <select class="form-control" id="colFormLabel" name="cat_id">
                    <option value="{{$recipe->category->id}}">{{$recipe->category->cat_name}}
                    </option>
                  @foreach($recipecat as $value)
                    
                    <option value="{{$value['id']}}">{{ $value['cat_name'] }}</option>
                  @endforeach                  
              </select>
            </div>
        </div>

        <div class="form-group row p-2 justify-content-center">
            <div class="col-sm-6">
                <button type="submit" class="btn btn-danger" value="submit" style="width: 50%;margin-left: 120px;">Confirm identity</button>
            </div>
        </div>
    </form>
    </div>

@endsection