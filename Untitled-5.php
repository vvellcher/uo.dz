<?php

function processComment($comment) {
    $trimmedComment = trim($comment);
    if (strlen($trimmedComment) < 5) {
        return "Комментарий слишком короткий";
    } else {
        return "Комментарий принят";
    }
}
?>
// з 5  