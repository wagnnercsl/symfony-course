<?php

namespace App\Service;

use Nexy\Slack\Client;
use App\Helper\LoggerTrait;
//use App\Helper\LoggerTrait\LoggerTrait;

class SlackClient
{
    use LoggerTrait;
    private $slack;
    

    public function __construct(Client $slack)
    {
        $this->slack = $slack;
    }


    public function sendMessage(string $from, string $message)
    {
        $this->logInfo('Beaming a message to Slack!', 
        [
            'message'=>$message
        ]);
        $slackMessage = $this->slack->createMessage();

			$slackMessage
				->from($from)
				->withIcon(':ghost:')
				->setText($message)
			;

			$this->slack->sendMessage($slackMessage);
    }

}