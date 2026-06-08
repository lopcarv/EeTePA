# 1. Função que calcula o dobro de um número
def calcular_dobro(numero):
    return numero * 2

# 2. Função que recebe a idade e informa se é maior de idade
def verificar_maioridade(idade):
    if idade >= 18:
        return "Maior de idade"
    else:
        return "Menor de idade"

# 3. Função que recebe um número e retorna seu quadrado
def calcular_quadrado(numero):
    return numero ** 2


# --- Exemplos de uso para você testar ---
print("Dobro de 7:", calcular_dobro(7))
print("Resultado para 20 anos:", verificar_maioridade(20))
print("Quadrado de 5:", calcular_quadrado(5))