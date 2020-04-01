<?php

echo $view->put("fragments/header");

echo $html(__("Hello world!"));

?>

<?php if ($security->isAllowed("admin")): ?>
<p>Este usuario es admin</p>
<?php else: ?>
<p>Este usuario es regular</p>
<?php endif ?>