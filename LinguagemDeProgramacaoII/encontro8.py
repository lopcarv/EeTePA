# Leitura da quantidade em estoque
estoque = int(input("Digite a quantidade em estoque: "))


# Verificação da situação do estoque
if estoque == 0:
	print("Produto esgotado")


elif estoque < 10:
	print("Estoque baixo")


else:
	print("Estoque normal")
