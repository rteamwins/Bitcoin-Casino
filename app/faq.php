<?php
/*
🦉 Justin Faler
🧪 https://github.com/Jfaler
🧠 Base 64: UHJvcGVydHkgb2YgQml0bGl0cy5jb20gLyBQbGVhc2UgY29udGFjdCBpbW1lZGlhdGVseSBpZiB0aGlzIHByb2R1Y3QgaXMgdW5saWNlbnNlZC4=
*/

$content = array(
	"title" => $settings["name"],
	"faq" => true,
	"pagecss" => "faq",
);

$content = array_merge($content,$settings);
echo $m->render("pages/faq", $content);
// 🧬 Property of Bitlits.com ©2013-2019
?>
