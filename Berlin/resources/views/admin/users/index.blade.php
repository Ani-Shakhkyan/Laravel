@extends('admin/admin_template')

@section('content')
 


  <div class="fmcont">
  	 <a href="{{ URL::to('admin/users/create') }}">Add new</a>
    <table>
    	<tr>
	    	<td>Name</td>
	    	<td>Email</td>
	    	<td>Edit</td>
	    	<td>Delete</td>
    	</tr>
    	
    		<?php 
    			foreach ($users as $key => $value) {
    				?>
    				<tr>
    					<td><?php echo $value['name'] ?></td>
    					<td><?php echo $value['email'] ?></td>
    					<td><a href="{{ URL::to('admin/users/edit') }}/<?php echo  $value['id'] ?>">Edit</a> </td>
    					<td><a href="{{ URL::to('admin/users/delete') }}/<?php echo  $value['id'] ?>">Delte</a> </td>
    					</tr>
    				<?php
    			}
    		 ?>
    	
    </table>
  </div>

<style type="text/css">  
              body{
  background-color: #f8fafc;
}
.fmcont{
  padding: 10px;
  background-color: #BCE8E6;
  width: 500px;
  height: auto;
  border: 5px solid #04524F;
  border-radius: 10px;
  margin: auto;
  margin-top: 50px;
  margin-bottom: 50px;
  font-family: "Nunito", sans-serif;
}
td,tr{
	margin:4px;
}
                   
</style>
@endsection
