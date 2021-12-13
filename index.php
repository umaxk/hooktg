<?php
/**
 * create webhook telegram bot
 */
$token = 'token_bot';
$botUrl = 'https://url_to_bot/';
$createHookUrl = 'https://api.telegram.org/bot'.$token.'/setWebhook?url='.$botUrl;

var_dump(file_get_contents($createHookUrl));
?>