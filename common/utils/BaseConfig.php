<?php

namespace common\utils;

use Symfony\Component\Yaml\Parser;

/**
 * Class BaseConfig
 * @package common\utils
 */
class BaseConfig
{
    private static $initializedConfig = false;

    /**
     * Init config file
     *
     * @param string $configFilePath
     */
    public static function initConfig($configFilePath)
    {
        if (self::$initializedConfig === false) {
            $yaml = new Parser();
            $value = $yaml->parse(file_get_contents($configFilePath));
            self::$initializedConfig = $value;
        }
    }

    /**
     * Return config value
     *
     * @param string $configName
     * @return string
     * @throws \Exception
     */
    public static function getConfig($configName)
    {
        if (self::$initializedConfig === false) {
            throw new \Exception('Init project config');
        }

        $configSegments = explode('.', $configName);
        $config = self::$initializedConfig;
        foreach ($configSegments as $configSegment) {
            if (!isset($config[$configSegment])) {
                throw new \Exception('Could\'t find config along the path ' . $configName);
            }
            $config = $config[$configSegment];
        }

        return $config;
    }
}
