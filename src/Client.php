<?php

// This file is auto-generated, don't edit it. Thanks.
namespace Darabonba\GatewaySls\Util;

use GuzzleHttp\Psr7\Stream;
use \Exception;

/**
 * Read data from a readable stream, and parse it by JSON format
 * @param stream the readable stream
 * @return the parsed result
 */
class Client {

    /**
     * @param Stream $stream
     * @param string $compressType
     * @param string $bodyRawSize
     * @return Stream
     */
    public static function readAndUncompressBlock($stream, $compressType, $bodyRawSize){
        throw new Exception('Un-implemented');
    }
}
