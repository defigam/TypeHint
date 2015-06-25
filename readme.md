#TypeHint

>Bu sınıf php de desteklenmeyen `string`,`integer`,`float`,`double`,`resource`
>tip tanımlamarını desteklenmesini sağlar.

#Kullanım

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

>Bu şekilde tip tanımlaması yaptıktan sonra fonksiyonlarda ön tanımlı değer olarak sadece null ataması yapabilirsiniz
>Eğer farklı bir değer atarsanız `Fatal Error` hatasıyla karşılaşırız

```php

function test(string $test = null){

echo $test;

}

```