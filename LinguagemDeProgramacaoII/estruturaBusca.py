

# Cada item é um dicionário com nome, país e categoria

carros = [
    {"nome": "Toyota", "pais": "Japão", "categoria": "Sedan"},
    {"nome": "Ford", "pais": "EUA", "categoria": "SUV"},
    {"nome": "BMW", "pais": "Alemanha", "categoria": "Luxo"},
    {"nome": "Fiat", "pais": "Itália", "categoria": "Popular"},
    {"nome": "Honda", "pais": "Japão", "categoria": "Sedan"},
]


# 📋 2. Função para listar todos os carros
def listar_carros():
    # Percorre cada item da lista
    for carro in carros:
        # Exibe informações formatadas
        print(f"Marca: {carro['nome']}")
        print(f"País: {carro['pais']}")
        print(f"Categoria: {carro['categoria']}")
        print("-" * 30)  # separador visual


# 🔎 3. Função de busca por nome EXATO
def buscar_carro_exato(nome_busca):
    resultados = []  # lista para armazenar os encontrados

    # Percorre todos os carros
    for carro in carros:
        # Compara exatamente os nomes (ignora maiúscula/minúscula)
        if carro["nome"].lower() == nome_busca.lower():
            resultados.append(carro)

    return resultados  # retorna lista com resultados


# 🧪 Testes

print("LISTA DE CARROS:")
listar_carros()

print("\n🔎 BUSCA POR NOME EXATO:")
resultado = buscar_carro_exato("ford")

# Exibindo resultado
for c in resultado:
    print(f"Encontrado: {c['nome']} - {c['pais']} - {c['categoria']}")
