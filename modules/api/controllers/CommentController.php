<?php

namespace app\modules\api\controllers;

use app\models\CommentApi;

class CommentController extends \yii\web\Controller
{
    public $enableCsrfValidation = false;

    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     *
     */
    public function actionCreateComment()
    {
        \yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $comment = new CommentApi();
        $comment->scenario = CommentApi::SCENARIO_CREATE;
        $comment->attributes = \yii::$app->request->post();

        if($comment->validate())
        {
            $comment->save();
            return array('status' => true, 'data'=>"Comment created Successfully");
        }
        else {
            return array('status' =>false, 'data' =>$comment->getErrors());
        }

    }
    public function actionListcomment()
    {
        \yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $comment = CommentApi::find()->all();
        if (count($comment) > 0){
            return array('status'=>true, 'data'=>$comment);
        }else
        {
            return array('status'=>false, 'data'=>"No employees found");
        }

    }

}
