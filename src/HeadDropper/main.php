<?php
namespace HeadDropper;

use pocketmine\event\player\PlayerDeathEvent;
use pocketmine\plugin\PluginBase;
use pocketmine\Player;
use pocketmine\event\Listener;
use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\item\Item;
use pocketmine\math\Vector3;

class Main extends PluginBase implements Listener {
	
	
    public function onEnable(){
        $this->getServer()->getPluginManager()->registerEvents($this,$this);
    }
    
    public function onDeath(PlayerDeathEvent $event){
        $event->setDrops(Item::Get(Item::SKULL:3, 0, 1));
        }
}
    public function onDisable(){
    }
		$player->sendMessage("You received a head!");
	}
}
	
