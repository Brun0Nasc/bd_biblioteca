function limpar(){
    window.alert("Cadastro efetuado com sucesso!")

    let nome = document.getElementById('nome')
    let tel = document.getElementById('telefone')
    let email = document.getElementById('email')
    let cpf = document.getElementById('cpf')
    let end = document.getElementById('endereco')
    nome.value = ''
    tel.value = ''
    cpf.value = ''
    email.value = ''
    end.value = ''
    nome.focus()
}