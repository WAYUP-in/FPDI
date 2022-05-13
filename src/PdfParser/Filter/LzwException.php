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
 * Exception for LZW filter class
 */
class LzwException extends FilterException
{
    /**
     * @var integer
     */
    const LZW_FLAVOUR_NOT_SUPPORTED = 0x0501;
}
