<?php
include "Bot.php";
$bot = new Bot;
$questions = [
    "what is php" => "PHP is a server side language",
	"i'm not feeling well"=>"why the problem",
    "what is your name" => "My name is " . $bot->getName(),
    "what is your gender" => "I am a " . $bot->getGender(),
    "what's your name" => "My name is " . $bot->getName()
];

if (isset($_GET['msg'])) {
    $msg = strtolower($_GET['msg']);
    $bot->hears($msg, function (Bot $botty) {
        global $msg;
        global $questions;
        if ($msg == 'hi' || $msg == "hello") {
            $botty->reply('Hello there!');
        } 
		elseif($msg == "i'm sick" || $msg =="i'm not feeling well" ){
			$botty->reply("what's the problem");
		}
		elseif($msg == "i have a headache" || $msg =="my head aches" ){
			$botty->reply("take water and sleep if serious call a doctor");
		}
	
		elseif ($botty->ask($msg, $questions) == "") {
            $botty->reply("Can't respond to that <br> Try contacting us on dante@gmail.com");
        } else {
            $botty->reply($botty->ask($msg, $questions));
        }
    });
}
