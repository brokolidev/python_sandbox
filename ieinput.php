<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>File(s) size</title>
</head>

<body>
    <div class="example">

        <div class="file-select">
            <label for="avatar">Choose a profile picture:</label>
            <input type="file" id="avatar" name="avatar" accept="image/png, image/jpeg">
        </div>

        <img src="" class="preview" height="200" alt="Image preview...">

        <div class="event-log">
            <label>Event log:</label>
            <textarea readonly class="event-log-contents" rows="20" cols="100"></textarea>
        </div>

    </div>

    <script>
    const fileInput = document.querySelector('input[type="file"]');
    const preview = document.querySelector('img.preview');
    const eventLog = document.querySelector('.event-log-contents');
    const reader = new FileReader();

    function handleEvent(event) {
        eventLog.textContent = eventLog.textContent + event.type + ' : ' +
            event.loaded + ' bytes transferred\n';

        if (event.type === "load") {
            preview.src = reader.result;
        }
    }

    function addListeners(reader) {
        reader.addEventListener('loadstart', handleEvent);
        reader.addEventListener('load', handleEvent);
        reader.addEventListener('loadend', handleEvent);
        reader.addEventListener('progress', handleEvent);
        reader.addEventListener('error', handleEvent);
        reader.addEventListener('abort', handleEvent);
    }

    function handleSelected(e) {
        eventLog.textContent = '';
        const selectedFile = fileInput.files[0];
        if (selectedFile) {
            addListeners(reader);
            reader.readAsDataURL(selectedFile);
        }
    }

    fileInput.addEventListener('change', handleSelected);
    </script>

</body>

</html>