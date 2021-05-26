<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Validator;
class UserController extends Controller
{

  public function addData(Request $request){
    $message=[
      'pname.required'=>"please enter the name "
    ];
  $validator=  Validator::make($request->all(),[
    'pname'=>'required'
  ],$message);

  if($validator->fails()){
    return back()->withErrors($validator,'errors')->withInput();
  }
    $pname=$request['pname'];
    $desc=$request['pdesc'];
    $stock=$request['pstock'];
    $status=$request['pstatus'];
    $price=$request['pprice'];
$imageName=null;
if($files=$request->file('pimage')){
  foreach($files as $file){
      $name=time()."_".$file->getClientOriginalName();
      $file->move('images',$name);
      $images[]=$name;
  }
}
    
    // $totalImages = count($_FILES['pimage']['name']);
    // // dd($totalImages);
    // $imageArr= [];
    //     for($i=0;$i<$totalImages;$i++){
    //       $image = $_FILES['pimage']['name'][$i];
    //       $tmpname = $_FILES['pimage']['tmp_name'][$i];
    //       $rand=rand(0,9999);
    //   $newName=$rand.'_'.$image;
      
    //   array_push($imageArr,$newName);
    //   move_uploaded_file($tmpname,'images/'.$newName);
      
    // }   
    // $imageArr=json_encode($imageArr);


    $insertArr=[
     'p_name'=>$pname,
     'p_desc'=>$desc,
     'p_stock'=>$stock,
     'p_status'=>$status,
     'p_price'=>$price,
     'p_image'=>implode("|",$images)
    ];
    // dd($insertArr);
    
     $res= DB::table('products')->insert($insertArr);
    //  dd($res);
   return redirect('display_data');
  }
public function getData(){
    $data= DB::table('products')->get();  // mentioned table name  - without model
    // $result = User::get();  //with model
    // print_r($data);
    // die();
    return view('display_data',compact('data'));	
}    

public function deleteData($id){
  DB::table('products')->where('p_id','=',$id)->delete();
    // $data=products::get();
    // return view('Display_Data',compact('data'));
    return redirect('display_data');
}

public function editData($id){
  $data=DB::table('products')->where('p_id',"=",$id)->first();
return view('Edit_User',compact('data'));
}

public function updateData(Request $request){
$name=$request['pname'];
$id=$request['id'];

$updateAry = [
  'p_name' => $name,
];
DB::table('products')->where('p_id',$id)->update($updateAry);
return redirect('display_data');


}

public function getSingleData(Request $request){
  $id=$request['id'];

  $data=DB::table('products')->where('p_id',"=",$id)->first();
return view('Display_details',compact('data')); 
}

public function addtoCart(Request $request){
  $id=$request['pid'];
  $qty=$request['qty'];


  $insertArr=[
    'p_id'=>$id,
    'quantity'=>$qty
  ];
  $res= DB::table('cart')->insert($insertArr);
  // $data=DB::table('cart')->get();
  //  return view('Cart',compact('data')); 
   return redirect('cart'); 

}
public function getcartData(){
// $data= DB::table('cart')->get();


$data = DB::table('cart')
->select('cart.quantity','cart.cart_id', 'products.p_name', 'products.p_image','products.p_price')
            ->join('products', 'cart.p_id', '=', 'products.p_id')
            ->get();

return view('Cart',compact('data'));	

}

public function removeItemfromCart($id){
  DB::table('cart')->where('cart_id','=',$id)->delete();
  return redirect('cart');
}

}