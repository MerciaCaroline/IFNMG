#Importando a biblioteca tkinter
#todos elementos sao importados
from tkinter import *
import math
#A classe principal onde os elementos sao inserids
janela = Tk()

#Título da janela
janela.title('Mércia')
#alturaxlargura
janela.geometry('163x250')
janela.minsize(width=163, height=250)
janela.maxsize(width=163, height=250)

#Label do resultado
tela= Label(janela,text='', height=3, fg = '#fff')
tela['bg'] = 'Black'
tela.grid(column=0,row=0, columnspan=4, sticky = W+E)

#FUNÇÕES DE FUNCIONAMENTO

x = 0
op=''

#Funcoes de teclas
def tecla(e):
    if e.char == "0":
        zero()
    if e.char == "1":
        um()
    if e.char == "2":
        dois()
    if e.char == "3":
        tres()
    if e.char == "4":
        quatro()
    if e.char == "5":
        cinco()
    if e.char == "6":
        seis()
    if e.char == "7":
        sete()
    if e.char == "8":
        oito()
    if e.char == "9":
        nove()
    if e.char == ".":
        ponto()
    if e.char == "+":
        adicao()
    if e.char == "-":
        subtracao()
    if e.char == "*":
        multiplicacao()
    if e.char == "/":
        divisao()       
janela.bind('<Key>',tecla)

#Funcoes de reset
def limpar():
    tela['text'] = ''
def apagar():
    tela['text'] =  tela['text'][0:len(tela['text'])-1]

#funcoes de operacoes
def divisao():
    global x, op
    x = float(x)
    op = 'divisao'
    limpar()
def multiplicacao():
    global x, op
    x = float(x)
    op = 'multiplicacao'
    limpar()
def adicao():
    global x, op
    x = float(x)
    op = 'adicao'
    limpar()
def subtracao():
    global x, op
    x = float(x)
    op = 'subtracao'
    limpar()

#funcoes extras
def pi():
    global x, op
    if tela['text'] == '':
        tela['text'] = 'π'
        x = math.pi
    else:
        x = float(tela['text']) * (math.pi)
        tela['text'] = tela['text'] + 'π'
        op = 'pi'

def mais_menos():
    global x, op
    x = float(tela['text'])
    op = 'mais_menos'

#Retornando os valores
def igual():
    global x
    x2 = tela['text']
    if op == 'adicao':
        r = x + float(x2)
        tela['text'] = r
       
    elif op == 'subtracao':
        r = x - float(x2)
        tela['text'] = r

    elif op == 'divisao':
        r = x / float(x2)
        tela['text'] = r
       
    elif op == 'multiplicacao':
        r = x * float(x2)
        tela['text'] = r
       
    elif op == 'mais_menos':
        x2 = (-1)
        r = x * float(x2)
        tela['text'] = r
    elif op == 'pi':
        r = x
        tela['text'] = r

janela.bind('<KP_Enter>',igual)

#Funcoes de botões
def ponto ():
    tela['text'] = tela['text']+ '.'
    x = float(tela['text'])
def nove ():
    tela['text'] = tela['text']+ '9'
    x = float(tela['text'])
def oito ():
    tela['text'] = tela['text']+ '8'
    x = float(tela['text'])
def sete ():
    tela['text'] = tela['text']  + '7'
    x = float(tela['text'])
def seis ():
    tela['text'] = tela['text']+ '6'
    x = float(tela['text'])
def cinco ():
    tela['text'] = tela['text']+ '5'
    x = float(tela['text'])
def quatro ():
    tela['text'] = tela['text']+ '4'
    x = float(tela['text'])
def tres ():
    tela['text'] = tela['text']+ '3'
    x = float(tela['text'])
def dois ():
    tela['text'] = tela['text']+ '2'
    x = float(tela['text'])
def um ():
    tela['text'] = tela['text']+ '1'
    x = float(tela['text'])
def zero ():
    tela['text'] = tela['text']+ '0'
    x = float(tela['text'])

