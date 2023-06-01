<?php

declare(strict_types=1);

namespace BackHUB\Wlntz;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\player\Player;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase
{

    protected function onEnable(): void
    {
        $this->getLogger()->info("Plugin ini Enabled !");
    }

    public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool
    {
        switch ($command->getName()) {
            case "hub":
                if($sender instanceof Player) {
                    $world = $this->getServer()->getWorldManager()->getWorldByName("Hub");
                    $position = $world->getSpawnLocation();
                    // position world
                    // location world yaw pitch
                    $sender->teleport($position);
                }
             return true;
            default:
            throw new \AtionErsserror("This line will Never execute"); 
        }
    }
}