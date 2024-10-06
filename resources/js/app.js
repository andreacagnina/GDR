import './bootstrap';
import '~resources/scss/app.scss';
import '~icons/bootstrap-icons.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])

const buttons = document.querySelectorAll('.deleteCharacter')

buttons.forEach((button) => {

    button.addEventListener('click', function (e){
        e.preventDefault();

        const modal = document.getElementById('deleteCharacterModal');

        const bootstrap_modal = new bootstrap.Modal(modal);

        bootstrap_modal.show();
        
        // const buttonDelete = modal.querySelector('.confirm-delete');

        // const characterName = button.getAttribute('data-characterName');

        document.querySelector('.confirm-delete').addEventListener('click', function(){
            button.parentElement.submit();
        })
    });
});