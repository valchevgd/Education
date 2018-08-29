using System;

namespace P02_ChooseADrink2._0
{
    class Program
    {
        static void Main(string[] args)
        {
            string profession = Console.ReadLine();
            int quantitie = int.Parse(Console.ReadLine());
            double price = 0;

            switch (profession)
            {
                case "Athlete":
                    price = quantitie * 0.7;
                    break;
                case "Businessman":
                case "Businesswoman":
                    price = quantitie * 1.0;
                    break;
                case "SoftUni Student":
                    price = quantitie * 1.7;
                    break;
                default:
                    price = quantitie * 1.2;
                    break;
            }

            Console.WriteLine($"The {profession} has to pay {price:f2}.");
        }
    }
}
