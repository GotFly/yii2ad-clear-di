<?php

namespace common\components;

use Yii;
use yii\base\Event;
use yii\web\NotFoundHttpException;

/**
 * Class ResponseBeforeSendEvent
 *
 * @package api\components
 */
class ResponseBeforeSendEvent
{
    /**
     * Response before send
     *
     * @param Event $event
     */
    static public function run(Event $event)
    {
        $response = $event->sender;
        $exception = \Yii::$app->getErrorHandler()->exception;
        if ($exception instanceof \Exception) {
            $response->data = [
                'success' => false,
                'message' => 'Internal Server Error',
            ];
            $response->statusCode = 500;
            Yii::error($exception->getMessage());
        }

        if ($exception instanceof NotFoundHttpException) {
            $response->data = [
                'success' => false,
                'message' => $exception->getMessage(),
            ];
            $response->statusCode = 404;
        }
    }
}
