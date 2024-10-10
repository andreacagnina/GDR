import './bootstrap';
import '~resources/scss/app.scss';
import '~icons/bootstrap-icons.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])

const buttons = document.querySelectorAll('.delete-character')

buttons.forEach((button) => {

    button.addEventListener('click', function (e) {
        e.preventDefault();

        const characterName = button.getAttribute('data-characterName');
        const modalTitle = document.getElementById('deleteCharacterModalLabel');
        modalTitle.textContent = `Eliminazione di ${characterName}`;

        const modal = document.getElementById('deleteCharacterModal');

        const bootstrap_modal = new bootstrap.Modal(modal);

        bootstrap_modal.show();

        document.querySelector('.confirm-delete').addEventListener('click', function () {
            button.parentElement.submit();
        })
    });
});

document.addEventListener('DOMContentLoaded', function () {

    var successAlert = document.getElementById('success-alert');

    if (successAlert) {
        setTimeout(function () {
            successAlert.style.display = 'none';;
        }, 4000);
    }

});