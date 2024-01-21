# CRUD de Usuários

Este é um projeto de CRUD de usuários que permite realizar operações básicas (Create, Read, Update, Delete). É construído usando o framework Bootstrap como front e no back-end php/JavaScript com Mysql.


## Instalação

1. Clone o repositório:

    ```bash
    git clone https://github.com/igor-cavalcante/crud-main.git
    cd seu-repositorio
    ```
    
2. Configure o banco de dados:
    lembre-se de configurar o arquivo config.php caso queira usar o seu proprio banco de dados .
    ```bash
    <?php 

    define('HOST','localhost');
    define('USER','root');
    define('PASS','root');
    define('BASE','cadastro');
    
    $conn = new mysqli(HOST,USER,PASS,BASE);

    ```
## Contribuindo

Se quiser contribuir para este projeto, siga estes passos:

1. Faça um fork do projeto
2. Crie uma branch para sua feature (`git checkout -b feature/nova-feature`)
3. Faça commit das suas mudanças (`git commit -m 'Adiciona nova feature'`)
4. Faça push para a branch (`git push origin feature/nova-feature`)
5. Abra um pull request
