
@extends('layout.app')
@section('main')
<br>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-sm-8">
          <div  class="card mt-3 p-3">
            <h3>Product Edit #{{$product->name}}</h3>
            <form method="POST" action="/products/{{$product->id}}/update" enctype="multipart/form-data">
              @csrf 
              @method('PUT')
              <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" class="form-control" value="{{old('name',$product->name)}}" id="">
                
                @if($errors->has('name'))
                <sapn class='text-danger'>{{ $errors->first('name')}}</sapn>
                @endif
              </div>

              <div class="form-group">
                <label>Description:</label><br>
                <textarea name="description"  id="" cols="35" rows="4" >{{old('description',$product->description)}}</textarea>
                @if($errors->has('description'))
                <sapn class='text-danger'>{{ $errors->first('description')}}</sapn>
                @endif
              </div>

              <div class="form-group">
                <label>image:</label><br>
                <input type="file" name="image" id="" class="form-control">
                @if($errors->has('image'))
                <sapn class='text-danger'>{{ $errors->first('image')}}</sapn>
                @endif
              </div>

                <button type="submit" class="btn btn-dark">Submit</button>
            </form>

          </div>

        </div>

      </div>
     
    </div>
@endsection