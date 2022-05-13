<?php

/**
 * This file is part of FPDI
 *
 * @package   Wayup\Fpdi
 * @copyright Copyright (c) 2020 Wayup GmbH & Co. KG (https://www.Wayup.com)
 * @license   http://opensource.org/licenses/mit-license The MIT License
 */

namespace Wayup\Fpdi\PdfParser\Filter;

/**
 * Exception for flate filter class
 */
class FlateException extends FilterException
{
    /**
     * @var integer
     */
    const NO_ZLIB = 0x0401;

    /**
     * @var integer
     */
    const DECOMPRESS_ERROR = 0x0402;
}
