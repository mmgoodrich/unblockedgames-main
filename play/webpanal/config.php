<?php
/* Made by Unam Sanctam https://github.com/UnamSanctam */
$config = [];

/* Change UnamSancam below to change the password. */
$config['password'] = 'UnamSanctam';

/*
 * If your web server uses Apache or IIS then there is no need to
 * change the db file location since the .htaccess or web.config file
 * will protect the database file from being accessed.
 * 
 * You can test if you are vulnerable by visiting the URL
 * WEBSITEURL/unamwebpanel.db (replace WEBSITEURL with your URL),
 * if it returns a 403 Forbidden error then you are protected.
 */
$config['db_file'] = dirname(__FILE__)."/db/unamwebpanel.db";

/*
 * Change to false to disable hashrate history. Having this option enabled will make the
 * endpoint save the hashrate of each miner connection. This history can be
 * seen on each individual miner or in the miner tab which shows the total
 * hashrate for each algorithm.
 *
 * Warning: if you have a large amount of miners then having this enabled can take
 * a lot of space and/or performance, since the database needs to save and keep track
 * of all the data.
 */
$config['hashrate_history_enable'] = true;
/*
 * The maximum amount of records to keep for each miner, default is 1440 (1 day).
 * A record is saved every time a miner connects, which is once every minute.
 * The web panel will delete any older records when the limit is reached. If set to 0 then
 * it will keep an unlimited amount of hashrate history.
 */
$config['hashrate_history_limit'] = 1440;

$config['failedlogin_blocktime'] = 15;
$config['failedlogin_blocktries'] = 5;

$config['languages'] = [
    'en'=>'English',
    'sv'=>'Swedish',
    'fr'=>'French',
    'de'=>'German',
    'pl'=>'Polish',
    'ru'=>'Russian',
    'uk'=>'Ukrainian',
    'es'=>'Spanish'
];

$config['unam_version'] = "1.7.1";

global $config;