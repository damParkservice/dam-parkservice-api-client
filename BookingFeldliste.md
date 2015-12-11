# Feldliste (Booking) #
| **Feldname** | **Pflichtfeld Buchung?** | **Pflichtfeld Precheck?** | **Beschreibung** | **Beispiel-Wert** |
|:-------------|:-----------------|:-----------------|:-----------------|:------------------|
| Language     | N                | N | drei erlaubte Werte: en, de, pl. Default-Wert: en | de                |
| Salutation   | J                | N |erlaubte Werte: Herr, Frau, Firma, Mr, Mrs, Company, Pan, Pani, Spółka | Herr              |
| FirstName    | J                | N | mind. 3 Zeichen  | Max               |
| LastName     | J                | N | mind. 3 Zeichen  | Mustermann        |
| Company      | N                | N | Firmenname, für Rechnungsstellung relevant | dam.Parkservice   |
| Street       | N                | N | Adresse (Straße, Hausnr.), für Rechnungsstellung relevant. | Schulzendorfer Str. 10 |
| ZIP          | N                | N | Postleitzahl (max. 10 Zeichen) | 12529             |
| MobilePhone  | J                | N | Mobiltelefon. Wichtig, damit der Gast erreicht werden kann, falls sich beispielsweise Flugzeiten ändern. | 030 633 110 633   |
| Email        | J                | N | E-Mail Adresse des Gastes. An diese werden eine Eingangsbestätigung und eine automatische Bestätigung versendet. | info@mein-parken.de |
| NumberPlate  | J                | N | Kennzeichen des zu parkenden Fahrzeuges. Falls es um ein Mietfahrzeug geht, kann auch ein imaginäres Kennzeichen eingegeben werden. | B-Ü 123           |
| VoucherCode  | N                | N | Gutscheincode - bei Rabattaktionen (max. 20 Zeichen). | TEST              |
| OutFlightTS  | J                | N | Timestamp - Abflugzeit des Hinfluges (Format: YYYY-MM-DD HH:MM:SS). Die Uhrzeit 00:00 Uhr ist kein gültiger Wert. | N | 2014-02-01 14:00:00 |
| OutFlightNo  | J                | N | Flugnummer des Hinfluges - damit der Parkplatzbetreiber bei Flugverspätungen automatisch reagieren kann | LH123             |
| RetFlightTS  | J                | N | Timestamp - Ankunftzeit des Rückfluges (Format: YYYY-MM-DD HH:MM:SS) | 2014-02-05 17:52:00 Die Uhrzeit 00:00 Uhr ist kein gültiger Wert. |
| RetFlightNo  | J                | N | Flugnummer des Rückfluges - damit der Parkplatzbetreiber bei Flugverspätungen automatisch reagieren kann | LH321             |
| ParkTS       | J                | N | Timestamp - Voraussichtliche Anreisezeit bei dam.Parkservice vor dem Hinflug (Format: YYYY-MM-DD HH:MM:SS). Empfohlen wird spätestens zwei Stunden vor Abflugzeit. | 2014-02-01 12:00:00 |
| Destination  | J                | N | Flugziel des Parkgastes - z. B. Rom, SFO, Moskau, ... für den Fall, dass die Flugnummern nicht korrekt sind. | SFO               |
| NumberOfPassengers | J                | N | Anzahl der Passagiere, die im Zusammenhang mit dieser Reservierung zum Flughafen gebracht und wieder abgeholt werden müssen. | 3                 |
| NumberOfVehicles | J                | N | Anzahl der Fahrzeuge, die zu dieser Reservierung gehören. Jedes Fahrzeug bekommt automatisch eine eigene Buchungs-Id. | 1                 |
| Indoor       | J                | N | Beheizter Hallenstellplatz (true) oder Außenplatz (false) | false             |
| Comment      | N                | N | Platz für Kommentare / Bemerkungen des Gastes. Diese werden falls notwendig an den Shuttlefahrer weitergeleitet. | Zwei Kinder (3 und 9 Jahre alt) - bitte Kindersitze einplanen. |
| AgbChecked   | J                | N | Definiert, ob der Gast die AGB gelesen hat und bestätigt. | J                 |
| PartnerId    | N                | N | Vermittlungspartner-ID, falls zutreffend | 000000            |
| TestMode     | N                | N | Verschiedene Testmodi: **TESTMODE\_NODB** schreibt eine Buchung nicht in die Datenbank. **TESTMODE\_NODB\_PAST** schreibt eine Buchung nicht in die Datenbank, erlaubt auch Buchungsdaten in der Vergangenheit. **TESTMODE\_NODB\_NOCC** schreibt eine Buchung nicht in die Datenbank, sendet keine Mail an dam.Parkservice. | 
| BookingIP    | J                | J | IP-Adresse desjenigen, der die Buchung durchgeführt hat. | 176.9.199.2       |
| SessionId    | N                | N | Session-Id desjenigen, der die Buchung durchgeführt hat. Hilft, Schwierigkeiten im Buchungsprozess zu analysieren. | a572e4522b25895d580 |
| APIKey       | J                | J | Individueller API-Key. Für Testzwecke kann TESTMODEREQUEST verwendet werden - dadurch werden keine Datenbankabfragen ausgeführt und keine E-Mails versendet. | TESTMODEREQUEST   |
| BookingMode | J | N | Gibt an, was genau die aktuelle Abfrage bewirken soll: a) **precheck** = Der Server wertet nur die gesendeten Felder auf Fehler und Probleme aus. Berechnet nach Möglichkeit Preis und Verfügbarkeit. b) **completeness** prüft alle Felder auf Vollständigkeit. Berechnet Preis und Verfügbarkeit. c) **booking** führt einen Buchungsversuch durch. Default-Wert: precheck. | booking |
