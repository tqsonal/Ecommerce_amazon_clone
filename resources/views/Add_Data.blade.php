@extends('Layouts.Footer')

@extends('Layouts.navbar')

@section('content')
6`
<div class='container '>
<h1 class='text-center'> Add Product </h1>
<div class='text-left'>
<form  class="mt-3  bg_color " action="{{url('add_data')}}" autocomplete='off' method='post' enctype='multipart/form-data'  >
@csrf
<div class='row'>
<div class='col-3'></div>
<div class="form-group col-6 mt-4 "> 
<label> product Name </label>
<input type="text" class='form-control ' name="pname"  value="{{old('pname')}}"/>
<span>{{$errors->errors->first('pname')}} </span>
</div>
</div> 

<div class='row'>
<div class='col-3'></div>
<div class="form-group col-6 "> 
<label> description </label>
<input type="text" class='form-control ' name="pdesc" />
</div>
</div> 


<div class='row'>
<div class='col-3'></div>
<div class="form-group col-6 "> 
<label> stock </label>
<input type="number" class='form-control ' name="pstock" />
</div>
</div> 

<div class='row'>
<div class='col-3'></div>
<div class="form-group col-6 "> 
<label> status </label>
<input type="number" class='form-control ' name="pstatus" />
</div>
</div> 


<div class='row'>
<div class='col-3'></div>
<div class="form-group col-6 "> 
<label> Price </label>
<input type="number" class='form-control ' name="pprice" />
</div>
</div> 



<div class='row'>
<div class='col-3'></div>
<div class="form-group col-6 "> 
<label> Product Images : </label>
<input type="file"  name="pimage[]" multiple />
</div>
</div> 

<!-- <div class='row'>
<div class='col-3'></div>
<div class="form-group col-6 "> 
<label> Product Images : </label>
<input type="file"  name="pimage" multiple />
</div>
</div> -->


<div class='row mt-3'>
<div class='col-3'></div>
<input class='col-md-2 btn btn-dark' type="submit"  name='add_data'/>
</div>


</form>
</div>
</div>

@endsection