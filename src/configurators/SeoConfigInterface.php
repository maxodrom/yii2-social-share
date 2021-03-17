<?php

/**
 * @link https://github.com/yiimaker/yii2-social-share
 * @copyright Copyright (c) 2017-2021 Volodymyr Kupriienko
 * @license BSD 3-Clause License
 */

namespace ymaker\social\share\configurators;

/**
 * SEO configuration interface.
 *
 * @author Vladimir Kuprienko <vldmr.kuprienko@gmail.com>
 *
 * @since 2.3
 */
interface SeoConfigInterface
{
    /**
     * Checks whether SEO is enabled.
     *
     * @return bool
     */
    public function isSeoEnabled();
}
