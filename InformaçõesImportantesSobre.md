Esta seção reúne detalhes adicionais que ajudam o usuário, o avaliador ou o recrutador a entender melhor o funcionamento interno da aplicação, suas rotas, seu comportamento e pontos críticos que merecem atenção.

Mesmo não sendo uma API completa, o projeto possui pontos de comunicação importantes entre frontend, backend e banco de dados, e eles estão descritos abaixo.

🔗 Rotas Importantes do Projeto

A aplicação funciona através de arquivos PHP responsáveis por processar dados, salvar informações no banco e retornar respostas em formato JSON.
Aqui estão as rotas principais:

### 1️⃣ /php/form.php

📌 Função:
Processa o envio do formulário principal da landing page.

📌 Ações realizadas:

Valida nome, telefone, e-mail e mensagem

Salva os dados na tabela leads

Registra IP e User-Agent

Envia um e-mail automático de confirmação para o usuário via PHPMailer

Retorna JSON:

Sucesso:

{ "status": "ok" }


Erro (exemplo):

{
  "status": "erro",
  "erros": ["Email inválido.", "Telefone inválido."]
}

### 2️⃣ /php/reviews.php

📌 Função:
Gerencia o sistema de avaliações dos usuários.

📌 Ações realizadas:

Insere nome, estrelas e comentário

Retorna todas as avaliações já cadastradas (ordenadas por data)

📌 Retorno esperado:

[
  {
    "nome": "João",
    "estrelas": 5,
    "comentario": "Ótimo atendimento!",
    "criado_em": "2026-02-05 19:32:12"
  }
]

### 📂 Estrutura de Pastas Importante
/assets        → JS, CSS e imagens  
/php           → Código backend (form.php, reviews.php, config.php)  
/database      → Scripts SQL para importar o banco  
/composer        → Dependências instaladas via Composer  
index.html     → Página principal (frontend)

🛠️ Configurações Sensíveis

O arquivo config.php deve ser ajustado com:

host do banco

usuário

senha

nome do banco

O PHPMailer deve ser configurado com:

servidor SMTP

porta

usuário (email)

senha de app

### 🗄️ Banco de Dados — Tabelas Utilizadas

*Tabela: leads*

Armazena todos os envios do formulário principal.

Campo	            Tipo	    Descrição

id	                INT (PK)	Identificador único

nome	            VARCHAR	    Nome do usuário

telefone	        VARCHAR	    Telefone formatado

email	            VARCHAR	    E-mail válido

ajuda	            TEXT	    Mensagem do usuário

ip	                VARCHAR	    IP do visitante

user_agent      	TEXT	    Navegador / dispositivo usado

criado_em	        TIMESTAMP	Registro de data


*Tabela: reviews*

Armazena as avaliações enviadas pelo frontend.

Campo	            Tipo	    Descrição

id	                INT (PK)	Identificador único

nome	            VARCHAR	    Nome do avaliador

estrelas	        INT	        Nota de 1 a 5

comentario	        TEXT	    Avaliação do cliente

criado_em	        TIMESTAMP	Registro da data


### 🎨 Estrutura Principal do Arquivo CSS (style.css)

O CSS foi desenvolvido de forma modular, organizado em blocos que representam seções e comportamentos específicos da página.

A estrutura geral do arquivo segue esta ordem:

1. Variáveis globais (cores e fontes)

2. Reset e ajustes universais

3. Estilos base da página

4. Componentes globais (botões, títulos, grids)

5. Layout das seções (Home, Sobre, Serviços, Projetos, FAQ, Avaliações, Contato)

6. Estilos do formulário

7. Estilos dos cartões (reviews e serviços)

8. Responsividade (breakpoints)

9. Caixa de diálogo do alerta

Essa divisão torna o CSS mais legível e fácil de editar.


*2️  Variáveis Globais*


O sistema visual utiliza variáveis no :root, permitindo alterar toda a identidade visual em segundos:

:root {
  --bg-color: #080808;
  --second-bg-color: #101010;
  --text-color: white;
  --main-color: #ea580c;
}

Principais benefícios:

Paleta centralizada

Facilita criação de temas

Manutenção mais simples

Evita cores duplicadas no arquivo


*3 Reset Global & Base da Página*

Um reset universal remove margens, padroniza fontes e garante que o layout se comporte igual em todos os navegadores:

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  scroll-behavior: smooth;
  font-family: "Poppins";
}


*4 Componentes Globais*

Incluem estilos compartilhados por vários elementos:

✔ Botões
✔ Títulos (h1, h2, h3)
✔ Containers e grids
✔ Scrollbar personalizada

Esses elementos aparecem em várias partes da aplicação e possuem estética uniforme.

*5 Estilos do Layout de Cada Seção*

O CSS também gerencia visualmente cada seção da página:

🔸 Home

Layout em grid

Animação da imagem principal

Glow com box-shadow

Botão destacado

🔸Formulário

Inputs minimalistas

Labels fixas

🔸 Sobre

Foto circular com brilho

Texto centralizado

🔸 Serviços

Cards com borda, sombra e hover

Ícones grandes e destacados

🔸 Projetos

Cards com zoom suave ao passar o mouse

Layout limpo e organizado

🔸 FAQ

Acordeão com animação max-height

