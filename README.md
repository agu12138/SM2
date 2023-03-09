# SM2
venyuan-sm2

------------------------

```
Test.php

<?php

require __DIR__.'/vendor/autoload.php';


$sm2=new \venyuansm2\SM2($publicKey, $privateKey);

//加密
$sm2->encrypt("12312312132");

//解密
$sm2->decrypt("12312312132");

```


