<div class="modal fade" id="deletarEmpresa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Deletar Empresa?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="empresaNome"></div>
            </div>
            <div class="modal-footer">
                <form method="POST" action="http://127.0.0.1:8000/empresa/1" accept-charset="UTF-8" id="deleteForm">
                    <input name="_method" type="hidden" value="DELETE">
                    {{ Form::token() }}
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Apagar</button>
                </form>
            </div>
        </div>
    </div>
</div>