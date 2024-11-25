<?php
declare(strict_types=1);

/**
 * This file is part of the Phalcon Developer Tools.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace Phalcon\DevTools;

use Phalcon\Support\Version as PhVersion;

/**
 * This class allows to get the installed version of the Developer Tools
 */
class Version extends PhVersion
{
    public function get(): string
    {
        return implode('.',self::_getVersion());
    }

    /**
     * {@inheritdoc}
     *
     * @return array
     */
    // phpcs:disable
    protected static function _getVersion(): array
    {
        return [5,0,0];
    }
    // phpcs:enable
}
