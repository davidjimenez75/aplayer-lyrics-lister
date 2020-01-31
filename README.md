# aplayer-lyrics-lister

[APlayer](https://github.com/MoePlayer/APlayer) + Small PHP script to list your own music with lyrics

![WYSIWYG smileys](https://raw.githubusercontent.com/davidjimenez75/aplayer-lyrics-lister/master/folder.jpg)


## Recommended instalation:

1- Download and install XAMPP

https://www.apachefriends.org/download.html

2- Clone this git to c:\xampp\htdocs\aplayer

  git clone https://github.com/davidjimenez75/aplayer-lyrics-lister.git c:\xampp\htdocs\aplayer

3- Install Google dictionary on Chrome 

This is optional, but is helpful to point and click unknow words or phrases in the lyrics.

[Google Dictionary (by Google)](https://chrome.google.com/webstore/detail/google-dictionary-by-goog/mgijmajocgfcbeboacabfgobmjgjcoja)

 - Right click > Configuration
 
 - [x] Display pop-up when I double-click a word       - Trigger key: [None]
 - [x] Display pop-up when I select a word or phrase   - Trigger key: [Ctrl]
 - [x] Store words I look up, including definitions

4- Add music and lyrics (*.lrc) to the "c:\xampp\htdocs\aplayer\audio" folder

5- Open your browser on:

http://localhost/aplayer/



## Links to APlayer Authors

**APlayer** © [DIYgod](https://github.com/DIYgod), Released under the [MIT](./LICENSE) License.<br>
Authored and maintained by DIYgod with help from contributors ([list](https://github.com/DIYgod/APlayer/contributors)).

> [Blog](https://diygod.me) · GitHub [@DIYgod](https://github.com/DIYgod) · Twitter [@DIYgod](https://twitter.com/DIYgod) · Telegram Channel [@awesomeDIYgod](https://t.me/awesomeDIYgod)

https://github.com/MoePlayer/APlayer



## FAQ

### There is any pause key for the player?

Press Esc for Play/Pause.

If you want to Play/Pause with another key change the Keycode in index.php the 
bottom Javascript "function checkKey(e) {"

For example: 19 = Keyboard Pause keycode

For other keycodes use: https://keycode.info/

