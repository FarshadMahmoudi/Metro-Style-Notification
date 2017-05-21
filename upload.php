<head>
    <meta charset="utf-8">
    <script type="text/javascript" src="/js/jquery-3.1.1.min.js"></script>
</head>
<?php
	// print_r($_POST);
	// print_r($_FILES);
	echo 'هرکاری که در قسمت آپلود انجام بدی اینجا توی آی فریم اجرا میشه';
?>
<script>
$(document).ready(function() {
	window.setTimeout(function() {
		parent.postMessage('hello', '*');
}, 2000);
});	
</script>