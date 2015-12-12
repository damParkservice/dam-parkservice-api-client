#Rückgabewerte

Die Rückgabe des Web Services enthält 5 Objekte:

* BookingId
* Errors
* PrecheckOk
* Availability
* Pricing

## BookingId
Array aus keiner, einer oder mehreren Booking Ids. Ist nur gefüllt, wenn die Buchung erfolgreich durchgeführt wurde. Beinhaltet mehrere Booking Ids, wenn Stellplätze für mehrere Fahrzeuge reserviert wurden (pro Fahrzeug eine Booking Id). Ist leer, wenn keine Buchung durchgeführt wurde.

##Errors
Array aus keinem, einem oder mehreren Fehlerobjekten. Jedes Fehlerobjekt hat drei Bestandteile:
* Code: Der Fehlercode - Hilfreich zum Debuggen und zur Zuordnung des richtigen Fehlertextes
* Field: Gibt an, in welchem Web Service Feld der Fehler aufgetreten ist (z. B. *Salutation* für das Anrede-Feld)
* Message: Fehlerbeschreibung, sprachabhängig. Die Fehlermeldung wird in der Regel aus der übersetzten Fehlerliste bezogen und kann dem Endkunden direkt angezeigt werden.
 
##PrecheckOk
Gibt im Modus *precheck* an, ob die Prüfung erfolgreich (1) war, oder nicht (0).

##Availability
Das *Availability* Objekt ist gefüllt, wenn aufgrund der angegebenen Daten eine Verfügbarkeitsabfrage durchgeführt werden konnte und hat drei Bestandteile:
* outdoor: Gibt den Füllstand der Außenparkplätze an
* indoor: Gibt den Füllstand der Hallenparkplätze an
* requested: Gibt den Füllstand der Hallen- oder Außenparkplätze an, - je nachdem, was der Gast gewählt hat. Hat er nichts gewählt, enthält es den Füllstand der Außenparkplätze

Jeder Bestandteil kann einen der drei folgenden Werte haben:
* free = es sind ausreichend Parkplätze vorhanden
* short = nur noch wenige Parkplätze frei
* occupied = keine Parkplätze frei

Das *Availability* Objekt ist leer, wenn nicht genug Daten für eine Verfügbarkeitsabfrage vorliegen, also beispielsweise kein Rückflugdatum angegeben wurde.

##Pricing
Das *Pricing* Objekt ist gefüllt, wenn aufgrund der angegebenen Daten eine Preiskalkulation durchgeführt werden konnte und hat drei Bestandteile:
* days: Gibt die Anzahl der berechneten Tage an. Beispiele: *4*, *7*, *1*
* indoor: Gibt den Preis für einen Hallenstellplatz an. Beispiele: *15*, *28.3*, *
* outdoor: Gibt den Preis für einen Außenstellplatz an

Die Werte enthalten unformatierte Dezimalzahlen. Als Dezimalzeichen wird ein Punkt(.) verwendet. Bei Zahlen ohne Nachkommastelle werden weder Nachkommastellen noch das Dezimalzeichen zurückgegeben.

Das *Pricing* Objekt ist leer, wenn nicht genug Daten für eine Verfügbarkeitsabfrage vorliegen, also beispielsweise kein Rückflugdatum angegeben wurde.

