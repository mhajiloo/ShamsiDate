CakePHP - Jalali Date
==========

CakePHP Jalali/Shamsi Date Plugin.


#Installing via Composer
``` bash
$ composer require mhajiloo/cakephp-jalalidate:"dev-master"
```

#Example
```php
<?php
class TestController extends AppController {
    public $components = ['ShamsiDate.Shamsi'];
	public $helpers = ['ShamsiDate.Shamsi'];

    public function index() {
        $this->set('shamsiDate', $this->Shamsi->date('l j F Y')); 
    }
}
?>
```

In View:
```php
<?php echo $shamsiDate; ?>
```
```php
<?php echo $this->Shamsi->date('l j F Y'); ?>
```