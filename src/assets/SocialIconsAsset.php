<?php

/**
 * @link https://github.com/yiimaker/yii2-social-share
 * @copyright Copyright (c) 2017-2021 Volodymyr Kupriienko
 * @license BSD 3-Clause License
 */

namespace ymaker\social\share\assets;

use yii\web\AssetBundle;

/**
 * Asset for social icons font.
 *
 * @author Vladimir Kuprienko <vldmr.kuprienko@gmail.com>
 *
 * @since 1.0
 */
class SocialIconsAsset extends AssetBundle
{
    /**
     * {@inheritdoc}
     */
    public $sourcePath = '@vendor/yiimaker/yii2-social-share/src/assets/src';
    /**
     * {@inheritdoc}
     */
    public $css = [YII_ENV_PROD ? 'css/style.min.css' : 'css/style.css'];
}
