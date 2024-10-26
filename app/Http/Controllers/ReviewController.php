<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Closure;

class ReviewController extends Controller
{
    public function index(Request $request){
//        return $request;
        $request->validate([
            'comment' => ['required'],
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
        Review::add($request);
        return back()->with('success', 'Thanks for your review!');
    }
    public function manage(){
        return view('admin.review.manage', [
            'reviews'=>Review::all()->sortByDesc('id')
        ]);
    }
    public function status($id){
        Review::changeStatus($id);
        return back()->with('message', 'Status Changed Successfully!!');
    }
    public function remove(Request $request){
        Review::remove($request->id);
        return back()->with('message', 'Review Removed Successfully!!');
    }
    public function bulkRemove(Request $request)
    {
        $ids = explode(',', $request->input('ids'));
        Review::destroy($ids);

        return redirect()->back()->with('message', 'Reviews Deleted Successfully.');
    }
}
