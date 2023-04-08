<?php
require_once "vendor/autoload.php";
 
use Google\Cloud\Translate\V2\TranslateClient;
 
try {
    $translate = new TranslateClient([
        'keyFilePath' => 'key'
    ]);
 
    $result = $translate->translate('Hello world!', [
        'target' => 'fr' // 'fr' is a ISO-639-1 code
    ]);
 
    echo $result['text'];
} catch(Exception $e) {
    echo $e->getMessage();
}
?>