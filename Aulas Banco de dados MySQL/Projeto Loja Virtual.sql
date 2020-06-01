/*
    Projeto Loja Virtual
    Criar uma estrutura de dados que suporte uma aplicação com a proposta
    de vendas de produtos pela internet.
    O foco será somente no desenvolvimento da estrutura do banco de dados.
/*

/*** AULA 412 - RELACIONAMENTO UM PARA UM ***/

    /* Novo banco de dados */
    CREATE DATABASE db_loja_virtual;

    /* Nova tabela: tb_produtos */
    CREATE TABLE tb_produtos(
	id_produto INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    produto VARCHAR(200) NOT NULL,
    valor FLOAT(8,2) NOT NULL );

    /* Nova tabela: tb_descricoes_tecnicas */
    CREATE TABLE tb_descricoes_tecnicas(
	id_descricao_tecnica INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    id_produto INT NOT NULL,
    descricao_tecnica TEXT NOT NULL,
    FOREIGN KEY(id_produto) REFERENCES tb_produtos(id_produto) );

/*** AULA 413 - RELACIONAMENTO UM PARA UM (populando tabelas) ***/

    /* Produtos inseridos na tabela tb_produtos */
    INSERT INTO tb_produtos(produto, valor) VALUES ('Notebook Dell Inspiron Ultrafino Intel Core i7, 16GB RAM e 240GB SSD', 3500.00);

    INSERT INTO tb_produtos(produto, valor) VALUES ('Smart TV LED 40" Samsung Full HD 2 HDMI 1 USB Wi-Fi Integrado', 1475.54);

    INSERT INTO tb_produtos(produto, valor) VALUES ('Smartphone LG K10 Dual Chip Android 7.0 4G Wi-Fi Câmera de 13MP', 629.99);

    /* Descrições inseridos na tabela tb_descricoes_tecnicas */
    INSERT INTO tb_descricoes_tecnicas(id_produto, descricao_tecnica) VALUES (1, 'O novo Inspiron Dell oferece um design elegante e tela infinita que amplia seus sentidos, mantendo a sofisticação e medidas compactas...');

    INSERT INTO tb_descricoes_tecnicas(id_produto, descricao_tecnica) VALUES (2, 'A smart TV da Samsung possui tela de 40" e oferece resolução Full HD, imagens duas vezes melhores que TVs HDs padrão...');

    INSERT INTO tb_descricoes_tecnicas(id_produto, descricao_tecnica) VALUES (3, 'Saia da mesmice. O smartphone LG está mais divertido, rápido, fácil, cheio de selfies e com tela HD de incríveis 5,3"...');

/*** AULA 414 - RELACIONAMENTO UM PARA MUITOS ***/

    /* Nova tabela: tb_imagens */
    CREATE TABLE tb_imagens(
	id_imagem INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    id_produto INT NOT NULL,
    url_imagem VARCHAR(200) NOT NULL,
    FOREIGN KEY(id_produto) REFERENCES tb_produtos(id_produto) );

    /* Imagens inseridas na tabela tb_imagens */
    INSERT INTO tb_imagens (id_produto, url_imagem)
    VALUES (1, 'notebook_1.jpg'), (1, 'notebook_2.jpg'), (1, 'notebook_3.jpg');
    
    INSERT INTO tb_imagens (id_produto, url_imagem)
    VALUES (2, 'smartv_1.jpg'), (2, 'smartv_2.jpg');

    INSERT INTO tb_imagens (id_produto, url_imagem)
    VALUES (3, 'smartphone_1.jpg');

