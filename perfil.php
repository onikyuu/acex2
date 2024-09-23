
<?php
    session_start();
    //print_r($_SESSION);
    if((!isset($_SESSION['nome']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['nome']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    $logado = $_SESSION['nome'];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="perfil.css">
    <style>
        .linkBotao{
            appearance: button;
            padding: 9px 15px;
            background-color:#007bff;
            border:none;
            color:white;
            border-radius: 5px;
        }
        
        .linkBotao:hover{
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <div class="header-left">
                <img id="fsa" src="logo_fsa.png" alt="fsa">
                <h1>Meu Perfil</h1>
            </div>
            <button id="feedbackButton">Feedback</button>
        </div>
    </header>
    <div class="content">
        <aside class="sidebar">
            <nav>
                <ul>
                    <li><a href="home.php" id="home">Página Inicial</a></li>
                    <li><a href="perfil.php" id="profile">Ver Perfil</a></li>
                </ul>
            </nav>
        </aside>
        <main>
            <section class="profile-section">
                <div class="profile-header">
                    <img src="foto_perfil.png" alt="Foto de Perfil" class="profile-picture">
                    <?php
                        echo "<h2> $logado </h2>";
                    ?>
                </div>
                <div class="profile-details">
                    <p><strong>Email:</strong> <span id="userEmail">usuario@gmail.com</span></p>
                    <p><strong>Telefone:</strong> <span id="userPhone">(11) 1234-5678</span></p>
                    <p><strong>Endereço:</strong> <span id="userAddress">Rua, 123, Cidade, Estado</span></p>
                    <!--<button id="editButton">Editar Informações</button>--> 
                    <a class="linkBotao" href="sair.php">Sair</a>
                </div>
            </section>
        </main>
    </div>
    <div id="editModal" class="modal">
        <div class="modal-content">
            <span class="close-button" id="closeEditModal">&times;</span>
            <h2>Editar Informações</h2>
            <form id="editForm">
                <label for="editEmail">Email:</label>
                <input type="email" id="editEmail" name="email" required>
                <label for="editPhone">Telefone:</label>
                <input type="text" id="editPhone" name="phone" required>
                <label for="editAddress">Endereço:</label>
                <input type="text" id="editAddress" name="address" required>
                <button type="submit">Salvar</button>
            </form>
        </div>
    </div>
    <div id="feedbackForm" class="feedback-form">
        <div class="feedback-content">
            <span class="close-button" id="closeButton">&times;</span>
            <h2>Deixe seu Feedback</h2>
            <form>
                <textarea placeholder="Digite seu feedback aqui..." rows="4"></textarea>
                <button type="submit">Enviar</button>
            </form>
        </div>
    </div>
    <script src="script.js"></script>
    <script>
        //atualizar informações do usuário
        document.addEventListener('DOMContentLoaded', function() {
            var storedUsername = localStorage.getItem('username');
            if (storedUsername) {
                document.getElementById('usernameDisplay').textContent = storedUsername;
            }

            var storedEmail = localStorage.getItem('userEmail');
            var storedPhone = localStorage.getItem('userPhone');
            var storedAddress = localStorage.getItem('userAddress');
            if (storedEmail) {
                document.getElementById('userEmail').textContent = storedEmail;
            }
            if (storedPhone) {
                document.getElementById('userPhone').textContent = storedPhone;
            }
            if (storedAddress) {
                document.getElementById('userAddress').textContent = storedAddress;
            }

            document.getElementById('editButton').addEventListener('click', function() {
                document.getElementById('editModal').style.display = 'block';
                document.getElementById('editEmail').value = document.getElementById('userEmail').textContent;
                document.getElementById('editPhone').value = document.getElementById('userPhone').textContent;
                document.getElementById('editAddress').value = document.getElementById('userAddress').textContent;
            });

            document.getElementById('closeEditModal').addEventListener('click', function() {
                document.getElementById('editModal').style.display = 'none';
            });

            document.getElementById('editForm').addEventListener('submit', function(e) {
                e.preventDefault();
                var newEmail = document.getElementById('editEmail').value;
                var newPhone = document.getElementById('editPhone').value;
                var newAddress = document.getElementById('editAddress').value;
                localStorage.setItem('userEmail', newEmail);
                localStorage.setItem('userPhone', newPhone);
                localStorage.setItem('userAddress', newAddress);
                document.getElementById('userEmail').textContent = newEmail;
                document.getElementById('userPhone').textContent = newPhone;
                document.getElementById('userAddress').textContent = newAddress;
                document.getElementById('editModal').style.display = 'none';
            });
            document.getElementById('logoutButton').addEventListener('click', function() {
                window.location.href = 'index.html';
            });
        });
    </script>
</body>
</html>