<?php
$variable = 'N';
if($variable == 'S') {?>
<input name="blah" type="radio" value="Y" checked="checked"> Yes
<input name="blah" type="radio" value="N"> No
<?php } else {?>
<input name="blah" type="radio" value="Y"> Yes
<input name="blah" type="radio" value="N" checked="checked"> No
<?php }?>