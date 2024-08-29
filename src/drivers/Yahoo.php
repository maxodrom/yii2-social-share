<?php

/**
 * @link https://github.com/yiimaker/yii2-social-share
 * @copyright Copyright (c) 2017-2021 Volodymyr Kupriienko
 * @license BSD 3-Clause License
 */

namespace ymaker\social\share\drivers;

use ymaker\social\share\base\AbstractMailDriver;

/**
 * Driver for Yahoo.
 *
 * @see https://www.yahoo.com
 *
 * @author Vladimir Kuprienko <vldmr.kuprienko@gmail.com>
 *
 * @since 2.0
 */
class Yahoo extends AbstractMailDriver
{
    /**
     * {@inheritdoc}
     */
    protected function buildLink()
    {
        return 'https://compose.mail.yahoo.com/?subject={title}&body={body}';
    }
}
