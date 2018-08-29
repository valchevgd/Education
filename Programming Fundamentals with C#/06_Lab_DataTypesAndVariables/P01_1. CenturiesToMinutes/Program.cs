using System;

namespace P01_1._CenturiesToMinutes
{
    class Program
    {
        static void Main(string[] args)
        {
            Console.Write("Centurie = ");

            int centuries = int.Parse(Console.ReadLine());
            int yers = centuries * 100;
            int days = (int) (yers * 365.2422);
            int hours = days * 24;
            int minutes = hours * 60;

            Console.WriteLine($"{centuries} centuries = {yers} yers = {days} days = {hours} hours = {minutes} minutes");

        }
    }
}
