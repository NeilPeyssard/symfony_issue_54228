<?php

namespace App\MessageHandler;

use App\Entity\Log;
use App\Message\LogMessage;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;

#[AsMessageHandler]
class LogMessageHandler
{
    public function __construct(private readonly EntityManagerInterface $em)
    {
    }

    public function __invoke(LogMessage $message): void
    {
        $log = new Log();
        $log->setMessage($message->getMessage());
//        $log->setType(100); // let this field empty to throw an error
        $this->em->persist($log);
        $this->em->flush();
    }
}
