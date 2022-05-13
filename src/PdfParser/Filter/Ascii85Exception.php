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
 * Exception for Ascii85 filter class
 */
class Ascii85Exception extends FilterException
{
    /**
     * @var integer
     */
    const ILLEGAL_CHAR_FOUND = 0x0301;

    /**
     * @var integer
     */
    const ILLEGAL_LENGTH = 0x0302;
}
