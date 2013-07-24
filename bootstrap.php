<?php

Autoloader::add_classes(array(
    'getID3_cached_dbm'        => __DIR__.'/classes/extension.cache.dbm',
    'getID3_cached_mysql'        => __DIR__.'/classes/extension.cache.mysql.php',
    'getid3_lib'    => __DIR__.'/classes/getid3.lib.php',
    'getID3'      => __DIR__.'/classes/getid3.php',
    'getid3_exception'      => __DIR__.'/classes/getid3.php',
    'getid3_mp3'       => __DIR__.'/classes/module.audio.mp3.php',
    'getid3_id3v1'     => __DIR__.'/classes/module.tag.id3v1.php',
    'getid3_id3v2'     => __DIR__.'/classes/module.tag.id3v2.php',
));