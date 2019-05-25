var phoneNumber=0;

/**
 * @return {!Object} The FirebaseUI config.
 */
function getUiConfig() {
  return {
    'callbacks': {
      // Called when the user has been successfully signed in.
      'signInSuccess': function(user, credential, redirectUrl) {
        handleSignedInUser(user);
        // Do not redirect.
        return false;
      }
    },
    // Opens IDP Providers sign-in flow in a popup.
    'signInFlow': 'popup',
    'signInOptions': [
      // The Provider you need for your app. We need the Phone Auth
      firebase.auth.PhoneAuthProvider.PROVIDER_ID,
      {

        recaptchaParameters: {
          //size: getRecaptchaMode()
          type: 'image',
          size: 'invisible',
          badge: 'bottomleft'
        }
      }
    ],
    // Terms of service url.
    'tosUrl': 'https://www.google.com'
  };
}

// Initialize the FirebaseUI Widget using Firebase.
var ui = new firebaseui.auth.AuthUI(firebase.auth());

/**
 * Displays the UI for a signed in user.
 * @param {!firebase.User} user
 */
var handleSignedInUser = function(user) {
number(firebase.auth().currentUser.phoneNumber);
firebase.auth().signOut();
};


/**
 * Displays the UI for a signed out user.
 */
var handleSignedOutUser = function() {

  ui.start('#firebaseui-container', getUiConfig());
};

// Listen to change in auth state so it displays the correct UI for when
// the user is signed in or not.
firebase.auth().onAuthStateChanged(function(user) {
  document.getElementById('loading').style.display = 'none';
  document.getElementById('loaded').style.display = 'block';

  user ? handleSignedInUser(user) : handleSignedOutUser();
});

/**
 * Deletes the user's account.
 */
var deleteAccount = function() {
  firebase.auth().currentUser.delete().catch(function(error) {
    if (error.code == 'auth/requires-recent-login') {
      // The user's credential is too old. She needs to sign in again.
      firebase.auth().signOut().then(function() {
        // The timeout allows the message to be displayed after the UI has
        // changed to the signed out state.
        setTimeout(function() {
          alert('Please sign in again to delete  your account.');
        }, 1);
      });
    }
  });
};

/**
 * Initializes the app.
 */
var initApp = function() {

};

function number(string){
  if(window.XMLHttpRequest){
    xmlHTTP=new XMLHttpRequest();
    xmlHTTP.onreadystatechange=function(){
      if(this.readyState==4){
        alert(this.responseText);
        //document.getElementById("jointApplication").innerHTML=this.responseText;
      }
    }
    xmlHTTP.open('POST',"../pages/user/phonenumber_validated.php",true);
    var data = new FormData();
    data.append('phonenumber',string)
    xmlHTTP.send(data);
  }
}

window.addEventListener('load', initApp);
