@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Create Product</div>
                <div class="panel-body">

                    <form action="{{ URL::to('insert') }}" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label for="Name">Name</label>
                        <input type="text" class="form-control" id="name" aria-describedby="nameHelp" placeholder="Enter Name" name="name">
                    </div>

                    <div class="form-group">
                        <label for="Description">Description</label>
                        <input type="text" class="form-control" id="description" aria-describedby="descriptionHelp" placeholder="Enter Description" name="description">
                    </div>

                     <div class="form-group">
                        <label for="Price">Price</label>
                        <input type="text" class="form-control" id="price" aria-describedby="priceHelp" placeholder="Enter Price €" name="price">
                    </div>

                   <div class="form-group">
                        <label for="Image">Image</label>
                        <input type="text" class="form-control" id="image" aria-describedby="imageHelp" placeholder="Enter Image" name="image" value="https://placehold.it/150x80?text=IMAGE">
                    </div>
    

                    <div class="form-group">
                        <label for="Category">Category</label>
                        <input type="text" class="form-control" id="category" aria-describedby="categoryHelp" placeholder="Enter Category" name="category">
                    </div>            

                        <button type="submit" class="btn btn-primary">Submit</button>
                        
                        <br>
                    
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection