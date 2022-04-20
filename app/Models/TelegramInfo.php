<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class TelegramInfo extends Model
{
    protected $table = 'telegram_info';

    static public function create($data,$user_id){
        Log::error($data);
//        $telegram = new self();
//        $telegram->chat_id = $data['chat_id'] ?? 0;
//        $telegram->user_id = $user_id ?? 1;
//        $telegram->telegram_info = $data ?? null;
//        $telegram->created_at = now();
//        $telegram->updated_at = now();
//        $telegram->save();

    }

}
