// document.addEventListener('DOMContentLoaded', function () {
//     var STORAGE_KEY = 'openModalId';

//     // Restore modal state after page refresh
//     var savedModalId = sessionStorage.getItem(STORAGE_KEY);
//     if (savedModalId) {
//         var modalEl = document.getElementById(savedModalId);
//         if (modalEl) {
//             var modal = new bootstrap.Modal(modalEl);
//             modal.show();
//         }
//     }

//     // Save modal ID when any modal opens
//     document.addEventListener('show.bs.modal', function (e) {
//         sessionStorage.setItem(STORAGE_KEY, e.target.id);
//     });

//     // Remove saved state when modal is fully closed
//     document.addEventListener('hidden.bs.modal', function () {
//         sessionStorage.removeItem(STORAGE_KEY);
//     });
// });

function submit_vacancies_form(form) {
    console.log('submit_vacancies_form');

    const formData = new FormData(form);
    
    const data = Object.fromEntries(formData.entries());

    console.log(data);

    const jsonData = JSON.stringify(data);

    fetch('/?page=vacancies-submit', {
    method: 'POST',
    headers: { 'Content-Type': 'application/json' },
    body: jsonData
})
    .then(response => response.json())
    .then(result => {
        console.log(result);
        show_success_message(form, result);
    })
    .catch(error => console.error(error));

}


function show_success_message(form, result) {

    form.innerHTML = '<div class="vacancies-success-message">' + result.message + '</div>';
}








