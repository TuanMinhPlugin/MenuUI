<?php

namespace DevAqua\MenuUI;

use pocketmine\Server;
use pocketmine\Player;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\command\ConsoleCommandSender;

class Main extends PluginBase implements Listener{

	public function onEnable(): void{
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
		$this->getLogger()->Info("");
	}

	public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args): bool{
		switch($cmd->getName()) {
			case "menu":
			if(!($sender instanceof Player)){
                return true;
			}
		$this->Bruh($sender);
		}
		return true;
	}


	public function Bruh($sender){
		$api = $this->getServer()->getPluginManager()->getPlugin("FormAPI");
        $form = $api->createSimpleForm(function (Player $sender, $data){
        	$result = $data;
            if ($result == null) {
            }
			switch($data) {
				case 0;
				break;
				case 1:
				$this->getServer()->getCommandMap()->dispatch($sender, "help");
				break;
				case 2:
				$this->getServer()->getCommandMap()->dispatch($sender, "help");
				break;
				case 3:
				$this->getServer()->getCommandMap()->dispatch($sender, "help");
				break;
				case 4:
				$this->getServer()->getCommandMap()->dispatch($sender, "help");
				break;
				case 5:
				$this->getServer()->getCommandMap()->dispatch($sender, "help");
				break;
				case 6:
				$this->getServer()->getCommandMap()->dispatch($sender, "help");
				break;
				case 7:
				$this->getServer()->getCommandMap()->dispatch($sender, "help");
				break;
				case 8:
				$this->getServer()->getCommandMap()->dispatch($sender, "help");
				break;
				case 9:
				$this->getServer()->getCommandMap()->dispatch($sender, "help");
				break;
			}
		});
	    $form->setTitle("menu");
	    $form->addButton("exit");
	    $form->addButton("edit in main.php");
	    $form->addButton("edit in main.php");
	    $form->addButton("edit in main.php");
	    $form->addButton("edit in main.php");
	    $form->addButton("edit in main.php");
	    $form->addButton("edit in main.php");
	    $form->addButton("edit in main.php");
	    $form->addButton("edit in main.php");
	    $form->addButton("edit in main.php");
        $form->sendToPlayer($sender);
	}
}