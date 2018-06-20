public class offLuzSala : ICommand{

    Luz _luz;

    public offLuzSala(Luz luz){
        luz._local = "Sala";
        this._luz = luz;
    }

    #region ICommand Members
    public void Executar(){
        this._luz.Desligar();
    }
    #endregion
}