/*** AULA 415 - RELACIONAMENTO MUITOS PARA MUITOS ***/

    /* Nova tabela: tb_clientes */
    CREATE TABLE tb_clientes(
 	id_cliente INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(200) NOT NULL,
    idade INT NOT NULL );

    /* Nova tabela: tb_pedidos */
    CREATE TABLE tb_pedidos(
	id_pedido INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    id_cliente INT NOT NULL,
    data_hora DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY(id_cliente) REFERENCES tb_clientes(id_cliente) );

    /* Nova tabela: tb_pedidos_produtos */
    CREATE TABLE tb_pedidos_produtos(
	id_pedido INT NOT NULL,
    id_produto INT NOT NULL,
    FOREIGN KEY(id_pedido) REFERENCES tb_pedidos(id_pedido),
    FOREIGN KEY(id_produto) REFERENCES tb_produtos(id_produto) );

/*** AULA 416 - RELACIONAMENTO MUITOS PARA MUITOS (populando tabelas) ***/

    /* Clientes inseridos na tabela tb_clientes */
    INSERT INTO tb_clientes (nome, idade)
    VALUES ('João', 35), ('Maria', 25);

    /* Pedidos inseridos nas tabelas tb_pedidos e relacionamentos estabelecidos */
    INSERT INTO tb_pedidos (id_cliente) VALUES (1);
    INSERT INTO tb_pedidos_produtos (id_pedido, id_produto)
    VALUES (1, 1), (1, 2);

    INSERT INTO tb_pedidos (id_cliente) VALUES (2);
    INSERT INTO tb_pedidos_produtos (id_pedido, id_produto)
    VALUES (2, 3);

    INSERT INTO tb_pedidos (id_cliente) VALUES (1);
    INSERT INTO tb_pedidos_produtos (id_pedido, id_produto)
    VALUES (3, 3);

/*** EXERCÍCIOS ***/

    /* Selecione todos os clientes com idade igual ou superior a 29.
        Os registros devem ser ordenados de forma ascendente pela idade */
    SELECT * FROM tb_clientes
    WHERE idade >= 29
    ORDER BY idade ASC;

    /*  Utilize instruções do subconjunto DDL do SQL para realizar a inclusão
        das colunas abaixo na tabela tb_clientes:
        - Adicine a coluna “sexo” do tipo string com tamanho fixo de 1 caractere.
        Coluna não pode ser vazia na inserção.
        - Adicione a coluna “endereço” do tipo string com tamanho variado de até 150 caracteres.
        Coluna pode ser vazia na inserção. */
    ALTER TABLE tb_clientes ADD COLUMN sexo CHAR(1) NOT NULL;
    ALTER TABLE tb_clientes ADD COLUMN endereco VARCHAR(150);

    /*  Efetue um update em tb_clientes dos registros de id_cliente igual a 1, 2, 3, 6 e 7,
        atualizando o sexo para “M”. Utilize a instrução IN para este fim. */
    UPDATE tb_clientes
    SET sexo = 'M'
    WHERE id_cliente IN(1,2,3,6,7);

    /*  Efetue um update em tb_clientes dos registros de id_cliente igual a 4, 5, 8, 9 e 10,
    atualizando o sexo para “F”. Como desafio, faça este update utilizando dois between’s no filtro. */
    UPDATE tb_clientes
    SET sexo = 'F'
    WHERE (id_cliente BETWEEN 4 AND 5) OR (id_cliente BETWEEN 8 AND 10);

    /* Selecione todos os registros de tb_clientes que possuam relação com tb_pedidos e com tb_pedidos_produtos (apenas registros com relacionamentos entre si). Recupere também os detalhes dos produtos da
    tabela tb_produtos. A consulta deve retornar de tb_clientes as colunas “id_cliente”, “nome”, “idade” e
    de tb_produtos deve ser retornado as colunas “produto” e “valor”. */
    SELECT c.id_cliente, c.nome, c.idade, pr.produto, pr.valor 
    FROM tb_clientes AS c
    INNER JOIN tb_pedidos AS pe ON(c.id_cliente = pe.id_cliente) 
    INNER JOIN tb_pedidos_produtos AS pp ON(pe.id_pedido = pp.id_pedido)
    INNER JOIN tb_produtos AS pr ON(pp.id_produto = pr.id_produto)


    