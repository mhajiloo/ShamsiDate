CakePHP - Jalali Date
==========

CakePHP Jalali Date Plugin.


#Installing via Composer
``` bash
$ composer require mhajiloo/cakephp-jalalidate:"^1.0.0"
```

#Example
In Controller:
```php
<?php
class TestController extends AppController {
    public $components = ['JalaliDate.Jalali'];
	public $helpers = ['JalaliDate.Jalali'];

    public function index() {
        $this->set('jalali_date', $this->Jalali->date('l j F Y')); 
    }
}
?>
```

In View:
```php
<?php echo $jalali_date; ?>
```
```php
<?php echo $this->Jalali->date('l j F Y'); ?>
```