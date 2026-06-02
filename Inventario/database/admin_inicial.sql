-- Usuário administrador inicial
-- Senha definida via password_hash no PHP

INSERT INTO usuarios (nome, email, senha)
VALUES (
    'Administrador',
    'admin@inventario.local',
    '$2y$10$g92DQ8gayMMXxZIla2fE6OjzNIYHuKwLeNFo7uKRbP0y0vTdKG6pS
'
);
