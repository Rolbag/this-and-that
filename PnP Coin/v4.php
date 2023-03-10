<?php

// Funktion zum Werfen einer Münze
function flipCoin() {
  // Zufälliges Ergebnis von 0 oder 1 erzeugen
  $result = rand(0, 1);

  // Ergebnis ausgeben
  if ($result == 0) {
    return "Kopf";
  } else {
    return "Zahl";
  }
}

echo "Du sitzt mit deinem Freund an einem sonnigen Samstagnachmittag am Küchentisch. Ihr habt eure Pen-and-Paper-Charakterbögen vor euch ausgebreitet und seid bereit für ein neues Abenteuer.\n";

// Namen von Spieler 1 und Spieler 2 abfragen
echo "Gib den Namen von Spieler 1 ein: ";
$name1 = readline();
echo "Gib den Namen von Spieler 2 ein: ";
$name2 = readline();

// Spieler 1
$player1 = array(
  "name" => $name1,
  "life" => 0,
  "speed" => 0,
  "magic" => 0,
  "strength" => 0
);

// Spieler 2
$player2 = array(
  "name" => $name2,
  "life" => 0,
  "speed" => 0,
  "magic" => 0,
  "strength" => 0
);

// Attribute für jeden Spieler festlegen
foreach (array($player1, $player2) as $player) {
  echo "Legen wir die Attribute für {$player['name']} fest...\n";

  // Leben festlegen
  $player['life'] = flipCoin();
  echo "{$player['name']} hat jetzt " . (($player['life'] == "Kopf") ? "viel" : "wenig") . " Leben.\n";

  // Geschwindigkeit festlegen
  $player['speed'] = flipCoin();
  echo "{$player['name']} hat jetzt " . (($player['speed'] == "Kopf") ? "viel" : "wenig") . " Geschwindigkeit.\n";

  // Magie festlegen
  $player['magic'] = flipCoin();
  echo "{$player['name']} hat jetzt " . (($player['magic'] == "Kopf") ? "viel" : "wenig") . " Magie.\n";

  // Stärke festlegen
  $player['strength'] = flipCoin();
  echo "{$player['name']} hat jetzt " . (($player['strength'] == "Kopf") ? "viel" : "wenig") . " Stärke.\n";
}

echo "\nNachdem ihr eure Charaktere ausgerüstet habt, seid ihr bereit für eure Quest.\n";
echo "Wir werfen jetzt eine Münze, um zu entscheiden, wer anfangen darf.\n";

// Münze werfen und Ergebnis ausgeben
$coin = flipCoin();
echo "Die Münze zeigt $coin.\n";

// Spieler 1 beginnt, falls die Münze auf Kopf gelandet ist
if ($coin == "Kopf") {
  echo "{$player1['name']} beginnt.\n";
  echo "{$player1['name']} blickt sich im dunklen Wald um und versucht, eine Gefahr zu erkennen.\n";
} else {
  // Sonst beginnt Spieler 2
  echo "{$player2['name']} beginnt.\n";
  echo "{$player2['name']} blickt sich im dunklen Wald um und versucht, eine Gefahr zu erkennen.\n";
}

echo "\nEine leise Stimme ertönt plötzlich aus dem Nichts. 'Wer seid ihr und was wollt ihr hier?'\n";
echo "{$player1['name']} tritt vor und stellt sich und seine Gefährten vor. 'Wir sind auf der Suche nach dem legendären Schatz des Waldes.'\n";
echo "Die Stimme antwortet: 'Der Schatz ist gut versteckt und nur den Würdigsten zugänglich. Möchtet ihr die Prüfungen bestehen und den Schatz finden?'\n";
echo "{$player1['name']} blickt seine Gefährten entschlossen an und nickt. 'Ja, wir sind bereit für die Prüfungen.'\n";
echo "Die Stimme lächelt. 'Dann soll es so sein. Folgt mir und ich werde euch den Weg zeigen.'\n";

?>

