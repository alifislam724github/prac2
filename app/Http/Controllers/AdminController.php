<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Http\Requests\StoreAdminRequest;
use App\Http\Requests\UpdateAdminRequest;
use Illuminate\Http\Request;
use Session;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAdminRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAdminRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAdminRequest  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAdminRequest $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }
    public function home(){
        return view('home');

    }

    public function AdminRegistration(){

        return view("pages.AdminRegistration");

    }
   
    public function AdminRegistrationSubmit(Request $request)
    {
        $validate=$request->validate([

            'name'=>'required|min:5|max:100',
            'password'=>'required',
            'email'=>'required',
            'phoneno'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/',
            'address'=>'required',


        ],



        [

            'name.required'=>'Please put your name',
            'name.min'=>'Name must be greater than 5 charcters',
            'password.required'=>"put your password",
            'email'=>"enter your mail",
            'phoneno.required'=>"enter your phone number",
            'address.required'=>"enter your address",

        ]

    );

        $user=new Admin();

    

       $user->name =$request->name;

       $user->email=$request->email;

       $user->phoneno =$request->phoneno;

       $user->address=$request->address;

       $user->password=$request->password;

       $user->save();

    }

    public function AdminLogin(){

        return view("pages.AdminLogin");

    }
    public function AdminLoginSubmit(Request $request)

{
    // echo $request->email;
    // echo $request->password;

    $validate=$request->validate(

    [

        'email'=>'required',
        'password'=>'required',

    ],

    [

        'email.required'=>'Please enter your email',

        'password.required'=>'Please enter your password',

    ]

    );

    $user=Admin::where("email",$request->email)

    ->where("password",$request->password)

        ->first();

        if ($user){

            $request->session()->put("userId",$user->id);
            
               
            return redirect()->route("AdminDash");

        }

            
        return back();

}

public function AdminDash(){

    return view ("pages.AdminDash");

}
public function AdminInfo(){

    $id=Session::get("userId");

    $t =Admin::where('id',$id)->first();
    
    return $t->AdminDetails();

}
public function AdminUpdate(){
    //    return  $request->id;
    $id=Session::get("userId");
    // echo $id;
    // $id=(Session::get("userId"));
    $user = Admin::where('id', $id)->first();

    // echo $user;
    return view('pages.AdminUpdate')->with('user', $user);

   }
   public function AdminUpdateSubmit(Request $request){

    $Admin =Admin ::where('id', $request->id)->first();

    
    $Admin->name =$request->name;
    $Admin->email=$request->email;
    $Admin->password=$request->password;
    $Admin->address=$request->address;
    $Admin->phoneno =$request->phoneno;

  $Admin->save();
  return view ("pages.AdminDash");
}

public function AdminDelete(Request $request){
    $Admin=Session::get("userId");
    $Admin =Admin ::where('id', $Admin)->delete();

//     $Admin->name =$request->name;

//     $Admin->email=$request->email;

//     $Admin->password=$request->password;

//     $Admin->phoneno =$request->phoneno;

//     $Admin->servicetype =$request->servicetype;

//     $Admin->address=$request->address;



//   $Admin->delete();

     session()->forget('userId');



  return view ("pages.AdminLogin");

}

public function AdminLogout(){

  session()->forget('userId');

  return redirect()->route('AdminLogin');

}

}
