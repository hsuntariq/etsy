<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Text Editor</title>
    <style>
    #editor {
        width: 500px;
        height: 300px;
        border: 1px solid #ccc;
        padding: 10px;
        font-family: Arial, sans-serif;
        font-size: 16px;
        white-space: pre-wrap;
    }
    </style>
</head>

<body>
    <h2>Text Editor</h2>
    <div>
        <button onclick="formatText('bold')">Bold</button>
        <button onclick="formatText('italic')">Italic</button>
        <button onclick="formatText('underline')">Underline</button>
    </div>
    <div id="editor" contenteditable="true"></div>

    <script>
    function formatText(command) {
        document.execCommand(command, false, null);
    }
    </script>
</body>

</html>