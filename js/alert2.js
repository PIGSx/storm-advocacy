function exibirSweetAlert() {
  Swal.fire({
    title: 'Escolha uma opção',
    html: `
      <div class="button-container">
        <a href="https://calendly.com/pigsx/reuniao" target="_blank" class="swal2-confirm swal2-styled">Débora Andrade</a>
        <a href="error.php" class="swal2-cancel swal2-styled">Eduardo Moraes</a>
      </div>
      <div class="button-container">
        <a href="error.php" class="swal2-deny swal2-styled">Renata Oliveira</a>
        <a href="error.php" class="swal2-styled">Rodrigo Santos</a>
      </div>
    `,
    showCloseButton: true,
    closeButtonHtml: '<i class="uil uil-times-circle"></i>',
    showCancelButton: false,
    showDenyButton: false,
    showConfirmButton: false,
  });
}