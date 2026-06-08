import os

def consolidar_projeto_inventario(diretorio_raiz, arquivo_saida):
    """
    Varre a pasta do projeto Inventario e consolida todos os ficheiros de código
    (Python, PHP, SQL, CSS, Markdown) num único documento estruturado.
    """
    # Extensões que fazem parte do Sistema de Inventário Inteligente
    extensoes_projeto = [".py", ".php", ".sql", ".css", ".md"]
    
    # Ficheiros ou pastas que devem ser ignorados para não poluir o documento
    ignorar_nomes = ["codigo_consolidado.txt", "relatorio_estoque.txt", "relatorio_estoque.csv"]

    with open(arquivo_saida, 'w', encoding='utf-8') as destino:
        for raiz, _, arquivos in os.walk(diretorio_raiz):
            for arquivo in arquivos:
                # Verifica se o ficheiro possui uma extensão válida e se não deve ser ignorado
                if any(arquivo.endswith(ext) for ext in extensoes_projeto) and arquivo not in ignorar_nomes:
                    caminho_completo = os.path.join(raiz, arquivo)
                    caminho_relativo = os.path.relpath(caminho_completo, diretorio_raiz)
                    
                    try:
                        with open(caminho_completo, 'r', encoding='utf-8', errors='ignore') as origem:
                            conteudo = origem.read()
                            
                            # Cabeçalho de marcação visual para cada ficheiro do sistema
                            destino.write(f"\n{'#'*80}\n")
                            destino.write(f" FICHEIRO: {caminho_relativo}\n")
                            destino.write(f"{'#'*80}\n\n")
                            
                            # Inserção do código fonte
                            destino.write(conteudo)
                            destino.write("\n")
                            
                            print(f"Adicionado ao documento: {caminho_relativo}")
                    except Exception as e:
                        print(f"Erro ao processar o ficheiro {caminho_relativo}: {e}")

if __name__ == "__main__":
    # Define a pasta atual como a raiz do projeto Inventario
    pasta_raiz = "." 
    nome_documento_final = "codigo_consolidado.txt"
    
    print("A iniciar a extração completa do sistema Inventario...")
    consolidar_projeto_inventario(pasta_raiz, nome_documento_final)
    print(f"\nSucesso! O documento único foi gerado em: {nome_documento_final}")