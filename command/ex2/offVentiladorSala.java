public class offVentiladorSala : ICommand{
    VentiladorTeto _VentiladorTeto;

    public downVentiladorSala(VentiladorTeto ventiladorTeto){
        ventiladorTeto._local = "Sala";
        this._VentiladorTeto = ventiladorTeto;
    }

    #region ICommand Members
    public void Executar(){
        if (this._VentiladorTeto._nivel != VentiladorTeto.Nivel.DESLIGADO){
            this._VentiladorTeto._nivel--;
            this._VentiladorTeto.Atualizar();
        }
    }
    #endregion
}