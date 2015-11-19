<?php
namespace standaloneframework\jquery;

use app\application\classes\base\BaseBlock;

/**
 * Class JQuery
 *
 * jquery block for connection into framework
 * required jquery from components\jquery
 *
 * @package standaloneFramework\jquery
 * @author Artem Kaplenko <art.kaplenko@gmail.com>
 * @version 1.0.1
 */
class Jquery extends BaseBlock{
    /**
     * block name
     */
    const NAME = 'jquery';

    /**
     * Jquery file
     * @var array
     */
    public static $jsAsset = [
        '../../components/jquery/jquery.min.js'
    ];
}