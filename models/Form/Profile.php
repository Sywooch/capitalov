<?php

namespace app\models\Form;

use app\models\User;
use cs\base\BaseForm;
use cs\web\Exception;
use Yii;
use yii\base\Model;
use yii\helpers\Url;
use cs\Widget\FileUpload2\FileUpload;
use yii\widgets\MaskedInput;

/**
 *
 */
class Profile extends BaseForm
{
    const TABLE = 'cap_users';

    public $id;
    public $name_first;
    public $name_last;
    public $email;
    public $password;
    public $is_admin;
    public $is_active;
    public $is_confirm;
    public $datetime_reg;
    public $datetime_activate;
    public $avatar;
    public $phone;
    public $gender;
    public $date_insert;
    public $date_update;
    public $vk_id;
    public $vk_link;
    public $fb_id;
    public $fb_link;
    public $birth_date;
    public $last_action;
    public $name_org;
    public $referal_code;

    public $subscribe_is_news;
    public $subscribe_is_site_update;
    public $subscribe_is_mailing;
    public $subscribe_is_manual;

    function __construct($fields = [])
    {

        static::$fields = [
            ['name_org', 'Название организации', 0, 'string'],
            ['phone', 'Контактный телефон', 0, 'string', 'widget' => [MaskedInput::className(), [
                'mask' => '+7-(999)-999-99-99',
            ]]],
            ['name_first', 'Имя', 1, 'string'],
            ['name_last', 'Фамилия', 0, 'string'],
            ['avatar', 'Картинка', 0, 'string', [], 'Можно загрузить JPG, PNG и не более 1 Мб','widget' => [FileUpload::className(), ['options' => [
                'small' => [200,200]
            ]]]],
            ['birth_date', 'Дата рождения', 0, 'cs\Widget\DatePicker\Validator', 'widget' => [\cs\Widget\DatePicker\DatePicker::className(), ['dateFormat' => 'php:d.m.Y']]],
        ];
        parent::__construct($fields);
    }
}
