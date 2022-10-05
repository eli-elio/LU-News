<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CommentsController extends Controller
{
    public function capthcaFormValidate(Request $request)
    {
        $request->validate([
            'text' => 'required',
            'captcha' => 'required|captcha'
        ]);

        $comment = new Comment([
            'article_id' => $request->get('article_id'),
            'text' => $request->get('text'),
            'captcha' => $request->get('captcha')
        ]);

        $comment->save();

        return Redirect::to('/');
    }

    public function reloadCaptcha()
    {
        return response()->json(['captcha'=> captcha_img()]);
    }
}
