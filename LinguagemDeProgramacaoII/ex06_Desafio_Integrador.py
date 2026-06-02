# Entrada dos dados do produto
nome = input("Nome do produto: ")
preco = float(input("Preço do produto: "))
quantidade = int(input("Quantidade em estoque: "))

# Cálculo do valor total em estoque
total = preco * quantidade

# Exibição do resumo
print("\n=== RESUMO DO PRODUTO ===")
print("Produto:", nome)
print("Preço unitário: R$", preco)
print("Quantidade:", quantidade)
print("Valor total em estoque: R$", total)