<?php 
error_reporting(E_ALL);
ini_set('display_errors', '1');
exec('curl -i -H "Accept: application/json" -X PUT -d "artist=Ac-Dc&title=Dirty Deeds" http://localhost/zf2_restful/public/album-rest/1') ;

?>