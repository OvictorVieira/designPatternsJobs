public class Luz{
    public string _local = string.Empty;

    public Luz() { }

    public void Ligar(){
        Console.WriteLine("{0} luz ligada", _local);
    }

    public void Desligar(){
        Console.WriteLine("{0} luz desligada", _local);
    }
}