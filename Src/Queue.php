<?php


namespace Zeus;

abstract class Queue
{
    abstract function handle(): void;
}