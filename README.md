EScrollUp Yii Extension
=========

A wrapper for jQuery ScrollUp plugin

**Requirements**

Tested with Yii 1.1.12 and 1.1.14


**Installation**

* Extract the file under protected/extensions folder.


**Usage**

 * Default Usage

```
$this->widget('application.extensions.escrollup.EScrollUp');
```

 * Usage with theme parameter

 
```
$this->widget('application.extensions.escrollup.EScrollUp', array(
    'theme' => 'pill' // pill, link, image, tab
));
```


 * Usage with default optional parameters
 

```
$this->widget('application.extensions.escrollup.EScrollUp', array(
    'options' => array(
        'scrollName' => 'scrollUp', // Element ID
        'topDistance' => '300', // Distance from top before showing element (px)
        'topSpeed' => 300, // Speed back to top (ms)
        'animation' => 'fade', // Fade, slide, none
        'animationInSpeed' => 200, // Animation in speed (ms)
        'animationOutSpeed' => 200, // Animation out speed (ms)
        'scrollText' => 'Scroll to top', // Text for element
        'activeOverlay' => false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
    )
));
```

**Resources**

 * [Project Page](http://markgoodyear.com/2013/01/scrollup-jquery-plugin/)
 * [Demo](http://markgoodyear.com/labs/scrollup/)
