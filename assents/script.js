//Faz aparecer e desaparecer o icone de menu
let menuIcon = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar');
menuIcon.onclick = () => {
  menuIcon.classList.toggle('bx-x');
  navbar.classList.toggle('active');
}
//Abre a caixa de dialogo para retornar o que aconteceu ao finalizar o formulario
function showAlert(msg) {
    const box = document.getElementById("alertBox");
    const text = document.getElementById("alertMessage");

    text.textContent = msg;
    box.classList.remove("hidden");
}

function closeAlert() {
    document.getElementById("alertBox").classList.add("hidden");
}

//Formata o input do telefone
const telefoneInput = document.querySelectorAll("#telefone");

telefoneInput.forEach((input) => {
  input.addEventListener("input", (e) => {
    let value = e.target.value.replace(/\D/g, "");

    value = value.replace(/^(\d{2})(\d)/, "($1) $2");
    value = value.replace(/(\d{5})(\d)/, "$1-$2");
    value = value.replace(/(-\d{4})\d+?$/, "$1");

    e.target.value = value;
  });
});



//Caixas de textos do faq
const faqItems = document.querySelectorAll(".faq-item");

faqItems.forEach((item) => {
    item.querySelector(".faq-question").addEventListener("click", () => {
        item.classList.toggle("active");
    });
});

//intermediário entre o index e o processa.php,
document.getElementById("form-home").addEventListener("submit", async function (e) {
    e.preventDefault(); // impede recarregamento

    let retorno = document.getElementById("retorno-form");

    const formData = new FormData(this);

    try {
        const req = await fetch("php/form.php", {
            method: "POST",
            body: formData
        });

        const res = await req.json();

        if (res.status === "erro") {
            showAlert(res.erros.join("\n"));

        } else {
showAlert("Mensagem enviada com sucesso! ✔");
this.reset();

        }

    } catch (error) {
showAlert("Erro ao enviar. Tente novamente.");

    }
});
document.addEventListener("DOMContentLoaded", () => {
    carregarReviews();
});


//carrega as avaliações
function carregarReviews() {
    fetch("php/reviews.php")
        .then(res => res.json())
        .then(data => {
            const container = document.getElementById("reviewsList");
            container.innerHTML = "";

            data.forEach(r => {
                container.innerHTML += `
                <div class="review-card">
                    <div class="review-top">
                        <span class="review-name">${r.nome}</span>
                        <span class="stars">${"⭐".repeat(r.estrelas)}</span>
                    </div>
                    <p>${r.comentario}</p>
                </div>
                `;
            });
        })
        .catch(err => console.error(err));
}

document.getElementById("reviewForm").addEventListener("submit", function(e) {
    e.preventDefault();

    const formData = new FormData(this);

    fetch("php/reviews.php", {
        method: "POST",
        body: formData
    })
    .then(() => {
        this.reset();
        carregarReviews();
    })
    .catch(err => console.error(err));
});
