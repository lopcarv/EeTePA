produtos = [
    {"nome": "Notebook", "preco": 3500, "categoria": "Informática"},
    {"nome": "Mouse", "preco": 50, "categoria": "Informática"},
    {"nome": "Teclado", "preco": 120, "categoria": "Informática"},
    {"nome": "Celular", "preco": 2000, "categoria": "Eletrônicos"},
    {"nome": "Fone", "preco": 80, "categoria": "Eletrônicos"},
]


def buscar_produto(nome_busca):
    resultados = []

    for produto in produtos:
        if nome_busca.lower() in produto["nome"].lower():
            resultados.append(produto)

    return resultados


# Teste
print(buscar_produto("note"))
