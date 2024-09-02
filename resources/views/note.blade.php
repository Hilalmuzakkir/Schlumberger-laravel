<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team Support</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu">
    <style>
        body {
            font-family: 'Ubuntu', sans-serif;
        }
        .navbar {
            background-color: rgba(0, 0, 0, 0.0);
            padding: 10px;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }
        .menu {
            list-style: none;
            display: flex;
            justify-content: center;
            margin: 0;
            padding: 0;
        }
        .menu li {
            margin: 0 15px;
        }
        .menu a {
            color: white;
            text-decoration: none;
            font-size: 18px;
            transition: color 0.3s, transform 0.3s;
        }
        .menu a:hover {
            color: #ffcc00;
            transform: scale(1.1);
        }
        .latar-belakang {
            background-image: url('layanan1.jpg');
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            min-height: 100vh;
            position: relative;
            overflow: hidden;
        }
        .lapisan {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
        }
        .kontainer-teks {
            position: relative;
            z-index: 1;
            color: white;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        @keyframes kedip {
            0% { opacity: 1; }
            50% { opacity: 0; }
            100% { opacity: 1; }
        }
        .kedip {
            animation: kedip 1s infinite;
        }
        .content-section {
            padding: 50px 20px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            align-items: center;
        }
        .content-text {
            flex: 1;
            min-width: 300px;
            max-width: 500px;
            margin: 20px;
        }
        .content-image {
            flex: 1;
            min-width: 300px;
            max-width: 500px;
            margin: 20px;
        }
        .content-image img {
            width: 100%;
            height: auto;
            animation: turunKebawah 2s infinite;
        }
        @keyframes turunKebawah {
            0% { transform: translateY(0); }
            50% { transform: translateY(20px); }
            100% { transform: translateY(0); }
        }
        .action-button {
            padding: 10px 20px;
            margin-top: 20px;
            border: 2px solid #606676;
            border-radius: 10px;
            background-color: transparent;
            color: #606676;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .action-button:hover {
            background-color: #606676;
            color: white;
        }
        @media (max-width: 768px) {
            .menu {
                flex-direction: column;
                align-items: center;
            }
            .menu li {
                margin: 10px 0;
            }
            .content-section {
                flex-direction: column;
            }
            .content-text, .content-image {
                max-width: 100%;
            }
        }
        .note-section {
            background-color: #f5f5f5;
            padding: 50px 0;
        }
        .note-container {
            max-width: 800px;
            margin: 0 auto;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 30px;
        }
        #note-input {
            width: 100%;
            height: 150px;
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            resize: vertical;
        }
        #notes-list {
            margin-top: 30px;
        }
        .note-item {
            background-color: #f9f9f9;
            border-left: 4px solid #606676;
            padding: 15px;
            margin-bottom: 15px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <ul class="menu">
            <li><a href="/home">Home</a></li>
            <li><a href="#layanan2">Service</a></li>
            <li><a href="https://www.slb.com" target="_blank">About</a></li>
            <li><a href="#layanan4">Contact</a></li>
        </ul>
    </nav>

    <div class="latar-belakang">
        <div class="lapisan"></div>
        <div class="kontainer-teks">
            <h1 class="w3-jumbo" id="judul"></h1>
            <p class="w3-xxlarge" id="subjudul"></p>
        </div>
    </div>

    <div class="note-section">
        <div class="note-container">
            <h2>Personal Notes</h2>
            <textarea id="note-input" placeholder="Type your note here..."></textarea>
            <button id="save-note" class="action-button">Save Note</button>
            <div id="notes-list"></div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const noteInput = document.getElementById('note-input');
            const saveButton = document.getElementById('save-note');
            const notesList = document.getElementById('notes-list');

            // Load existing notes from localStorage
            const loadNotes = () => {
                const savedNotes = JSON.parse(localStorage.getItem('notes')) || [];
                notesList.innerHTML = '';
                savedNotes.forEach(note => {
                    const noteItem = document.createElement('div');
                    noteItem.className = 'note-item';
                    noteItem.textContent = note;
                    notesList.prepend(noteItem);
                });
            };

            // Initial load of notes
            loadNotes();

            saveButton.addEventListener('click', function() {
                const noteText = noteInput.value.trim();
                if (noteText) {
                    // Save note to localStorage
                    const savedNotes = JSON.parse(localStorage.getItem('notes')) || [];
                    savedNotes.unshift(noteText);
                    localStorage.setItem('notes', JSON.stringify(savedNotes));

                    // Clear input and reload notes
                    noteInput.value = '';
                    loadNotes();
                }
            });
        });
    </script>
    </script>
</body>
</html>