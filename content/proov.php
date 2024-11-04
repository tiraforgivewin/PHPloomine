<?php
echo "Tere Hommikust!";
echo "<br>";
$muutuja='PHP on skriptikeel';
echo "<strong>";
echo $muutuja;
echo "<strong>";
echo "<br>";

// Tekstifunktsioonid
echo "<h2>Tekstifunktsioonid</h2>";
$tekst='Esmaspaev on 4. November';
echo $tekst;

//kõik tähed on suured
echo "<br>";
echo strtoupper($tekst);
// kõik tähed on vähed
echo "<br>";
echo strtolower($tekst);
// Iga sõna algab suure tähega
echo "<br>";
echo ucwords($tekst);
// teksti pikkus
echo "<br>";
echo "Teksti pikkus - ".strlen($tekst);
//eraldame esimesed 5 tähte
echo "<br>";
echo "Esimesed 5 tähte - ".substr($tekst,0,5);
//leiame on positsioonid
$otsing='on';
echo "<br>";
echo "On asukoht lauses on ".strpos($tekst,$otsing);
// eralda esimene sõna kuni $otsing
echo "<br>";
echo substr($tekst,0,strpos($tekst,$otsing));
// eralda peale esimest sõna, alates 'on'
echo "<br>";
echo substr($tekst,strpos($tekst,$otsing));
echo "<br>";


echo "<h2>Kasutame veebis kasutavaid näidisid</h2>";
echo "<br>";
//pakub parameetrite näol veelgi võimalusi, kuid seda vaatame kaks pealkirja allpool.
echo "Sõnade arv lauses - ". str_word_count($tekst);

//Niisiis kasutasime trim() funktsiooni, mis eemaldas ülearuse tühja nii paremalt kui vasakult. Teised kaks, ltrim() ja rtrim() eemaldab vasavalt vasakult ja paremalt. Kõik kolm kärpimise funktsiooni lubavad lisada ka sümbolid, mida soovid eemaldada.
$tekst2="   Tere, tere ilus puu!   ";
echo "<pre>$tekst2</pre>";
echo "<pre>".trim($tekst2)."</pre>";
echo "<pre>".ltrim($tekst2)."</pre>";
echo "<pre>".rtrim($tekst2)."</pre>";


// PHP käsitleb teksti kui massiivi, kus esimene märk on indeksiga 0 jne.
$tekst3 = 'Tana on vaga ilus esmaspaev!';
echo "Esimene täht on ".$tekst3[0]; 				//T
echo '<br>';
echo "Neljas täht on ".$tekst3[4]; 				//a
echo '<br>';
// kolmas sõna
$sona=str_word_count($tekst3,1);
print_r($sona);
echo $sona[2]











?>