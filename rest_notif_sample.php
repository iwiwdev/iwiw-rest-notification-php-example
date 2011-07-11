<?php
 
require_once "osapi/osapi.php";
require_once 'osapiIwiwProvider.php';
 
// a debug információkat kiíratjuk a böngészőbe.
osapiLogger::setLevel(0);
osapiLogger::setAppender(new osapiConsoleAppender());
 
// iwiw url eg. sandbox.iwiw.hu, iwiw.hu
$iwiwBaseURL = 'http://sandbox.iwiw.hu';
// iwiw Api url eg. api.sandbox.iwiw.hu, api.iwiw.hu
$iwiwBaseApiURL = 'http://api.sandbox.iwiw.hu';

// az alkalmazásod consumer key és secret értékét deportálon, az alkalmazás adatlapjáról tudhatod meg.
// amennyiben nem állítottál még be kulcsokat az alkalmazáshoz: "Új Oauth Consumer felvitele" --> jelszó megadása után "Kulcsok megjelenítése" --> "Mentés".
// ha beállítottad (elmentetted) már az alkalmazásodhoz a kulcsokat: "Bejövő Oauth kulcsok" --> jelszó megadása után "Kulcsok megjelenítése".
$consumerKey='kulcs';
$consumerSecret='kulcs';
 
// megadjuk a címzettet.
$userId = 'sandbox.iwiw.hu:phS8xQo60g';
 
// beállítjuk a provider-t.
$provider = new osapiIwiwProvider($iwiwBaseURL, $iwiwBaseApiURL);

// autentikálunk, xoauth_requestor_id-ként megadhatjuk az aktuális user id-ját.
$auth =  new osapiOAuth2Legged($consumerKey, $consumerSecret, $userId);
$auth->setUseBodyHash(true);

// létrehozunk egy osapi példányt.
$osapi = new osapi($provider, $auth);

createNotification($osapi, $userId);
 
// az értesítés küldését végző függvény.
function createNotification(osapi $osapi, $userId) {
	// indítunk egy batch-t. egy batch-hez több request is csatolható.
	$batch = $osapi->newBatch();
	 
	// létrehozzuk a message objektumot.
	$message = new osapiMessage(array($userId), 'salalalalalalaaa', 'notification');
	 
	$params = array(
		'userId' => $userId,
		'message' => $message,
	);
	 
	// a batch-hez hozzáadjuk az értesítésküldés request-et.
	$batch->add($osapi->messages->create($params), 'requestId');

	// végrehajtuk a batch-ben található kéréseket és kiíratjuk a böngészőbe az eredményt.
	echo '<pre>';
	print_r($batch->execute());
	echo '</pre>';
}
?>