<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Resume</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            color: #333;
        }
        header {
            background-color: #4CAF50;
            color: white;
            padding: 20px 0;
            text-align: center;
        }
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }
        .profile-image {
            display: block;
            margin: 20px auto;
            border-radius: 50%;
            width: 150px;
            height: 150px;
        }
        .section {
            margin: 20px 0;
            padding: 20px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .section h2 {
            margin: 0;
            color: #4CAF50;
        }
        .section ul {
            list-style-type: none;
            padding: 0;
        }
        .section ul li {
            margin: 10px 0;
        }
        .toggle-button {
            display: block;
            margin: 20px auto;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }
    </style>
    <script>
        function toggleSection(sectionId) {
            var section = document.getElementById(sectionId);
            if (section.style.display === "none") {
                section.style.display = "block";
            } else {
                section.style.display = "none";
            }
        }
    </script>
</head>
<body>
    <header>
        <h1>My Resume</h1>
    </header>
    <div class="container">
         <button class="toggle-button" onclick="toggleSection('contact-info')">Toggle Contact Information</button>
        <div class="section" id="contact-info">
            <h2>Contact Information</h2>
            <p>Email: jitendraprajapati9956@gmail.com</p>
            <p>Phone: 9023983543</p>
            <p>LinkedIn: linkedin.com/in/prajapatijitendra</p>
        </div>
        <div class="section">
            <h2>Education</h2>
            <ul>
                <li>Master of Computer Application(MCA), Dharamshih Desai University, 2022-Present</li>
                <li>Bachelor of Computer Application(BCA), Hemchadracharya North Gujarat University, 2022</li>
            </ul>
        </div>
       
        <div class="section">
            <h2>Skills</h2>
            <ul>
                <li>Programming Languages: JavaScript, Python, Java</li>
                <li>Web Technologies: HTML, CSS</li>
                <li>Databases: MySQL, MongoDB</li>
            </ul>
        </div>
    </div>
</body>
</html>
