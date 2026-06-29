
# Arquivo principal do sistema

def menu():
    print("=== SISTEMA DE ESTOQUE ===")
    print("1 - Cadastrar produto")
    print("2 - Listar produtos")
    print("3 - Sair")

while True:
    menu()
    opcao = input("Escolha uma opção: ")

    if opcao == "1":
        print("Cadastrar produto...")

    elif opcao == "2":
        print("Listar produtos...")

    elif opcao == "3":
        print("Saindo do sistema...")
        break

    else:
        print("Opção inválida!")
