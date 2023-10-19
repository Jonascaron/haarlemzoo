<?php

function generateConfirmationKey($length = 20) {
    return bin2hex(random_bytes($length / 2));
}