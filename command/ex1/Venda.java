import java.util.ArrayList;

public class Venda {
	int numero;
	double valor;
	
	ArrayList<CommandPgto> comandos;
	
	LoaderPagto l = new LoaderPagto ();
	
	public Venda(int num, double val) {
		this.comandos = new ArrayList <>();
		this.numero = num;
		this.valor = val;
	}
	
	public void montarComandos () {
		int z;
		int x = l.getTotalComandos();
		
		for (z=0;z<x;z++)
			comandos.add(z, l.getCommand(z));
	}
	
	public void gerarVenda (int tipoPgto) {
		comandos.get(tipoPgto).gerarPagamento(this);
	}
	
	public void fecharVenda (int tipoPgto) {
		comandos.get(tipoPgto).gerarPagamento(this);
	}
}