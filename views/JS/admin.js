// ALERTA AO CADASTRAR O SHOW COM SWEETALERT
document.addEventListener('DOMContentLoaded', function() {
    let mensagem = document.querySelector('.mensagem');

    if (mensagem) {
            mensagem.remove();
            Swal.fire({
                title: 'Sucesso',
                text: 'O show foi adcionado ou alterado com sucesso!',
                icon: 'success',
                timer: 3000,
                showConfirmButton: false,
                background:"#fff5e6"
            });
    }
});

// ALERTA PARA EXCLUSÃO DE SHOW
function confirmarExclusao(codAgenda) {
    Swal.fire({
        title: 'Tem certeza?',
        text: "Você realmente deseja excluir este show?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sim, excluir!',
        cancelButtonText: 'Cancelar',
        background:"#fff5e6"
    }).then((result) => {
        if (result.isConfirmed) {
            setTimeout(() => {
                document.getElementById('form-excluir-' + codAgenda).submit();
            }, 1000);
            Swal.fire({
                title: 'Excluído!',
                text: 'O show foi excluído com sucesso!',
                icon: 'success',
                position: 'center',
                width: 400,
                showConfirmButton: false,
                timer: 5000,
                background:"#fff5e6"
            });
        }
    });
}

// redefinindo função para botão de editar o show
function editarShow(codAgenda) {
    window.location.href = "./alterar.php?cod_Agenda=" + codAgenda;
}




//Alertas para erro ou sucesso ao logar.
document.addEventListener('DOMContentLoaded', function(){
    if (document.getElementById('login_error'))
    {
        Swal.fire({
            icon: 'error',
            title: 'Erro!',
            confirmButtonColor: '#ff0000',
            text: document.getElementById('login_error').value,
            position: 'top', 
            toast: true
        });
    }
    else if (document.getElementById('sucesso'))
    { 
        Swal.fire({
            position: "bottom-end",
            icon: "success",
            title: document.getElementById('sucesso').value,
            showConfirmButton: false,
            timer: 1500,
            toast:true
        });
    }
    }
    )
