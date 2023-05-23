# PHP - Criptografia de Senha
---
Exemplo para registro de senha criptografada no banco de dados.
No exemplo em questão, para criptografar a senha digitada no formulário é usada a função "password_hash" com o parâmetro PASSWORD_DEFAULT.
E para verificar a senha no banco de dados, chama a função "password_verify".

Nesse exemplo, você pode parar de uma vez por todas de usar "MD5" para criptografar suas senhas 😆
