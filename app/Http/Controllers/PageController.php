<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Commet;
use App\Models\Slide;
use App\Models\Bill;
use App\Models\Bill_detail;
use App\Models\Customer;
use App\Models\User;
use App\Models\Cart;
use App\Models\NguoiDung;
use App\Login;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Auth;
use Session;
use Mail;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class PageController extends Controller
{
    //
    public function getIndex(){
        $new_product = Product::where('new',1)->orderBy('id','desc')->paginate(8);
        $sanpham_khuyenmai = Product::where('discount','<>',0)->paginate(4);
        return view('users.page.trangchu',compact('new_product','sanpham_khuyenmai'));
    }

    public function getLoaiSp($type){
        $sp_theoloai = Product::where('idcat',$type)->get();
        $sp_khac = Product::where('idcat','<>',$type)->paginate(3);
        $loai = Category::all();
        $loai_sp = Category::where('id',$type)->first();
    	return view('users.page.loai_sanpham',compact('sp_theoloai','sp_khac','loai','loai_sp'));
    }

    public function getChitiet(Request $req,$id){
        $sanpham = Product::where('id',$req->id)->first();
        $data=Commet::where('id_com',$id)->get();
        $sp_tuongtu = Product::where('idcat',$sanpham->id_type)->paginate(6);
    	return view('users.page.chitiet_sanpham',compact('sanpham','sp_tuongtu','data'));
    }


    public function postComment(Request $request,$id)
    {
       $comment=new Commet;
       $comment->name=$request->name;
       $comment->email=$request->email;
       $comment->content=$request->content;
       $comment->id_com=$id;
       $comment->save();
       return back();
    }
    public function getLienHe(){
    	return view('users.page.lienhe');
    }

    public function getGioiThieu(){
    	return view('users.page.gioithieu');
    }

    public function getGioHang(){
        return view('users.page.giohang');
    }

    public function getAddtoCart(Request $req,$id){
        $product = Product::find($id);
        $oldCart = Session('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->add($product, $id);
        $req->session()->put('cart',$cart);
        return redirect()->back();
    }


    public function getDelItemCart($id){
        $oldCart = Session::has('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);
        if(count($cart->items)>0){
            Session::put('cart',$cart);
        }
        else{
            Session::forget('cart');
        }
        return redirect()->back();
    }

    public function getCheckout(){
        return view('users.page.dat_hang');
    }



    public function postCheckout(Request $req) {
        $cart = Session::get('cart');

        // Lưu thông tin khách hàng
        $customer = new Customer;
        $customer->name = $req->name;
        $customer->gender = $req->gender;
        $customer->email = $req->email;
        $customer->address = $req->address;
        $customer->phone_number = $req->phone;
        $customer->note = $req->notes;
        $customer->save();

        // Lưu thông tin hóa đơn
        $bill = new Bill;
        $bill->id_customer = $customer->id;
        $bill->date_order = date('Y-m-d');
        $bill->total = $cart->totalPrice;
        $bill->payment = $req->payment_method;
        $bill->note = $req->notes;
        $bill->save();

        // Lưu chi tiết hóa đơn
        foreach ($cart->items as $key => $value) {
            $bill_detail = new Bill_detail;
            $bill_detail->id_bill = $bill->id;
            $bill_detail->id_products = $key;
            $bill_detail->quantity = $value['qty'];
            $bill_detail->price = ($value['price'] / $value['qty']);
            $bill_detail->save();
        }

        // Xóa giỏ hàng
        Session::forget('cart');

        // Gửi email xác nhận đặt hàng
        $this->sendOrderConfirmationEmail($customer, $cart);

        return redirect()->back()->with('thongbao', 'Đặt hàng thành công');
    }

// Hàm gửi email xác nhận
    private function sendOrderConfirmationEmail($customer, $cart) {
        $mail = new PHPMailer(true);

        try {
            // Cấu hình SMTP
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com'; // SMTP server (Gmail)
            $mail->SMTPAuth = true;
            $mail->Username = 'your-email@gmail.com'; // Email của bạn
            $mail->Password = 'your-app-password'; // Mật khẩu ứng dụng Gmail
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port = 465;

            // Cấu hình người gửi và người nhận
            $mail->setFrom('your-email@gmail.com', 'Your Shop Name');
            $mail->addAddress($customer->email, $customer->name);

            // Chuẩn bị nội dung email
            $orderDetails = '';
            foreach ($cart->items as $item) {
                $orderDetails .= "- Sản phẩm: {$item['item']->name}, Số lượng: {$item['qty']}, Giá: " . number_format($item['price']) . " VND<br>";
            }

            $mail->isHTML(true);
            $mail->Subject = 'Xác nhận đặt hàng thành công';
            $mail->Body    = "
            <h1>Chào {$customer->name},</h1>
            <p>Cảm ơn bạn đã đặt hàng tại cửa hàng của chúng tôi!</p>
            <h3>Chi tiết đơn hàng:</h3>
            {$orderDetails}
            <p><b>Tổng tiền:</b> " . number_format($cart->totalPrice) . " VND</p>
            <p>Chúng tôi sẽ xử lý đơn hàng của bạn sớm nhất.</p>
            <p>Trân trọng,<br/><b>Your Shop Name</b></p>
        ";

            // Gửi email
            $mail->send();
        } catch (Exception $e) {
            \Log::error("Không thể gửi email: {$mail->ErrorInfo}");
        }
    }

    public function getLogin(){
        return view('users.page.dangnhap');
    }
    public function getSignin(){
        return view('users.page.dangky');
    }

    public function getSearch(Request $request){
        $product=Product::where('name','like','%'.$request->key.'%')
       ->orWhere('price',$request->key)->get();
        return view('users.page.search',compact('product'));

    }

    public function postSignin(Request $req){
        $this->validate($req,
            [   'diachi'=>'required',
                'dienthoai'=>'required',
                'email'=>'required|email|unique:users,email',
                'password'=>'required|min:6|max:20',
                'name'=>'required',
                're_password'=>'required|same:password'
            ],
            [
                'email.required'=>'Vui lòng nhập email',
                'email.email'=>'Không đúng định dạng email',
                'password.required'=>'Vui lòng nhập mật khẩu',
                're_password.same'=>'Mật khẩu không giống nhau',
                'password.min'=>'Mật khẩu ít nhất 6 kí tự'
            ]);
        $user = new User();
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $user->dienthoai = $req->dienthoai;
        $user->diachi = $req->diachi;
        $user->save();
        return redirect()->back()->with('thanhcong','Tạo tài khoản thành công');
    }

    public function postLogin(Request $request){
        $login = [
            'email' => $request->email,
            'password' => $request->password,
            //'trangthai'   =>"active"
        ];
        if (Auth::attempt($login)) {
            return redirect('/')->with('name');
        } else {
            return redirect()->back()->with('status', 'Email hoặc Password không chính xác');
        }

    }
    public function postLogout(){
        Auth::logout();
        return redirect()->route('trang-chu');
    }

    public function getDonHang()
    {
        $donhang =Customer::all();
        $hd=Bill_detail::all();
        return view('users.page.donhang',compact('donhang','hd'));
    }


}
