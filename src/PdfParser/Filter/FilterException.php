<?php

/**
 * This file is part of FPDI
 *
 * @package   Wayup\Fpdi
 * @copyright Copyright (c) 2020 Wayup GmbH & Co. KG (https://www.Wayup.com)
 * @license   http://opensource.org/licenses/mit-license The MIT License
 */

namespace Wayup\Fpdi\PdfParser\Filter;

use Wayup\Fpdi\PdfParser\PdfParserException;

/**
 * Exception for filters
 */
class FilterException extends PdfParserException
{
    const UNSUPPORTED_FILTER = 0x0201;

    const NOT_IMPLEMENTED = 0x0202;
}
