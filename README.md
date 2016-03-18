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