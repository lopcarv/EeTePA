-- Exercício 1 – Inserir cliente

INSERT INTO clientes (nome, email)
VALUES ('Lucas Mendes', 'lucas@email.com');


-- Exercício 2 – Inserir produto
INSERT INTO produtos (id_categoria, nome, preco, estoque)
VALUES (1, 'Webcam HD', 150.00, 30);

-- Exercício 3 – Atualizar estoque
UPDATE produtos
SET estoque = 50
WHERE id_produto = 10;

-- Exercício 4 – Atualizar preço
UPDATE produtos
SET preco = 450.00
WHERE id_produto = 5;

--Exercício 5 – Atualizar múltiplos registros

UPDATE produtos
SET estoque = 20
WHERE estoque < 10;


--Exercício 6 – Atualizar com condição de texto
UPDATE produtos
SET preco = preco * 1.10
WHERE nome LIKE '%Notebook%';


