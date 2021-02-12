<h3>Simple psr-3 logger</h3>
Author: Vladislav Zagidullin<hr/>
<h2>How to use:</h2>
include namespace:<br>
use Liloy\Logger\Logger;

use logger:<br>
$logger = new Logger('path/to/file.log');<br>
$logger->warning($message);<br>

<b>P.S. Logger need created file for correct work or Exception!</b>
<hr/>