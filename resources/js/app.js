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
    const classSelect = document.getElementById('type_id'); // Seleziona il menu delle classi
    const weaponCheckboxes = document.querySelectorAll('input[type="checkbox"][name="items[]"]'); // Seleziona tutte le checkbox delle armi

    function updateWeaponsVisibility() {
        const selectedClass = classSelect.options[classSelect.selectedIndex].text.toLowerCase(); // Ottieni la classe selezionata

        weaponCheckboxes.forEach(function (checkbox) {
            const compatibleClasses = checkbox.getAttribute('data-classes').toLowerCase().split(',');

            if (compatibleClasses.includes(selectedClass)) {
                // Mostra l'arma
                checkbox.closest('.col-12').style.display = 'block'; // Usa closest per risalire alla colonna
            } else {
                // Nascondi l'arma
                checkbox.closest('.col-12').style.display = 'none';  // Nasconde il contenitore dell'arma
                checkbox.checked = false; // Deseleziona l'arma nascosta
            }
        });
    }

    classSelect.addEventListener('change', updateWeaponsVisibility); // Listener sul cambio della classe
    updateWeaponsVisibility(); // Esegui al caricamento della pagina
});





