using System;

namespace P01_RageExpenses
{
    class Program
    {
        static void Main(string[] args)
        {
            int lostGames = int.Parse(Console.ReadLine());
            double headsetPrice = double.Parse(Console.ReadLine());
            double mousePrice = double.Parse(Console.ReadLine());
            double keyboardPrice = double.Parse(Console.ReadLine());
            double displayPrice = double.Parse(Console.ReadLine());

            int headsetCount = lostGames / 2;
            int mouseCount = lostGames / 3;
            int keyboardCount = lostGames / 6;
            int displayCount = lostGames / 12;

            double moneyForHeatsets = headsetCount * headsetPrice * 1.0;
            double moneyForMouses = mouseCount * mousePrice * 1.0;
            double moneyForKeyboards = keyboardCount * keyboardPrice * 1.0;
            double moneyForDisplays = displayCount * displayPrice * 1.0;

            double totalSpendMoney = moneyForDisplays + moneyForKeyboards + moneyForMouses + moneyForHeatsets;

            Console.WriteLine($"Rage expenses: {totalSpendMoney:f2} lv.");
        }
    }
}
