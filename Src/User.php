<?php


namespace Zeus;


class User extends Queue
{


    public function __invoke()
    {
        // TODO: Implement __invoke() method.
    }

    /**
     *
     * even handle method have sleep method
     * but when call not waiting
     */
    function handle(): void
    {


        sleep(15);

        touch(time() . '_last_from_queue.txt');



    }


}