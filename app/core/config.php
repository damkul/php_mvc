<?php
if ($_SERVER['SERVER_NAME'] == 'localhost') {
    define('DBNAME','birdsong');
    define('DBHOST','localhost');
    define('DBUSER','root');
    define('DBPASS','root@123');
   define('ROOT','http://localhost:8081/birdsong_v2/public');
}
else{
    define('DBNAME','birdcall_birdsong');
    define('DBHOST','localhost');
    define('DBUSER','birdcall_root');
    define('DBPASS','birdsong@123');
    define('ROOT','http://localhost:8081/birdsong_v2/public');
    define('ROOT','http://birdcallsindia.in');
}