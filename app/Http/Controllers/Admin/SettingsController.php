<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SettingsController extends Controller
{

    public function index()
    {
        $telegram_info = Http::get('https://api.telegram.org/bot1703478656:AAFlrcxz1iBUOYfhJRWBEf9lFBFii_JyznI/getWebhookInfo')->body() ?? '';
        return view('admin.settings',['telegram_info'=> $telegram_info]);
    }


    public function addTelegramWebhook(Request $request)
    {
        Http::get('https://api.telegram.org/bot'.config('telegram.bots.mybot.token').'/setWebhook'.'?url='.$request->telegram_url);
        return $this->index();
    }
}
