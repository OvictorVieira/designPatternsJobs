public class offPortaGaragem : ICommand{
    PortaEletronica _PortaEletronica;

    public offPortaGaragem(PortaEletronica portaEletronica){
        portaEletronica._local = "Garagem";
        this._PortaEletronica = portaEletronica;
    }

    #region ICommand Members
    public void Executar(){
        this._PortaEletronica.Fechar();
    }
    #endregion

}