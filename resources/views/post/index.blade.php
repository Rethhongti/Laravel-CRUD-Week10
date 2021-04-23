<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
        <title>Laravel-CRUD</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <body>
        @include('layout.header')
        <div class="container col-md-6">    
            <a href="{{route('post.create')}}"><button class="btn btn-secondary">Create New</button></a>
            <table class="table ">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Product</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Price</th>
                        <th scope="col">Category</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($posts as $post)
                    <tr>
                        <th scope="row">{{$loop->index+1}}</th>
                        <td>{{$post->product_name}}</td>
                        <td>{{$post->quantity}}</td>
                        <td>{{$post->price}}</td>
                        <td>{{$post->categories->cat_name}}</td>
                        <td>
                            <div class="row">
                                <!--Edit Button-->
                                <a href=""><button class="btn btn-warning col-md">Edit</button></a>
                                <!--Delete Button-->
                                <form action="/post/{{$post->id}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger col-md">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{$posts->links()}}
        </div>
        <style>
            .w-5{
                display:none;
            }
        </style>
    </body>
</html>