<?php
/* These salts are examples only, and should not be used as_it_is in your code.You should generate a distinct, correctly-formatted salt for each password.
*/
if(CRYPT_STD_DES == 1) {
    echo 'Standard DES: ' . crypt('suvenConsultants', 'rj');
}

echo '<br>';
echo '<br>';

if(CRYPT_EXT_DES == 1) {
    echo 'Extended DES: ' . crypt('suvenConsultants', '_J9..rock');
	    
}

echo '<br>';
echo '<br>';

if (CRYPT_MD5 == 1) {
    echo 'MD5:          ' . crypt('suvenConsultants', '$1$_android$');
}
echo '<br>';
echo '<br>';

if (CRYPT_BLOWFISH == 1) {
    echo 'Blowfish:     ' . crypt('suvenConsultants', '$2a$07$usesomesillystringforsalt$');
}
echo '<br>';
echo '<br>';

if (CRYPT_SHA256 == 1) {
    echo 'SHA-256:      ' . crypt('rasmuslerdorf', '$5$rounds=5000$usesomesillystringforsalt$');
}
echo '<br>';
echo '<br>';

if (CRYPT_SHA512 == 1) {
    echo 'SHA-512:      ' . crypt('rasmuslerdorf', '$6$rounds=5000$usesomesillystringforsalt$');
}
?>