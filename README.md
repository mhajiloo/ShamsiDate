ShamsiDate
==========

CakePHP Shamsi/jalali Date Plugin.


# Loading and installation
Add the following to your __app/Config/bootstrap.php__
```php
<?php
CakePlugin::load('ShamsiDate');
?>
```

In your Controller
```php
<?php
public $components = array('ShamsiDate.Shamsi');
?>
```

#Example
```php
<?php
class TestController extends AppController {
    public $uses = array();
    public $components = array('ShamsiDate.Shamsi');

    public function index() {
        $this->set('shamsiDate', $this->Shamsi->date('l j F Y')); 
    }
}
?>
```
