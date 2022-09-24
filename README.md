# Template Webseite

## Beschreibung
Template Webseite für das schnelle erstellen eines neuen Webprojekts und Pflege von Standardklassen und -Methoden.

### Framwork und Voraussetzungen
Die Template Webseite verwendet Laravel 9 und benötigt daher min. PHP 8.0.x.

### Erstellen eines neuen Webprojekts
Nach dem herunterladen der Template-Webseite und dem Ausführen eines Updates mittels Composer folgende Dateien anpassen:

- **.env** anlegen (.env.template kann als Vorlage verwendet werden, Konfiguration für Datenbank, Names des Projekts, etc.)
- **config/constants.php** anpassen ($prodServerURL entsprechend abändern sowie benötigte Shibboleth-Variablen und Abfragen dekommentieren. Sämtliche Methoden zur Abfrage dieser Variablen sind bereits in *app/Helpers/Miscellaneous/ShibbolethHelper.php* hinterlegt.)
- **config/features.php** benötigte Features aktivieren oder deaktivieren.
- Wenn Livewire verwendet werden soll, dann muss für das Webprojekt in der Entwicklungsumgebung ein vHost eingerichtet sein, da ansonsten die benötigte/eingebundene livewire.js nicht gefunden wird.
- ...

---

## Klassen, Components, etc.

### Icons (Bootstrap Icons, eingebunden als View Component)
#### Verwendung:  
In den Blade-Dateien `<x-icon type="iconname"/>` verwenden, um entsprechende Icons anzeigen zu lassen. Die größe der Icons richtet sich nach der für den jeweilgen Bereich geltenden Textgröße. Sollen Icons größer oder kleiner dargestellt werden, kann dies, wenn z. B. eine Größe von 24px gewünscht ist, über `<x-icon type="iconname" :size="24"/>` angepasst werden. 
  
Neue Icons können unter ***/app/View/Components/icon.php*** in der Methode ***setIcon()*** hinzugefügt oder bestehende Icons bearbeitet werden.

| Icon-Namen | Beschreibung                                                    | Beispiele für Verwendungsmöglichkeiten                                                            |
|----------|-----------------------------------------------------------------|---------------------------------------------------------------------------------------------------|
| ***logout*** | Symbol zum Ausloggen                                            | Shibboleth-Logout                                                                                 |
| ***print*** | Drucker                                                         | Dokument ausdrucken                                                                               |
| ***delete*** | Mülleimer                                                       | Datensatz/Information oder Datei löschen                                                          |
| ***edit*** | Stift                                                           | Datensatz/Information bearbeiten                                                                  |
| ***copy*** | Kopiersymbol (zwei Blätter)                                     | Datensatz/Information kopieren                                                                    |
| ***search*** | Lupe                                                            | Suchfunktion                                                                                      |
| ***showDocument*** | Dokumentseite                                                   | Datei (z. B. eine PDF) anzeigen                                                                   |
| ***upload*** | Ablage, mit einem Pfeil nach oben                               | Datei hochladen                                                                                   |
| ***import*** | Dokumentseite, die einen Pfeil nach oben enthält                | (Vorhandene) Datei importieren (z. B. eine bereits hochgeladene Datei manuell ins DMS überführen) |
| ***unfolded*** | Eckiger Pfeil der nach unten zeigt                              | Ein Bereich auf der Webseite ist ausgeklappt.                                                     |
| ***folded*** | Eckiger Pfeil der nach rechts zeigt                             | Ein Bereich auf der Webseite ist eingeklappt.                                                     |
| ***send*** | Papierflugzeug                                                  | Etwas absenden (z. B. ein ausgefülltes Formular)                                                  |
| ***save*** | Stilisiertes Diskettensymbol mit Pfeil nach unten               | Informationen abspeichern (z. B. wenn ein Datensatz bearbeitet wurde)                             |
| ***order*** | Einkaufskorb                                                    | Z. B. für einen Link zu einer Bestellung oder einem Bestellformular                               |
| ***bill*** | Portemonnaie/Portmonee                                          | Z. B. für einen Link zu einer Rechnung oder einem Rechnungsformular                               |
| ***euro*** | Euro-Symbol                                                     | Z. B. für ein Eingabefeld etc. das mit einem Geldbetrag zutun hat                                 |
| ***folderClosed*** | Ein geschlossener Ordner                                        | Z. B. als Symbol für einen Link zu einer Akte im DMS                                              |
| ***folderOpen*** | Ein geöffneter Ordner                                           | Z. B. wenn Inhalte aus einer DMS-Akte auf der Webseite angezeigt werden                           |
| ***circleUp*** | Ein Kreis in dem sich ein nach oben gerichteter Pfeil befindet  | Für Bookmarks, um innerhalb einer Seite nach oben zu springen                                     |
| ***circleDown*** | Ein Kreis in dem sich ein nach unten gerichteter Pfeil befindet | Für Bookmarks, um innerhalb einer Seite nach unten zu springen                                    |
| ***info*** | Ein Kreis in dem sich ein "i" befindet                          | Um allgmeine Informationstexte und -Boxen zu kennzeichnen                                         |
| ***warning*** | Ein Dreieck in dem sich ein "!" befindet                        | Um wichtige Warnhinweistexte und -Boxen zu kennzeichnen                                           |
| ***back*** | Ein Chevron das nach links zeigt                                | Beispielsweise um einen Link zurück zur letzten Seite oder einer Übersicht zu kennzeichnen        |
| ***forward*** | Ein Chevron das nach rechts zeigt                               | Beispielsweise um einen Link vorwärts zur nächsten Seite oder nächsten Schritt zu kennzeichnen    |
| ***left*** | Ein Pfeil der nach links zeigt                                  | Wenn ein Symbol benötigt wird, das in der entsprechenden Richtung auf etwas hinweisen soll        |
| ***up*** | Ein Pfeil der nach oben zeigt                                   | Wenn ein Symbol benötigt wird, das in der entsprechenden Richtung auf etwas hinweisen soll        |
| ***right*** | Ein Pfeil der nach rechts zeigt                                 | Wenn ein Symbol benötigt wird, das in der entsprechenden Richtung auf etwas hinweisen soll        |
| ***down*** | Ein Pfeil der nach unten zeigt                                  | Wenn ein Symbol benötigt wird, das in der entsprechenden Richtung auf etwas hinweisen soll        |
| ***plus*** | Pluszeichen                                                     | Z. B. als Icon für einen kleinen Butten mit dem ein neuer Datensatz hinzugefügt werden soll       |
| ***minus*** | Minuszeichen                                                    | Z. B. als Icon für einen kleinen Button mit dem ein Datensatz entfernt werden soll.               | 
| ***currency*** | Geldschein                                                      | Z. B. als Icon für einen Button mit dem die Währung umgestellt werden kann                        |
| ***supplier*** | Ein kleiner Lastwagen                                           | Als Symbol für Buttons, die etwas mit einem Lieferanten zu tun haben                              |
| ***agree*** | Ein Kreis mit einem Häkchen darin                               | Als Symbol um eine Eingabe zu bestätigen                                                          |
| ***cancel*** | Ein Kreis mit einem "X" darin                                   | Als Symbol um z. B. eine Eingabe bzw. einen Vorgang abzubrechen                                   |
| ***design*** | Stilisiertes Auge                                               | Als Symbol um z. B. bezug auf das Seiten-Design zu nehmen wie etwa bei einem Layoutwechsel        |
| ***bankAccount*** | Ein Gebäude, das eine Bank symbolisieren soll                   | Soll eine Bankverbindung oder Bankverbindungsdaten symbolisieren bzw. alles was damit zutun hat   |
| ***cookie*** | Ein schwarzer Kreis der einen Keks symbolisieren soll           | Als Symbol für Cookie-bezogene Links oder Beschreibungen, wie z.B. einen Cookie löschen           |
| ***check*** | Ein Häkchen                                                     | Um etwas auszuwählen oder zu symbolisieren, dass etwas geklappt hat                               |
| ***cross*** | Ein Kreuz                                                       | Um etwas abzuwählen oder zu symbolisieren, dass etwas nicht geklappt hat                          |
| ***clear*** | Radiergummi                                                     | Als Symbol um eingaben zu löschen bzw. Eingabefelder zu leeren                                    |
---

