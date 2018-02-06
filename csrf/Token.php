<?php 

class Token
{
    /**
     * Generate random value for tokenizing
     * @return string random character and number
     */
    public static function generate()
    {
        //$token = md5(uniqid(rand(), TRUE));
        return $_SESSION['token'] = base64_encode(openssl_random_pseudo_bytes(32));
    }

    /**
     * check is token valid or not
     * @param  string $token random value from generated form
     * @return boolean        
     */
    public static function check($token)
    {
        if(isset($_SESSION['token']) && $token === $_SESSION['token'])
        {
            unset($_SESSION['token']);
            return true;
        }
    }
}