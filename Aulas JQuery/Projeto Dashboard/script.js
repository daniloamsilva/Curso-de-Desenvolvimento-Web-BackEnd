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

})