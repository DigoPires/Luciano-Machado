// ALERTA AO CADASTRAR O SHOW COM SWEETALERT
document.addEventListener('DOMContentLoaded', function() {
    let mensagem = document.querySelector('.mensagem');

    if (mensagem) {
        setTimeout(function() {
            mensagem.remove();
            Swal.fire({
                title: 'Sucesso',
                text: 'O show foi adcionado a agenda com sucesso!',
                icon: 'success',
                timer: 3000,
                showConfirmButton: false,
                background:"#fff5e6"
            });
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
            }, 3000);
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


