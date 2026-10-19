<?php
if ($temperature < 0) {
    echo "Мороз";
} elseif ($temperature >= 0 && $temperature <= 20) {
    echo "Прохладно";
} else {
    echo "Тепло";
}
?>