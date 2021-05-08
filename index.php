<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Facebook</title>

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="center">
            <div class="logo">
                <h2>Facebook</h2>
            </div><!-- logo -->

            <form method="post" class="form-login">
                <div class="form-element">
                    <p>E-mail ou telefone</p>
                    <input type="email" name="email" id="email" >
                </div><!-- form element -->
                <div class="form-element">
                    <p>Senha</p>
                    <input type="password" name="senha" id="senha" >
                </div><!-- form element -->
                <div class="form-element">
                    <input type="submit" name="acao" value="Enviar" >
                </div><!-- form element -->
            </form><!-- form login -->
            <div class="clear"></div>
        </div> <!-- center -->
    </header>

    <section id="main">
        <div class="center">
            <div class="img-pessoas">
                <img src="img1.png" alt="imagem de fundo da main">
            </div><!-- img pessoas-->
            <div class="abrir-conta">
                <h2>Abra uma conta</h2>
                <h3>É gratuito e sempre será.</h3>
                <form action="" class="create-account">
                    <div class="w50">
                        <input type="text" placeholder="Nome">
                    </div><!-- w50 -->

                    <div class="w50">
                        <input type="text" placeholder="Sobrenome">
                    </div><!-- w50 -->

                    <div class="w100">
                        <input type="email" placeholder="Email">
                    </div><!--w100-->

                    <div class="w100">
                        <input type="password" placeholder="Senha">
                    </div><!--w100-->

                    <div class="w100">
                        <h2>Data de Nascimento:</h2>
                        <select name="nascimentoDia" class="nascimento">
                            <?php
                                for ($i = 1; $i<=31; $i++){
                            ?>
                            <option value="<?= $i ?>"><?= $i ?></option>
                            <?php } ?>
                        </select>
                        <select name="nascimentoMes"  class="nascimento">
                            <option value="junho">Junho</option>
                        </select>
                        <select name="nascimentoAno"  class="nascimento">
                            <?php for($i = 1900; $i<=date("Y"); $i++){ ?>
                                <option value="<?= $i ?>"><?= $i ?></option>
                            <?php } ?>
                        </select>
                        <div class="clear"></div>
                    </div><!-- w100 -->

                    <div class="w100">
                        <div class="input-radio">
                            <input type="radio" name="sexo" value="Masculino">
                            <h2>Masculino</h2>
                        </div><!-- input radio -->
                        <div class="input-radio">
                            <input type="radio" name="sexo" value="Feminino">
                            <h2>Feminino</h2>
                        </div><!-- input radio -->
                        <div class="clear"></div>
                    </div><!-- w100 -->
                    
                    <div class="w100">
                        <input type="submit" name="acao" value="Cadastrar">
                    </div><!-- w100 -->
                    
                    <div class="clear"></div>
                </form><!-- create account -->
            </div><!-- abrir conta -->
            <div class="clear"></div>
        </div><!-- center -->
    </section><!-- main -->

    <section id="linguas">
        <div class="center">
            <a href="#" class="selected-lingua">Português (Brasil)</a>
            <a href="#" >Português (Brasil)</a>
            <a href="#" >Português (Brasil)</a>
            <a href="#" >Português (Brasil)</a>
            <a href="#" >Português (Brasil)</a>
            <a href="#" >Português (Brasil)</a>
            <a href="#" >Português (Brasil)</a>
        </div><!-- center -->
    </section><!-- linguas -->

</body>
</html>