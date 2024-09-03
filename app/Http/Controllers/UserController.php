<?php

namespace App\Http\Controllers;

use App\Models\transaksi;
use App\Models\User;
use Faker\Guesser\Name;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function Laravel\Prompts\password;

class UserController extends Controller
{
    

    public function auth(Request $request){
    
        $validate = $request->validate([
        'email' => ['required','email'],
        'password' =>['required']
    ]);
    if (Auth::attempt($validate)) {
        return redirect('/index')->with('pesan','succes');
        
    }
    return redirect()->back()->with('pesan','failed');
}
public function index(){
    return view('index');
}
public function register(){
    return view('register');
}

public function createuser(Request $request){
    User::create([
        'name' => $request->name,
        'email' => $request->email,
        'level' => "pelanggan",
        'password' => bcrypt($request->password),
    ]);
    return redirect('/');
}
public function admin(){
    $data ['user'] = transaksi::all();
    $data ['total_user'] = $data ['user']->count();

    return view('admin',$data);
}
public function viewcreate(){
    return view('transaksi');
}
public function usercreate(Request $request){
    transaksi::create([
        'user_id' => $request->user_id,
        'Game_type' => $request->Game_type,
        'jenis_pembayaran' => $request->jenis_pembayaran,
        'harga' => $request->harga,
        'transaction_date' => $request->transaction_date,
    ]);
    return redirect('/user');
}
public function BuyNow(Request $request){
    $user = Auth::user();
    transaksi::create([
        'user_id' => $request->user_id,
        'Game_type' => $request->Game_type,
        'jenis_pembayaran' => $request->jenis_pembayaran,
        'harga' => $request->harga,
        'transaction_date' => $request->transaction_date,
    ]);
    return redirect('/user/viewcreate');

}
public function delete(Request $request){
    transaksi::where('id',$request->id)->delete();
    return redirect('/user');
}
public function viewedit(Request $request){
    $data ['user'] = transaksi::find($request->id);
    return view('user-edit',$data);
}
public function edit(Request $request){
    $transaksi = transaksi::where('id',$request->id)->first();
    $transaksi->update([
        'user_id' => $request->user_id,
        'Game_type' => $request->Game_type,
        'harga' => $request->harga,
        'transaction_date' => $request->transaction_date,
    ]);
    return redirect('/user');
}
public function logout(){
    Auth::logout();
    return redirect('/');
}

}

