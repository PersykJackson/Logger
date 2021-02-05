<h3>Simple psr-3 logger</h3>
Author: Vladislav Zagidullin
<h2>How to use:</h2>
include namespace:
use Liloy\Logger\Logger;

use logger:
$logger = new Logger('path/to/file.log');
$logger->warning($message);

P.S. Logger need created file for correct work or Exception!
