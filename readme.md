#TypeHint

>Bu sýnýf php de desteklenmeyen `string`,`integer`,`float`,`double`,`resource`
>tip tanýmlamarýný desteklenmesini saðlar.

#Kullaným

```php

include 'src/TypeHint.php';
use Gem\Components\Security\TypeHint;
TypeHint::setErrorHandler();

```

####string`

```php

function test(string $test)
{
 echo $test;
}

```

####integer

```php

function test(integer $test)
{
 echo $test;
}

```

####float

```php

function test(float $test)
{

echo $test;

}

```

####double

```php 

function test(double $test)
{

echo $test;

}

```

####resource

```php

function test(resource $test){

echo $test;

}
```


#Dikkat

>Bu þekilde tip tanýmlamasý yaptýktan sonra fonksiyonlarda ön tanýmlý deðer olarak sadece null atamasý yapabilirsiniz
>Eðer farklý bir deðer atarsanýz `Fatal Error` hatasýyla karþýlaþýrýz

```php

function test(string $test = null){

echo $test;

}

```