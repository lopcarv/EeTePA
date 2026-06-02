# Entrada de dados
nome = input("Nome do produto: ")
preco = float(input("Preço do produto: "))
quantidade = int(input("Quantidade em estoque: "))

# Cálculo
total = preco * quantidade

# Exibição com formatação monetária
print("\n=== RESUMO DO PRODUTO ===")
print(f"Produto: {nome}")
print(f"Preço unitário: R$ {preco:.2f}")
print(f"Quantidade: {quantidade}")
print(f"Valor total em estoque: R$ {total:.2f}")
