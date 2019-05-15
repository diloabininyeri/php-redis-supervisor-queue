<?php


namespace Zeus;


class Dispatch
{

    private $redis;


    /**
     * Dispatch constructor.
     *
     */
    public function __construct()
    {

        $this->redis = redis();
    }


    /**
     *
     */
    function handle():void
    {


        [$class] = $this->redis->lrange('my_list', 0, 1);
        $class = unserialize($class);
        $class->handle();
        $this->redis->lpop("my_list");
    }

}