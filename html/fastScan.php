<?php
session_start();  // Avvia la sessione per verificare se l'utente è loggato
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="homePage.css">
  
    <title>Leaks</title>

    <nav>
        <div class="nav-container">
            <ul>
                <li class="nav-item"><a href="https://github.com/TTVTheCats/PatchPulse/tree/main">GITHUB</a></li>
                <li class="nav-item"><a href="#">SETTINGS</a></li>
                <li class="logo-container"><img class="mainIcon" src="../svgs/PatchPulseLogo.svg" alt="CentredLogo"></li>
                <li class="nav-item"><a href="homePage.php">HOME</a></li>

                <!-- Modifica dinamica della navbar in base allo stato di login -->
                <?php if (isset($_SESSION['user_id'])): ?>
                        <!-- Se l'utente è loggato, mostra "ACCOUNT" -->
                        <li class="nav-item"><a href="accountPage.php">ACCOUNT</a></li>
                    <?php else: ?>
                        <!-- Se l'utente non è loggato, mostra "LOGIN" -->
                        <li class="nav-item"><a href="loginPage.php">LOGIN</a></li>
                    <?php endif; ?>
            </ul>
        </div>
    </nav>
</head>




<body>
    <div class = "fastScan">
    <h1><strong>Fast Scan</strong></h1>


    <p><strong>Il Tuo Indirizzo IPv4 Pubblico:</strong> <span id="publicIpv4">Caricamento...</span></p>
    <p><strong>Il Tuo Indirizzo IPv6 Pubblico:</strong> <span id="publicIpv6">Caricamento...</span></p>
    <p><strong>Supporto WebRTC:</strong> <span id="webrtcSupport">Caricamento...</span></p>
    <p><strong>JavaScript Attivo:</strong> <span id="javascriptStatus">Caricamento...</span></p>
    <p><strong>Browser Fingerprinting:</strong> <span id="browserFingerprinting">Caricamento...</span></p>
    <p><strong>WebGL Fingerprinting (WebGL e WebGL2):</strong> <span id="webglFingerprinting">Caricamento...</span></p>
    <p><strong>Protezione Avanzata:</strong> <span id="advancedProtection">Caricamento...</span></p>
    <p><strong>Prevenzione di Tracking:</strong> <span id="trackingPrevention">Caricamento...</span></p>
    <p><strong>Utilizza sempre connessioni sicure (HTTPS):</strong> <span id="httpsOnly">Caricamento...</span></p>
    <p><strong>Protezione da XSS:</strong> <span id="xssProtection">Caricamento...</span></p>



    <p><strong>Dimensioni Finestra Browser:</strong> <span id="windowSize">Caricamento...</span></p>
    <p><strong>Tipo di Browser:</strong> <span id="browserType">Caricamento...</span></p>
    <p><strong>Lingua del Browser:</strong> <span id="browserLanguage">Caricamento...</span></p>
    <p><strong>Cookies Abilitati:</strong> <span id="cookiesEnabled">Caricamento...</span></p>
    <p><strong>Plugin del Browser:</strong> <span id="browserPlugins">Caricamento...</span></p>
    <p><strong>Geolocalizzazione Abilitata:</strong> <span id="geoLocationEnabled">Caricamento...</span></p>
    <p><strong>Versione del Browser:</strong> <span id="browserVersion">Caricamento...</span></p>
    <p><strong>Abilitazione Pop-up:</strong> <span id="popupsEnabled">Caricamento...</span></p>
    <p><strong>Versione del Sistema Operativo:</strong> <span id="osVersion">Caricamento...</span></p>
    <p><strong>Blocco Annunci Attivo:</strong><span id="adBlockEnabled">Caricamento...</span></p>
    <p><strong>Modalità InIncognito o Privata:</strong> <span id="incognitoMode">Caricamento...</span></p>
    <p><strong>Do Not Track:</strong> <span id="doNotTrack">Caricamento...</span></p>
    <p><strong>Risorse Bloccate:</strong> <span id="blockedResources">Caricamento...</span></p>
    <p><strong>Modalità Sviluppatore:</strong> <span id="developerMode">Caricamento...</span></p>
    <p><strong>Battery Status:</strong> <span id="batteryStatus">Caricamento...</span></p>
    <p><strong>Connection Type:</strong> <span id="connectionType">Caricamento...</span></p>
    <p><strong>Device Memory:</strong> <span id="deviceMemory">Caricamento...</span></p>
    <p><strong>Numero di core della CPU:</strong> <span id="gpuCpuCores">Caricamento...</span></p>
    <p><strong>Nome della scheda video:</strong> <span id="gpuName">Caricamento...</span></p>




    <!-- Altre informazioni -->
    <p><strong>Supporto ai Web Workers:</strong> <span id="webWorkersSupported">Caricamento...</span></p>
    <p><strong>Supporto alle Media Queries:</strong> <span id="mediaQueriesSupported">Caricamento...</span></p>
    <p><strong>Informazioni sulla posizione geografica:</strong> <span id="geolocationInfo">Caricamento...</span></p>
    <!-- Mappa -->
    <iframe id="mapFrame" width="50%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" style="display: none;" src=""></iframe>

    <p><strong>Supporto ai sensori:</strong> <span id="sensorsSupported">Caricamento...</span></p>

    <p><strong>Numero di threads:</strong> <span id="cpuThreads">Caricamento...</span></p>
    <p><strong>Numero di core:</strong> <span id="cpuCores">Caricamento...</span></p>
    <p><strong>Dettagli sui protocolli di sicurezza:</strong> <span id="securityProtocols">Caricamento...</span></p>

    <p><strong>Tipi di MIME supportati:</strong> <span id="mimeTypes">Caricamento...</span></p>
    <p><strong>Supporto alla WebAssembly:</strong> <span id="webAssemblySupport">Caricamento...</span></p>
    <p><strong>Color Depth:</strong> <span id="colorDepth">Caricamento...</span></p>
    <p><strong>Pixel Depth:</strong> <span id="pixelDepth">Caricamento...</span></p>
    <p><strong>Touch Support:</strong> <span id="touchSupport">Caricamento...</span></p>
    <p><strong>Referrer Policy:</strong> <span id="referrerPolicy">Caricamento...</span></p>
    <p><strong>Supporto alle Web Notifications:</strong> <span id="webNotificationsSupported">Caricamento...</span></p>
    <p><strong>Supporto alla Payment Request API:</strong> <span id="paymentRequestAPISupported">Caricamento...</span></p>
    <p><strong>Supporto alla Permissions API:</strong> <span id="permissionsAPISupported">Caricamento...</span></p>
    <p><strong>Compatibilità con HTML5 e CSS3:</strong> <span id="htmlCssSupport">Caricamento...</span></p>

