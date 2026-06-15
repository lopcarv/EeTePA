preco = float(input("Digite o preço do produto: "))


# Validação do preço
if preco <= 0:
	print("Preço inválido")


else:
	print(f"Preço válido: R$ {preco:.2f}")
