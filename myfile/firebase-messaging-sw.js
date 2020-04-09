importScripts('https://www.gstatic.com/firebasejs/4.9.1/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/4.9.1/firebase-messaging.js');
/*Update this config*/
var config = {
    apiKey: "AIzaSyCrH5SJQu9nQY2xbAdmU1UxXSV_nR9YmUQ",
    authDomain: "love-test-e3a5b.firebaseapp.com",
    databaseURL: "https://love-test-e3a5b.firebaseio.com",
    projectId: "love-test-e3a5b",
    storageBucket: "",
    messagingSenderId: "362474316616",
    appId: "1:362474316616:web:1e617bef60eb1ecc"
  };
  firebase.initializeApp(config);

const messaging = firebase.messaging();
messaging.setBackgroundMessageHandler(function(payload) {
  console.log('[firebase-messaging-sw.js] Received background message ', payload);
  // Customize notification here
  const notificationTitle = payload.data.title;
  const notificationOptions = {
    body: payload.data.body,
	icon: 'https://careersole.com/gcm-push/img/icon.png',
	image: 'https://careersole.com/gcm-push/img/d.png'
  };

  return self.registration.showNotification(notificationTitle,
      notificationOptions);
});
// [END background_handler]
