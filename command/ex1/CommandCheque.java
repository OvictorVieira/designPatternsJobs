public class CommandCheque implements CommandPgto {
	@Override
	public void gerarPagamento(Venda v) {
		System.out.println("A venda " + v.numero + " tem o valor de R$"
		+ v.valor + "" + "Operação feita por Cheque!"+"");
	}
}