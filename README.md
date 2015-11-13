# Fyluploader plugin for CakePHP

## Installation

 In config/bootstrap.php
<br> Loads a single plugin
 <br>Plugin::load('Fyluploader');

<br>you may need to modify your application’s composer.json file to contain the following information:
<br>"autoload": { <br>
"psr-4": { <br>
    (...)  <br>
    "Fyluploader\\": "./plugins/Fyluploader/src", <br>
  } <br>
} <br>
"autoload-dev": { <br>
        "psr-4": { <br>
            (...) <br>
             "Fyluploader\\Test\\": "./plugins/Fyluploader/tests" <br>
        } <br>
    } <br>

```
