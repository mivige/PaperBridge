document.addEventListener('DOMContentLoaded', function() {
    const dropZone = document.getElementById('dropZone');
    const fileInput = document.getElementById('fileInput');
    const uploadForm = document.getElementById('uploadForm');

    if (dropZone && fileInput && uploadForm) {
        dropZone.addEventListener('dragover', function(e) {
            e.preventDefault();
            dropZone.style.background = '#e0e0e0';
        });
        dropZone.addEventListener('dragleave', function(e) {
            e.preventDefault();
            dropZone.style.background = '';
        });
        dropZone.addEventListener('drop', function(e) {
            e.preventDefault();
            dropZone.style.background = '';
            if (e.dataTransfer.files.length) {
                fileInput.files = e.dataTransfer.files;
                uploadForm.submit();
            }
        });
    }
});