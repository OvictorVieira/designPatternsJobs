public class onPortaGaragem : ICommand{
    PortaEletronica _PortaEletronica;

    public onPortaGaragem(PortaEletronica portaEletronica){
        portaEletronica._local = "Garagem";
        this._PortaEletronica = portaEletronica;
    }

    #region ICommand Members
    public void Executar(){
        this._PortaEletronica.Abrir();
    }
    #endregion
}