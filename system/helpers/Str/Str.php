<?php

class Str
{
    public static function lower($value)
    {
        return strtolower($value);
    }

    public static function slug($value, $separator = '-') {

        // Remove all characters that are not the separator, letters, numbers, or whitespace.
        $value = preg_replace('![^'.preg_quote($separator).'\pL\pN\s]+!u', '', static::lower($value));

        // Replace all separator characters and whitespace by a single separator
        $value = preg_replace('!['.preg_quote($separator).'\s]+!u', $separator, $value);

        return trim($value, $separator);
    }
}
