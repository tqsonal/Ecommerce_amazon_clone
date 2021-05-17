@extends('Layouts.Footer')


@extends('Layouts.navbar')

@section('internal_edit_css')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


<style>
.bg_color{
background-color:#FAF9F6;
width:600px;
margin:auto;
border-radius:10px ;

}
</style>
<link  rel='stylesheet' href="bootstrap.min.css"/>
@endsection

@section('content')
<div class='container '>
<h1 class='text-center'> Update Product </h1>
<div class='text-left'>
<form  class="mt-3  bg_color " action="{{url('update_data')}}" autocomplete='off' method='post'  >
@csrf
<input type="hidden" name="id" value="{{ $data->p_id }}">
<div class='row'>
<div class='col-3'></div>
<div class="form-group col-6 mt-4 "> 
<label> product Name </label>
<input type="text" class='form-control '  value='{{$data->p_name}}' name="pname" />
</div>
</div> 
 
<div class='row'>
<div class='col-3'></div>
<div class="form-group col-6 mt-4 "> 
<label> Description </label>
<input type="text" class='form-control ' value='{{$data->p_desc}}' name="pname" />
</div>
</div> 

 
<div class='row'>
<div class='col-3'></div>
<div class="form-group col-6 mt-4 "> 
<label> stock </label>
<input type="text" class='form-control ' value='{{$data->p_stock}}' name="pname" />
</div>
</div> 

 
<div class='row'>
<div class='col-3'></div>
<div class="form-group col-6 mt-4 "> 
<label> Price </label>
<input type="text" class='form-control ' value='{{$data->p_price}}' name="pname" />
</div>
</div> 


<div class='row mt-3'>
<div class='col-3'></div>
<input class='col-md-2 btn btn-dark' type="submit" value='UPDATE'  name='update_data'/>

<!-- <button > Update</button>  -->
</a>
</div>


</form>
</div>
</div>

@endsection