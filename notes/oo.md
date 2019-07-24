# Orientação a Objetos
Possui 5 pilares, sendo:

1. **Herança**: Capacidade de herdar de outro objeto
2. **Polimorfismo**: Capacidade de possuir diferentes implementações para a mesma assinatura de método
3. **Abstração**: Solução abstrata geral que permite especialização por classes concretas
4. **Encapsulamento**: Encapsular pequenos blocos de código unilateralmente. De modo que seja possível alterar um trecho de código sem afetar outra
5. **Associação**: Forma que os objetos se associam entre si. Possível ser injetado através de parâmetro ou instanciado dentro de outro
  * *Composição*: O objeto depende dos objetos associoados a eles
    * e.g. Nota fiscal possui itens. Não faz sentido existir nota fiscal sem ter itens, ela é um conceito abstrato
  * *Agregação*: O objeto **não** depende dos objetos associados
    * e.g. Time de futebol não precisa necessáriamente ter jogadores
