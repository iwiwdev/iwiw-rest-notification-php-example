# Letöltés
Git-tel:

	git clone http://github.com/iwiwdev/iwiw-rest-notification-php-example.git

vagy svn-nel:

	svn checkout http://svn.github.com/iwiwdev/iwiw-rest-notification-php-example.git

vagy [letölthető zip-ben](http://github.com/iwiwdev/iwiw-rest-notification-php-example/archives/master).

# Konfigurálás
* rest_notif_sample.php-ben add meg az alkalmazásod kulcsát és titkos kulcsát (ezeket a [fejlesztői portálon](http://dev.iwiw.hu), az alkalmazás adatlapjáról tudhatod meg.
Amennyiben nem állítottál még be kulcsokat az alkalmazáshoz: "Új Oauth Consumer felvitele" --> jelszó megadása után "Kulcsok megjelenítése" --> "Mentés".
Ha beállítottad (elmentetted) már az alkalmazásodhoz a kulcsokat: "Bejövő Oauth kulcsok" --> jelszó megadása után "Kulcsok megjelenítése".)
  * $consumerKey='kulcs';
  * $consumerSecret='titkos_kulcs';

iWiW Homokozóval való használatához:
* $iwiwBaseURL = 'http://sandbox.iwiw.hu';
* $iwiwBaseApiURL = 'http://api.sandbox.iwiw.hu';
  
Éles iWiW-en való használathoz:
* $iwiwBaseURL = 'http://iwiw.hu';
* $iwiwBaseApiURL = 'http://api.iwiw.hu';

# Telepítés
* Töltsd le az [OpenSocial PHP Client Libraryt 1.1.1](http://code.google.com/p/opensocial-php-client/)
* Az 'osapi' foldert teljes tartalmával másold az iWiW példa folderébe.
* Az 'osapi/io/osapiRestIO.php' fájlban a 'messages/{userId}/outbox/{msgId}' URI-t írd át 'messages/{userId}/outbox'-ra
* Add meg a kulcsaidat.
* Másold fel az egészet egy php támogatással rendelkező webszerverre.
* Nyisd meg a rest_notif_sample.php-t tetszőleges browserrel.

# Egyebek
Szabadon felhasználható és módosítható kód.
