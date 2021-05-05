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
            <h3>Update Product </h3>
            <form action="/updateProduct" method="POST">
                @csrf
                <input type="hidden" class="form-control" value="{{$product['id']}}" name="id">
                <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Product</label>
                    <div class="col-sm-10">
                    <input type="text" name="product_name" class="form-control" placeholder="Product" value="{{$product['product_name']}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Quantity</label>
                    <div class="col-sm-10">
                        <input type="text" name="quantity" class="form-control" placeholder="Quantity" value="{{$product['quantity']}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Price</label>
                    <div class="col-sm-10">
                        <input type="text" name="price" class="form-control" placeholder="Price" value="{{$product['price']}}">
                    </div>
                </div>

                <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Category</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="categories_id">
                            @foreach($categories as $category)
                                @if($category->id == $product['categories_id'])
                                <option selected value="{{$category->id}}">{{$category->cat_name}}</option>
                                @else
                                    <option value="{{$category->id}}">{{$category->cat_name}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Save Change</button>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>