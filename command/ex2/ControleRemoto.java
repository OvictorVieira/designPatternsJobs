public class ControleRemoto{
    private ICommand[] _onComando;
    private ICommand[] _offComando;
 
    public ControleRemoto(){
        _onComando = new ICommand[7];
        _offComando = new ICommand[7];

        ICommand semComando = new SemComando();

        for (int i = 0; i < 7; i++){
            _onComando[i] = semComando;
            _offComando[i] = semComando;
        }
    }

    public void SetaComando(int slot, ICommand onComando, ICommand offComado){
        _onComando[slot] = onComando;
        _offComando[slot] = offComado;
    }

    public void OnPressionado(int slot){
        _onComando[slot].Executar();
    }

    public void OffPressionado(int slot){
        _offComando[slot].Executar();
    }

    public override string ToString(){
        StringBuilder sb = new Str…

        return sb.ToString();
    }
}