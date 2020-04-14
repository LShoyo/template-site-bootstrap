<footer class="container-fluid bg-dark text-white mt-4 p-3">
    <div class="row">
        <section class="col-12 col-md-6">
            <ul style="list-style:none;padding:0;margin:0">
                <li><a class="text-white" style="text-decoration:none;" href="mailto:fulano@fulan.com">fulano@fulan.com</a></li>
                <li><a class="text-white" style="text-decoration:none;" href="tel:+5511123456">11 123 456</a></li>
            </ul>
        </section>
        <section class="col-12 col-md-6">
            <ul style="list-style:none;padding:0;margin:0">
                <li>Avenida BNrasil, 111 - CEP: 1253-55</li>
                <li>Fulano &copy; CNPJ 01.012.012/0001-99</li>
            </ul>
        </section>
    </div>

</footer>

<!-- Modal Login -->
<div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="modalLoginLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLoginLabel">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="post">
          <div class="form-group">
            <label for="email">email</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Insira seu email">
            <small id="emailHelp" class="form-text text-muted">Não se preocupe, não vendemos mailing lists.</small>
          </div>
          <div class="form-group">
            <label for="senha">Password</label>
            <input type="password" class="form-control" id="senha" placeholder="Insira sua senha" aria-describedby="passwordHelp">
            <small id="passwordHelp" class="form-text text-muted">Insira uma maiúscula, uma minúscula e um número pelo menos.</small>
          </div>
          <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="aceite">
            <label class="form-check-label" for="aceite">Estou de acordo com os termos, pode vender meus dados!</label>
          </div>
        </form>
        <small class="d-block w-100 text-muted">Ops! Ainda não tenho conta, quero <a href="cadastro.php" class="text-info">me cadastrar</a>.</small>
      </div>
      <div class="modal-footer">
        <button type="reset" class="btn btn-secondary">Limpar</button>
        <button type="submit" class="btn btn-info">Logar</button>
      </div>
    </div>
  </div>
</div>

<!-- links copiados de JS do bootstrap -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>