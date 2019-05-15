<?php


/**
 * @param callable $callable
 *
 */
function dispatch(callable $callable): void
{
    $redis = redis();

    $redis->lpush("my_list", [serialize($callable)]);

    echo "queued" . PHP_EOL;
}


/**
 * @return \Predis\Client
 *
 *
 */
function redis()
{

    return new \Predis\Client();
}