document.getElementById('openModalBtn').addEventListener('click', function() {
    document.getElementById('addUserModal').classList.add('is-active');
});

document.getElementById('closeModalBtn').addEventListener('click', function() {
    document.getElementById('addUserModal').classList.remove('is-active');
});