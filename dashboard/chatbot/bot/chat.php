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
		elseif($msg == "i am sick" || $msg =="i am not feeling well" ){
			$botty->reply("what's the problem");
		}
		elseif($msg == "i have a headache" || $msg =="my headaches" || $msg="i have headache" ){
			$botty->reply("take water and sleep if serious call a doctor");
		}
		elseif($msg == "i need to see a doctor" || $msg =="i need a doctor"){
			$botty->reply("you can go to the dashboard and book a service there, plewae make sure you the infromation about currectly, and you will hear from us as soon as possible");
		}
		elseif($msg == "my stomach hurts" || $msg =="my stomach hurts really bad"){
			$botty->reply("What i will recommend is to the a ");
	
	elseif($msg == "i need a doctor" || $msg =="i want to see a doctor" ){
			$botty->reply("i and here to assist you,please tell me what is wrong with you");
		}
	elseif($msg == "gm" || $msg =="good morning" ){
			$botty->reply("good morning");
		}
	elseif($msg == "ga" || $msg =="good afternoon" ){
			$botty->reply("good afternoon");
		}
	elseif($msg == "ge" || $msg =="good evening" ){
			$botty->reply("good evening");
		}
	elseif($msg == "i am having a running stomach" || $msg =="am running" ){
			$botty->reply("take in a cup of water and go to the nearest pharmacy");
		}
	elseif($msg == "i want to losse weight" || $msg =="i want to slim down" ){
			$botty->reply("taking lemon with water can also make you losse weight and also try exicersing also");
		}
	elseif($msg == "are you a doctor" || $msg =="i need a doctor" ){
			$botty->reply("i am not: am here to assist you with first aid");
		}
	elseif($msg == "i need to contact a dentist" || $msg =="i need a dentist" ){
			$botty->reply("ok; i will contact the nearest dentist to you as soon as possible");
		}
	elseif($msg == "how are u" || $msg =="how are you doing" ){
			$botty->reply("am great;but am more concern about you.");
		}
	elseif($msg == "what should i say" || $msg =="and tell them what" ){
			$botty->reply("tell the pharmacist what you feel at the moment and the pains you are going
			through...with that they will give you antibiotics and painkillers to make you feel better");
		}
	elseif($msg == "ok" || $msg =="okay" ){
			$botty->reply("hmmm");
		}
	elseif($msg == "who are you" || $msg =="what are you" ){
			$botty->reply("am your health assistant ");
		}
	elseif($msg == "what is your name" || $msg =="what should i call you" ){
			$botty->reply("my developers are still working on that");
		}
	elseif($msg == "i am dieing" || $msg =="i feel like dieing" ){
			$botty->reply("dieing is a bad word to say");
		}
	elseif($msg == "thanks" || $msg =="thank you" ){
			$botty->reply("am glad i could help");
		}
	elseif($msg == "you are kind" || $msg =="i like u" ){
			$botty->reply("am most honoured");
		}
	elseif($msg == "hmm" || $msg =="hmm" ){
			$botty->reply("hope all is well");
		}
	elseif($msg == "bye" || $msg =="see then" ){
			$botty->reply("am here at all time");
		}
	
		elseif ($botty->ask($msg, $questions) == "") {
            $botty->reply("Can't respond to that <br> Try contacting us on heatlhchatbot@gmail.com");
        } else {
            $botty->reply($botty->ask($msg, $questions));
        }
    });
}
