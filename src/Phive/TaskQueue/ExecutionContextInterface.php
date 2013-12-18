<?php

namespace Phive\TaskQueue;

interface ExecutionContextInterface
{
    /**
     * @return \Phive\Queue\Queue\QueueInterface
     */
    public function getQueue();

    /**
     * @return \Psr\Log\LoggerInterface
     */
    public function getLogger();
}
