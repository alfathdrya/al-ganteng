<?php
$submodule = (isset($_GET['s'])) ? $_GET['s'] : 'view';
switch ($submodule) {
    case 'view': default:
        include('view.php');
        break;
    case 'add':
        include('mata pelajaran/add.php');
        break;
    case 'save':
        include('mata pelajaran/save.php');
        break;
    case 'edit':
        include('mata pelajaran/edit.php');
        break;
    case 'update':
        include('mata pelajaran/update.php');
        break;
    case 'delete':
        include('mata pelajaran/delete.php');
        break;
}