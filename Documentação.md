# 📌 FullStack Lab — Documentação do Projeto
## 📄 Sobre o Projeto

O FullStack Lab é um site institucional moderno, responsivo e totalmente funcional, criado para apresentar serviços de desenvolvimento web, UI/UX, projetos, perguntas frequentes e avaliações de clientes.
Além do design profissional, o projeto possui formulário integrado ao banco de dados, envio automático de e-mail com PHPMailer e um sistema dinâmico de avaliações.

Ele foi desenvolvido como um projeto completo Full Stack, reunindo frontend, backend em PHP, integração com MySQL e comunicação assíncrona via JavaScript (Fetch API)

*Diagrama de Sequencia.![alt text](<./img/Lead Capture MySQL Pipeline-2026-02-06-183038.png>)

## Tecnologias Utilizadas

Abaixo estão listadas as tecnologias, linguagens e ferramentas utilizadas no desenvolvimento deste projeto. Cada item inclui uma breve descrição para facilitar o entendimento de recrutadores e avaliadores que não possuem conhecimento técnico aprofundado.

### Frontend

* [HTML5](https://developer.mozilla.org/pt-BR/docs/Web/HTML)

Utilizado para estruturar toda a página da landing page, definindo seções, formulários, textos e elementos visuais.

* [CSS3](https://developer.mozilla.org/pt-BR/docs/Web/CSS)

Responsável pela estilização do layout da página, cores, tipografias, responsividade e organização do design visual.

* [JavaScript](https://developer.mozilla.org/pt-BR/docs/Web/JavaScript)

Utilizado para controlar interações no frontend, como animações, abertura de menus, eventos do FAQ e o envio assíncrono do formulário via Fetch API e sistema de avaliações (envio e carregamento em tempo real).

* [Boxicons](https://boxicons.com/)

Biblioteca de ícones usada para complementar visualmente a interface (ícones dos benefícios e áreas informativas).

### Backend

* [PHP](https://www.php.net/)

Linguagem usada para processar o formulário enviado pelo usuário, realizar validações, gerenciar respostas, gerenciar o sistema de avaliações (inserção e retorno de reviews) e integrar com o banco de dados.

* [PHPMailer](https://github.com/PHPMailer/PHPMailer)

Biblioteca utilizada para envio de e-mails de forma segura e estruturada após o envio do formulário.

* [Composer](https://getcomposer.org/)

Gerenciador de dependências PHP utilizado para instalar e organizar bibliotecas como o PHPMailer no projeto.

### Banco de Dados

* [MySQL](https://www.mysql.com/)

Sistema de banco de dados utilizado para armazenar os registros enviados pelo formulário da landing page (nome, e-mail, telefone, descrição e metadados) e o sistema de avaliações (nome, estrelas, comentário, data).

### Ferramentas e Recursos Adicionais

***Responsividade Mobile

Implementada com técnicas de CSS para tornar a página adaptável a dispositivos móveis, garantindo boa visualização em qualquer resolução.


***Fetch API

Utilizada para enviar os dados do formulário ao backend sem recarregar a página, permitindo uma experiência mais fluida.


***Máscara de Telefone em JS

Implementada manualmente usando regex para formatação automática durante a digitação.


***Alertas Personalizados

Criados com HTML + CSS + JS para mostrar mensagens de sucesso/erro.


## 📦 Dependências e Versões Necessárias

Para executar o projeto corretamente, é necessário ter instalado no ambiente de desenvolvimento as seguintes dependências e versões:

### 🔧 Linguagens e Ferramentas

- **HTML5** – Estrutura base da interface

- **CSS3** – Estilização

- **JavaScript (ES6+)** – Funcionalidades da Landing Page

### 🐘 PHP

- **PHP – Versão 8.1+**  

  Necessário para processar o formulário e comunicação com o banco.

- **📨 PHPMailer (para envio de e-mails)**

Instalado via Composer: - **PHPMailer – Versão 6.9.1**

- **📦 Composer**
Gerenciador de dependências do PHP:
- **Composer – Versão 2.7+**

-**🗄️ Banco de Dados**

- **MySQL – Versão 8.0+**  
  Usado para armazenar os dados do formulário.

**🚀 (Opcional) Executar o projeto via Docker**
Caso utilize Docker:
- **Docker – Versão 25+**
- **Docker Compose – Versão 2.24+**

- **🖥 Servidor Local (caso não use Docker)**

- **XAMPP** ou **WAMP**  
  *Versão usada no desenvolvimento:* XAMPP 8.2.12

---

### ✔ Pré-requisitos gerais
Antes de rodar o projeto, garanta que:

1. O servidor local (XAMPP/WAMP) está ativo  

2. O MySQL está rodando  

3. O PHP está configurado  

4. O Composer está no PATH do Windows  

5. O PHPMailer já foi instalado com: composer require phpmailer/phpmailer



## ▶ Como Rodar o Projeto

Para não deixar este README muito extenso, todo o passo a passo completo de instalação, configuração e execução do projeto foi separado em um arquivo dedicado.

📄 Guia completo de execução:
🔗[Como executar localmente](./ComoRodarLocal.md)

Esse arquivo explica detalhadamente como instalar dependências, configurar o PHPMailer, importar o banco de dados e rodar tudo no XAMPP — passo a passo, desde o zero.



## ⚠️ Possíveis problemas enfrentados

Durante o desenvolvimento e execução do projeto, alguns problemas comuns podem ocorrer. Abaixo estão os mais frequentes e como resolvê-los de forma simples e objetiva.

*Problema 1* — Composer não é reconhecido no terminal

Ao tentar rodar comandos como:

```
composer install
```

ou

```
composer require phpmailer/phpmailer
```

aparece o erro:

```
'composer' não é reconhecido como um comando interno...
```

Como solucionar:
- Adicione o caminho do Composer ao PATH do Windows:

```
C:\composer\composer.bat
```

Depois reinicie o terminal.


*Problema 2* — PHPMailer não funciona (erro de autoload)

Ao enviar o formulário aparece algo como:

```
Fatal error: Uncaught Error: Class "PHPMailer\PHPMailer\PHPMailer" not found
```

Como solucionar:
 Confirme se o autoload está no caminho correto:

```
require __DIR__ . '/../vendor/autoload.php';
```

✔ Execute novamente:

```
composer dump-autoload
```

✔ Se ainda falhar:

```
composer require phpmailer/phpmailer
```

*Problema* 3 — E-mail não envia usando Gmail

O formulário salva no banco, mas o e-mail não chega, e o log mostra erros como:

```
SMTP conne
ct() failed
```

ou

```
Invalid credentials
```

Como solucionar:
 
 Ative Senha de App na conta Google

 No PHPMailer, use porta 587 + TLS

 Confirme usuário/senha no código


*Problema* 4 — Banco de dados não conecta

O console retorna:

Connection failed: Access denied for user...


ou a página fica “carregando” e não responde.

Como solucionar:
- Verifique config.php:

Host correto: localhost

Usuário padrão no XAMPP: root

Senha vazia
 Conferir se o MySQL está ativado no XAMPP
 Importar o arquivo .sql antes de usar

*Problema 5* — Avaliações não aparecem na tela

O envio funciona, mas a lista não atualiza.

Como solucionar:

- Verifique se o JS está chamando o endpoint correto (reviews.php)

- Confirme se a tabela reviews existe no MySQL

- Cheque no navegador (F12 → Network) se o retorno está vindo em JSON

- Limpe o cache: Ctrl + F5

*Problema 6* — Formulário sempre retorna erro de validação

Mesmo com tudo preenchido, o backend devolve:

status: "erro"


Como solucionar:

- Verifique se o nome dos campos do formulário HTML corresponde ao $_POST[] do PHP

- Confirme que não há espaços ou acentos inesperados

- Use o DevTools → Network para ver exatamente o que está sendo enviado

Problema 7 — Página não carrega o PHP (download automático do arquivo)

Quando abre o formulário, o navegador baixa o arquivo .php ao invés de executar.

Como solucionar:

 O servidor Apache não está rodando
 A pasta não está dentro do htdocs
 O arquivo não está acessando pelo URL correto

Exemplo certo:

http://localhost/seu-projeto/index.html

## 📌 Informações Importantes Sobre a Aplicação 📌

Para deixar essa documentação mais clara, a explicação completa sobre rotas PHP, estrutura de pastas, tabelas do banco, configuração do backend, CSS e JavaScript foi movida para um arquivo dedicado.

📄 **Acesse o arquivo completo:**  
👉 [Clique aqui para ver as Informações Importantes da Aplicação](./InformaçõesImportantesSobre.md)



## 🧭 Considerações Finais

O FullStack Lab foi desenvolvido com a proposta de ser um projeto completo, moderno e didático, reunindo:

✔ Frontend responsivo

✔ Backend estruturado

✔ Banco de dados relacional

✔ Integração com PHP + MySQL

✔ Envio de e-mail via PHPMailer

✔ Sistema de avaliações dinâmico

✔ Documentação profissional

O objetivo é demonstrar domínio das tecnologias essenciais de um desenvolvedor Full Stack iniciante/intermediário e oferecer uma base sólida para evoluções futuras.

### 🛠️ Manutenção e Boas Práticas

Algumas práticas recomendadas para manter o projeto funcionando corretamente:

✔ Atualização de dependências

Execute periodicamente:

```
composer update
```

Mantenha PHP e MySQL atualizados

✔ Segurança

Sempre use Senha de App

✔ Organização

Mantenha a estrutura de pastas proposta

Evite colocar arquivos PHP fora da pasta /php

Versione alterações importantes com mensagens claras no GitHub
