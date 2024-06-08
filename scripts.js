document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault();

    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;
    var errorMessage = document.getElementById('errorMessage');

    if (username === 'admin' && password === '123') {
        window.location.href = 'home.html';
    } else {
        errorMessage.textContent = 'Usuário ou senha inválidos';
    }
});


document.getElementById('home').addEventListener('click', function(event) {
    event.preventDefault();
    showSection('home-section');
});

document.getElementById('profile').addEventListener('click', function(event) {
    event.preventDefault();
    showSection('profile-section');
});

document.getElementById('settings').addEventListener('click', function(event) {
    event.preventDefault();
    showSection('settings-section');
});

document.getElementById('search').addEventListener('click', function(event) {
    event.preventDefault();
    showSection('search-section');
});

function showSection(sectionId) {
    document.querySelectorAll('main section').forEach(function(section) {
        section.classList.add('hidden');
    });
    document.getElementById(sectionId).classList.remove('hidden');
}