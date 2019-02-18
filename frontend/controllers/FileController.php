<?php

namespace frontend\controllers;

use yii\rest\Controller;

/**
 * Class FileController
 * @package api\modules\ver1_0\controllers
 */
class FileController extends Controller
{
    /**
     * @param string $id
     * @param \yii\base\Module $module
     * @param array $config
     */
    public function __construct(
        $id,
        $module,
        array $config = []
    ) {
        parent::__construct($id, $module, $config);
    }

    /**
     * Build file
     *
     * @return array
     */
    public function actionBuild()
    {
        return ['a' => 1, 'b' => 2];
    }

    /**
     * Download file
     *
     * @param string $id
     * @return string
     */
    public function actionDownload(string $id)
    {
        return $id;
    }

}
