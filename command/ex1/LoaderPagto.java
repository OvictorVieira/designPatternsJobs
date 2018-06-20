public class LoaderPagto {
	public CommandPgto getCommand (int x) { //retorna a instância de um comando
		CommandPgto command;
		switch (x) {
			case (0):
			command = new CommandCielo();
			break;
			
			case (1):
			command = new CommandRedeCard();
			break;
			
			case (2):
			command = new CommandCheque();
			break;
			
			default:
			command = new CommandCielo();
		}
		return (command);
	}
	public int getTotalComandos () { return (3); } //retorna o número de comandos que existem
}