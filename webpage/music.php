/**
 * Created by PhpStorm.
 * User: U1710136
 * Date: 3/1/2019
 * Time: 4:47 PM
 */

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
    "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Music Viewer</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link href="viewer.css" type="text/css" rel="stylesheet" />
</head>
<body>
<div id="header">

    <h1>190M Music Playlist Viewer</h1>
    <h2>Search Through Your Playlists and Music</h2>
</div>


<div id="listarea">
    <?php


    //path to directory to scan
    $directory = "songs/";

    //get all text files with a .txt extension.
    $musics = glob($directory . "*.mp3");
    $txt = glob($directory . "*.txt");

    //print each file name
    echo '<ul id="musiclist"> </ul>';
    foreach($musics as $music) {
        echo '<li class="mp3item"><a target="_blank">'.$music.'</a></li>'.'<br>';
    }
    foreach($txt as $text) {
        echo '<li class="playlistitem"><a target="_blank">'.$myfile = fopen($text, "r") or die("Unable to open file!");
        echo fread($myfile,filesize($text));
        fclose($myfile).'</a></li>'.'<br>';
    }




//    echo '<ul id="musiclist"> </ul>';
//        for ($i = 1; $i > 0; $i++){
//            echo '<li class="mp3item"><a target="_blank" href="songs/"></a></li>';
//        }


    ?>
</div>
</body>
