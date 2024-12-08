<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Add Products</h1>
    <a href="{{ url('product') }}" class="btn btn-primary" style="float: inline-end;">Product List</a>
    <br>
    <br>
    <br>
    @if(session()->has('success'))
    <div style="color: green;">
        {{session('success')}}
    </div>
    @endif
<form method="post" action="{{route('product.store')}}">
    @csrf
    <!-- @method('post') -->
    <div class="container">
        <!-- <div>
            @if($errors->any())
                <ul>
                    @foreach($errors->all() as $error)
                    <li>
                        {{$error}}
                    </li>
                    @endforeach
                </ul>
            @endif
        </div> -->
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="name">Name</label>
      <input type="text" class="form-control" name="name" id="name" placeholder="name" value="{{old('name')}}">
      <div style="color: red;">{{ $errors->first('name')}}</div>
    </div>
    <div class="form-group col-md-6">
      <label for="qty">qty</label>
      <input type="qty" class="form-control" name="qty" id="qty" placeholder="qty" value="{{old('qty')}}">
      <div style="color: red;">{{ $errors->first('qty')}}</div>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="price">price</label>
      <input type="price" class="form-control" name="price" id="price" placeholder="price" value="{{old('price')}}">
      <div style="color: red;">{{ $errors->first('price')}}</div>
    </div>
    <div class="form-group col-md-6">
      <label for="description">description</label>
      <input type="description" class="form-control" name="description" id="description" placeholder="description" value="{{old('description')}}">
      <div style="color: red;">{{ $errors->first('price')}}</div>
    </div>
  </div>
   
  <input type="submit" value="Save a New Product" class="btn btn-primary"></input>
    </div>
</form>
    </div>
</body>
</html>