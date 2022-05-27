$( document ).ready(function() {

    // $( "#tabela_consulta" ).DataTable();

    $( "td i[name='edit']" ).click(function() {
        let htmlMounted = mountForm(JSON.parse($(this).attr('data-consulta')));

        Swal.fire({
            title: 'Editar Consulta',
            html: htmlMounted,
            showCancelButton: false,
            showConfirmButton: false,
            showCloseButton: false,
            showCancelButton: false,
        });
    });

    function mountForm(data)
    {
        let form =
        `<form action="{{url('store-form')}}">
        <div class="form-group">
          <label for="nomePaciente">Id da Consulta</label>
          <input type="text" class="form-control" id="nomePaciente" value='${data.id}' disabled >
        </div>
        <br>
        <div class="form-group">
          <label for="nomePaciente">Nome do Paciente</label>
          <input type="text" class="form-control" id="nomePaciente" value='${data.nome}'>
        </div>
        <br>
        <div class="form-group">
          <label for="telefone">Telefone</label>
          <input type="text" class="form-control" id="telefone" value='${data.telefone}'>
        </div>
        <br>
        <div class="form-group">
          <label for="endereco">Endereço</label>
          <input type="text" class="form-control" id="endereco" value='${data.endereco}'>
        </div>
        <br>
        <div class="form-group">
          <label for="observacao">Observação</label>
          <textarea class="form-control" id="observacao">${data.observacao}</textarea>
        </div>
        <br>
        <div class="form-group">
          <label for="dataConsulta">Data da Consulta</label>
          <input type="datetime-local" class="form-control" id="dataConsulta" value='${ moment(data.data_consulta).format('YYYY-MM-DDThh:mm:ss') }'>
        </div>
        <br>
        <div class="form-group">
          <label for="dentistaResponsavel">Dentista Responsável</label>
          <input type="text" class="form-control" id="dentistaResponsavel" value='${data.dentista_responsavel}'>
        </div>
        <br>
        <button type="submit" class="btn btn-primary"> Atualizar </button>
        </form><br>`
        
        return form;
         
    }

});

