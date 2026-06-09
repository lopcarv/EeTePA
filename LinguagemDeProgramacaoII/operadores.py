quantidade = 3  # Quantidade atual em estoque

if quantidade > 10:
    print("Estoque suficiente")        # Maior que 10 unidades
elif quantidade >= 5:
    print("Estoque em atenção")        # Entre 5 e 10 unidades
else:
    print("Estoque crítico")           # Menor que 5 unidades
