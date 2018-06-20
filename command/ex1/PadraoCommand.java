public class PadraoCommand {
	public static void main(String[] args) {
		Venda v = new Venda (1, 450.00);
		v.montarComandos();
		v.gerarVenda(1);
		v.fecharVenda(1);
		
		Venda v1 = new Venda (2, 830.00);
		v1.montarComandos();
		v1.gerarVenda(0);
		v.fecharVenda(0);
		
		Venda v2 = new Venda (3, 720.00);
		v2.montarComandos();
		v2.gerarVenda(2);
		v.fecharVenda(2);
		
		Venda v3 = new Venda (4, 310.00);
		v2.montarComandos();
		v2.gerarVenda(3);
		v.fecharVenda(3);
	}
}