</div>

    <script>



        // Funzione per ottenere l'indirizzo IP pubblico IPv4 e IPv6
        function getPublicIpAddresses() {
            // Utilizza il servizio di terze parti per ottenere dettagli sulla richiesta HTTP (supporta IPv6)
            fetch('https://httpbin.org/anything')
                .then(response => response.json())
                .then(data => {
                    const ipv4Address = data.origin || 'N/D';
                    const ipv6Address = extractIpv6Address(data.origin);
                    document.getElementById('publicIpv4').innerText = ipv4Address;
                    document.getElementById('publicIpv6').innerText = ipv6Address || 'N/D';

                    // Chiamata alla funzione per verificare il supporto di WebRTC senza la parte sulle potenziali fughe
                    checkWebRTC();
                    // Chiamata alla funzione per verificare se JavaScript è attivo
                    checkJavaScriptStatus();
                    // Chiamata alla funzione per esaminare il Browser Fingerprinting
                    checkBrowserFingerprinting();
                })
                .catch(() => {
                    console.error('Errore nel recupero degli indirizzi IP pubblici.');
                    document.getElementById('publicIpv4').innerText = 'N/D';
                    document.getElementById('publicIpv6').innerText = 'N/D';
                });
        }

        // Funzione per estrarre l'indirizzo IPv6 dalla stringa fornita
        function extractIpv6Address(origin) {
            const ipv6Regex = /\[([a-fA-F0-9:]+)\]/;
            const match = origin.match(ipv6Regex);
            return match ? match[1] : null;
        }

        // Funzione per verificare il supporto di WebRTC senza la parte sulle potenziali fughe
        function checkWebRTC() {
            // Verifica il supporto di WebRTC
            const isWebRTCAvailable = !!(
                window.RTCPeerConnection ||
                window.webkitRTCPeerConnection ||
                window.mozRTCPeerConnection
            );

            // Aggiorna la visualizzazione dello stato di WebRTC senza la parte sulle potenziali fughe
            const webrtcSupportElement = document.getElementById('webrtcSupport');

            if (webrtcSupportElement) {
                webrtcSupportElement.innerText = (isWebRTCAvailable ? 'Abilitato' : 'Disabilitato');
            } else {
                console.error('Elemento con id "webrtcSupport" non trovato.');
            }
        }

        // Funzione per verificare se JavaScript è attivo
        function checkJavaScriptStatus() {
            const isJavaScriptActive = true; // JavaScript è sempre attivo nel browser moderno
            const javascriptStatusElement = document.getElementById('javascriptStatus');

            if (javascriptStatusElement) {
                javascriptStatusElement.innerText = (isJavaScriptActive ? 'Attivo' : 'Non Attivo');
            } else {
                console.error('Elemento con id "javascriptStatus" non trovato.');
            }
        }

        // Funzione per esaminare il Browser Fingerprinting
        function checkBrowserFingerprinting() {
            const fingerprint = fingerprintUser();

            // Aggiorna la visualizzazione dello stato di Browser Fingerprinting
            const browserFingerprintingElement = document.getElementById('browserFingerprinting');

            if (browserFingerprintingElement) {
                browserFingerprintingElement.innerText = fingerprint;
            } else {
                console.error('Elemento con id "browserFingerprinting" non trovato.');
            }
        }

        // Funzione per generare un fingerprint univoco del browser
        function fingerprintUser() {
            // Questa è solo un'implementazione di base, un vero fingerprinting richiederebbe molte più informazioni
            return navigator.userAgent + navigator.platform;
        }

        // Funzione per verificare la possibilità di identificare univocamente un utente attraverso l'utilizzo di WebGL
        function checkWebGLFingerprinting() {
            const canvas = document.createElement('canvas');
            const supportsWebGL = !!canvas.getContext('webgl');
            const supportsWebGL2 = !!canvas.getContext('webgl2');
            const webglFingerprint = 'WebGL: ' + (supportsWebGL ? 'Supportato' : 'Non Supportato') + ', WebGL2: ' + (supportsWebGL2 ? 'Supportato' : 'Non Supportato');
            document.getElementById('webglFingerprinting').innerText = webglFingerprint;
        }

        // Funzione per verificare la Protezione Avanzata
        function checkAdvancedProtection() {
    const advancedProtectionElement = document.getElementById('advancedProtection');
    const isAdvancedProtectionEnabled = window.secureContext && window.isSecureContext() && ('FeaturePolicy' in window) && window.getComputedStyle && window.getComputedStyle(document.documentElement).webkitOverflowScrolling;

    if (advancedProtectionElement) {
        advancedProtectionElement.innerText = (isAdvancedProtectionEnabled ? 'Attiva' : 'Non Attiva');
    } else {
        console.error('Elemento con id "advancedProtection" non trovato.');
    }
}


        // Funzione per verificare la Prevenzione di Tracking
        function checkTrackerBlocking() {
    document.cookie = "trackerTest=1; SameSite=Lax";

    const trackingPreventionElement = document.getElementById('trackingPrevention');
    const isTrackerBlocked = document.cookie.indexOf("trackerTest") === -1 || navigator.globalPrivacyControl === '1';

    if (trackingPreventionElement) {
        trackingPreventionElement.innerText = (isTrackerBlocked ? 'Sì' : 'No');
    } else {
        console.error('Elemento con id "trackingPrevention" non trovato.');
    }
}

        // Funzione per verificare la protezione da XSS (Cross-Site Scripting)
        function checkXSSProtection() {
            const xssProtectionEnabled = document.querySelector('meta[http-equiv="X-XSS-Protection"]');

            const xssProtectionElement = document.getElementById('xssProtection');

            if (xssProtectionElement) {
                xssProtectionElement.innerText = (xssProtectionEnabled ? 'Attiva' : 'Disattivata');
            } else {
                console.error('Elemento con id "xssProtection" non trovato.');
            }
        }

        // Funzione per verificare l'utilizzo sempre di connessioni sicure (HTTPS)
       function checkHttpsOnly() {
    const httpsOnlyElement = document.getElementById('httpsOnly');
    const isHttpsOnlyEnabled = window.isSecureContext;

    if (httpsOnlyElement) {
        httpsOnlyElement.innerText = (isHttpsOnlyEnabled ? 'Attivo' : 'Non Attivo');
    } else {
        console.error('Elemento con id "httpsOnly" non trovato.');
    }
}














        // Funzione per ottenere le dimensioni della finestra del browser
        function checkWindowSize() {
            const windowSize = {
                width: window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth,
                height: window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight
            };

            // Aggiorna la visualizzazione delle dimensioni della finestra del browser
            const windowSizeElement = document.getElementById('windowSize');

            if (windowSizeElement) {
                windowSizeElement.innerText = 'Dimensioni ' + windowSize.width + 'x' + windowSize.height;
            } else {
                console.error('Elemento con id "windowSize" non trovato.');
            }
        }

        // Funzione per ottenere il tipo di browser
        function checkBrowserType() {
            const browserType = detectBrowser();

            // Aggiorna la visualizzazione del tipo di browser
            const browserTypeElement = document.getElementById('browserType');

            if (browserTypeElement) {
                browserTypeElement.innerText = browserType;
            } else {
                console.error('Elemento con id "browserType" non trovato.');
            }
        }

        // Funzione per rilevare il tipo di browser
        function detectBrowser() {
            const userAgent = navigator.userAgent.toLowerCase();

            if (userAgent.includes('edg')) {
                return 'Microsoft Edge';
            } else if (userAgent.includes('chrome')) {
                return 'Google Chrome';
            } else if (userAgent.includes('firefox')) {
                return 'Mozilla Firefox';
            } else if (userAgent.includes('safari')) {
                return 'Apple Safari';
            } else if (userAgent.includes('opera') || userAgent.includes('opr')) {
                return 'Opera';
            } else {
                return 'Sconosciuto';
            }
        }

        // Funzione per ottenere la lingua del browser
        function checkBrowserLanguage() {
            const browserLanguage = navigator.language || navigator.userLanguage;

            // Aggiorna la visualizzazione della lingua del browser
            const browserLanguageElement = document.getElementById('browserLanguage');

            if (browserLanguageElement) {
                browserLanguageElement.innerText = browserLanguage;
            } else {
                console.error('Elemento con id "browserLanguage" non trovato.');
            }
        }

        // Funzione per verificare se i cookies sono abilitati (inclusi i cookies di terze parti)
        function checkCookiesEnabled() {
            const cookiesEnabled = navigator.cookieEnabled;

            // Aggiorna la visualizzazione dello stato dei cookies
            const cookiesEnabledElement = document.getElementById('cookiesEnabled');

            if (cookiesEnabledElement) {
                cookiesEnabledElement.innerText = (cookiesEnabled ? 'Sì' : 'No');
            } else {
                console.error('Elemento con id "cookiesEnabled" non trovato.');
            }
        }

        // Funzione per ottenere i plugin del browser
        function checkBrowserPlugins() {
            const browserPlugins = navigator.plugins;

            // Aggiorna la visualizzazione dei plugin del browser
            const browserPluginsElement = document.getElementById('browserPlugins');

            if (browserPluginsElement) {
                if (browserPlugins.length > 0) {
                    let pluginsList = 'Plugin del Browser: ';
                    for (let i = 0; i < browserPlugins.length; i++) {
                        pluginsList += browserPlugins[i].name;
                        if (i < browserPlugins.length - 1) {
                            pluginsList += ', ';
                        }
                    }
                    browserPluginsElement.innerText = pluginsList;
                } else {
                    browserPluginsElement.innerText = 'Nessun Plugin del Browser trovato.';
                }
            } else {
                console.error('Elemento con id "browserPlugins" non trovato.');
            }
        }

        // Funzione per verificare se il browser consente richieste di geolocalizzazione
        function checkGeoLocationEnabled() {
            if ('geolocation' in navigator) {
                // Aggiorna la visualizzazione dello stato della geolocalizzazione
                const geoLocationEnabledElement = document.getElementById('geoLocationEnabled');

                if (geoLocationEnabledElement) {
                    geoLocationEnabledElement.innerText = 'Sì';
                } else {
                    console.error('Elemento con id "geoLocationEnabled" non trovato.');
                }
            } else {
                // Il browser non supporta la geolocalizzazione
                console.error('Geolocalizzazione non supportata dal browser.');
            }
        }

        // Funzione per ottenere la versione del browser
        function checkBrowserVersion() {
            const browserVersion = detectBrowserVersion();

            // Aggiorna la visualizzazione della versione del browser
            const browserVersionElement = document.getElementById('browserVersion');

            if (browserVersionElement) {
                browserVersionElement.innerText = browserVersion;
            } else {
                console.error('Elemento con id "browserVersion" non trovato.');
            }
        }

        // Funzione per rilevare la versione del browser
        function detectBrowserVersion() {
            const userAgent = navigator.userAgent.toLowerCase();
            const match = userAgent.match(/(edg|chrome|safari|firefox|opr)[\s\/](\d+(\.\d+)?)/);

            return match ? match[2] : 'Sconosciuto';
        }

        // Funzione per verificare se i pop-up sono abilitati
        function checkPopupsEnabled() {
            // Modificata la verifica dei pop-up
            const popupsEnabled = window.matchMedia('(display-mode: standalone)').matches || window.navigator.standalone || document.hasFocus() || window.innerWidth > 0 || window.innerHeight > 0;

            // Aggiorna la visualizzazione dello stato dei pop-up
            const popupsEnabledElement = document.getElementById('popupsEnabled');

            if (popupsEnabledElement) {
                popupsEnabledElement.innerText = (popupsEnabled ? 'Sì' : 'No');
            } else {
                console.error('Elemento con id "popupsEnabled" non trovato.');
            }
        }

        // Funzione per ottenere la versione del sistema operativo
        function checkOSVersion() {
            // Modificata la visualizzazione della versione del sistema operativo
            const osVersion = navigator.platform + ' ' + (navigator.userAgent.includes('Win64') || navigator.userAgent.includes('WOW64') ? '64-bit' : '32-bit');

            // Aggiorna la visualizzazione della versione del sistema operativo
            const osVersionElement = document.getElementById('osVersion');

            if (osVersionElement) {
                osVersionElement.innerText = osVersion;
            } else {
                console.error('Elemento con id "osVersion" non trovato.');
            }
        }

        // Funzione per verificare se è attivo un blocco degli annunci
        function checkAdBlockEnabled() {
            // Modificata la verifica del blocco annunci
            const adBlockEnabled = window.chrome && window.chrome.webstore || navigator.userAgent.includes('Firefox') && !window.chrome;

            // Aggiorna la visualizzazione dello stato del blocco annunci
            const adBlockEnabledElement = document.getElementById('adBlockEnabled');

            if (adBlockEnabledElement) {
                adBlockEnabledElement.innerText = (adBlockEnabled ? 'Sì' : 'No');
            } else {
                console.error('Elemento con id "adBlockEnabled" non trovato.');
            }
        }

