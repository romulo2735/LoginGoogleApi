<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Google Login API</title>
        <script src="https://apis.google.com/js/platform.js" async defer></script>
        <meta name="google-signin-client_id" content="992033443509-5c70o8jmubga79mjdpf824d3t9m6qddv.apps.googleusercontent.com">
    </head>
    <body>
        <div class="g-signin2" data-onsuccess="onSignIn"></div>
        <p id="msg"></p>
        <!--	
                Pegando ao informação do perfil 
                Depois que foi adcionado o codigo a abaixo, recarrega a pagina local com CRTL+ F5, faça login.
                Após o Login realizado verifique o console do navegador e voce vai observar que as informações
                do perfil do google estaram lá, comprovando que funcionou.
        -->
        <script type="text/javascript">
            function onSignIn(googleUser) {
                var profile = googleUser.getBasicProfile();
                var userID = profile.getId();
                var userName = profile.getName();
                var userPicture = profile.getImageUrl();
                var userEmail = profile.getEmail();
                var userToken = googleUser.getAuthResponse().id_token;

                
                if (userName !== '') {
                    var dados = {
                        userID:userID, 
                        userName:userName,
                        userPicture:userPicture,
                        userEmail:userEmail
                    };
                    
                    $.post('valida.php', dados, function(retorna){
                        document.getElementById('msg').innerHTML = retorna;
                    }); 
                }
                else{
                    var msg = "Usuario nao encontrado";
                    document.getElementById('msg').innerHTML = msg;
                }  
            }
        </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    </body>
</html>