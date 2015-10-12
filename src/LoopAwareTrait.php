<?php

namespace BBQueue\Queue;

use React\EventLoop\LoopInterface;

trait LoopAwareTrait
{
    /**
     * @param LoopInterface $loop
     *
     * @return void
     */
    public function setLoop(LoopInterface $loop)
    {
        $this->loop = $loop;
    }

    /**
     * @return LoopInterface
     */
    public function getLoop()
    {
        return $this->loop;
    }
}