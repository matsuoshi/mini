<?php
namespace MyApp;

use Monolog;
use Monolog\Logger;
use Monolog\Handler\RotatingFileHandler;
use Cake\Chronos\Chronos;


/**
 * @package MyApp
 */
class Sample
{
    public $log;
    const LOG_FILE = __DIR__ . '/../log/contact.log';


    /**
     * FormApi constructor.
     */
    public function __construct()
    {
        // setting monolog
        $this->log = new Logger('contact');
        $this->log->pushProcessor(new Monolog\Processor\WebProcessor);

        // ログローテーション
        $rfh = new RotatingFileHandler(self::LOG_FILE, 24, Logger::INFO, true, 0666);
        $rfh->setFilenameFormat('{date}', RotatingFileHandler::FILE_PER_MONTH);
        $this->log->pushHandler($rfh);
    }


    public function example($a)
    {
        return !$a;
    }
}
