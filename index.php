<html>
<script src="https://apis.google.com/js/platform.js" async defer></script>
<meta name="google-signin-client_id" content="30022901312-qm9nrjvsn19fauhdnvo4h8m2al2uj8mi.apps.googleusercontent.com">
<!-- now I will put here my client id -->
<!-- This client id will be provided by google when you create the project -->


<!-- Now button code starts -->
<div class="g-signin2" data-onsuccess="onSignIn"></div>
<!-- Button code ends -->


<!-- script for sign in start -->
<script>
  function onSignIn(googleUser) {
    var profile = googleUser.getBasicProfile();
    console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
    console.log('Name: ' + profile.getName());
    console.log('Image URL: ' + profile.getImageUrl());
    console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
}
</script>
<!-- script for sign in end -->
</html>