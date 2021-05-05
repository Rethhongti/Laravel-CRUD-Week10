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
        
        <div class="container">
            <h3>Edit Category </h3>
            <form action="/update" method="POST">
                @csrf
                <div class="input-group mb-3">
                    <input type="hidden" class="form-control" value="{{$id}}" name="id">
                    <input type="text" class="form-control" value="{{$cat_name}}" placeholder="Edit Category" name="cat_name">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="submit">Save Change</button>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>