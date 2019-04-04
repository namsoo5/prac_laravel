<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Common\C;
use App\Model\User;
use Auth;

class UserController extends Controller
{
    public function users(){
	$user = User::get();

	if(empty($user)){
		return C::RESULT_ARRAY_ERROR("can not find object!!!!!!!!!!!");
	}
	return C::RESULT_ARRAY_SUCCESS($user);  
	
	}

    public function userNameCheck($name){

	$user =User::where('name',$name)
                ->get();

	if($user->isEmpty())
	{
          return C::RESULT_ARRAY_OK();
	}	
	  return C::RESULT_ARRAY_ERROR("name is exist");
	}

	public function userIdCheck($Id){
        $user = User::where('email',$Id)
                ->get();
        if($user->isEmpty())
        {
            return C::RESULT_ARRAY_OK();
        }
        return C::RESULT_ARRAY_ERROR("Id is exist");
    }

	public function userStore()
    {
        $user = new User;
        $user->name= request('name','');

        $user->email=request('email','');

        $user->Image=request('Image','');

        $user->password=bcrypt(request('password',''));

        $user->save();

        return C::RESULT_ARRAY_SUCCESS($user);
    }

    public function userDelete($index)
    {
        $user=User::find($index);

        if(empty($user))
        {
            return C::RESULT_ARRAY_ERROR('can not find object');
        }
        $user->del_yn=1;
        $user->save();

        return C::RESULT_ARRAY_SUCCESS($user);


    }
    public function userLogin(Request $request)
    {
        $id=request('Id','');

        $pwd=request('password','');

        if (Auth::attempt(['email' => $id, 'password' => $pwd])) {


            $user=User::find($id);

            return C::RESULT_ARRAY_SUCCESS($user);
            // Authentication passed...
//            return redirect()->intended('dashboard');
        } else {
            echo "auth fail";
        }
    }

}