Efeito de highlight quando aberto

🔸 Avaliações

Estrelas douradas

Cards limpos e legíveis


*6 Estilos do Formulário (Conectado ao PHP)*

O CSS contém personalizações específicas para:

Inputs

Labels

Textarea

Mensagens de erro

Loader “Enviando…”

Caixa de alerta (sucesso/erro)

Isso garante que a usabilidade do formulário acompanhe o comportamento do arquivo PHP (form.php).

*7 Animações*

A aplicação utiliza animações suaves, incluindo:

@keyframes float

Usada na imagem principal, cria sensação visual moderna.

Hover em botões e cards

Melhora a experiência do usuário sem exageros visuais.

*8️ Responsividade*

O CSS possui diversos breakpoints:

Breakpoint	Função

1150px	Reduz grid e reorganiza cards

1024px	Ajusta seções largas

768px	Ativa menu hamburguer, coloca colunas em uma coluna

480px	Ajusta fontes, espaçamentos e imagens

A página foi otimizada para:

Celulares (Android e iOS)

Tablets

Notebooks

Monitores Full HD


*9 Observações importantes*

Alterar --main-color muda toda a cor principal do site.

O layout só deve ser editado após entender os breakpoints.

A página usa scroll-behavior: smooth — evite remover.

O efeito de blur no header precisa de backdrop-filter, não funciona no Firefox antigo.

Campos do formulário usam ::placeholder estilizado — alterar com cuidado.

### 📌 Sobre o Script JavaScript da Aplicação 

Esta seção descreve como o arquivo JavaScript controla interações, animações, validações, envio do formulário, menu mobile e o sistema de avaliações.
Da mesma forma que o PHP e o CSS possuem estruturas claras, o JavaScript segue uma organização modular para facilitar leitura e manutenção.

⚙️ 1️⃣ Estrutura Geral do Script

O script é dividido em blocos lógicos:

1. Controle do menu mobile
2. Sistema de alertas visuais (sucesso/erro)
3. Máscara automática de telefone
4. Sistema de FAQ interativo
5. Envio assíncrono do formulário (AJAX via Fetch API)
6. Carregamento de avaliações
7. Envio de novas avaliações
8. Inicialização automática ao carregar a página


Essa organização deixa o código mais fácil de evoluir ou debugar.

*2️ Menu Mobile — abrir/fechar*

Controla o ícone de menu no modo responsivo:

```
menuIcon.classList.toggle('bx-x');
```

```
navbar.classList.toggle('active');
```

✔ O que ele faz:

Exibe o menu mobile

Troca o ícone para “X” ao abrir

Fecha o menu ao clicar novamente

*3 Sistema de Alertas Personalizados*

Funções responsáveis por exibir mensagens de erro ou sucesso abaixo do formulário:

```
function showAlert(msg) { ... }
```
```
function closeAlert() { ... }
```

✔ Usado para:

Mostrar erros de validação vindos do form.php

Exibir mensagem: “Mensagem enviada com sucesso!”

*4️ Máscara Automática de Telefone*

A formatação acontece em tempo real enquanto o usuário digita:

(XX) XXXXX-XXXX

O script:

Remove qualquer caractere não numérico

Reaplica o padrão brasileiro

Garante consistência antes do envio

*5️ FAQ Interativo*

O clique abre/fecha a resposta:

item.classList.toggle("active");

✔ Resultado:

O texto se expande suavemente

Apenas a pergunta clicada abre

Layout limpo e moderno

*6️ Envio Assíncrono do Formulário (AJAX)*

Este é o núcleo da comunicação com o backend:

fetch("php/form.php", { method: "POST", body: formData })

✔ Funções importantes:

Impede o recarregamento da página

Envia os dados para o PHP

Recebe respostas JSON (status: erro ou status: ok)

Exibe alertas correspondentes

Reseta o formulário após sucesso

✔ Integração direta com:

php/form.php

Funções de validação

PHPMailer

*7️ Carregamento das Avaliações (Reviews)*

Ao abrir a página, o JavaScript busca automaticamente os comentários:

```
fetch("php/reviews.php")
```

E renderiza dinamicamente:

```
<div class="review-card">...</div>
```

✔ O que aparece:

Nome

Quantidade de estrelas

Comentário

Tudo vindo diretamente do banco de dados.

*8️ Envio de Avaliações*

O formulário de reviews também é assíncrono:

```
fetch("php/reviews.php", { method: "POST", body: formData })
```

✔ Comportamento:

Envia o comentário

Salva no banco via reviews.php

Atualiza a lista em tempo real

Reseta o formulário automaticamente

*9️ Inicialização Automática*

Assim que a página carrega:

```
document.addEventListener("DOMContentLoaded", () => {
    carregarReviews();
});
```

Ou seja:

✔ carregam as avaliações
✔ a página inicia totalmente funcional

*10 Observações Importantes*

A URL dos fetchs deve sempre apontar para a pasta correta (php/form.php).

O script depende dos IDs e classes exatas do HTML.

Caso o servidor PHP esteja fora do XAMPP, é preciso ajustar os caminhos.

O navegador deve permitir requisições locais (alguns bloqueiam se abrir via arquivo).

Se o MySQL estiver offline, o script funcionará mas não carregará reviews.