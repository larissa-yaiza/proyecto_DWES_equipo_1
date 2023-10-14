<?php
echo '<table>
	
<!DOCTYPE html>
<html>
<head>
    <title>Parámetros del servidor</title>
</head>
<body>
<h1>Parámetros del servidor2</h2>
    <table border="1">
        <tr>
            <th>PARÁMETRO</th>
            <th>VALOR</th>
        </tr>
        <tr>
            <td>HTTP_HOST</td>
            <td>'.$_SERVER['HTTP_HOST'].'</td>
        </tr>
        <tr>
            <td>SERVER_NAME</td>
            <td>'.$_SERVER['SERVER_NAME'].'</td>
        </tr>
        <tr>
            <td>SERVER_SOFTWARE</td>
            <td>'.$_SERVER['SERVER_SOFTWARE'].'</td>
        </tr>
        <tr>
            <td>SERVER_PORT</td>
            <td>'.$_SERVER['SERVER_PORT'].'</td>
        </tr>
        <tr>
            <td>SERVER_PROTOCOL</td>
            <td>'.$_SERVER['SERVER_PROTOCOL'].'</td>
        </tr>
         <tr>
            <td>REMOTE_ADDR</td>
            <td>'.$_SERVER['REMOTE_ADDR'].'</td>
        </tr>
        <tr>
            <td>DOCUMENT_ROOT</td>
            <td>'.$_SERVER['DOCUMENT_ROOT'].'</td>
        </tr>
        <tr>
            <td>HTTP_ACCEPT</td>
            <td>'.$_SERVER['HTTP_ACCEPT'].'</td>
        </tr>
        <tr>
            <td>HTTP_USER_AGENT</td>
            <td>'.$_SERVER['HTTP_USER_AGENT'].'</td>
        </tr>
        <tr>
            <td>SCRIPT_FILENAME</td>
            <td>'.$_SERVER['SCRIPT_FILENAME'].'</td>
        </tr>
    </table>'

?>



