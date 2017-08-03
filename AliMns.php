<?php
namespace phpmatt\aliyunmns;
require_once(__DIR__.'/src/mns-autoloader.php');

use yii\base\Controller;
use AliyunMNS\Client;
use AliyunMNS\Topic;
use AliyunMNS\Model\MailAttributes;
use AliyunMNS\Model\SmsAttributes;
use AliyunMNS\Model\BatchSmsAttributes;
use AliyunMNS\Model\MessageAttributes;
use AliyunMNS\Exception\MnsException;
use AliyunMNS\Requests\PublishMessageRequest;

class AliMns extends Controller
{
  public $endPoint = '';
  public $accessId = '';
  public $accessKey = '';
  public static $client;

  public function __construct($endPoint, $accessId, $accessKey)
  {
    $this->client = new Client($endPoint, $accessId, $accessKey);
  }

  public static function Send()
  {
    return self::$client;
  }
}
