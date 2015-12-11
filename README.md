#dam.Parkservice Reservierungs-API

##Einleitung

Mit Hilfe der API können Reservierungsanfragen für den Parkplatz der Firma dam.Parkservice (http://www.mein-parken.de) vorgenommen werden. Das Familienunternehmen bietet günstige und sichere Parkplätze am Flughafen Berlin Schönefeld (SXF) an.

##Anwendungsfälle

Die API kann beispielsweise für Reservierungen von Fremdwebsites aus, mobilen Applikationen, Desktopapplikationen, Integration in komplexe Buchungssoftware, etc. verwendet werden.

##Technik

Es steht ein SOAP Webservice zur Verfügung. Die WSDL-Datei befindet sich hier: http://api.parkplusfly-sxf.de/soap/meinparken.wsdl. Die Schnittstelle benötigt Daten wie Name und Flugdaten - und gibt entweder die ID der Buchung oder eine bis mehrere aus einer Reihe von definierten [Fehlermeldungen](https://github.com/damParkservice/dam-parkservice-api-client/blob/master/wiki/BookingFehlermeldungen.md) zurück. Die Felder des Webservices sind hier beschrieben: [Feldliste](https://github.com/damParkservice/dam-parkservice-api-client/blob/master/wiki/BookingFeldliste.md)

##Prozess
Der Webservice kennt drei Modi: **precheck**, **completeness** und **booking**.

###precheck
Der Webservice verarbeitet die gesendeten Daten nicht vollständig als Buchugn, sondern prüft lediglich den Inhalt übermittelter Felder auf Plausibilität. Daher gibt es in diesem Modus - bis auf den API Key - keine Pflichtfelder.

Der precheck Modus eignet sich in folgenden Fällen:
* Verfügbarkeitsabfrage (hierzu müssen die Hin- und Rückflugdaten, die Anzahl Fahrzeuge und ggf. die Art des Stellplatzes angegeben werden)
* Preisabfrage (hierzu müssen die Hin- und Rückflugdaten, die Anzahl Fahrzeuge und ggf. die Art des Stellplatzes angegeben werden)
* Mehrseitige Formulare (z. B. nur Anrede, Vorname, Nachname auf der ersten Seite)

###completeness
Der Webservice prüft die gesendeten Daten auf Vollständigkeit und Fehler, führt jedoch keine Buchung durch.
Die Verwendung des completeness Modus empfiehlt sich in folgenden Fällen:
* Prüfung der Daten vor Anzeigen einer *Zusammenfassungs-Seite*

###booking
Die an den Webservice gesendeten Requests sind verbindliche Reservierungsanfragen. Kann die Eingabe ordnungsgemäß verarbeitet werden, folgt umgehend eine E-Mail Bestätigung über den Erhalt der Anfrage an den Parkgast. Die weitere Verarbeitung der Anfrage erfolgt durch dam.Parkservice: Jede Anfrage wird von dem Unternehmen manuell geprüft. Erst danach erfolgt eine Buchungs-Bestätigung per E-Mail.

Über die API vorgenommene Buchungen sind gleichwertig mit solchen, die über die Website eingehen.

##Nutzung (produktiv)

Zur Nutzung der API wird ein API-Key benötigt. Diesen erhalten Sie auf Anfrage bei dam.Parkservice. Für erste Tests kann der Key TESTMODEREQUEST verwendet werden.

##Howto

Für Einsteiger steht [hier](https://github.com/damParkservice/dam-parkservice-api-client/blob/master/wiki/CodeBeispielPHP.md) ein [PHP-Codebeispiel](https://github.com/damParkservice/dam-parkservice-api-client/blob/master/wiki/CodeBeispielPHP.md) zur Verfügung.

##Changelog

    2013-03-30 Veröffentlichung des Codes
    2013-05-27 Neues, optionales Feld VoucherCode? für Rabatt-Aktionen 
    2015-12-11 Neues Feld BookingMode und Teildatenübermittlung. Umzug zu Github.

##Credits

Wir haben zur Erstellung der WSDL-Datei, der Webservice-Dokumentation und der PHP Client Dateien den php-wsdl-creator verwendet. Vielen Dank den Autoren für dieses überaus hilfreiche Tool! 
