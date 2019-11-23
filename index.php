<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>aplayer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin: 0;
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
        }
        .container {
            width: 100%;                                     /* AUTO-WIDTH WORKING!!!  */
            height: height: calc(100vh - 100px);             /* AUTO-HEIGHT WORKING!!! */
            /* max-width: 32rem;*/
        }
        #player5 {
                                            /* WIDTH OF #APLAYER5 */
        }
        .aplayer-music {
            clear:both!important;
        }
        .aplayer-pic{
            float:right!important;              /* PHOTO TO THE RIGHT? */
            border: 1px solid lightgrey;        /* BORDER OF THE PHOTO*/
            clear:both!important;
        }
        .aplayer {
            /* border: 1px solid red; */
            border-bottom: 0px color white!important;            
        }
        .aplayer-withlrc
        {
            /* border: 1px solid red; */
        }
        .aplayer-body{
            /* border:1px solid blue; */
            height: 90vh;                 /* PUSH DOWN THE TRACKLIST */
        }        
        .aplayer-title {                    /* SONG TITLE */
            /* border:1px solid black; */
        }
        .aplayer-author{                    /* SONG AUTHOR */
            /* border:1px solid orange; */
        }
        .aplayer-info{
            /* border: 1px solid blue; */
            height: 46px!important;
            margin-left: 1px!important;                  /* LYRICS MARGIN LEFT */
        }
        .aplayer.aplayer-withlist .aplayer-info {
            border-bottom: 0px!important;     /* REMOVE BORDER BOTTOM GREY FROM TOP OF LYRICS*/
        }        
        .aplayer .aplayer-lrc {
            border:1px solid #efefef;             /* BORDERS OF THE LYRICS BOX */
            width: 100%important;
            height: 60vh!important;          
            /* position: absolute!important;*/           /* LYRICS TO THE LEFT?  WORKS? */
        }
        /* LYRICS */
        .aplayer .aplayer-lrc:before {
            background: none!important;
        }        

        .aplayer-lrc-current {
            /*font-weight: bold;*/                      /* LYRICS ACTUAL LINE BOLD */
            background-color: #ffeeee;              /* LYRICS ACTUAL LINE BACKGROUND - RED*/
            background-color: lightyellow;          /* LYRICS ACTUAL LINE BACKGROUND - RED*/
            color:#f00!important;                   /* NO WORKING!!! - ACTUAL LYRICS LINE */
        }

        .aplayer .aplayer-lrc p {
            color:#222!important;
            font-family: 'Courier New', Courier, monospace; 
            color: #000!important;
            opacity: 1!important;
            font-size: 1em!important;
            text-align: left;
            width: 98%!important;

            /*
            overflow: auto!important;
            white-space: initial!important;
            */
            
            
            white-space: initial!important;
            overflow: auto!important;

            text-align: center!important;                         /* LYRICS ON THE CENTER? */        
            
            transform : perspective(1px) translate3d(-10px,-20px,0) scale3d(0.7,0.7, 1)


        }
        .aplayer .aplayer-lrc:after {
            background: none!important;
        }
        .aplayer-lrc-contents{
            padding-top: 100px;
            padding-left: 10px;
        }


        h1 {
            font-size: 54px;
            color: #333;
            margin: 30px 0 10px;
        }
        h2 {
            font-size: 22px;
            color: #555;
        }
        h3 {
            font-size: 24px;
            color: #555;
        }
        hr {
            display: block;
            width: 7rem;
            height: 1px;
            margin: 2.5rem 0;
            background-color: #eee;
            border: 0;
        }
        a {
            color: #08c;
            text-decoration: none;
        }
        p {

        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/vconsole/dist/vconsole.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/hls.js/dist/hls.min.js"></script>
    <script src="./dist/APlayer.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/color-thief-don@2.0.2/src/color-thief.js"></script>
</head>
<body>

    <div class="container">
            <div id="player5" class="aplayer"></div>
    </div><!--/container-->

    <script src="https://cdn.jsdelivr.net/npm/jquery"></script>
    <script>
    
    const ap5 = new APlayer({
    element: document.getElementById('player5'),
    mini: false,
    autoplay: false,
    lrcType: 3,
    mutex: true,
    theme: '#e9e9e9',
    listFolded: false,
    listMaxHeight: 180,
    audio: [


<?php


const AUDIO_FOLDER="./audio/";
$dir_iterator = new RecursiveDirectoryIterator(AUDIO_FOLDER);
$iterator = new RecursiveIteratorIterator($dir_iterator, RecursiveIteratorIterator::SELF_FIRST);
// could use CHILD_FIRST if you so wish
$i=0;
foreach ($iterator as $file) {
    if (isAudioExtension($file)) {
        echo "\r\n{";
        echo "\r\nname: '".setName($file)."',";
        echo "\r\nartist: '".setArtist($file)."',";
        echo "\r\nurl: '".setUrl($file)."',";
        echo "\r\ncover: '".setCover($file)."',";
        echo "\r\nlrc: '".setLrc($file)."'";
        echo "\r\n}";
        echo "\r\n,";
    }
    
}


function setCover($file) {
    $file=str_replace("../", "/",$file);        
    $file=str_replace("\\", "/",$file);
    if (strtolower(substr($file,-5))==".flac"){
        $file=substr($file,0,-5).".jpg";
        return $file;
    }else{ 
        $file=substr($file,0,-4).".jpg";
        return $file;
    }
}


function setLrc($file) {
    $file=str_replace("../", "/",$file);        
    $file=str_replace("\\", "/",$file);
    if (strtolower(substr($file,-5))==".flac"){
        $file=substr($file,0,-5).".lrc";
        return $file;
    }else{ 
        $file=substr($file,0,-4).".lrc";
        return $file;
    }
}



function setName($file) {
    $file=str_replace("\\", "/",$file);
    $file=str_replace(AUDIO_FOLDER,"",$file);
    $hyphenPos=strpos($file,'-');
    if ($hyphenPos!==false) {
        return substr($file,0,$hyphenPos);
    }
    return $file;
}


function setArtist($file) {
    $file=str_replace("\\", "/",$file);
    $file=str_replace(AUDIO_FOLDER,"",$file);
    $hyphenPos=strpos($file,'-');
    if ($hyphenPos!==false) {
        return substr($file,$hyphenPos+1);
    }
    return $file;
}


function setUrl($file) {
    $file=str_replace("\\", "/",$file);
    $file=str_replace("../", "/",$file);    
    return $file;
}

function isAudioExtension ($file) {
    $audio_extensions=array(".mp3", ".ogg", ".aac", ".flac");

    if (strtolower(substr($file,-5))==".flac"){
        return true;
    }elseif (in_array(strtolower(substr($file,-4)), $audio_extensions)){
        return true;
    }else{
        return false;
    }
}

?>



    ]
});
const colorThief = new ColorThief();
const setTheme = (index) => {
    if (!ap5.list.audios[index].theme) {
        colorThief.getColorAsync(ap5.list.audios[index].cover, function (color) {
            ap5.theme(`rgb(${color[0]}, ${color[1]}, ${color[2]})`, index);
        });
    }
};
setTheme(ap5.list.index);
ap5.on('listswitch', (data) => {
    setTheme(data.index);
});


/* KEYBOARD EVENTS */

document.onkeydown = checkKey;
    
    function checkKey(e) {
 
        e = e || window.event;

        if (e.keyCode == '38') {
            // up arrow
            console.log("up");

        }
        else if (e.keyCode == '40') {
            // down arrow
            console.log("down");

        }
        else if (e.keyCode == '37') {
            // left arrow
            console.log("left");

        }
        else if (e.keyCode == '39') {
            // right arrow
            console.log("right");

        }else if (e.keyCode == '32') {
            // SPACE
            console.log("SPACE");
            ap5.toggle();               // SPACE  -> PLAY/PAUSE
        }
    }

    
    </script>
</body>
</html>