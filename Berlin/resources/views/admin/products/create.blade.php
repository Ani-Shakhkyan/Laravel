@extends('admin/admin_template')

@section('content')

<style>#product_description {
  width: 300px;
  height: 150px;
  max-height: 300px;
}</style>



<div class="container col-md-4 fheight">
<form  method="POST" action="{{ route('products_store') }} " enctype="multipart/form-data"> 
   @csrf
<fieldset>

<!-- Form Name -->
<legend>PRODUCTS</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_id">PRODUCT</label>  
  <div class="col-md-4">
  <input id="product_id"  name ="name" placeholder="PRODUCT NAME" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="product_description">PRODUCT DESCRIPTION</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="product_description" name="description"></textarea>
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="stock_alert">PRICE</label>  
  <div class="col-md-4">
  <input id="stock_alert" name="price" placeholder="STOCK ALERT" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="filebutton">IMAGE</label>
  <div class="col-md-4">
    <input id="filebutton"  name="image" class="input-file" type="file">
  </div>
</div>



  <input type="submit" value="Add Product" class="btn btn-primary">

</fieldset>


</form>
</div>




  @endsection


