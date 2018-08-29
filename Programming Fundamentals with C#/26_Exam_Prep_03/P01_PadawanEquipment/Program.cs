using System;

namespace P01_PadawanEquipment
{
    class Program
    {
        static void Main(string[] args)
        {
            double money = double.Parse(Console.ReadLine());
            int students = int.Parse(Console.ReadLine());
            double priceOfLightsabers = double.Parse(Console.ReadLine());
            double priceOfRobes = double.Parse(Console.ReadLine());
            double priceOfBelts = double.Parse(Console.ReadLine());

            double quantityNeeded = Math.Ceiling(students + students * 0.1);
            int freeBelts = students / 6;

            double totalPriceForLightsabers = quantityNeeded * priceOfLightsabers * 1.0;
            double totalPriceForRobes = students * priceOfRobes * 1.0;
            double totalPriceForBelts = (students - freeBelts) * priceOfBelts * 1.0;

            double totalPrice = totalPriceForBelts + totalPriceForRobes + totalPriceForLightsabers;

            if (money >= totalPrice)
            {
                Console.WriteLine($"The money is enough - it would cost {totalPrice:f2}lv.");
            }
            else
            {
                Console.WriteLine($"Ivan Cho will need {totalPrice - money:f2}lv more.");
            }
        }
    }
}
