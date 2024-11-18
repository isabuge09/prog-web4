document.addEventListener("DOMContentLoaded", function () {
    // Obtém todos os elementos que representam as estrelas
    const stars = document.querySelectorAll(".star");
    // Obtém o elemento onde será mostrado o número de estrelas selecionadas
    const ratingValue = document.getElementById("rating-value");

    // Adiciona um ouvinte de evento para cada estrela
    stars.forEach((star, index) => {
        // Quando o mouse passar sobre a estrela, destacar as estrelas até a posição atual
        star.addEventListener("mouseover", function () {
            resetStars(); // Reseta as estrelas para o estado padrão
            highlightStars(index + 1); // Destaca as estrelas até o índice da estrela sobre a qual o mouse está
        });

        // Quando o mouse sair de cima da estrela, restaurar o estado das estrelas
        star.addEventListener("mouseout", function () {
            resetStars(); // Reseta as estrelas para o estado padrão
            highlightStars(getSelectedRating()); // Mantém o destaque da avaliação que foi selecionada
        });

        // Quando o usuário clica na estrela, define a avaliação
        star.addEventListener("click", function () {
            setSelectedRating(index + 1); // Define o número de estrelas como a avaliação do usuário
        });
    });

    // Função que destaca as estrelas até o número passado como argumento
    function highlightStars(count) {
        stars.forEach((star, index) => {
            if (index < count) {
                star.classList.add("selected"); // Adiciona a classe 'selected' para destacar a estrela
            }
        });
    }

    // Função que reseta as estrelas, removendo a classe 'selected'
    function resetStars() {
        stars.forEach(star => {
            star.classList.remove("selected"); // Remove a classe 'selected' de todas as estrelas
        });
    }

    // Função que armazena a avaliação selecionada no localStorage
    function setSelectedRating(rating) {
        localStorage.setItem("rating", rating); // Salva a avaliação no localStorage (para persistir após o recarregamento)
        ratingValue.textContent = rating; // Atualiza a exibição da avaliação selecionada
    }

    // Função que recupera a avaliação salva (se houver) no localStorage
    function getSelectedRating() {
        const savedRating = localStorage.getItem("rating"); // Tenta obter o valor da avaliação salva
        return savedRating ? parseInt(savedRating) : 0; // Retorna a avaliação salva ou 0 se não houver avaliação
    }

    // Inicializa a página com a avaliação salva, caso haja uma
    highlightStars(getSelectedRating()); // Chama a função para destacar as estrelas com base na avaliação salva
});


let currentIndex = 0;

        function moveSlide(step) {
            const slides = document.querySelectorAll('.slide');
            const totalSlides = slides.length;

            currentIndex = (currentIndex + step + totalSlides) % totalSlides;
            const newTransform = -currentIndex * 100 + '%';
            document.querySelector('.slider').style.transform = `translateX(${newTransform})`;
        }