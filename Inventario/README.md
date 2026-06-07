# Inventário
Sistema para aprendizado no curso de Técnico em Informática – EETEPA
Professor Luis Carvalho

Projeto acadêmico desenvolvido em PHP com MySQL, voltado para o aprendizado de
controle de estoque, autenticação de usuários e organização de um sistema web
utilizando boas práticas básicas de programação.

---

## Descrição do Projeto

O Sistema de Inventário permite o cadastro de produtos, controle de entradas e
saídas de estoque e visualização das informações por meio de uma interface web.
O acesso ao sistema é protegido por login e sessão.

Este projeto faz parte do curso de Técnico em Informática e foi desenvolvido com
versionamento desde o início utilizando Git e GitHub.

---

## Funcionalidades

- Login de usuários
- Controle de sessão
- Dashboard protegido
- Cadastro de produtos
- Listagem de produtos
- Registro de movimentações de estoque (entrada e saída)
- Controle automático do estoque
- Logout
- API REST para consulta de estoque

---

## Tecnologias Utilizadas

- PHP
- MySQL
- HTML
- CSS
- PDO
- Git
- GitHub

---

## Estrutura do Projeto

📂 Estrutura do Projeto: Inventário Inteligente
Inventario/
├── api/                        # Camada de Integração (API REST)
│   └── estoque.php             # Endpoint JSON para consumo pelo Python [1, 3]
├── classes/                    # Camada Model (Regras de Negócio)
│   ├── Produto.php             # Classe para CRUD e lógica de produtos [4, 5]
│   ├── Usuario.php             # Classe para gestão de usuários e senha [4, 6]
│   └── Movimentacao.php        # Classe para logs de entrada e saída [4, 6]
├── config/                     # Configurações Globais
│   └── conexao.php             # Conexão centralizada usando PDO [1, 7]
├── database/                   # Scripts de Banco de Dados (MySQL)
│   ├── schema.sql              # Estrutura completa (DDL) das tabelas [1, 8]
│   └── sementes.sql            # Dados de exemplo (DML) para testes [1, 9]
├── public/                     # Arquivos Estáticos (Front-End)
│   └── css/
│       └── style.css           # Estilização personalizada do sistema [1, 10]
├── python/                     # Automação (Linguagem de Programação II)
│   ├── main.py                 # Orquestrador do fluxo de automação [1, 11]
│   ├── api_client.py           # Cliente para consumo da API PHP [1, 12]
│   ├── produto.py              # Entidade de domínio em Python (POO) [1, 13]
│   └── relatorio.py            # Lógica de geração de saídas (CSV/TXT) [1, 14]
├── relatorios/                 # Destino dos arquivos gerados pelo Python
│   └── relatorio_estoque.csv   # Relatório exportado em formato CSV [1, 15]
├── views/                      # Camada View (Interface HTML/PHP)
│   ├── layout_header.php       # Cabeçalho padrão com menu [2, 6]
│   ├── layout_footer.php       # Rodapé padrão com scripts [2, 6]
│   ├── login.php               # Tela de acesso ao sistema [4, 16]
│   ├── dashboard.php           # Painel de indicadores e status [1, 6]
│   ├── produtos_lista.php      # Listagem de itens em estoque [4, 17]
│   ├── produto_form.php        # Formulário de cadastro e edição [4, 6]
│   └── movimentacao_form.php   # Registro de entrada/saída de itens [6]
├── index.php                   # Controlador de entrada / Redirecionamento [4, 6]
├── produtos.php                # Controlador principal de produtos [4, 18]
└── README.md                   # Documentação do projeto e instruções [1, 19]

