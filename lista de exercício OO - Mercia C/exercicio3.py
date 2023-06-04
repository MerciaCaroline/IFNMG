#Classe livro comum/ Questão 2
class Livro():
    def __init__(self,t,a,g,ed,e):
        self.titulo = t
        self.autor = "Autor(a):" + a
        self.genero = "Genero:" + g
        self.editora = "Editora:" + ed
        self.edicao = "Edição:" + e
        print( "Livro",self.titulo,":")
        print(self.autor)
        print(self.genero)
        print(self.editora)
        print(self.edicao)

print("Livro!")
t= input("Título:")
a= input("Autor(a):")
g= input("Gênero:")
ed= input("Editora:")
e= input("Edição:")

l1= Livro(t,a,g,ed,e)

#Classe livro de livraria/Questão 3:
        
class LivroDeLivraria(Livro,p):
    Livro.__init__(p)
    self.preco="Preço:" + p
    print(self.preco)

p = input("Preço:")
lv= LivroDeLivraria(t,a,g,ed,e,p)

