public class onVentiladorSala : ICommand{
    VentiladorTeto _VentiladorTeto;

    public upVentiladorSala(VentiladorTeto ventiladorTeto){
        ventiladorTeto._local = "Sala";
        this._VentiladorTeto = ventiladorTeto;
    }

    #region ICommand Members
    public void Executar(){
        if (this._VentiladorTeto._nivel != VentiladorTeto.Nivel.ALTO){
            this._VentiladorTeto._nivel++;
            this._VentiladorTeto.Atualizar();
        }
    }
    #endregion
}