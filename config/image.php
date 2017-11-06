<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Image Driver
    |--------------------------------------------------------------------------
    |
    | Intervention Image supports "GD Library" and "Imagick" to process images
    | internally. You may choose one of them according to your PHP
    | configuration. By default PHP's "GD Library" implementation is used.
    |
    | Supported: "gd", "imagick"
    |
    */
    //此处我们使用默认的 gd 即可，如果将要开发的项目需要较专业的图片，请考虑 ImageMagic。
    'driver' => 'gd'

];
