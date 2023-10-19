<?php

session_start();

session_destroy();

echo '<p>u bent uitgelogt <a href="index.php" class="nav-item nav-link">klik hier om terug tegaan</a></p>';