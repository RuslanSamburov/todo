<?php

namespace App\Services;

class FormatData
{
    public const DEFAULT = [];

    public static function defaultValues(array $currents, array $defaults): array
    {
        foreach ($currents as &$current) {
            if (is_array($current)) {
                foreach ($defaults as $defaultKey => $default) {
                    if (!isset($current[$defaultKey]) || (is_array($current[$defaultKey]) && empty($current[$defaultKey]))) {
                        $current[$defaultKey] = $default;
                    } else if (is_array($current[$defaultKey])) {
                        $current[$defaultKey] = self::defaultValues($current[$defaultKey], $default);
                    }
                }
            }
        }
        return $currents;
    }

    public function __get(string $name): mixed
    {
        return isset($this->$name) ? self::defaultValues($this->$name, static::DEFAULT) : null;
    }
}
