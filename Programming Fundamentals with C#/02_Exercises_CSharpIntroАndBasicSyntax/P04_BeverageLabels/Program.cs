using System;

namespace P04_BeverageLabels
{
    class Program
    {
        static void Main(string[] args)
        {
            string name = Console.ReadLine();
            int volume = int.Parse(Console.ReadLine());
            int energyPer100 = int.Parse(Console.ReadLine());
            double sugarPer100 = double.Parse(Console.ReadLine());

            double totalEnergy = energyPer100 * (volume / 100.0);
            double totalSugar = sugarPer100 * (volume / 100.0);

            Console.WriteLine($"{volume}ml {name}:");
            Console.WriteLine($"{totalEnergy}kcal, {totalSugar}g sugars");

        }
    }
}
