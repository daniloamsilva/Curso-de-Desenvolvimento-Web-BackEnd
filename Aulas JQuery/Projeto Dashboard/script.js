$(document).ready(() => {
    
    // Método load()
    //$('#documentacao').on('click', () => $('#pagina').load('documentacao.html'));
    //$('#suporte').on('click', () => $('#pagina').load('suporte.html'));

    // Método get
    /*$('#documentacao').on('click', () => {
        $.get('documentacao.html', data => $('#pagina').html(data));
    });
    $('#suporte').on('click', () => {
        $.get('suporte.html', data => $('#pagina').html(data));
    });*/

    // Método post
    $('#documentacao').on('click', () => {
        $.post('documentacao.html', data => $('#pagina').html(data));
    });
    $('#suporte').on('click', () => {
        $.post('suporte.html', data => $('#pagina').html(data));
    });

    $('#competencia').on('change', e => {

        let competencia = $(e.target).val();

        $.ajax({
            type: 'GET',
            url: 'app.php',
            data : `competencia=${competencia}`,
            dataType: 'json',
            success: dados => {
                $('#numeroVendas').html(dados.numero_vendas);
                $('#totalVendas').html(dados.total_vendas);
            },
            error: erro => console.log(erro)
        })
    });

})