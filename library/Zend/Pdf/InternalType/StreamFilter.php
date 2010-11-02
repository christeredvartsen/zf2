<?php
/**
 * Zend Framework
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://framework.zend.com/license/new-bsd
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@zend.com so we can send you a copy immediately.
 *
 * @category   Zend
 * @package    Zend_PDF
 * @subpackage Zend_PDF_Internal
 * @copyright  Copyright (c) 2005-2010 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 */

/**
 * @namespace
 */
namespace Zend\Pdf\InternalType;

/**
 * PDF stream filter
 *
 * @package    Zend_PDF
 * @subpackage Zend_PDF_Internal
 * @copyright  Copyright (c) 2005-2010 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 */
interface StreamFilter
{
    /**
     * Encode data
     *
     * @param string $data
     * @param array $params
     * @return string
     * @throws \Zend\Pdf\Exception
     */
    public static function encode($data, $params = null);

    /**
     * Decode data
     *
     * @param string $data
     * @param array $params
     * @return string
     * @throws \Zend\Pdf\Exception
     */
    public static function decode($data, $params = null);
}