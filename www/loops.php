<?php

for ($i = 1; $i <= 20; $i++) {
    if ($i % 3 === 0) {
        continue;
    }

    echo $i;
    echo '<br>';
}