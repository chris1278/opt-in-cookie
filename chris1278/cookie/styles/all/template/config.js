// Standardmäßig lädt Klaro die Konfiguration aus einer globalen Variablen "klaroConfig".
// Sie können dies ändern, indem Sie das Attribut "data-config" auf Ihrem Computer angeben
// Skript nehmen, z.b. so was:
// <script src="klaro.js" data-config="myConfigVariableName" />
var klaroConfig = {
	// Mit der Version 0.7.0 führen wir einen 'version'-Parameter ein,
	// der es uns einfacher macht, Konfigurationsdateien in Zukunft abwärtskompatibel zu halten.
	version: 1,

	// Wenn Sie dies auf true setzen, wird Klaro nicht automatisch geladen
	// wenn die Seite geladen wird.
	elementID: 'klaro',

	// Da diese Version für das phpbb Forum ausgelegt ist werden Sprachvariabeln über phpbb selber hier reingeladen
	// Da dort in den Sprachvariablen auch html codes drin sind sollte dieser Wert dringends auf "true" stehen bleiben
	// Empfohlener Wert "true"
	htmlTexts: true,

	// Wenn dieser Wert auf "true" gesetzt wird lädt das Cookie Hinweisfenster in der Linken Ecke leicht Versteckt.
	// Es schaut dann nur ein oberer Teil des Fensters heraus und man mus den Browser herunterscrollen damit man
	// die Buttons freilegen kann um eine Auswahl zu treffen, Es wird empfohlen: "false"
	embedded: false,

	// Sie können Dienste nach ihrem Zweck in einzelne Gruppen zusammenfassen. Dies ist ratsam
	// falls Sie eine große Anzahl von Diensten haben. Benutzer können diese dann aktivieren oder deaktivieren
	// in dem Sie einfach eine ganze Gruppe aktivieren bzw. deaktivieren,, anstatt jeden Dienst einzeln
	// aktivieren oder deaktivieren zu müssen. Es wird empfohlen: "true"
	groupByPurpose: true,

	// Wie Klaro die Einstellungen des Benutzers speichern soll. Es kann entweder "Cookie" sein
	// (Standardeinstellung) oder 'localStorage'.
	storageMethod: 'cookie',

	// Sie können den Namen des Cookies anpassen, das Klaro zum Speichern verwendet
	// Benutzerzustimmungsentscheidungen. Wenn nicht definiert, verwendet Klaro 'klaro'.
	cookieName: 'klaro',

	// Sie können auch eine benutzerdefinierte Ablaufzeit für das Klaro-Cookie festlegen.
	// Standardmäßig läuft es nach 120 Tagen ab.
	cookieExpiresAfterDays: 365,

	// Sie können für den Einwilligungsmanager selbst zur Cookie-Domain wechseln.
	// Verwenden Sie diese Option, wenn Sie einmal die Zustimmung für mehrere übereinstimmende Domänen erhalten möchten.
	// Wenn nicht definiert, verwendet Klaro die aktuelle Domain.
	//cookieDomain: '.localhost',

	// Definiert den Standardstatus für Dienste (true = standardmäßig aktiviert).
	// Empfohlen wird "false"
	default: false,

	// Wenn auf "true" gesetzt wird das Cookie-Hinweisfenster übergangen und direkt auf der Mitte des Bildschirms
	// der Cookie Einwilligungsmanager angezeigt. Der Bescuher mus dann erst seine gewünschten Einstellungen
	// tätigen und dies Bestätige. Erst dann kann der Besucher die Webseite wieder benutzen da solange der
	// Cookie Einwilligungsmanager aktiv ist sonst der Hintergrund abgedunkelt und gesperrt wird.
	// Es wird empfohlen: "false"
	mustConsent: false,

	// Bei dem Wert "false" wird der Button "Alle Akzeptieren" im Cookie Einwilligungsmanager nicht angezeigt.
	// Das heist das man dort nur den Button "Ausgewählte akzeptieren" angezeigt bekommt.
	// Es wird empfohlen: "true"
	acceptAll: true,

	// Bei der Auswahl "true" wird der Button "Ablehnen" im Cookie Hinweisfenster und im Cookie Einwilligungsmanager
	// nicht angezeigt. Diese Option sollte nur verwendet werden wenn die Option hideLearnMore: auf false gesetzt wird.
	// Da man ansonsten aus dem Cookie Hinweisfenster nicht zum Cookie Einwilligungsmanager gelangt um dort eine
	// Auswahl zu treffen. Es wird Empfohlen: false
	hideDeclineAll: false,

	// Der Wert "true" blendet den Schriftzug aus mit dem Man von dem Cookie Hinweisfenster aus den Cookie Einwilligungsmanager
	// aufrufen kann. Es wird davon abgeraten hier den wert auf "true" zu setzen wenn der Wert bei hideDeclineAll auf "true" steht
	// Da man sonst bein erstaufruf nur das Cookie Hinweisfenster aufgerufen bekommmt und man dem Benutzer dazu zwingt zu Akzeptieren.
	// Es wird empfohlen: "false"
	hideLearnMore: false,

	// Wenn auf "true" gesetzt öffnet sich das Hinweisfenster mit der Meldung für Cookies anstelle in der unteren Eck mittig
	// auf dem Bildschirm und verdunkelt den Rest des Bildes ein Wenig. Um die Webseite wieder Nutzen zu können
	// mus der Benutzer erst eine Auswahl tätigen und diese Bestätigen. Bei dem wert "false" kann er die Webseite Benutzen
	// auch wenn er keine Auswahl trifft. Daher wird empfohlen: "false"
	noticeAsModal: false,

	// Du kannst auch das 'Realized with Klaro!' Text in dem Cookie-Einwilligungsmanager ausblenden.
	// Bitte tu das nicht! Wir bieten Klaro als kostenloses Open Source Tool an.
	// Das Platzieren eines Links zu unserer Website hilft uns, das Wort darüber zu verbreiten.
	// was es uns letztendlich ermöglicht, Klaro zu machen! besser für alle.
	// Also sei bitte fair und lass den Link aktiviert. Vielen Dank :)
	// Es wird empfohlen: "false"
	disablePoweredBy: false,

	// Sie können eine zusätzliche Klasse (oder Klassen) angeben, die dem Klaro `div` hinzugefügt wird
	// zusätzliche Klasse: 'my-klaro',

	// Hier können Sie die UI-Sprache direkt definieren. Wenn nicht definiert, wird Klaro
	// benutze den in der globalen Variablen "lang" angegebenen Wert. Wenn das so ist
	// nicht vorhanden, es wird der Wert verwendet, der im Attribut "lang" von angegeben ist
	// HTML-Tag. Wenn das auch nicht existiert, wird 'en' verwendet.
	lang: 'pp',

	// Sie können vorhandene Übersetzungen überschreiben und Übersetzungen für Ihre hinzufügen
	// Servicebeschreibungen und -zwecke. Siehe `src / translations /` für eine vollständige
	// Liste der Übersetzungen, die überschrieben werden können:
	// https://github.com/KIProtect/klaro/tree/master/src/translations

	// Beispielkonfiguration, die zeigt, wie Übersetzungen überschrieben werden:
	// https: // github.com/KIProtect/klaro/blob/master/src/configs/i18n.js
	translations: {

		// If you erase the "consentModal" translations, Klaro will use the
		// bundled translations.
		pp: {
			consentNotice: {
				description: d1,
				learnMore: zc,
			},
			save: a5,
			acceptAll: a1,
			acceptSelected: a3,
			decline: a4,
			ok: a2,
			poweredBy: pb,
			service: {
				disableAll: {
					description: d2,
					title: t1
				},
				optOut: {
					description: o1,
					title: "(Opt-out)"
				},
				purpose: p1,
				purposes: p2,
				required: {
					description: d3,
					title: t2
				}
			},
			purposeItem: {
				service: s1,
				services: s2
			},
			consentModal: {
				title: t3,
				description: d4,
			},
			inlineTracker: {
				description: 'Beispiel für ein Inline-Tracking Skript',
			},
			externalTracker: {
				description: 'Beispiel für ein externes Tracking Skript',
			},
			purposes: {
				essential: {
					description: d5,
					title: t4
				},
				extern: {
					description: d6,
					title: t5
				},
			},
		},
	},

	// This is a list of third-party services that Klaro will manage for you.
	services: [
		{
			name: 'essentials',
			default: true,
			optOut: false,
			required: true,
			title: 'Login, Session Cookies',
			purposes: ['essential'],
			cookies: [],
		},
		{
			name: 'youtube',
			default: false,
			title: 'Youtube',
			purposes: ['extern'],
			callback : function(consent, app){
				if (typeof hideAllYoutubeContainer === "function") {
					if (!consent) {
						hideAllYoutubeContainer();
					} else {
						showAllYoutubeContainer();
					}
				}
			},
			required: false,
			optOut: false,
			onlyOnce: true,
		},
	],
};