// Funzione per verificare se il browser è in modalità incognito o privata
function checkIncognitoMode() {
    // Prova ad aprire un database IndexedDB
    const openRequest = window.indexedDB.open('test');

    // Gestisci gli eventi di successo e errore
    openRequest.onsuccess = function () {
        // Il database è stato aperto con successo, il che potrebbe indicare che non siamo in modalità incognito
        const isIncognitoMode = false;

        // Aggiorna la visualizzazione della modalità incognito o privata
        updateIncognitoModeDisplay(isIncognitoMode);
    };

    openRequest.onerror = function () {
        // Errore nell'apertura del database, potrebbe indicare che siamo in modalità incognito
        const isIncognitoMode = true;

        // Aggiorna la visualizzazione della modalità incognito o privata
        updateIncognitoModeDisplay(isIncognitoMode);
    };
}

// Funzione per aggiornare la visualizzazione della modalità incognito o privata
function updateIncognitoModeDisplay(isIncognitoMode) {
    const incognitoModeElement = document.getElementById('incognitoMode');

    if (incognitoModeElement) {
        incognitoModeElement.innerText = (isIncognitoMode ? 'Sì' : 'No');
    } else {
        console.error('Elemento con id "incognitoMode" non trovato.');
    }
}

        // Funzione per verificare le politiche di "Do Not Track"
        function checkDoNotTrack() {
            // Modificata la verifica delle politiche di "Do Not Track"
            const doNotTrackEnabled = navigator.doNotTrack === '1' || window.doNotTrack === '1' || navigator.msDoNotTrack === '1';

            // Aggiorna la visualizzazione dello stato delle politiche di tracciamento
            const doNotTrackElement = document.getElementById('doNotTrack');

            if (doNotTrackElement) {
                doNotTrackElement.innerText = (doNotTrackEnabled ? 'Attivato' : 'Disattivato');
            } else {
                console.error('Elemento con id "doNotTrack" non trovato.');
            }
        }

  // Funzione per controllare se ci sono risorse bloccate sulla pagina
  function checkBlockedResources() {
        const blockedResources = [...document.querySelectorAll('img[alt=""], script[src=""]')];

        // Aggiorna la visualizzazione delle risorse bloccate
        const blockedResourcesElement = document.getElementById('blockedResources');

        if (blockedResourcesElement) {
            blockedResourcesElement.innerText = (blockedResources.length > 0 ? 'Sì' : 'No');
        } else {
            console.error('Elemento con id "blockedResources" non trovato.');
        }
    }

    // Funzione per verificare se il browser è in modalità sviluppatore
    function checkDeveloperMode() {
        const isDeveloperMode = window && window.chrome && window.chrome.devtools;

        // Aggiorna la visualizzazione della modalità sviluppatore
        const developerModeElement = document.getElementById('developerMode');

        if (developerModeElement) {
            developerModeElement.innerText = (isDeveloperMode ? 'Sì' : 'No');
        } else {
            console.error('Elemento con id "developerMode" non trovato.');
        }
    }

     // Funzione per verificare le politiche di privacy del browser
    function checkPrivacyPolicies() {
        const privacyPolicies = getPrivacyPolicies();

        // Aggiorna la visualizzazione delle politiche di privacy del browser
        const privacyPoliciesElement = document.getElementById('privacyPolicies');

        if (privacyPoliciesElement) {
            privacyPoliciesElement.innerText = privacyPolicies;
        } else {
            console.error('Elemento con id "privacyPolicies" non trovato.');
        }
    }

   // Funzione per ottenere informazioni sulla batteria
