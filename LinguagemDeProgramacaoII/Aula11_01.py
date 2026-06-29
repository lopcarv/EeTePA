carros = [
    {"nome": "Toyota", "pais": "Japão", "preco": 90000},
    {"nome": "Ford", "pais": "EUA", "preco": 120000},
    {"nome": "BMW", "pais": "Alemanha", "preco": 250000},
    {"nome": "Fiat", "pais": "Itália", "preco": 70000},
    {"nome": "Honda", "pais": "Japão", "preco": 110000},
]

def filtrar_acima(valor):
    resultados = []

    # Percorre todos os carros
    for carro in carros:
        # Verifica se o preço é maior que o valor informado
        if carro["preco"] > valor:
            resultados.append(carro)

    return resultados


# Teste
print(" Carros acima de 100 mil:")
for c in filtrar_acima(100000):
    print(c)

def filtrar_intervalo(preco_min, preco_max):
    resultados = []

    for carro in carros:
        # Verifica se o preço está dentro do intervalo
        if preco_min <= carro["preco"] <= preco_max:
            resultados.append(carro)

    return resultados


# Teste
print("\n Carros entre 80 mil e 150 mil:")
for c in filtrar_intervalo(80000, 150000):
    print(c)

def contar_por_pais():
    contagem = {}

    # Percorre os carros
    for carro in carros:
        pais = carro["pais"]

        # Se ainda não existe no dicionário
        if pais not in contagem:
            contagem[pais] = 1
        else:
            contagem[pais] += 1

    return contagem


# Teste
print("\n Quantidade por país:")
resultado = contar_por_pais()

for pais, total in resultado.items():
    print(f"{pais}: {total}")