<?php
// Require the constants
require('./app/config/constantes.php');
// Verificar si el usuario está logueado
require(ROOT_PATH . DS . 'app' . DS . 'login' . DS . 'verificar-login.php');
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de Estudiante - Plataforma de Reclutamiento Universitario</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            margin: 0;
            padding: 0;
            background-color: #f0f2f5;
        }
        .container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 20px;
        }
        header {
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            padding: 20px 0;
        }
        h1, h2 {
            margin: 0;
        }
        .profile-header {
            display: flex;
            align-items: center;
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .profile-image {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 20px;
        }
        .profile-info h1 {
            font-size: 2rem;
            margin-bottom: 10px;
        }
        .profile-info p {
            margin: 5px 0;
            color: #666;
        }
        .profile-section {
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .profile-section h2 {
            border-bottom: 2px solid #007bff;
            padding-bottom: 10px;
            margin-bottom: 15px;
        }
        .skills-list {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }
        .skill-tag {
            background-color: #e9ecef;
            border-radius: 20px;
            padding: 5px 10px;
            font-size: 0.9rem;
        }
        .experience-item, .education-item {
            margin-bottom: 15px;
        }
        .experience-item h3, .education-item h3 {
            margin: 0 0 5px 0;
        }
        .experience-item p, .education-item p {
            margin: 0;
            color: #666;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
            border: none;
            cursor: pointer;
            font-size: 1rem;
        }
        .btn:hover {
            background-color: #0056b3;
        }
        .cv-upload {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .cv-upload input[type="file"] {
            display: none;
        }
        .cv-filename {
            font-style: italic;
            color: #666;
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <h1>Plataforma de Reclutamiento Universitario</h1>
        </div>
    </header>

    <div class="container">
        <div class="profile-header">
            <img src="/src/image/perfil1.png" alt="Foto de Ana García" class="profile-image">
            <div class="profile-info">
                <h1>Carlos Rodriguez</h1>
                <p>Estudiante de Ingeniería Informática - 3º año</p>
                <p>Universidad Tecnológica Nacional</p>
                <p>ana.garcia@email.com | +54 9 11 1234-5678</p>
            </div>
        </div>

        <div class="profile-section">
            <h2>Sobre mí</h2>
            <p>Soy una estudiante apasionada por la tecnología y el desarrollo de software. Me especializo en programación web y móvil, y estoy siempre buscando nuevos desafíos para mejorar mis habilidades.</p>
        </div>

        <div class="profile-section">
            <h2>Currículum Vitae</h2>
            <div class="cv-upload">
                <input type="file" id="cv-file" accept=".pdf,.doc,.docx">
                <label for="cv-file" class="btn">Subir CV</label>
                <span class="cv-filename" id="cv-filename">Ningún archivo seleccionado</span>
            </div>
        </div>

        <div class="profile-section">
            <h2>Habilidades</h2>
            <div class="skills-list">
                <span class="skill-tag">JavaScript</span>
                <span class="skill-tag">React</span>
                <span class="skill-tag">Node.js</span>
                <span class="skill-tag">Python</span>
                <span class="skill-tag">SQL</span>
                <span class="skill-tag">Git</span>
                <span class="skill-tag">Diseño UX/UI</span>
            </div>
        </div>

        <div class="profile-section">
            <h2>Experiencia</h2>
            <div class="experience-item">
                <h3>Desarrolladora Web Junior - TechSolutions</h3>
                <p>Junio 2023 - Presente</p>
                <p>Desarrollo de aplicaciones web utilizando React y Node.js. Colaboración en proyectos de e-commerce y sistemas de gestión internos.</p>
            </div>
            <div class="experience-item">
                <h3>Pasante de Desarrollo - InnovaSoft</h3>
                <p>Enero 2023 - Mayo 2023</p>
                <p>Asistencia en el desarrollo de aplicaciones móviles con React Native. Participación en pruebas de calidad y documentación de proyectos.</p>
            </div>
        </div>

        <div class="profile-section">
            <h2>Educación</h2>
            <div class="education-item">
                <h3>Ingeniería Informática - Universidad Tecnológica Nacional</h3>
                <p>2021 - Presente</p>
                <p>Promedio actual: 8.5/10</p>
            </div>
            <div class="education-item">
                <h3>Curso de Desarrollo Web Full Stack - Platzi</h3>
                <p>2022</p>
                <p>Certificación en desarrollo web con enfoque en JavaScript, React, y Node.js</p>
            </div>
        </div>

        <div class="profile-section">
            <h2>Proyectos Destacados</h2>
            <div class="experience-item">
                <h3>Sistema de Gestión de Tareas</h3>
                <p>Aplicación web desarrollada con React y Firebase para la gestión eficiente de tareas y proyectos en equipo.</p>
            </div>
            <div class="experience-item">
                <h3>App de Seguimiento de Hábitos</h3>
                <p>Aplicación móvil creada con React Native para ayudar a los usuarios a formar y mantener hábitos saludables.</p>
            </div>
        </div>

        <div style="text-align: center; margin-top: 20px;">
            <a href="#" class="btn">Contactar a Ana</a>
        </div>
    </div>

    <script>
        document.getElementById('cv-file').addEventListener('change', function(e) {
            var fileName = e.target.files[0].name;
            document.getElementById('cv-filename').textContent = fileName;
        });
    </script>
</body>
</html>