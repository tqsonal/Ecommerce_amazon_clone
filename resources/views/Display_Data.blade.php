@extends('Layouts.Footer')


@extends('Layouts.navbar') 
@section('content')
<!-- // ask to sir -- even if you comment it still it displays it  -->

<h1 class='text-center'> Products List </h1>

<table class=" mt-5 table container  table-hover shadow text-center ">
  <thead class='table-dark' >
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Product Name </th>
      <th scope="col">Price</th>
      <th scope='col'>Images</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
@foreach($data as $key=>$val)

    <tr>
    <td>{{$val->p_id}} </td>
    <td>{{$val->p_name}}</td>
    <td>{{$val->p_price}}</td>
  
  @php
$imgArr=explode("|",$val->p_image);
$img_name=$imgArr[0];

  @endphp
<td>  <img src="{{'images/'.$img_name}}" height='200px' width='200px'> </td>
   <td>
     <a href="{{url('edit_data/'.$val->p_id)}}"> <button class="btn btn-success"> Edit</button></a>
     <a href="{{ url('delete_data/'.$val->p_id) }}">
   <button class='btn btn-danger'> Delete </button>
   </a>
     <a href="{{url('detail_data/'.$val->p_id)}}">   <button class='btn btn-secondary'> Details </button> </a>

    </td>
    </tr>
   @endforeach
  </tbody>
</table>
@endsection
