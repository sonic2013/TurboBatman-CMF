<?php
/**
 * Cookies helper
 */
class Cookies
{
    /**
     * @static
     * @param string|array $data
     * @return bool|string|array
     */
    public static function get($data)
    {
        if (!is_array($data))
        {
            return isset($_COOKIE[$data]) ?
                htmlspecialchars($_COOKIE[$data], ENT_QUOTES) : false;
        }
        else
        {
            $return = array();
            foreach ($data as $key)
                $return[] = self::get($key);
            return $return;
        }
    }

    /**
     * @static
     * @param string|array $key
     * @param string $value
     * @param bool|int $time
     * @param string $path
     * @param bool|string $host
     */
    public static function set($key, $value = '', $time = false, $path = '/', $host = false)
    {
        if (is_array($key))
        {
            foreach ($key as $k => $v)
            {
                if (is_int($k))
                {
                    $k = $v;
                    $v = '';
                }

                self::set($k, $v, $time, $path, $host);
            }
        }
        else
        {
            $time = ($time !== false) ? $time : time() + 28080000;
            $host = ($host !== false) ? $host : ".{$_SERVER['HTTP_HOST']}";
            setcookie($key, $value, $time, $path, $host);
        }
    }
}
