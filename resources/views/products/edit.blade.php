<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    #con {
      border: 0.5rem outset pink;
      outline: 0.5rem solid khaki;
      box-shadow: 0 0 0 2rem skyblue;
      border-radius: 12px;
      font: bold 1rem sans-serif;
      /* margin: 1rem; */
      padding: 1rem;
      outline-offset: 0.5rem;
    }

    body {
      padding: 0px;
      height: 100px;
      background-color: #e5e5e5;
    }
  </style>
</head>

<body>
  <br>  <br> <br> <br>
  <form method="post" action="{{url('product/update/'.$getRecord['id'])}}">
    @csrf
    @method('post')
    <div class="container" id="con">
      <h1 style="text-align: center;">Edit Product </h1>
      <hr>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="name">Name</label>
          <input type="text" class="form-control" name="name" id="name" placeholder="name" value="{{$getRecord['name']}}">
          <div style="color: red;">{{ $errors->first('name')}}</div>
        </div>
        <div class="form-group col-md-6">
          <label for="qty">qty</label>
          <input type="qty" class="form-control" name="qty" id="qty" placeholder="qty" value="{{$getRecord['qty']}}">
          <div style="color: red;">{{ $errors->first('qty')}}</div>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="price">price</label>
          <input type="price" class="form-control" name="price" id="price" placeholder="price" value="{{$getRecord['price']}}">
          <div style="color: red;">{{ $errors->first('price')}}</div>
        </div>
        <div class="form-group col-md-6">
          <label for="description">description</label>
          <input type="description" class="form-control" name="description" id="description" placeholder="description" value="{{$getRecord['description']}}">
          <div style="color: red;">{{ $errors->first('price')}}</div>
        </div>
      </div>

      <input type="submit" value="Update Product" class="btn btn-primary"></input>
    </div>
  </form>
</body>

</html>