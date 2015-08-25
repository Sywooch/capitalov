<?php

namespace app\service;

/**
 * Объединяет два и более графиков на один с экстраполяцией данных
 * то есть берется минимум и максимум одного графика, совмещается с минимумом и максимумом другого и выводится слева шкала первого графика
 * все входные данные должны браться как выходные из \app\service\GraphExporter
 *
 * @param array $х - массив значений подписей оси Х \app\service\GraphExporter
 * @param array $y - массив линий графиков в виде значений из \app\service\GraphExporter
 *                 [
 *                     []  - значения оси Y для каждого Х
 *                     , ...
 *                 ]
 *
 * Алгоритм вычислений следующий
 * вычисляется множитель scaleRatio = delta1/delta2
 *                 где delta1 - разность max и min для графика 1
 *                 где delta2 - разность max и min для графика 2
 *                 вычисление новых значений = (y2 - min2) * scaleRatio + min1
 *                 где y1 - значение Y для конкретной точки
 *                 min1 - минимальное значение графика
 *
 *
 * В результате будет получен массив
 * [
 *    'x' => array - значения подписей оси Х
 *    'y' => [
 *           []  - значения оси y для каждого Х
 *           , ...
 *     ]
 * ]
 */
use cs\services\VarDumper;
use cs\web\Exception;
use yii\base\Object;
use yii\helpers\ArrayHelper;

class GraphUnion extends Object
{
    public $x;
    public $y;

    public function init()
    {
        return;
    }

    public function run()
    {
        // получаю минимальное значение из первого графика и максимальное значение
        $minMax = self::getMinMax($this->y[0]);
        $newRows = [];
        $newRows[] = $this->y[0];
        for ($i = 1; $i < count($this->y); $i++) {
            $minMax2 = self::getMinMax($this->y[$i]);
            $scaleRatio = ($minMax['max'] - $minMax['min'])/($minMax2['max'] - $minMax2['min']);
            $new = [];
            foreach($this->y[$i] as $y2) {
                if (is_null($y2)) {
                    $newY = null;
                } else {
                    $newY = (($y2 - $minMax2['min']) * $scaleRatio) + $minMax['min'];
                }
                $new[] = $newY;
            }
            $newRows[] = $new;
        }

        return [
            'x' => $this->x,
            'y' => $newRows,
        ];
    }

    /**
     * Статический метод для вызова класса
     *
     * @param array $options массив инициализируемых значений через инициализацию [[yii\base\Object]]
     *
     * @return mixed
     */
    public static function convert($options)
    {
        $item = new static($options);

        return $item->run();
    }

    /**
     * Получает минимальное и максимальое значение из графика
     *
     * @param array $graphData данные для графика
     *           []  - значения оси Y
     *
     * @return array
     * [
     *    'min' => float
     *    'max' => float
     * ]
     */
    public function getMinMax($graphData)
    {
        $min = null;
        $max = null;
        foreach($graphData as $i) {
            if (is_null($i)) continue;
            if (is_null($min)) $min = $i;
            if (is_null($max)) $max = $i;
            if ($i < $min) $min = $i;
            if ($i > $max) $max = $i;
        }

        return [
            'min' => $min,
            'max' => $max,
        ];
    }

}