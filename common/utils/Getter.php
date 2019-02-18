<?php

namespace common\utils;

use Yii;

/**
 * Class Getter
 * @package common\utils
 */
class Getter
{
    /**
     * Return security component
     *
     * @return \yii\base\Security
     */
    public function getSecurity()
    {
        return Yii::$app->getSecurity();
    }

    /**
     * Return mailer component
     *
     * @return \yii\mail\MailerInterface
     */
    public function getMailer()
    {
        return Yii::$app->getMailer();
    }

    /**
     * Return cache component
     *
     * @return \yii\caching\CacheInterface
     */
    public function getCache()
    {
        return Yii::$app->getCache();
    }

    /**
     * Return database component
     *
     * @return \yii\db\Connection
     */
    public function getDb()
    {
        return Yii::$app->getDb();
    }

    /**
     * Return database component
     *
     * @return \yii\di\Container
     */
    public function getContainer()
    {
        return Yii::$container;
    }

    /**
     * Return user component
     *
     * @return \yii\web\User
     */
    public function getUser()
    {
        return Yii::$app->getUser();
    }

    /**
     * Return request component
     *
     * @return \yii\console\Request|\yii\web\Request
     */
    public function getRequest()
    {
        return Yii::$app->getRequest();
    }

    /**
     * Return session component
     *
     * @return \yii\web\Session
     */
    public function getSession()
    {
        return Yii::$app->getSession();
    }

    /**
     * Return alias
     *
     * @param $alias
     * @param bool $throwException
     * @return bool|string
     */
    public function getAlias($alias, $throwException = true)
    {
        return Yii::getAlias($alias, $throwException);
    }

    /**
     * Return app component
     *
     * @return \yii\console\Application|\yii\web\Application
     */
    public function getApp()
    {
        return Yii::$app;
    }

    /**
     * Return auth manager component
     *
     * @return \yii\rbac\ManagerInterface
     */
    public function getAuthManager()
    {
        return Yii::$app->getAuthManager();
    }
}
