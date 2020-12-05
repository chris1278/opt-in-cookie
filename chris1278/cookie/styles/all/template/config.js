// By default, Klaro will load the config from  a global "klaroConfig" variable.
// You can change this by specifying the "data-config" attribute on your
// script take, e.g. like this:
// <script src="klaro.js" data-config="myConfigVariableName" />
var klaroConfig = {
	// With the 0.7.0 release we introduce a 'version' paramter that will make
	// if easier for us to keep configuration files backwards-compatible in the future.
	version: 1,

	// You can customize the ID of the DIV element that Klaro will create
	// when starting up. If undefined, Klaro will use 'klaro'.
	elementID: 'klaro',

	// Setting this to true will keep Klaro from automatically loading itself
	// when the page is being loaded.
	noAutoLoad: false,

	// Setting this to true will render the descriptions of the consent
	// modal and consent notice are HTML. Use with care.
	htmlTexts: true,

	// Setting 'embedded' to true will render the Klaro modal and notice without
	// the modal background, allowing you to e.g. embed them into a specific element
	// of your website, such as your privacy notice.
	embedded: false,

	// You can group services by their purpose in the modal. This is advisable
	// if you have a large number of services. Users can then enable or disable
	// entire groups of services instead of having to enable or disable every service.
	groupByPurpose: true,

	// How Klaro should store the user's preferences. It can be either 'cookie'
	// (the default) or 'localStorage'.
	storageMethod: 'cookie',

	// You can customize the name of the cookie that Klaro uses for storing
	// user consent decisions. If undefined, Klaro will use 'klaro'.
	cookieName: 'klaro',

	// You can also set a custom expiration time for the Klaro cookie.
	// By default, it will expire after 120 days.
	cookieExpiresAfterDays: 365,

	// You can change to cookie domain for the consent manager itself.
	// Use this if you want to get consent once for multiple matching domains.
	// If undefined, Klaro will use the current domain.
	//cookieDomain: '.localhost',

	// Defines the default state for services (true=enabled by default).
	default: false,

	// If "mustConsent" is set to true, Klaro will directly display the consent
	// manager modal and not allow the user to close it before having actively
	// consented or declines the use of third-party services.
	mustConsent: false,

	// Show "accept all" to accept all services instead of "ok" that only accepts
	// required and "default: true" services
	acceptAll: true,

	// replace "decline" with cookie manager modal
	hideDeclineAll: false,

	// hide "learnMore" link
	hideLearnMore: false,

	// show cookie notice as modal
	noticeAsModal: false,

	// You can also remove the 'Realized with Klaro!' text in the consent modal.
	// Please don't do this! We provide Klaro as a free open source tool.
	// Placing a link to our website helps us spread the word about it,
	// which ultimately enables us to make Klaro! better for everyone.
	// So please be fair and keep the link enabled. Thanks :)
	//disablePoweredBy: true,

	// you can specify an additional class (or classes) that will be added to the Klaro `div`
	//additionalClass: 'my-klaro',

	// You can define the UI language directly here. If undefined, Klaro will
	// use the value given in the global "lang" variable. If that does
	// not exist, it will use the value given in the "lang" attribute of your
	// HTML tag. If that also doesn't exist, it will use 'en'.
	//lang: 'en',

	// You can overwrite existing translations and add translations for your
	// service descriptions and purposes. See `src/translations/` for a full
	// list of translations that can be overwritten:
	// https://github.com/KIProtect/klaro/tree/master/src/translations

	// Example config that shows how to overwrite translations:
	// https://github.com/KIProtect/klaro/blob/master/src/configs/i18n.js
	translations: {
		// translationsed defined under the 'zz' language code act as default
		// translations.
		zz: {
		  //  privacyPolicyUrl: '',
		},
		// If you erase the "consentModal" translations, Klaro will use the
		// bundled translations.
		de: {
			consentNotice: {
				description: "Es müssen für folgende Optionen noch die Cookies ausgewählt werden: <br><br>{purposes}. <br><br>Die Einstellungen können später zu jedem Zeitpunkt geändert werden.<br><br>",
				learnMore: "Zu den Cookie-Einstellungen",
			},
			acceptAll: "Alle akzeptieren",
			acceptSelected: "Ausgewählte akzeptieren",
			decline: "Ablehnen",
			ok: "Akzeptieren",
			poweredBy: "Realisiert mit Klaro!",
			service: {
				disableAll: {
					description: "Mit diesem Schalter können Sie alle Dienste aktivieren oder deaktivieren.",
					title: "Alle Dienste aktivieren oder deaktivieren"
				},
				optOut: {
					description: "Diese Dienste werden standardmäßig geladen (Sie können sich jedoch abmelden)",
					title: "(Opt-out)"
				},
				purpose: "Zweck",
				purposes: "Zwecke",
				required: {
					description: "Dieser Service ist immer erforderlich",
					title: "(immer erforderlich)"
				}
			},
			purposeItem: {
				service: "Dienst",
				services: "Dienste"
			},
			consentModal: {
				title: 'Einstellungen für unsere Cookie´s',
				description:
					'Hier können die Einstellungen für Cookies vorgenommen werden die evtl. gesetzt werden. Es sind viele Einstellungen da, das heist aber nicht das auch alle Dienste verwendet werden. Es handelt sich bei diesem Script um ein Vordefiniertes universelles Script zum Auswählen von Cookies.<br><br> Allgemeine Hinweise und Informationen entnehmen Sie bitte unserer <strong>Datenschutzerklärung</strong> bzw. <strong>Nutzungsbedingungen</strong> die wir im Fussbereich der Seite verlinkt haben.',
			},
			inlineTracker: {
				description: 'Beispiel für ein Inline-Tracking Skript',
			},
			externalTracker: {
				description: 'Beispiel für ein externes Tracking Skript',
			},
			purposes: {
				essential: {
					description: "Diese Cookies sind voreingestellte Werte und müssen akzeptiert werden, da diese für den Betrieb der Webseite erforderlich sind. \n",
					title: "Technisch notwendige Cookies"
				},
				extern: {
					description: "Hier können Cookies eingestellt werden die durch externe Medien wie z.B. Youtube, Facebook etc. erstellt werden",
					title: "Externe Medien"
				},
			},
		},
		en: {
			consentNotice: {
				description: "The cookies must still be selected for the following options: <br><br>{purposes}. <br><br>The settings can be changed later at any time.<br><br>",
				learnMore: "To the cookie settings",
			},
			acceptAll: "Accept all",
			acceptSelected: "Accept selected",
			decline: "Decline",
			ok: "Accept",
			poweredBy: "Realized with Klaro!",
			service: {
				disableAll: {
					description: "Use this switch to enable or disable all services.",
					title: "Enable or disable all services"
				},
				optOut: {
					description: "This services is loaded by default (but you can opt out)",
					title: "(opt-out)"
				},
				purpose: "purpose",
				purposes: "purposes",
				required: {
					description: "This services is always required",
					title: "(always required)"
				}
			},
			purposeItem: {
				service: "service",
				services: "services"
			},
			consentModal: {
				title: 'Settings for our Cookie´s',
				description:
					'The settings for cookies can be made here, which may be set. There are many settings, but that does not mean that all services are used. This script is a predefined universal script for selecting cookies. <br> <br> For general notes and information, please refer to our <strong> Privacy Policy </strong> or <strong> Terms of Use </strong> which we have linked in the footer of the page.',
			},
			inlineTracker: {
				description: 'Example of an inline tracking script',
			},
			externalTracker: {
				description: 'Example of an external tracking script',
			},
			purposes: {
			essential: {
					description: "These cookies are preset values and must be accepted as they are required for the website to operate. \n",
					title: "Technically necessary cookies"
				},
			extern: {
					description: "Cookies can be set here that are sent through external media such as Youtube, Facebook etc. can be created",
					title: "External media"
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
