# Packagist Test

This project was created just to test code publishing on Packagist

### Installing

Use composer:

```
composer require posetrov/packagist-test
```

### Example

add autoloader:

```
require_once "vendor/autoload.php";
```
namespace:
```
use posetrov\packagist_test\SayHello;
```
don't forget to enter your name here:
```
$hello = new SayHello("your_name");
```
run and enjoy:
```
$hello->run();
```