#ce
img = PhotoImage(file="zerar.png", width= 35, height=35)
bt= Button(janela, text='Calculadora do IF',image=img, command=limpar)
bt.grid(column=0,row=1)
#backspace
img1 = PhotoImage(file="apaga.png", width= 35, height=35)
bt1= Button(janela, text='Calculadora do IF',image=img1, command=apagar)
bt1.grid(column=1,row=1)
#mais ou menos
img2 = PhotoImage(file="maths.png", width= 35, height=35)
bt2= Button(janela, text='Calculadora do IF',image=img2, command=mais_menos)
bt2.grid(column=2,row=1)
#soma
img3 = PhotoImage(file="plus.png", width= 35, height=35)
bt3= Button(janela, text='Calculadora do IF',image=img3, command=adicao)
bt3.grid(column=3,row=1)
#one
img4 = PhotoImage(file="one.png", width= 35, height=35)
bt4= Button(janela, text='Calculadora do IF',image=img4, command=um)
bt4.grid(column=0,row=2)
#dois
img5 = PhotoImage(file="two.png", width= 35, height=35)
bt5= Button(janela, text='Calculadora do IF',image=img5, command=dois)
bt5.grid(column=1,row=2)
#tres
img6 = PhotoImage(file="three.png", width= 35, height=35)
bt6= Button(janela, text='Calculadora do IF',image=img6, command=tres)
bt6.grid(column=2,row=2)
#menos
img7 = PhotoImage(file="minus.png", width= 35, height=35)
bt7= Button(janela, text='Calculadora do IF',image=img7, command=subtracao)
bt7.grid(column=3,row=2)
#quatro
img8 = PhotoImage(file="four.png", width= 35, height=35)
bt8= Button(janela, text='Calculadora do IF',image=img8, command=quatro)
bt8.grid(column=0,row=3)
#cinco
img9 = PhotoImage(file="five.png", width= 35, height=35)
bt9= Button(janela, text='Calculadora do IF',image=img9, command=cinco)
bt9.grid(column=1,row=3)
#seis
img10 = PhotoImage(file="six.png", width= 35, height=35)
bt10= Button(janela, text='Calculadora do IF',image=img10, command=seis)
bt10.grid(column=2,row=3)
#vezes
img11 = PhotoImage(file="multiply.png", width= 35, height=35)
bt11= Button(janela, text='Calculadora do IF',image=img11, command=multiplicacao)
bt11.grid(column=3,row=3)
#sete
img12 = PhotoImage(file="seven.png", width= 35, height=35)
bt12= Button(janela, text='Calculadora do IF',image=img12, command=sete)
bt12.grid(column=0,row=4)
#eight
img13 = PhotoImage(file="eight.png", width= 35, height=35)
bt13= Button(janela, text='Calculadora do IF',image=img13, command=oito)
bt13.grid(column=1,row=4)
#nine
img14 = PhotoImage(file="nine.png", width= 35, height=35)
bt14= Button(janela, text='Calculadora do IF',image=img14, command=nove)
bt14.grid(column=2,row=4)
#division
img15 = PhotoImage(file="division.png", width= 35, height=35)
bt15= Button(janela, text='Calculadora do IF',image=img15, command=divisao)
bt15.grid(column=3,row=4)
#pi
img16 = PhotoImage(file="pi.png", width= 35, height=35)
bt16= Button(janela, text='Calculadora do IF',image=img16, command=pi)
bt16.grid(column=0,row=5)
#zero
img17 = PhotoImage(file="zero.png", width= 35, height=35)
bt17= Button(janela, text='Calculadora do IF',image=img17, command=zero)
bt17.grid(column=1,row=5)
#ponto
img18 = PhotoImage(file="ponto.png", width= 35, height=35)
bt18= Button(janela, text='Calculadora do IF',image=img18, command=ponto)
bt18.grid(column=2,row=5)
#igual
img19 = PhotoImage(file="equal.png", width= 35, height=35)
bt19= Button(janela, text='Calculadora do IF',image=img19, command=igual)
bt19.grid(column=3,row=5)



