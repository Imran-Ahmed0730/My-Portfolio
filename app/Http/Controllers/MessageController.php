<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Closure;

class MessageController extends Controller
{
    public function index(Request $request){
//        return $request;
        $request->validate([
            'message' => ['required'],
            'name' => ['required'],
            'email' => ['required', 'email'],

            'g-recaptcha-response' => ['required', function (string $attribute, mixed $value, Closure $fail): void
            {
                $g_response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
                    'secret' => config('services.recaptcha.secret_key'),
                    'response' => $value,
//                    'remoteip' => $request->ip(),
                ]);
//                dd($g_response->json());

                if (!$g_response->json('success')) {
                    $fail('reCAPTCHA validation failed, please try again.');
                }
            }
            ],
        ]);

        Message::add($request);
        return back()->with('success', 'Thanks for your message!');
    }
    public function manage(){
        return view('admin.message.manage', [
            'messages'=>Message::all()->sortByDesc('id')
        ]);
    }

    public function status($id){
        Message::changeStatus($id);
        return back()->with('message', 'Status Changed Successfully!!');
    }
    public static function changeStatus($id){
        self::$message = Message::find($id);
        if(self::$message->status == 0){
            self::$message->status = 1;
        }
        else{
            self::$message->status = 0;
        }
        self::$message->save();
    }
    public function remove(Request $request){
        Message::remove($request->id);
        return back()->with('message', 'Review Removed Successfully!!');
    }
    public function bulkRemove(Request $request)
    {
        $ids = explode(',', $request->input('ids'));
        Message::destroy($ids);

        return redirect()->back()->with('message', 'Messages Deleted Successfully.');
    }
}
