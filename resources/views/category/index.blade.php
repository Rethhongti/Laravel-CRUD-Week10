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
        @can('crud-category')
            <form action="{{route('category.store')}}" method="POST">
                @csrf
                <div class="input-group mb-3">
                    <input type="text" class="form-control" required name="cat_name" placeholder="Create Category" >
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="submit">Add</button>
                    </div>
                </div>
            </form>
        @endcan  
            <table class="table ">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Category</th>
                        @can('crud-category')
                            <th scope="col">Action</th>
                        @endcan
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                    <tr>
                        <th scope="row">{{$loop->index+1}}</th>
                        <td>{{$category->cat_name}}</td>
                        @can('crud-category')
                            <td>
                                <div class="row">
                                    <!--Edit Button-->
                                    <a href="/category-edit/{{$category->id}}/{{$category->cat_name}}"><button class="btn btn-warning col-md">Edit</button></a>
                                    <!--Delete Button-->
                                    <form action="/category/{{$category->id}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger col-md">Delete</button>
                                    </form>
                                </div>
                            </td>
                        @endcan
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
</html>