function checkBatteryStatus() {
    if ('getBattery' in navigator) {
        navigator.getBattery().then(battery => {
            // Aggiorna la visualizzazione dello stato della batteria
            const batteryStatusElement = document.getElementById('batteryStatus');

            if (batteryStatusElement) {
                batteryStatusElement.innerText = (battery.charging ? 'In Carica' : 'Non in Carica') + ', Livello: ' + (battery.level * 100) + '%';
            } else {
                console.error('Elemento con id "batteryStatus" non trovato.');
            }
        }).catch(error => {
            console.error('Errore nell ottenere le informazioni sulla batteria tramite navigator.getBattery():', error);
            // Ricorri all'API navigator.battery se navigator.getBattery() fallisce
            checkBatteryStatusFallback();
        });
    } else {
        console.error('navigator.getBattery() non è disponibile.');
        // Ricorri all'API navigator.battery se navigator.getBattery() non è presente
        checkBatteryStatusFallback();
    }
}

// Funzione di fallback per ottenere le informazioni sulla batteria utilizzando navigator.battery
function checkBatteryStatusFallback() {
    if ('battery' in navigator) {
        // Aggiorna la visualizzazione dello stato della batteria
        const batteryStatusElement = document.getElementById('batteryStatus');

        if (batteryStatusElement) {
            batteryStatusElement.innerText = (navigator.battery.charging ? 'In Carica' : 'Non in Carica') + ', Livello: ' + (navigator.battery.level * 100) + '%';
        } else {
            console.error('Elemento con id "batteryStatus" non trovato.');
        }
    } else {
        console.error('navigator.battery non è disponibile.');
    }
}


          // Funzione per ottenere informazioni sulla connessione di rete
          function checkConnectionType() {
            const connectionType = navigator.connection ? navigator.connection.effectiveType : 'Sconosciuto';

            // Aggiorna la visualizzazione del tipo di connessione
            const connectionTypeElement = document.getElementById('connectionType');

            if (connectionTypeElement) {
                connectionTypeElement.innerText = connectionType;
            } else {
                console.error('Elemento con id "connectionType" non trovato.');
            }
        }

    // Funzione per ottenere informazioni sulla memoria del dispositivo
    function checkDeviceMemory() {
        const deviceMemory = navigator.deviceMemory || 'sconosciuta';

        // Aggiorna la visualizzazione della memoria del dispositivo
        const deviceMemoryElement = document.getElementById('deviceMemory');

        if (deviceMemoryElement) {
            deviceMemoryElement.innerText = (deviceMemory) + ' GB'; // Moltiplicato per 2 per adattarsi a 16GB
        } else {
            console.error('Elemento con id "deviceMemory" non trovato.');
        }
    }



            // Funzione per ottenere informazioni sulla GPU
            function checkGPUInfo() {
            // Verifica se l'oggetto navigator.hardwareConcurrency è supportato
            if ('hardwareConcurrency' in navigator) {
                // Ottieni il numero di core della CPU
                document.getElementById("gpuCpuCores").innerText = navigator.hardwareConcurrency || "N/A";
            } else {
                document.getElementById("gpuCpuCores").innerText = "N/A";
            }

            // Utilizza WebGL per ottenere informazioni sulla GPU
            try {
                const canvas = document.createElement('canvas');
                const gl = canvas.getContext('webgl') || canvas.getContext('experimental-webgl');
                const rendererInfo = gl.getExtension('WEBGL_debug_renderer_info');

                if (rendererInfo) {
                    const vendor = gl.getParameter(rendererInfo.UNMASKED_VENDOR_WEBGL);
                    const renderer = gl.getParameter(rendererInfo.UNMASKED_RENDERER_WEBGL);

                    document.getElementById("gpuName").innerText = `${vendor} - ${renderer}`;
                } else {
                    document.getElementById("gpuName").innerText = "N/A";
                }
            } catch (error) {
                console.error('Errore durante la rilevazione della GPU:', error);
                document.getElementById("gpuName").innerText = "N/A";
            }
        }






        // Funzione per verificare il supporto ai Web Workers
        function checkWebWorkersSupport() {
            const webWorkersSupported = typeof(Worker) !== 'undefined';
            const webWorkersSupportedElement = document.getElementById('webWorkersSupported');

            if (webWorkersSupportedElement) {
                webWorkersSupportedElement.innerText = (webWorkersSupported ? 'Sì' : 'No');
            } else {
                console.error('Elemento con id "webWorkersSupported" non trovato.');
            }
        }

        // Funzione per verificare il supporto alle Media Queries
        function checkMediaQueriesSupport() {
            const mediaQueriesSupported = window.matchMedia('(pointer: fine)').matches;
            const mediaQueriesSupportedElement = document.getElementById('mediaQueriesSupported');

            if (mediaQueriesSupportedElement) {
                mediaQueriesSupportedElement.innerText = (mediaQueriesSupported ? 'Sì' : 'No');
            } else {
                console.error('Elemento con id "mediaQueriesSupported" non trovato.');
            }
        }

        // Funzione per ottenere informazioni sulla posizione geografica
        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition, showError);
            } else {
                const geolocationInfoElement = document.getElementById('geolocationInfo');
                if (geolocationInfoElement) {
                    geolocationInfoElement.innerText = 'Geolocalizzazione non supportata dal browser.';
                } else {
                    console.error('Elemento con id "geolocationInfo" non trovato.');
                }
            }
        }

        function showPosition(position) {
            const geolocationInfoElement = document.getElementById('geolocationInfo');
            const mapFrame = document.getElementById('mapFrame');
            if (geolocationInfoElement && mapFrame) {
                let Latitude = position.coords.latitude;
                let Longitude = position.coords.longitude;
                
                geolocationInfoElement.innerText = 'Latitudine: ' + Latitude + '°, Longitudine: ' + Longitude + '°';
                
                // Costruisci l'URL dell'iframe utilizzando le variabili di latitudine e longitudine
                var mapUrl = "https://www.openstreetmap.org/export/embed.html?bbox=";
                mapUrl += (Longitude - 0.01) + "," + (Latitude - 0.01) + "," + (Longitude + 0.01) + "," + (Latitude + 0.01);
                mapUrl += "&layer=mapnik&marker=" + Latitude + "," + Longitude;

                // Imposta l'attributo src dell'iframe con l'URL della mappa
                mapFrame.setAttribute('src', mapUrl);
                // Mostra la mappa
                mapFrame.style.display = 'block';
            } else {
                console.error('Elemento con id "geolocationInfo" o "mapFrame" non trovato.');
            }
        }

        function showError(error) {
            const geolocationInfoElement = document.getElementById('geolocationInfo');
            const mapFrame = document.getElementById('mapFrame');
            if (geolocationInfoElement) {
                geolocationInfoElement.innerText = 'Errore durante l\'ottenimento della posizione: ' + error.message;
                
                // Ottieni una posizione approssimativa tramite l'API ipinfo.io
                fetch('https://ipinfo.io/json?token=be364e973667a6')
                    .then(response => response.json())
                    .then(data => {
                        const loc = data.loc.split(',');
                        const Latitude = parseFloat(loc[0]);
                        const Longitude = parseFloat(loc[1]);
                        
                        geolocationInfoElement.innerText += ` (Posizione approssimativa: Latitudine: ${Latitude}°, Longitudine: ${Longitude}°)`;
                        
                        // Costruisci l'URL dell'iframe utilizzando le variabili di latitudine e longitudine approssimative
                        var mapUrl = "https://www.openstreetmap.org/export/embed.html?bbox=";
                        mapUrl += (Longitude - 0.1) + "," + (Latitude - 0.1) + "," + (Longitude + 0.1) + "," + (Latitude + 0.1);
                        mapUrl += "&layer=mapnik&marker=" + Latitude + "," + Longitude;

                        // Imposta l'attributo src dell'iframe con l'URL della mappa
                        mapFrame.setAttribute('src', mapUrl);
                        // Mostra la mappa
                        mapFrame.style.display = 'block';
                    })
                    .catch(err => console.error('Errore durante l\'ottenimento della posizione approssimativa:', err));
            } else {
                console.error('Elemento con id "geolocationInfo" non trovato.');
            }
        }

        // Funzione per verificare il supporto ai sensori
        function checkSensorSupport() {
            const accelerometerSupported = 'LinearAccelerationSensor' in window ? 'Si' : 'N/D';
            const gyroscopeSupported = 'Gyroscope' in window ? 'Si' : 'N/D';
            const magnetometerSupported = 'Magnetometer' in window ? 'Si' : 'N/D';
            const sensorsSupportedElement = document.getElementById('sensorsSupported');

            if (sensorsSupportedElement) {
                sensorsSupportedElement.innerText = 'Accelerometro: ' + accelerometerSupported + ', Giroscopio: ' + gyroscopeSupported + ', Magnetometro: ' + magnetometerSupported;
            } else {
                console.error('Elemento con id "sensorsSupported" non trovato.');
            }
        }

        // Funzione per ottenere il numero di threads e calcolare i core
        function getCPUThreadsAndCores() {
            const cpuThreads = navigator.hardwareConcurrency ? navigator.hardwareConcurrency : "N/D";
            const cpuCores = cpuThreads !== "N/D" ? Math.ceil(cpuThreads / 2) : "N/D";
            const cpuThreadsElement = document.getElementById('cpuThreads');
            const cpuCoresElement = document.getElementById('cpuCores');

            if (cpuThreadsElement) {
                cpuThreadsElement.innerText = cpuThreads + " threads";
            } else {
                console.error('Elemento con id "cpuThreads" non trovato.');
            }

            if (cpuCoresElement) {
                cpuCoresElement.innerText = cpuCores + " core";
            } else {
                console.error('Elemento con id "cpuCores" non trovato.');
            }
        }

        // Funzione per ottenere dettagli sui protocolli di sicurezza
        function getSecurityProtocols() {
            const securityProtocols = "TLS 1.2, TLS 1.3";
            const securityProtocolsElement = document.getElementById('securityProtocols');

            if (securityProtocolsElement) {
                securityProtocolsElement.innerText = securityProtocols;
            } else {
                console.error('Elemento con id "securityProtocols" non trovato.');
            }
        }

        // Funzione per ottenere i tipi di MIME supportati
        function getMimeTypes() {
            const mimeTypes = Array.from(navigator.mimeTypes).map(mt => mt.type);
            const mimeTypesElement = document.getElementById('mimeTypes');

            if (mimeTypesElement) {
                mimeTypesElement.innerText = mimeTypes.join(', ');
            } else {
                console.error('Elemento con id "mimeTypes" non trovato.');
            }
        }

        // Funzione per verificare il supporto alla WebAssembly
        function checkWebAssemblySupport() {
            const webAssemblySupport = typeof WebAssembly === 'object' ? 'Sì' : 'No';
            const webAssemblySupportElement = document.getElementById('webAssemblySupport');

            if (webAssemblySupportElement) {
                webAssemblySupportElement.innerText = webAssemblySupport;
            } else {
                console.error('Elemento con id "webAssemblySupport" non trovato.');
            }
        }

        // Funzione per ottenere il Color Depth
        function getColorDepth() {
            const colorDepth = screen.colorDepth || screen.pixelDepth;
            const colorDepthElement = document.getElementById('colorDepth');

            if (colorDepthElement) {
                colorDepthElement.innerText = colorDepth;
            } else {
                console.error('Elemento con id "colorDepth" non trovato.');
            }
        }

        // Funzione per ottenere il Pixel Depth
        function getPixelDepth() {
            const pixelDepth = screen.pixelDepth;
            const pixelDepthElement = document.getElementById('pixelDepth');

            if (pixelDepthElement) {
                pixelDepthElement.innerText = pixelDepth;
            } else {
                console.error('Elemento con id "pixelDepth" non trovato.');
            }
        }

        // Funzione per verificare il supporto al Touch
        function checkTouchSupport() {
            const touchSupport = ('ontouchstart' in window || navigator.maxTouchPoints > 0 || window.DocumentTouch && document instanceof DocumentTouch) ? 'Sì' : 'No';
            const touchSupportElement = document.getElementById('touchSupport');

            if (touchSupportElement) {
                touchSupportElement.innerText = touchSupport;
            } else {
                console.error('Elemento con id "touchSupport" non trovato.');
            }
        }

        // Funzione per ottenere la Referrer Policy
        function getReferrerPolicy() {
            const metaTags = document.getElementsByTagName('meta');
            let referrerPolicy = 'N/D';

            for (let i = 0; i < metaTags.length; i++) {
                if (metaTags[i].getAttribute('name') === 'referrer') {
                    referrerPolicy = metaTags[i].getAttribute('content');
                    break;
                }
            }

            const referrerPolicyElement = document.getElementById('referrerPolicy');

            if (referrerPolicyElement) {
                referrerPolicyElement.innerText = referrerPolicy;
            } else {
                console.error('Elemento con id "referrerPolicy" non trovato.');
            }
        }

        // Funzione per verificare il supporto alle Web Notifications
        function checkWebNotificationsSupport() {
            const webNotificationsSupported = 'Notification' in window;
            const webNotificationsSupportedElement = document.getElementById('webNotificationsSupported');

            if (webNotificationsSupportedElement) {
                webNotificationsSupportedElement.innerText = (webNotificationsSupported ? 'Sì' : 'No');
            } else {
                console.error('Elemento con id "webNotificationsSupported" non trovato.');
            }
        }

        // Funzione per verificare il supporto alla Payment Request API
        function checkPaymentRequestAPISupport() {
            const paymentRequestAPISupported = 'PaymentRequest' in window && 'show' in PaymentRequest.prototype;
            const paymentRequestAPISupportedElement = document.getElementById('paymentRequestAPISupported');

            if (paymentRequestAPISupportedElement) {
                paymentRequestAPISupportedElement.innerText = (paymentRequestAPISupported ? 'Sì' : 'No');
            } else {
                console.error('Elemento con id "paymentRequestAPISupported" non trovato.');
            }
        }

        // Funzione per verificare il supporto alla Permissions API
        function checkPermissionsAPISupport() {
            const permissionsAPISupported = 'permissions' in navigator && 'query' in navigator.permissions;
            const permissionsAPISupportedElement = document.getElementById('permissionsAPISupported');

            if (permissionsAPISupportedElement) {
                permissionsAPISupportedElement.innerText = (permissionsAPISupported ? 'Sì' : 'No');
            } else {
                console.error('Elemento con id "permissionsAPISupported" non trovato.');
            }
        }

        // Funzione per verificare la compatibilità con HTML5 e CSS3
        function checkHtmlCssSupport() {
            const html5Supported = 'querySelector' in document && 'localStorage' in window && 'addEventListener' in window;
            const css3Supported = 'flexBasis' in document.documentElement.style || 'webkitFlexBasis' in document.documentElement.style ||
                'msFlexBasis' in document.documentElement.style || 'flexDirection' in document.documentElement.style;
            const htmlCssSupportElement = document.getElementById('htmlCssSupport');

            if (htmlCssSupportElement) {
                htmlCssSupportElement.innerText = html5Supported && css3Supported ? 'Supportato' : 'Non supportato';
            } else {
                console.error('Elemento con id "htmlCssSupport" non trovato.');
            }
        }



        

    // Chiama le funzioni all'avvio della pagina

    getPublicIpAddresses();
    checkWebGLFingerprinting();
    checkXSSProtection();
    checkHttpsOnly();
    checkAdvancedProtection();
    checkTrackerBlocking();

    checkWindowSize();
    checkBrowserType();
    checkBrowserLanguage();
    checkCookiesEnabled();
    checkBrowserPlugins();
    checkGeoLocationEnabled();
    checkBrowserVersion();
    checkPopupsEnabled();
    checkOSVersion();
    checkAdBlockEnabled();
    checkIncognitoMode();
    checkDoNotTrack();
    checkBlockedResources();
    checkDeveloperMode();
    checkBatteryStatus();
    checkConnectionType();
    checkDeviceMemory();
    checkGPUInfo();
    checkBatteryStatusFallback();

    checkWebWorkersSupport();
        checkMediaQueriesSupport();
        getLocation();
        checkSensorSupport();
        getCPUThreadsAndCores();
        getSecurityProtocols();
        getMimeTypes();
        checkWebAssemblySupport();
        getColorDepth();
        getPixelDepth();
        checkTouchSupport();
        getReferrerPolicy();
        checkWebNotificationsSupport();
        checkPaymentRequestAPISupport();
        checkPermissionsAPISupport();
        checkHtmlCssSupport();

    </script>
</body>
</html>