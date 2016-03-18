ShamsiDate
==========

CakePHP Jalali/Shamsi Date Plugin.


#Installating via Composer
``` bash
$ composer require mhajiloo/cakephp-jalalidate:"dev-master"
```

#Example
```php
<?php
class TestController extends AppController {
    public $components = array('ShamsiDate.Shamsi');
	public $helpers = array('ShamsiDate.Shamsi');

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