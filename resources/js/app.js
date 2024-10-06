import './bootstrap';
import '~resources/scss/app.scss';
import '~icons/bootstrap-icons.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])

const buttons = document.querySelectorAll('.deleteCharacter');

buttons.forEach((button) => {

    button.addEventListener('click', (e) => {
        e.preventDefault();


        const modal = document.getElementById('deleteCharacterModal');

        const bootstrap_modal = new bootstrap.Modal(modal);

        bootstrap_modal.show();

        const characterName = button.getAttribute('data-characterName');
        const ModalText = modal.querySelector('#modal_text');
        ModalText.innerHTML = `Sei sicuro di volere cancellare questo Personaggio?<br><br><p class='color'><strong>--> ${characterName} <--</strong></p>`;

        const buttonDelete = modal.querySelector('.confirm-delete');
        buttonDelete.replaceWith(buttonDelete.cloneNode(true));
        const newButtonDelete = modal.querySelector('.confirm-delete');

        buttonDelete.addEventListener('click', function () {
            button.parentElement.submit();
        });
    });
});