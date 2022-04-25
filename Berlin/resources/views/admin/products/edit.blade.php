@extends('admin/admin_template')

@section('content')
 
  <div class="fmcont">
    <form method="POST" action="{{ route('products_update') }}">
      @csrf
      <h1>Add user to table</h1>
        <!-- <label for="usname">Name:</label> -->
        <input type="text" class="inp" name="name" value="<?php echo $product["name"] ?>" placeholder="Name"><br><br>
        <!-- <label for="usmail">E-mail:</label> -->
        <input type="text" class="inp" name="description" value="<?php echo $product["description"] ?>" placeholder="Description"><br><br>
        <!-- <label for="uspass">Password:</label> -->
        <input type="text" class="inp" name="price" value="<?php echo $product["price"] ?>" placeholder="Password"><br><br>
      
        <input type="file" value="<?php echo $product["image"] ?>" name="image" class="btn btn-primary"> <br>
       
        <input type="hidden" class="inp" name="id" value="<?php echo $product['id'] ?>">

   <input type="submit" id="button" value="Add product">
 
   

        </div>
        
    </form>
  </div>
  <style type="text/css">  
              body{
  background-color: #f8fafc;
}
.fmcont{
  background-color: #ffffff;
  width: 470px;
  height: 500px;
  border: 1px solid #3490dc;
  border-radius: 10px;
  margin: auto;
  margin-top: 50px;
  margin-bottom: 50px;
  font-family: "Nunito", sans-serif;
}

form{
  /*text-align: right;*/  
  margin: 30px;
}

h1{
  color: #3490dc;
  text-align: center;
  margin: 30px;
  margin-bottom: 50px;
}

input{
  /*max-width: 300px;*/
  /*float: right;*/
  margin: auto;  
}
.inp{
  margin: 0px 50px 0px 50px;
  width: 300px;
}

.role{
  margin: 20px 50px;
}

p{
  display: inline-block;
  margin: 5px;
}

#button{
  background-color: #3490dc;
  padding: 10px;
  border: 1px solid #3490dc;
  border-radius: 10px;
  color: white;
  width: 200px;
  margin: 15px 10px;
}                          
</style>
@endsection
