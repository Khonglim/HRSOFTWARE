<?php

namespace App\Http\Controllers;
use App\Extensions\MongoSessionStore;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\User;
class User_settingController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        $data = array( 'user' => $user

        );
       return view('auth.user',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth.create_user');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|string|max:255',
          
            'password' => 'required|string|min:6|confirmed',
        ]);
        $user = new User;
        $user->name = $request->name;
        $user->password = bcrypt($request->password);
        $user->isAdmin = $request->isAdmin;
        $user->save();
        Session::flash('flash_message','บันทึกสำเร็จ!!');
        return redirect('user_setting');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if($id !== '') {
            $user = User::find($id);
           
    
            $data = array(
                'user' => $user
            );
            return view('auth/edit_user',$data);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->password = bcrypt($request->password);
        $user->isAdmin = $request->isAdmin;
        $user->save();
        Session::flash('flash_message','อัพเดทข้อมูลสำเร็จ!!');
        return redirect('user_setting');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lib = User::find($id);
        $lib->delete();
        Session::flash('flash_message', 'ลบสำเร็จ!!');
        return redirect('user_setting');
    }
}
