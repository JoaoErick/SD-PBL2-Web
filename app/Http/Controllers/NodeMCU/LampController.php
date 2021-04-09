<?php

namespace App\Http\Controllers\NodeMCU;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\NodeMCU\Lamp;
use PhpMqtt\Client\Facades\MQTT;

class LampController extends Controller
{
    /*
    * Função para ligar e desligar a lâmpada.
    */
    public function toggleLamp()
    {
        $lamp = Lamp::get()->first();
        
        $mqtt = MQTT::connection();
        $mqtt->publish('lampInTopic', '{"LED_Control": '.$lamp->on.',}');
        $lamp->on = !$lamp->on;

        $lamp->save();

        return redirect()->back();
    }
}
