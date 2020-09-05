@extends('adminlayout.master')

@section('admincontent')

    <div class="p-5 text-center text-danger"> <h1>Recipe Add</h1></div>
    <div class="form">
    <form action="{{url('createrecipe')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group row p-2 justify-content-center">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Recipe Name</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="colFormLabel" name="name" required>
            </div>
        </div>

        <div class="form-group row p-2 justify-content-center">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Recipe Image</label>
            <div class="col-sm-6">
              <input type="file" class="form-control p-1 " id="colFormLabel" name="img" required>
            </div>
        </div>

        <div class="form-group row p-2 justify-content-center">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Time</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="colFormLabel" name="time" required>
            </div>
        </div>

        <div class="form-group row p-2 justify-content-center">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Ingredient</label>
            <div class="col-sm-6">
              <!-- <input type="text" class="form-control p-1 " id="colFormLabel" name="ingredient" required> -->
              <textarea name="ingredient" id="editor" cols="30" rows="10" class="form-control"></textarea>
            </div>
        </div>

        <div class="form-group row p-2 justify-content-center">
            <label for="colFormLabel" class="col-sm-2 col-form-label">How to cook</label>
            <div class="col-sm-6">
              <!-- <input type="text" class="form-control p-1 " id="colFormLabel" name="howtocook" required> -->
              <textarea name="howtocook" id="howtocook" cols="30" rows="10" class="form-control"></textarea>
            </div>
        </div>

        <div class="form-group row p-2 justify-content-center">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Serving</label>
            <div class="col-sm-6">
              <input type="number" class="form-control p-1 " id="colFormLabel" name="serving" required>
            </div>
        </div>

        <div class="form-group row p-2 justify-content-center">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Publisher</label>
            <div class="col-sm-6">
              <input type="text" class="form-control p-1 " id="colFormLabel" name="publisher" required>
            </div>
        </div>

        <div class="form-group row p-2 justify-content-center">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Category</label>
            <div class="col-sm-6">
              <select class="form-control" id="colFormLabel" name="cat_id">
                  @foreach ($recipecat as $value)
                    <option value="{{$value['id']}}">{{ $value['cat_name'] }}</option>
                  @endforeach                  
              </select>
              <button type="submit" class="btn btn-danger" value="submit" style="width: 50%;margin-top:20px;">Confirm identity</button>
        
            </div>
            
        </div>

        
    </form>
    </div>

@endsection