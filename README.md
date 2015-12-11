**Einleitung**

Mit Hilfe der API können Reservierungsanfragen für den Parkplatz der Firma dam.Parkservice (http://www.mein-parken.de) vorgenommen werden. Das Familienunternehmen bietet günstige und sichere Parkplätze am Flughafen Berlin Schönefeld (SXF) an.

**Anwendungsfälle**

Die API kann beispielsweise für Reservierungen von Fremdwebsites aus, mobilen Applikationen, Desktopapplikationen, Integration in komplexe Buchungssoftware, etc. verwendet werden.

**Technik**

Es steht ein SOAP Webservice zur Verfügung. Die WSDL-Datei befindet sich hier: http://api.parkplusfly-sxf.de/soap/meinparken.wsdl. Die Schnittstelle benötigt Daten wie Name und Flugdaten - und gibt entweder die ID der Buchung oder eine bis mehrere aus einer Reihe von definierten Fehlermeldungen zurück. Die Felder des Webservices sind hier beschrieben: Feldliste

**Prozess**

Die an den Webservice gesendeten Requests sind verbindliche Reservierungsanfragen. Kann die Eingabe ordnungsgemäß verarbeitet werden, folgt umgehend eine E-Mail Bestätigung über den Erhalt der Anfrage an den Parkgast. Die weitere Verarbeitung der Anfrage erfolgt durch dam.Parkservice: Jede Anfrage wird von dem Unternehmen manuell geprüft. Erst danach erfolgt eine Buchungs-Bestätigung per E-Mail.

Über die API vorgenommene Buchungen sind gleichwertig mit solchen, die über die Website eingehen.

**Nutzung (produktiv)**

Zur Nutzung der API wird ein API-Key benötigt. Diesen erhalten Sie auf Anfrage bei dam.Parkservice. Für erste Tests kann der Key TESTMODEREQUEST verwendet werden.

**Howto**

Für Einsteiger steht hier ein PHP-Codebeispiel zur Verfügung.

**Changelog**

    2013-03-30 Veröffentlichung des Codes
    2013-05-27 Neues, optionales Feld VoucherCode? für Rabatt-Aktionen 

**Credits**

Wir haben zur Erstellung der WSDL-Datei, der Webservice-Dokumentation und der PHP Client Dateien den php-wsdl-creator verwendet. Vielen Dank den Autoren für dieses überaus hilfreiche Tool! 
