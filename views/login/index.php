<section id="id-login">
    <div class="container">
        <div class="row">
            <div class="col-md-offset-4 col-sm-offset-4 col-sm-4 col-md-4 col-lg-4 text-center">
                <div class="box-title-login">
                    login
                </div>        
            </div>
        </div>

        <form name="frmLogin" id="frmLogin" method="post" role="form">
            <div class="row">
                <div class="form-group col-md-offset-4 col-sm-offset-4 col-sm-4 col-md-4 col-lg-4">
                    <label for="CPF">E-mail</label>
                    <input type="text" class="form-control" id="numCPF" name="numCPF" placeholder="CPF" maxlength="14">
                </div>
            </div>
            
            <div class="row">
                <div class="form-group col-md-offset-4 col-sm-offset-4 col-sm-4 col-md-4 col-lg-4">
                    <label for="pass">Senha:</label>
                    <input type="password" class="form-control" id="text-pass" name="text-pass" placeholder="Senha" maxlength="10">
                </div>
            </div>

            <div class="row text-center">
                <div class="col-md-offset-4 col-sm-offset-4 col-sm-4 col-md-4 col-lg-4">
                    <button type="submit" id="btn-Login" name="btn-Login" class="btn btn-primary">Entrar</button>
                </div>
            </div>
        </form>
    </div>
</section>