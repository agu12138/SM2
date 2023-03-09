<?php

namespace venyuansm2;

class SM2
{


    var $privateKey = "";

    var $publicKey = "";

    function __construct($publicKey, $privateKey)
    {
        if ($publicKey && $privateKey) {
            $this->publicKey = $publicKey;
            $this->privateKey = $privateKey;
        }
    }
    /**
     * string value
     */
    function encrypt($value)
    {
        return shell_exec("java -jar " . dirname(__FILE__) . DIRECTORY_SEPARATOR . "SM2.jar -e " . $value . " $this->publicKey $this->privateKey");
    }

    /**
     * string value
     */
    function decrypt($value)
    {
        return shell_exec("java -jar " . dirname(__FILE__) . DIRECTORY_SEPARATOR . "SM2.jar -d " . $value . " $this->publicKey $this->privateKey");
    }
}
