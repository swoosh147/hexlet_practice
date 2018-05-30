
<?php
function getComposerFileData()
	{
    $map = ["autoload" => ["files" => ["src/Arrays.php"]],"config" =>["vendor-dir" => "/composer/vendor"]];
	}

	print_r(getComposerFileData($map));
