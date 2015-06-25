#TypeHint

>Bu s�n�f php de desteklenmeyen `string`,`integer`,`float`,`double`,`resource`
>tip tan�mlamar�n� desteklenmesini sa�lar.

#Kullan�m

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

>Bu �ekilde tip tan�mlamas� yapt�ktan sonra fonksiyonlarda �n tan�ml� de�er olarak sadece null atamas� yapabilirsiniz
>E�er farkl� bir de�er atarsan�z `Fatal Error` hatas�yla kar��la��r�z

```php

function test(string $test = null){

echo $test;

}

```