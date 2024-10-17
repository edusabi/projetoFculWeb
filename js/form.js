const formSubmit = document.getElementById("formSubmit");



formSubmit.addEventListener("submit", (e) => {
    ///para que o formulário não seja enviado e recarregue a página assim que clicar no botão
    e.preventDefault();

    ////dados enviados
    const formNome = document.getElementById("nome").value.trim();
    const formEmail = document.getElementById("email").value.trim();
    const formIdade = document.getElementById("idade").value.trim();
    const formAssunto = document.getElementById("assunto").value.trim();

    // Expressão regular para validar o email
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    // Verificações simples de validação
    if (formNome === '') {
        alert('Por favor, preencha o campo nome.');
        return;
    }else if (formEmail === '' || !emailRegex.test(formEmail)) {
        alert('Por favor, insira um email válido.');
        return;
    }else if (formIdade === '' || isNaN(formIdade) || formIdade <= 0) {
        alert('Por favor, insira uma idade válida.');
        return;
    }else if (formAssunto === '') {
        alert('Por favor, escreva sua dúvida.');
        return;
    }else{
        // Se tudo estiver correto, o formulário pode ser enviado
        alert('Formulário enviado com sucesso!');
        formSubmit.submit();
    }

});
