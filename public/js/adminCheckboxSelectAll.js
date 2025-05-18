document.addEventListener('DOMContentLoaded', function () {
    const checkboxes = document.querySelectorAll('[data-select-all]');

    checkboxes.forEach(master => {
        const name = master.getAttribute('data-select-all');
        const checkboxes = document.querySelectorAll(`[data-checkbox-group="${name}"]`);

        master.addEventListener('change', function () {
            checkboxes.forEach(checkbox => {
                checkbox.checked = master.checked;
            });
        });
    });
});