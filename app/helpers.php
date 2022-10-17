<?php
/**
 * Created by PhpStorm.
 * User: metehan
 * Date: 12.01.2018
 * Time: 20:45
 */

if (!function_exists('ara')) {
    /**
     * Return the given object. Useful for chaining.
     *
     * @param  mixed $object
     * @return mixed
     */
    function ara($bas, $son, $yazi)
    {
        @preg_match_all('/' . preg_quote($bas, '/') .
            '(.*?)' . preg_quote($son, '/') . '/s', $yazi, $m);
        return @$m[1];
    }
}

if (!function_exists('url_get_contents')) {
    /**
     * Return the given object. Useful for chaining.
     *
     * @param  mixed $object
     * @return mixed
     */
    function url_get_contents($Url)
    {
        if (!function_exists('curl_init')) {
            return false;
        }
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $Url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $output = curl_exec($ch);

        /* Check for 404 (file not found). */
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        if ($httpCode == 404) {
            /* Handle 404 here. */
            return false;
        }
        curl_close($ch);
        return $output;
    }
}