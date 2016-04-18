# fyluploader plugin for CakePHP

It's a simple and effective file uploading plugin for CakePHP 3.x
## Installation

<br> Download the zip file,extract it and put the package in plugins directory.<br>

 In config/bootstrap.php
<br> Loads a single plugin
 <br>Plugin::load('fyluploader');

<br>you may need to modify your application’s composer.json file to contain the following information:
<br>"autoload": { <br>
"psr-4": { <br>
    (...)  <br>
    "Fyluploader\\": "./plugins/fyluploader/src", <br>
  } <br>
} <br>
"autoload-dev": { <br>
        "psr-4": { <br>
            (...) <br>
             "Fyluploader\\Test\\": "./plugins/fyluploader/tests" <br>
        } <br>
    } <br>

```
