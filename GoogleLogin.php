<script src="https://apis.google.com/js/platform.js" async defer></script>
<meta name="google-signin-client_id" content="365809533633-5l13eh9fvet8ra311c4p7a7pjtkn7t32.apps.googleusercontent.com">
<script type="text/javascript">
function onSignIn(googleUser) {
var profile = googleUser.getBasicProfile();
console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
console.log('Name: ' + profile.getName());
console.log('Image URL: ' + profile.getImageUrl());
console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.


}
</script>
