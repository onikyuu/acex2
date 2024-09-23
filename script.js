document.addEventListener("DOMContentLoaded", function() {
    const feedbackButton = document.getElementById("feedbackButton");
    const feedbackForm = document.getElementById("feedbackForm");
    const closeButton = document.getElementById("closeButton");

    feedbackButton.addEventListener("click", function() {
        feedbackForm.style.display = "block";
    });

    closeButton.addEventListener("click", function() {
        feedbackForm.style.display = "none";
    });
});

document.addEventListener("DOMContentLoaded", function() {
    const data = [
        {
            img: "branco.png",
            text: "1. Ao acessar o software iModulo iMonitoramento, faça o login e acesse o menu de configurações"
        },
        {
            img: "passo1.jpg",
            text: "2. Dentro das configurações, clique na opção de Cadastro, localizada no canto superior esquerdo, após isso, clique em Dispositivos"
        },
        {
            img: "passo2.jpg",
            text: "3.Agora, abaixo de Inserir novo dispositivo, em Tipo, selecione CT - Cartão e Chaveiro"
        },
        {
            img: "passo3.jpg",
            text: "4. Preencha os campos solicitados com as informações do chaveiro TAG, como número de série, ID ou qualquer outro identificador específico do dispositivo.<br>Sendo necessário o uso de uma leitora ou inserir a numeração existente na tag manualmente;<br><br>5. É necessário vincular o chaveiro a um usuário específico. Nesse caso, selecione o usuário ao qual o chaveiro será vinculado;<br><br>6. Defina as permissões ou acessos que o chaveiro terá. Isso pode incluir áreas específicas que o usuário poderá acessar ou horários permitidos.<br>SEMPRE OPÇÃO REMOTO EM CASO DE NÃO ESTAR NO LOCAL;<br><br>7. Após preencher todos os dados e configurar as permissões, salve as informações para registrar o chaveiro TAG no sistema."
        },
        {
            img: "passo4.jpg",
            text: "8. Realize um teste para garantir que o chaveiro TAG foi cadastrado corretamente e está funcionando conforme esperado.<br><br>9. Verifique se o usuário pode acessar as áreas permitidas usando o chaveiro TAG."
        },
        {
            img: "passo5.jpg",
            text: "10. Confirme que todas as configurações estão corretas e finalize o processo de cadastramento."
        }
    ];

    const imageElement = document.getElementById("image");
    const textElement = document.getElementById("text");
    let currentIndex = 0;

    document.getElementById("nextBtn").addEventListener("click", function() {
        currentIndex = (currentIndex + 1) % data.length;
        updateContent();
    });

    document.getElementById("prevBtn").addEventListener("click", function() {
        currentIndex = (currentIndex - 1 + data.length) % data.length;
        updateContent();
    });

    function updateContent() {
        imageElement.src = data[currentIndex].img;
        textElement.innerHTML = data[currentIndex].text; 
    }

    updateContent();
});