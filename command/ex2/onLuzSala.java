//Luz
public class onLuzSala : ICommand{
    Luz _luz;

    public onLuzSala(Luz luz){
        luz._local = "Sala";
        this._luz = luz;
    }

    #region ICommand Members
    public void Executar(){
        this._luz.Ligar();
    }
    #endregion
}