$(document).ready(function () {


    $("#createConsultaEvent").click(function () {
        let htmlMounted = mountFormCreate();

        Swal.fire({
            title: 'Criar Consulta',
            html: htmlMounted,
            showCancelButton: false,
            showConfirmButton: false,
            showCloseButton: false,
            showCancelButton: false,
        });
    });


    $("td i[name='edit']").click(function () {
        let htmlMounted = mountFormEdit(JSON.parse($(this).attr('data-consulta')));

        Swal.fire({
            title: 'Editar Consulta',
            html: htmlMounted,
            showCancelButton: false,
            showConfirmButton: false,
            showCloseButton: false,
            showCancelButton: false,
        });
    });

    $("#changePassword").click(function () {
        let htmlMounted = mountFormUserChangePassword();

        Swal.fire({
            title: 'Mudar Senha do Usuário',
            html: htmlMounted,
            showCancelButton: false,
            showConfirmButton: false,
            showCloseButton: false,
            showCancelButton: false,
        });
    });

    function mountFormCreate() {
        let form =
            `<form action='/consulta/store' >
        <br>
        <div class="form-group">
          <label for="nomePaciente">Nome do Paciente</label>
          <input type="text" name="nome" class="form-control" id="nomePaciente" required>
        </div>
        <br>
        <div class="form-group">
          <label for="telefone">Telefone</label>
          <input type="text" name="telefone" class="form-control" id="telefone" required>
        </div>
        <br>
        <div class="form-group">
          <label for="endereco">Endereço</label>
          <input type="text" name="endereco" class="form-control" id="endereco" required>
        </div>
        <br>
        <div class="form-group">
          <label for="observacao">Observação</label>
          <textarea class="form-control" name="observacao" id="observacao" required></textarea>
        </div>
        <br>
        <div class="form-group">
          <label for="dataConsulta">Data da Consulta</label>
          <input type="datetime-local" class="form-control" name="data_consulta" id="dataConsulta" required>
        </div>
        <br>
        <div class="form-group">
          <label for="dentistaResponsavel">Dentista Responsável</label>
          <input type="text" class="form-control" name="dentista_responsavel" id="dentistaResponsavel" required>
        </div>
        <br>
        <button type="submit" class="btn btn-primary"> Criar Consulta </button>
        </form><br>`

        return form;
    }


    function mountFormEdit(data) {
        let form =
            `<form action='/consulta/update' >
        <div class="form-group">
          <label for="nomePaciente">Id da Consulta</label>
          <input type="text" name="id" class="form-control" id="nomePaciente" value='${data.id}' readonly >
        </div>
        <br>
        <div class="form-group">
          <label for="nomePaciente">Nome do Paciente</label>
          <input type="text" name="nome" class="form-control" id="nomePaciente" value='${data.nome}' required>
        </div>
        <br>
        <div class="form-group">
          <label for="telefone">Telefone</label>
          <input type="text" name="telefone" class="form-control" id="telefone" value='${data.telefone}' required>
        </div>
        <br>
        <div class="form-group">
          <label for="endereco">Endereço</label>
          <input type="text" name="endereco" class="form-control" id="endereco" value='${data.endereco}' required>
        </div>
        <br>
        <div class="form-group">
          <label for="observacao">Observação</label>
          <textarea class="form-control" name="observacao" id="observacao" required>${data.observacao}</textarea>
        </div>
        <br>
        <div class="form-group">
          <label for="dataConsulta">Data da Consulta</label>
          <input type="datetime-local" class="form-control" name="data_consulta" id="dataConsulta" value='${ moment(data.data_consulta).format('YYYY-MM-DDThh:mm:ss') }' required>
        </div>
        <br>
        <div class="form-group">
          <label for="dentistaResponsavel">Dentista Responsável</label>
          <input type="text" class="form-control" name="dentista_responsavel" id="dentistaResponsavel" value='${data.dentista_responsavel}' required>
        </div>
        <br>
        <button type="submit" class="btn btn-primary"> Atualizar </button>
        </form><br>`

        return form;

    }

    function mountFormUserChangePassword() {
      let form =
            `<form action='/user/update' target='/user/update' >
        <div class="form-group">
          <label for="novaSenha">Nova Senha</label>
          <input type="password" name="password" class="form-control">
        </div>
        <br>
        <button type="submit" class="btn btn-primary"> Atualizar Senha </button>
        </form><br>`

        return form;

    }

});
