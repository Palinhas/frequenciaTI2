    $(".enviar").click(function (e) {
        e.preventDefault();
        var nome = $('#form-name').val();
        //console.log("nome: " + nome);
        var email = $('#form-email').val();
        //console.log("email: " + email);
        var subject = $('#form-Subject').val();
        //console.log("email: " + subject);
        var text = $('#form-text').val();
        //console.log("email: " + text);

        document.getElementById("formresult").innerHTML = ('<div class="alert alert-success" role="alert"></button>Mensagem enviada com sucesso\n\
                                                            <h6>Nome: ' + nome + '</h6>\n\
                                                            <h6>Email: ' + email + '</h6>\n\
                                                            <h6>Assunto: ' + subject + '</h6>\n\
                                                            <h6>Mensagem: ' + text + '</h6></div>');
        $('#form-name').val('');
        $('#form-email').val('');
        $('#form-Subject').val('');
        $('#form-text').val('');
    });


