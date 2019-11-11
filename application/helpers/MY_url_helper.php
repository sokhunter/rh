<?php

function direccionar($url) {
    $string = '<script>location.href="';
    $string .= $url;
    $string .= '"</script>';
    return $string;
}

?>