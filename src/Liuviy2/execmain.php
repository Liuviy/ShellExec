<?php

namespace Liuviy2;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class execmain extends PluginBase {
    public function onEnable() {}
    public function onCommand(CommandSender $p, Command $cmd, $label, array $args) {
        if ($cmd->getName() == "exec") {
            if (! isset($args[0])) {
                $args[0] = null;
            }
            if (! isset($args[1])) {
                $args[1] = ' ';
            }
            if (! isset($args[2])) {
                $args[2] = ' ';
            }
            if (! isset($args[3])) {
                $args[3] = ' ';
            }
            if (! isset($args[4])) {
                $args[4] = ' ';
            }
            if (! isset($args[5])) {
                $args[5] = ' ';
            }
            if (! isset($args[6])) {
                $args[6] = ' ';
            }
            if (! isset($args[7])) {
                $args[7] = ' ';
            }
            if (! isset($args[8])) {
                $args[8] = ' ';
            }
            if (! isset($args[9])) {
                $args[9] = ' ';
            }
            #$p->sendMessage($args[0] . " " . $args[1] . " " . $args[2] . " " . $args[3] . " " . $args[4] . " " . $args[5] . " " . $args[6] . " " . $args[7] . " " . $args[8] . " " . $args[9]);
            $cmdd = $args[0] . " " . $args[1] . " " . $args[2] . " " . $args[3] . " " . $args[4] . " " . $args[5] . " " . $args[6] . " " . $args[7] . " " . $args[8] . " " . $args[9];
            
            $p->sendMessage(shell_exec($cmdd));
        }
    }
}
?>