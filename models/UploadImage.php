<?php

namespace kouosl\yemekhane\models;

use kouosl\yemekhane\Module;
use Yii;

/**
 * This is the model class for table "yemekhanes".
 *
 * @property string $imageFile
 *
 *
 */
class UploadImage extends \yii\base\Model
{


    /**
     * @var UploadedFile
     */
    public $imageFile;
    public $imageName;
    public function rules()
    {
        return [
            [['imageFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png,jpg'],
        ];
    }

    public function upload()
    {

        if ($this->validate()) {

            $this->imageName = Yii::$app->security->generateRandomString(16) . '.' . $this->imageFile->extension;

            $imagePath = sprintf("%s/yemekhanes/%s",Yii::getAlias ( '@data' ),$this->imageName);

            if (!$this->imageFile->saveAs($imagePath)) {
                yii::$app->session->setFlash('flashMessage', ['type' => 'error', 'message' => Module::t('yemekhane', 'File not uploaded.' )]);
            }

            return $this->imageName;

        } else {

            yii::$app->session->setFlash('flashMessage', ['type' => 'error', 'message' => Module::t('yemekhane', 'Invalid File Type.' )]);

            return null;

        }
    }

}
