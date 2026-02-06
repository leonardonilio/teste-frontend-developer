# Como Executar 
## 1. Pré-requisitos

Antes de iniciar, certifique-se de ter:

### ✔ XAMPP instalado

Download:
https://www.apachefriends.org/pt_br/download.html

### ✔ Composer instalado

Download:
https://getcomposer.org/download/

Durante a instalação, marque a opção:
“Add to PATH”

## ✔ PHP 7.4+

(O XAMPP já acompanha)

## 📂 2. Coloque o projeto no htdocs

Copie a pasta do projeto para:
```
C:\xampp\htdocs\TESTE-FRONTEND-DEVELOPER\
```

--Exemplo de estrutura atual:

TESTE-FRONTEND-DEVELOPER/
 ├ assents/
 ├ composer/
 ├ database/
 ├ img/
 ├ php/
 │   ├ form.php
 │   ├ reviews.php
 ├ index.html

## 📦 3. Instalar dependências do Composer

Mesmo que a pasta vendor/ já esteja no projeto, é recomendado rodar o Composer para garantir que tudo esteja atualizado.

-**👉 1. Abra o CMD dentro da pasta composer (onde está o composer.json):**

```
cd C:\xampp\htdocs\TESTE-FRONTEND-DEVELOPER\composer
```

-**👉 2. Execute o comando:*

```
composer install
```

Se a pasta vendor/ já existir, você pode usar:

```
composer dump-autoload
```

Se aparecer algo como:

```
Generating optimized autoload files
```

-**✔ Tudo certo, as dependências foram carregadas.**

-- No seu PHP, o importe do autoload deve ser desta forma:

```
require_once __DIR__ . '/../composer/vendor/autoload.php';
```

### Reinstalar o PHPMailer (caso algo dê errado)

Se por algum motivo a pasta vendor/ ou o autoload estiverem corrompidos, você pode reinstalar o PHPMailer manualmente.

-**👉 1. Acesse a pasta do Composer dentro do projeto:**

```
cd C:\xampp\htdocs\TESTE-FRONTEND-DEVELOPER\composer
```

-**👉 2. Remova (opcional) a pasta vendor antiga:**

```
rmdir /s /q vendor
```

(ou delete manualmente)

-**👉 3. Execute o comando de reinstalação:**

```
composer require phpmailer/phpmailer
```

Esse comando vai:

**✔ criar novamente o vendor/**
**✔ baixar a versão atual do PHPMailer**
**✔ atualizar o composer.json e composer.lock**
**✔ gerar um novo autoload**

Depois disso, verifique se foi gerado:

```
composer/vendor/autoload.php
```

-**👉 4. Confirme o autoload no seu arquivo PHP:**

```
require __DIR__ . '/../composer/vendor/autoload.php';
```


## 🗄 4. Configure o Banco de Dados

Abra o XAMPP

Clique em Start no Apache

Clique em Start no MySQL

Acesse o phpMyAdmin:

👉 "http://localhost/phpmyadmin"

*Crie o banco de dados*

No phpMyAdmin:

Clique em Databases

No campo Create database, escreva:

```
fullstack_lab
```

Escolha a collation:

```
utf8mb4_general_ci
```

Clique em Create

*Importe o arquivo .sql*

Com o banco criado, agora:

Clique em fullstack_lab na lateral esquerda

Vá até a aba Importar

Clique em Escolher arquivo

Selecione:

```
/database/fullstack_lab.sql
```

Clique em Importar

Se aparecer a mensagem:

Importação concluída com sucesso


*➡️ O banco está pronto e funcionando.*



## 🔧 5. Crie e  configure o arquivo php/config.php

Dentro da pasta php/, crie um arquivo nomeado de config.php e deixe ele assim:

```
<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "fullstack_lab";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);

}
try {
    $pdo = new PDO("mysql:host=$host;dbname=$database;charset=utf8", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("PDO Connection failed: " . $e->getMessage());
}
?>
```

Se você usa senha no MySQL, altere aqui.

--Exemplo de estrutura final:

TESTE-FRONTEND-DEVELOPER/

 ├ assents/
 
 ├ composer/
 
 ├ database/
 
 ├ img/
 
 ├ php/
 
 │   ├ config.php //recém adicionado
 
 │   ├ form.php
 
 │   ├ reviews.php
 
 ├ index.html


## 📨 6. Configurar o envio de e-mail (PHPMailer)

No arquivo php/form.php:

✔ Você precisa adicionar um email valido e sua senha de app Gmail

```
$mail->Username   = 'seu-email@gmail.com';
$mail->Password   = 'senha-de-app';
$mail->setFrom('seu-email@gmail.com', 'Seu Nome');
```

Lembrando que NÃO funciona com senha normal.

Tem que criar aqui:

🔐 https://myaccount.google.com

*Passo a Passo*

Vá em Segurança

Ative "verificação em 2 etapas"

Procure por "Senhas de app" na seção de login(pode ser necessário buscar no campo de pesquisa da conta se não encontrar imediatamente)

Crie uma senha chamada "Servidor PHP"

Copie a senha gerada (16 caracteres) 


## ▶ 7. Acessar o projeto no navegador

Abra:

👉 http://localhost/landingpage-teste/

Se a página inicial aparecer → tudo funcionando.


## 🧪 8. Testar o formulário

1-Preencha o formulário principal

2-Clique em Enviar

3-Se tudo estiver OK vo, você receberá:


{ "status": "ok" }


E:

. *✔ O dado será salvo no banco*

. *✔ O usuário receberá um e-mail automático via PHPMailer*

. *✔ O IP e o user_agent serão registrados*


## 🧪 9. Testar o sistema de avaliações

1 — Preencha o formulário de avaliação com:
• Nome
• Quantidade de estrelas
• Comentário

2 — Clique em Enviar Avaliação

3 — Se tudo estiver correto, o backend retornará uma lista atualizada em JSON, por exemplo:

[
    {
        "id": "1",
        "nome": "Leonardo",
        "estrelas": "5",
        "comentario": "Excelente serviço!",
        "criado_em": "2026-02-06 12:45:10"
    },
    ...
]


E:

- A avaliação será salva no banco de dados
- A listagem de avaliações será atualizada automaticamente na interface (AJAX)
- O usuário verá sua avaliação imediatamente no site

## 🎉 Concluído!

Você agora tem o projeto rodando completamente no XAMPP, com:

- Backend PHP
- Banco de dados MySQL
- PHPMailer funcionando via Composer
- Formulário salvando + enviando e-mail
- Autoload corretamente configurado.
