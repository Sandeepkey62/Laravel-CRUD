<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserDetails;
use Hash;
use DB;
use Session;
class CustomAuthController extends Controller
{
     // ------login Section------

      public function login(Request $request){
        return view('auth.login');
      }

      // ------Registration  Section------
      public function registration(Request $request){
       return view("auth.registration");
      }
 //---------- Admin Registration--------- 
      public function registration_user(Request $request){
           $request->validate([
             'user_name'=>'required',
             'user_email' => 'required|unique:users|max:255',
             'user_pass'   =>  'required|min:1',
             'user_conf_pass' => 'required|same:user_pass'
           ]);
           $user=new User();
           $user->user_name=$request->user_name;
           $user->user_email=$request->user_email;
           $user->user_pass=Hash::make($request->user_pass);



         if($request->hasFile('image')){
            // $file=$request->file('image');
            // $extension=$file->getClientOriginalExtension();
            // $filename=date("Ymd")."-".$extension;
            // $file->move(public_path().DIRECTORY_SEPARATOR.'images'.DIRECTORY_SEPARATOR.'studentProfile'.DIRECTORY_SEPARATOR, $filename);

            $image = $request->file('image');

          // $path = $request->image->getClientOriginalName();

          $file = $request->file('image')->getClientOriginalName();
           $fileName = pathinfo($file,PATHINFO_FILENAME);

            $student_image_name = date("Ymd").'-'.$fileName.".".$image->getClientOriginalExtension();
            $image->move(public_path().DIRECTORY_SEPARATOR.'images'.DIRECTORY_SEPARATOR.'studentProfile'.DIRECTORY_SEPARATOR, $student_image_name);
            // dd($student_image_name);
            $user->image=$student_image_name;
         }
 

           $request=$user->save();
            if($request){
                  return back()->with('success','You have registered successfully');
            }else{
                  return back()->with('fail','Something Wrong');
            }
      }
// -----------Login Access---------------
      public function login_user(Request $request){
         $request->validate([
             'user_email' => 'required',
             'user_pass' => 'required|min:1',
            ]);
         $user=User::where('user_email','=',$request->user_email)->first();
           if($user){
                if(Hash::check($request->user_pass,$user->user_pass)){
                  $request->Session()->put('user_email',$user->user_email);
                    return redirect('dashboard');
                   }else{
                     return back()->with('fail','Password not matches');
                    }
            }else{
                  return back()->with('fail','This email is not registered');
            }
      }

      // ---------------Admin user data show------------
public function dashboard(){
        $data=array();
         if(Session::has('user_email')){
             $data=User::where('user_email','=',Session::get('user_email'))->first();
         }
            return view('dashboard',compact('data'));
      }

// ----------------Staff Details -------------
public function User_Details(){
        $data=array();
         if(Session::has('user_email')){
             $data=User::where('user_email','=',Session::get('user_email'))->first();
         }
            return view('dashboard',compact('data'));
      }

// -----------Logout Admin-----------
public function logout(){
 if(Session::has('user_email')){
    Session::pull('user_email');
    return redirect('registration');
 }     
}
public function show_user_details(){
     return view('user_Details.user_details');
}

// ----------Display User Details----------
public function display_user_details(){
$users = UserDetails::where('auth_email', session('user_email'))->get();
return view('user_details.show_user_details', compact('users'));

// --------DB---------
// $users = DB::table('user_details')->where('auth_email', session('user_email'))->get();
// return view('user_details.show_user_details', compact('users'));

}

// ---------------Insert User Details-------------
public function insert_user_details(Request $request){
         $user=new UserDetails();
         $user->user_name=$request->user_name;
         $user->auth_email=$request->auth_email;
           $user->user_address=$request->user_address;
            $user->user_mob=$request->user_mob;
           $request=$user->save();
            if($request){
                  return back()->with('success','You have add successfully');
            }else{
                  return back()->with('fail','Something Wrong');
            }
}

// ------Display value into a form--------------
 public function edit_user($id){
        $user_update = UserDetails::where('auth_email', session('user_email'))->get()->find($id);
        return view('user_details/user_update')->with('user_update',$user_update);
    }
    // -------------Update user Details ---------
    public function update_user_details(Request $request){
        // return $request->input();
         $todo=UserDetails::where('auth_email', session('user_email'))->get()->find($request->id);
         $todo->user_name=$request->user_name;
         $todo->user_address=$request->user_address;
         $todo->user_mob=$request->user_mob;
         $todo->save();
         return redirect('show_user_details')->with('show', 'successfully Updated!');
    //   return redirect()->to('user_details')->with('show', 'successfully Updated!'); 
    }


    public function delete_user_details($id){


        $file = UserDetails::where('auth_email', session('user_email'))->get()->find($id); // File::find($id)
    if ($file != null) {
        $file->delete();
        $message="Successfully deleted!!";
        return redirect('show_user_details')->with('message', $message);
    }

    return redirect('show_user_details')->with(['message'=> 'Wrong ID!!']);
    }

    
}
