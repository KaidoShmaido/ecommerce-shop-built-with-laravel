<form  class="container" action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group my-3">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" class="form-control" value="name">
    </div>
    <div class="form-group my-3">
        <label for="description">Description</label>
        <textarea type="textarea" name="description" id="description"  value="description" class="form-control"></textarea>
    </div>

    <div class="form-group my-3">
        <label for="quantity">Quantity</label>
        <input type="number" name="quantity" id="quantity" value="quantity" class="form-control">
    </div>

    <div class="form-group my-3">
        <label for="image">Image</label>
        <input type="file" name="image" id="image" value="image" class="form-control">
    </div>

    <div class="form-group my-3">
        <label for="price">Price</label>
        <input type="number" name="price" id="price" value="price" class="form-control">
    </div>
    <div class="form-group my-3">
        <input type="submit" class="btn btn-primary w-100" value="add">
    </div>

</form>
