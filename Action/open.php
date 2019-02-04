<?php

// The location of the PDF file on the server.
$file_path='../DOCUMENT_FILE_CONTENT/'.$_REQUEST['filename'];

header("Content-type: application/pdf");
header("Content-Length: " . filesize($file_path));

// Send the file to the browser.
readfile($file_path);
exit;
	
?>