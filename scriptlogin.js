document.addEventListener('DOMContentLoaded', function() {
    // Lógica de Login
    document.getElementById('loginForm').addEventListener('submit', function(event) {
        event.preventDefault();

        var username = document.getElementById('username').value;
        var password = document.getElementById('password').value;
        var errorMessage = document.getElementById('errorMessage');

        // Verifique os dados do usuário no localStorage
        var storedUsername = localStorage.getItem('username');
        var storedPassword = localStorage.getItem('password');

        if (username === storedUsername && password === storedPassword) {
            window.location.href = 'home.html';
        } else {
            errorMessage.textContent = 'Usuário ou senha inválidos';
        }
    });

    // Lógica para abrir e fechar o modal de cadastro
    var registerLink = document.getElementById('registerLink');
    var registerModal = document.getElementById('registerModal');
    var closeRegisterModal = document.getElementById('closeRegisterModal');

    registerLink.addEventListener('click', function(event) {
        event.preventDefault();
        registerModal.style.display = 'block';
    });

    closeRegisterModal.addEventListener('click', function() {
        registerModal.style.display = 'none';
    });

    window.addEventListener('click', function(event) {
        if (event.target == registerModal) {
            registerModal.style.display = 'none';
        }
    });

    // Lógica de Cadastro
    document.getElementById('registerForm').addEventListener('submit', function(event) {
        event.preventDefault();

        var newUsername = document.getElementById('newUsername').value;
        var newPassword = document.getElementById('newPassword').value;
        var registerErrorMessage = document.getElementById('registerErrorMessage');

        // Armazene os dados do usuário no localStorage
        localStorage.setItem('username', newUsername);
        localStorage.setItem('password', newPassword);

        registerErrorMessage.textContent = 'Usuário cadastrado com sucesso!';
        registerErrorMessage.style.color = 'green';

        // Feche o modal imediatamente após o cadastro
        registerModal.style.display = 'none';
    });

    // Lógica para abrir e fechar o modal de esqueci a senha
    var forgotPasswordLink = document.getElementById('forgotPasswordLink');
    var forgotPasswordModal = document.getElementById('forgotPasswordModal');
    var closeForgotPasswordModal = document.getElementById('closeForgotPasswordModal');

    forgotPasswordLink.addEventListener('click', function(event) {
        event.preventDefault();
        forgotPasswordModal.style.display = 'block';
    });

    closeForgotPasswordModal.addEventListener('click', function() {
        forgotPasswordModal.style.display = 'none';
    });

    window.addEventListener('click', function(event) {
        if (event.target == forgotPasswordModal) {
            forgotPasswordModal.style.display = 'none';
        }
    });

    // Lógica de Esqueci a Senha
    document.getElementById('forgotPasswordForm').addEventListener('submit', function(event) {
        event.preventDefault();

        var forgotUsername = document.getElementById('forgotUsername').value;
        var newForgotPassword = document.getElementById('newForgotPassword').value;
        var forgotPasswordErrorMessage = document.getElementById('forgotPasswordErrorMessage');

        // Verifique se o nome de usuário existe
        var storedUsername = localStorage.getItem('username');

        if (forgotUsername === storedUsername) {
            // Atualize a senha no localStorage
            localStorage.setItem('password', newForgotPassword);
            forgotPasswordErrorMessage.textContent = 'Senha atualizada com sucesso!';
            forgotPasswordErrorMessage.style.color = 'green';

            // Feche o modal imediatamente após a atualização da senha
            forgotPasswordModal.style.display = 'none';
        } else {
            forgotPasswordErrorMessage.textContent = 'Usuário não encontrado';
        }
    });
});
