<?php

/**
 *
 *call this page with supervisor or cron-tab for call queue
 * supervisor.conf in main folder name as supervisor.conf
 * see the using supervisor
 */

require_once "vendor/autoload.php";


use Zeus\Dispatch;


(new Dispatch())->handle();



