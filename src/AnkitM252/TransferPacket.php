<?php
namespace AnkitM252;

use pocketmine\network\protocol\DataPacket;

class TransferPacket extends DataPacket{
    const NETWORK_ID = 0x52;
	
    public $address;
    public $port;
    public function decode(){
    }
    public function encode(){
        $this->reset();
        $this->putString($this->address);
        $this->putLShort($this->port);
    }
}