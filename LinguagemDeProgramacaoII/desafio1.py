# Leitura dos dados de estoque
estoque_atual = int(input("Digite o estoque atual: "))
estoque_minimo = int(input("Digite o estoque mínimo: "))


# Verificação da situação do produto
if estoque_atual < estoque_minimo:
	print("CRÍTICO")
else:
	print("OK")
