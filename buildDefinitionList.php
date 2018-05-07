<?php
function buildDefinitionList($definitions) {
	$result = ["<dl>"];
	foreach ($definitions as $definition) {
		$result[] = "<dt>{$definition[0]}</dt><dd>{$definition[1]}</dd>";
	}
	$result[] = "</dl>";
	return implode("", $result);
}
// ---------------------------------------------------------------------
$definitions = [
    ['key', 'value'],
    ['key2', 'value2']
];
// echo buildDefinitionList($definitions);
print_r(buildDefinitionList($definitions));
// => '<dl><dt>key</dt><dd>value</dd><dt>key2</dt><dd>value2</dd></dl>';