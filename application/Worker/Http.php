<?php
namespace app\Worker;
use Channel\Client;
use think\worker\Server;

class Http extends Server
{
    protected $socket = 'websocket://0.0.0.0:55555';
    public function onWorkerStart($worker)
    {
        Client::connect('0.0.0.0', 2206);
        $event_name = 'event_xxxx';
        Client::on($event_name, function($event_data)use($worker){
            foreach($worker->connections as $connection)
            {
                $connection->send(json_encode($event_data));
            }
        });
    }
    public function onMessage($connection,$data)
    {
        $event_name = 'event_xxxx';
        $event_data = array('some data.', 'some data..');
        Client::publish($event_name, $event_data);
        $connection->send(json_encode($data));
    }
}