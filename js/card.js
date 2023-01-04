document.querySelector('#card').addEventListener('keydown', (e) => {
    e.target.value = e.target.value.replace(/(\d{4})(\d+)/g, '$1 $2')
})
/* Jquery */
$('#card').keyup(function() {
  $(this).val($(this).val().replace(/(\d{4})(\d+)/g, '$1 $2'))
});