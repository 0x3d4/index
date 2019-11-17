  
<?php
if( false !== strpos(ini_get("disable_functions"), "fopen") ) {
echo 'fopen kapali';
}
else{
echo 'fopen acik';

}
if( false !== strpos(ini_get("disable_functions"), "file_put_contents") ) {
echo 'fpc kapali';
}
else{
echo 'fpc acik';

}
if( false !== strpos(ini_get("disable_functions"), "fwrite") ) {
echo 'fwrite kapali';
}
else{
echo 'fwrite acik';

}
