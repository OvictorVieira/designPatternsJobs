class TesteCommand{
    static void Main(string[] args){

        ControleRemoto controle = new ControleRemoto();

        Luz luzSala = new Luz();

        PortaEletronica portaoGaragem = new PortaEletronica();

        VentiladorTeto ventiladorSala = new VentiladorTeto();

 

        controle.SetaComando(0, new onLuzSala(luzSala), new offLuzSala(luzSala));

        controle.SetaComando(1, new onLuzGaragem(portaoGaragem), new offLuzGaragem(portaoGaragem));

        controle.SetaComando(2, new onPortaGaragem(portaoGaragem), new offPortaGaragem(portaoGaragem));

        controle.SetaComando(3, new upVentiladorSala(ventiladorSala), new downVentiladorSala(ventiladorSala));

 

        controle.OnPressionado(0);

        controle.OnPressionado(1);

        controle.OnPressionado(2);

        controle.OffPressionado(0);

        controle.OffPressionado(1);

        controle.OffPressionado(2);

        controle.OnPressionado(3);

        controle.OnPressionado(3);

        controle.OnPressionado(3);

        controle.OffPressionado(3);

  controle.OnPressionado(7);

  controle.OffPressionado (7);

  Console.WriteLine(controle);

        Console.ReadKey();
    }
}