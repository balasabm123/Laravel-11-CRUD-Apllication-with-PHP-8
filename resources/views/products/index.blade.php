
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
    <h1>Product lists</h1>
    <a href="{{ url('product/create') }}" class="btn btn-primary" style="float: inline-end;">Add New Product</a>
    <br>
    <br>
    @if(session()->has('success'))
    <div style="color: green;" id="hidde">
        {{session('success')}}
    </div>
    @endif

    @if(session()->has('delete'))
    <div style="color: red;"  id="del">
        {{session('delete')}}
    </div>
    @endif

    
<table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Name</th>
                    <th scope="col">qty</th> 
                    <th scope="col">price</th>
                    <th scope="col">Description</th>
                    <th scope="col">Created at</th>
                    <th scope="col">Updated at</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                @forelse($products as $k=>$value)
                <tr>
                    <th scope="row">{{$k+1}}</th>
                    <td>{{$value->name}}</td>
                    <td>{{$value->qty}}</td>
                    <td>{{$value->price}}</td>
                    <td>{{$value->description}}</td>
                    <!-- <td>{{!empty($value->status) ? 'Active' : 'Inactive'}}</td>
                    <td>{{date('d-m-Y H:i A', strtotime($value->created_at))}}</td> -->
                    <td>{{date('d-m-Y H:i A', strtotime($value->created_at))}}</td>
                    <td>{{date('d-m-Y H:i A', strtotime($value->updated_at))}}</td>
                    <td>
                       <a href="{{ url('product/edit/'.$value->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        <a  onclick="return confirm('Are you sure you want to delete this item?');" href="{{ url('product/delete/'.$value->id)  }}" class="btn btn-danger btn-sm">Delete</a>  
                    </td>
                  </tr>
                @empty
                <tr>
                    <td colspan="100%">No Records found...</td>
                </tr>
                @endforelse
                  
                </tbody>
              </table>
    </div>
            </body>
</html>

<script>
    setTimeout(function() {
    $('#hidde').fadeOut('fast');
}, 3000);
 
setTimeout(function () {
    document.getElementById('hidde').remove();
}, 5000);

setTimeout(function () {
    document.getElementById('del').remove();
}, 5000);
</script>