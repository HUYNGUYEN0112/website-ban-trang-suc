<?php
namespace App\Http\Controllers\admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function __construct()
    {

    }
    public function getLogin()
    {
        if (Auth::check()) {
            return redirect('panel');
        } else {
            return view('admin.login');
        }
    }
    public function postLogin(request $request)
    {
        $login = [
            'email' => $request->txtEmail,
            'password' => $request->txtPassword,
            'trangthai'    =>"active"
        ];
        if (Auth::attempt($login)) {
        return redirect('panel');
        } else {
            return redirect()->back()->with('status', 'Email hoặc Password không chính xác');
        }

    }

    public function getLogout()
    {
        Auth::logout();
        return view('admin.login');
    }

    public function getDangky()
    {

        return view('admin.register');
    }

    public function postDangKy(Request $request)
    {
        $this->validate($request,
        [
            'trangthai'=>'required',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|min:6|max:20',
            'name'=>'required',
            're_password'=>'required|same:password'
        ],
        [
            'email.required'=>'Vui lòng nhập email',
            'email.email'=>'Không đúng định dạng email',
            'email.unique'=>'Email đã có người sử dụng',
            'password.required'=>'Vui lòng nhập mật khẩu',
            're_password.same'=>'Mật khẩu không giống nhau',
            'password.min'=>'Mật khẩu ít nhất 6 kí tự'
        ]);
    $user = new User();
    $user->name = $request->name;
    $user->email = $request->email;
    $user->password = Hash::make($request->password);
    $user->trangthai=$request->trangthai;
    $user->save();
    return redirect()->back()->with('thanhcong','Tạo tài khoản thành công');
    }
}
?>
