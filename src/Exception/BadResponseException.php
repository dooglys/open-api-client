<?php

namespace Dooglys\Api\Exception;

use Throwable;

/**
 * Class BadResponseException
 */
class BadResponseException extends \Exception
{

    /**
     * @var
     */
    protected $data;

    /**
     * BadResponseException constructor.
     * @param string $message
     * @param int $code
     * @param Throwable|null $previous
     * @param $data
     */
    public function __construct($message = "", $code = 0, Throwable $previous = null, array $data = [])
    {
        $this->data = $data;
        parent::__construct($message, $code, $previous);
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

}