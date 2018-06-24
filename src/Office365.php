<?php

require 'Include/Config.php';
require 'Include/Functions.php';

use ChurchCRM\dto\SystemURLs;

//Set the page title
$sPageTitle = gettext('Winners Church Office365');

require 'Include/Header.php';
?>
<div class="row">
<iframe src="https://office.com/"  style="width:100%; height:720px;"></iframe>
</div>

<?php

require 'Include/Footer.php';
?>
