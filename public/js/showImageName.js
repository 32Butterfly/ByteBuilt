document.addEventListener('DOMContentLoaded', function () {
    const fileInput = document.getElementById('imageInput');
    const fileNameDisplay = document.getElementById('fileName');

    // Add an event listener for when the user selects a file
    fileInput.addEventListener('change', function () {
    // Get the selected file's name
    const selectedFile = fileInput.files[0];
    
    // If a file is selected, update the file-name span with the file name
    if (selectedFile) {
        fileNameDisplay.textContent = selectedFile.name;
    } else {
        fileNameDisplay.textContent = 'No file selected';  // Default text if no file selected
    }
    });
});