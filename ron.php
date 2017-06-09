<?php

$ronFacts = array(
	"When Ron codes, he does it on top of a Jenga tower.",
	"Ron's blood is now 82% beer.",
	"Every time Ron commits code, a delicious candy disappears from somewhere in the world.",
	":cat2: :gun: ",
	":rj0::rj1::rj2::rj3:\n:rj4::rj5::rj6::rj7:\n:rj8::rj9::rj10::rj11:\n:rj12::rj13::rj14::rj15:",
	"Now breaks my wooden shoe",
	"jup jup jup",
	"Why have a beer if you can have two",
	"And I swear!!",
	"This is bullshit!!"
);

///////////////////////////////////////////////////////////////////////////////

$rand = array_rand($ronFacts);

// see https://api.slack.com/slash-commands
$slack_msg = array(
	'response_type' => 'in_channel',
	'text' => $ronFacts[$rand]
);

header('Content-Type: application/json');
print(json_encode($slack_msg));