## Fehlermeldungen / Fehlerausgabe / Wartungsmodus
Unter ***/resources/views/errors*** sind einige angepasste Blade-Dateien angelegt, die speziell für das Anzeigen von allgemeinen Fehlermeldungen gedacht sind. Um die jeweiligen Meldungen bzw. Seiten anzuzeigen, muss im Quellcode (egal ob in einer Blade- oder PHP-Datei) die Funktion **abort()** aufgerufen werden. Dieser kann lediglich der Fehlercode mitübergeben werden (***z.B. abort(404)***), wodurch der Standardtext ausgegeben wird, oder auch ein selbst definierter Hinweis (***z. B. abort(404, 'Die gesuchte Datei konnte nicht gefunden werden.')***).

|   Fehlercode    | Beschreibung                                                              | Default-Text      |
|:---------------:|---------------------------------------------------------------------------|-------------------|
|    ***401***    | Keine Berechtigung für die jeweilige Seite                                | Unauthorized      |
|    ***403***    | Zugriff/Aktion verweigert                                                 | Forbidden         |
|    ***404***    | Seite/Datei nicht gefunden                                                | Not Found         |
|    ***419***    | Session für die Seite abgelaufen/Anfrage veraltet                         | Page Expired      |
|    ***429***    | Zu viele Anfragen (an die/den Server/ Webseite/Service)                   | Too Many Requests |
|    ***500***    | Server-Fehler                                                             | Server Error      |
|    ***503***    | Service nicht verfügbar (wird in Laravel für den Wartungsmodus verwendet) | (Wartungsmodus*)  |


***<ins>__Wartungsmodus__</ins>**:
Der Wartungsmodus wird durch folgende Befehle, die via Terminal (bzw. Putty) im Hauptverzeichnis des jeweiligen Webprojekts eingegeben werden müssen, aktiviert oder deaktiviert:

|    Terminal-Befehl     | Beschreibung                                                          |
|:----------------------:|-----------------------------------------------------------------------|
| ***php artisan down*** | Wartungsmodus aktivieren _(Wartungsmodushinweis wird angezeigt)_      |
|  ***php artisan up***  | Wartungsmodus deaktivieren _(Normale Webseite wird wieder angezeigt)_ |
  
Der Text der im Wartungsmodus angezeigt wird, lautet wie folgt:
> **Seite kurzzeitig nicht erreichbar**  
>   
> Entschuldigen Sie die Unannehmlichkeiten, aber wir führen derzeit Wartungsarbeiten durch. Bei Fragen schicken Sie bitte wie gewohnt eine E-Mail an [it-support@th-rosenheim.de](mailto:it-support@th-rosenheim.de).  
>  
>Die Webseite wird in Kürze wieder zur Verfügung stehen!
>   
> &mdash; Das DMS-Team



