<?php
setcookie('palestrante', null, time() - 3600, '/');
header('Location: ./../');
?>