ShamsiDate
==========

CakePHP Shamsi/Jalali Date Plugin.


#Installation
First extract zip file in __app/Plugin__ and change to __ShamsiDate__.

Add the following to your __app/Config/bootstrap.php__
```php
<?php
CakePlugin::load('ShamsiDate');
?>
```

In your Controller:
```php
<?php
public $components = array('ShamsiDate.Shamsi');

public $helpers = array('ShamsiDate.Shamsi');
?>
```

#Example
```php
<?php
class TestController extends AppController {
    public $uses = array();
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