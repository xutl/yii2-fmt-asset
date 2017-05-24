<?php
/**
 * @link http://www.tintsoft.com/
 * @copyright Copyright (c) 2012 TintSoft Technology Co. Ltd.
 * @license http://www.tintsoft.com/license/
 */
namespace xutl\fmt;

use yii\web\AssetBundle;

class Asset extends AssetBundle
{
    /**
     * @inherit
     */
    public $sourcePath = '@xutl/fmt/assets';

    /**
     * @inherit
     */
    public $css = [
        'css/fmt.css',
    ];
}