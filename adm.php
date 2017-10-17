<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Google Login API - ADM</title>
        <script src="https://apis.google.com/js/platform.js" async defer></script>
        <meta name="google-signin-client_id" content="992033443509-5c70o8jmubga79mjdpf824d3t9m6qddv.apps.googleusercontent.com">
    </head>
    <body>
        Bem vindo <?php echo $_SESSION['userName']; ?>

        <a href="login.php" onclick="signOut();">Sair</a>
            <script>
                function signOut() {
                    var auth2 = gapi.auth2.getAuthInstance();
                    auth2.signOut().then(function () {
                        console.log('User signed out.');
                    });
                }
            </script>
    </body>
</html>