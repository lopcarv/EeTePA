from api_client import buscar_produtos
from produto import Produto
from relatorio import gerar_relatorio

dados = buscar_produtos()

produtos = []
for item in dados:
    produtos.append(
        Produto(item["nome"], item["estoque"], item["estoque_min"])
    )

gerar_relatorio(produtos)
print("Relatório gerado com sucesso!")