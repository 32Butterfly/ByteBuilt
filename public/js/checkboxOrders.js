document.addEventListener('DOMContentLoaded', function () {
    const selectAll = document.getElementById('select-all-products');
    const checkboxes = document.querySelectorAll('input[name="orders_ids[]"]');

    selectAll.addEventListener('change', function () {
        checkboxes.forEach(function (checkbox) {
            checkbox.checked = selectAll.checked;
        });
    });
});
