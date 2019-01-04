<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function changeLanguage($language)
    {

        dd(__('language.list_post'));
        // Tạo session và gán giá trị ngôn ngữ được chọn từ view
        Session::put('language', $language);
        return redirect()->back();

    }
}
