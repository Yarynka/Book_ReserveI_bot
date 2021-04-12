<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Telegram\Bot\Laravel\Facades\Telegram;

class TelegramController extends Controller
{

    public function Webhook(Request $request){
        Log::error($request->all());
    }
    public function test(){
        dd(Telegram::getUpdates());
//        $public_key = file_get_contents( 'YOURPUBLIC.pem');
        $bot = new telegram();
//dd($bot->setWebhook('http://f45953d34b57.ngrok.io/test');
        //        $telegram = new Api();
//        $params = [ 'url' => 'https://api.telegram.org/bot1703478656:AAFlrcxz1iBUOYfhJRWBEf9lFBFii_JyznI/setWebhook', ];

//        dd(Telegram::setWebhook($params));
        dd(Telegram::getUpdates());
//        dd(Telegram::getCommands());
    }
    //
//Route::get('/telegram_bot',function(){
//    $telegram = new  Api('BOT TOKEN');
//    $telegram->addCommand(\App\Commands\StartCommand::class);
//    dd($telegram);
//    dd(Telegram::addCommand(\App\Commands\StartCommand::class));
//    $command = new Telegram\Bot\Commands\HelpCommand();
//    /
//    dd($command);
//    $response = Telegram::getMe();
//    dd($response);
//    $botId = $response->getId();
//    $firstName = $response->getFirstName();
//    $username = $response->getUsername();
//    dd($botId,$firstName,$username);
//});

//Route::get('bot/sendmessage', 'App\Http\Controllers\TelegramController@test');


//Route::get('/bot/getupdates', function () {
//    $updates = Telegram::getUpdates();
//    dd($updates);
//    return '111';
//});

//Route::get('bot/sendmessage/1', function() {
//    Telegram::sendMessage([
//        'entities' => '1',
//        'chat_id' => '372636880',
//        'text' => 'Hello',
//        'reply_to_message_id' => 54,
//        'stickers' => [
//            "width" => 512,
//            "height" => 512,
//            "set_name" => "ResistanceDog",
//            "is_animated" => true,
//            "thumb" => [
//                "file_id" => "AAMCAgADGQEAAzZgcwqXl-ImdIuma43iQfOwwZi29QAC1gADVp29Cgl1yQziLyEKIlK5DwAEAQAHbQADnmQAAh4E",
//                "file_unique_id" => "AQADIlK5DwAEnmQAAg",
//                "file_size" => 6546,
//                "width" => 128,
//                "height" => 128,
//            ],
//              "file_id" => "CAACAgIAAxkBAAM2YHMKl5fiJnSLpmuN4kHzsMGYtvUAAtYAA1advQoJdckM4i8hCh4E",
//                  "file_unique_id" => "AgAD1gADVp29Cg",
//                  "file_size" => 5960,
//        ]
//
//    ]);
//    return;
//});

//Route::get('setWebhook',function(){
//    Telegram::sendMessage([
//        'entities' => '1',
//        'chat_id' => '372636880',
//        'text' => 'Hello',
//    ]);
//    return;
//});
//Route::post('test',function (\Illuminate\Http\Request $request){
//    \Illuminate\Support\Facades\Log::error($request->all());
//});
//
//Route::get('test',function (){
//    \Illuminate\Support\Facades\Log::error('test21');
//});
}
