



<!-- line modal -->
<div class="modal fade" id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true" title="Deseja fechar?">×</span><span class="sr-only">Fechar</span></button>
                <h3 class="modal-title" id="lineModalLabel">Exemplo de um formulário</h3>
            </div>
            <div class="modal-body">

                <!-- content goes here -->
                <form action="#" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Endereço de email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Digite seu email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Senha</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Digite sua senha">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Enviar arquivo</label>
                        <input type="file" id="exampleInputFile">
                        <p class="help-block">Você precisa adicionar um arquivo!</p>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" role="checkbox"> Concordo com os termos?
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>

            </div>
            <div class="modal-footer">
                <div class="btn-group btn-group-justified" role="group" aria-label="group button">
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-primary" data-dismiss="modal"  role="button">Fechar</button>
                    </div>
                    <div class="btn-group btn-delete hidden" role="group">
                        <button type="button" id="delImage" class="btn btn-primary" data-dismiss="modal"  role="button">Apagar</button>
                    </div>
                    <div class="btn-group" role="group">
                        <button type="button" id="saveImage" class="btn btn-primary" data-action="save" role="button">Salvar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>