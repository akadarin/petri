<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <?php include_once('include/head.php'); ?>
    <!-- Bootstrap CSS -->
</head>

<body>
    <?php include_once('include/header.php'); ?>

    <div class="bg-lgray">
        <div class="row bg-dblue p-4 m-auto">

        </div>

        <div class="row w-75 m-auto pb-5">
            <div class="col-md-1">

            </div>
            <div class="col-md-10 p-4 d-flex justify-content-center">
                <img src="images/logo-rodape.png" alt="">
            </div>
            <div class="col-md-1">

            </div>

            <div class="col-md-4 text-center pr-0">
                <br>
                <br>
                <a href="home" class="p-2 bg-lpurple btn float-right txt-white border-left-radius"><i
                        class="fas fa-home txt-white fa-2x"></i><br> Voltar para <br> o site</a>
            </div>
            <div class="col-md-4 bg-white border-rounded py-3 px-5 lt-blue">
                <div class="row px-3 py-3 flex-column">
                    <p class="mb-0 big-lt">Conectar-se</p>
                    <hr class="separador-maior ml-0">
                </div>
                <form>
                    <div class="form-row py-2">
                        <div class="form-group col-md-12">
                            <p class="mb-1">E-mail</p>
                            <input type="text" class="form-control border-rounded-input input-border-purple"
                                name="E-mail" id="email" placeholder="E-mail">
                        </div>
                    </div>

                    <div class="form-row py-2">
                        <div class="form-group col-md-12">
                            <p class="mb-1">Senha</p>
                            <input type="text" class="form-control border-rounded-input input-border-purple"
                                name="Telefone" id="telefone" placeholder="Senha">
                        </div>
                    </div>

                    <div class="form-row pt-4">
                        <div class="form-group col-md-12">
                            <button type="submit"
                                class="btn bg-lpurple txt-white no-border py-2 w-100 border-rounded">Entrar</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-4">

            </div>
        </div>
    </div>

    <?php include_once('include/footer.php'); ?>

    <?php include_once('include/scripts.php'); ?>

</body>

</html>