using System;

namespace P06_Heists
{
    class Program
    {
        static void Main(string[] args)
        {
            string[] price = Console.ReadLine().Split();

            int priceOfJewels = int.Parse(price[0]);
            int priceOfGold = int.Parse(price[1]);
            int totalMoney = 0;
            int totalExpenses = 0;

            while (true)
            {
                string nextLine = Console.ReadLine();
                if (nextLine == "Jail Time")
                {
                    break;
                }

                string[] lootAndExpenses = nextLine.Split();

                totalExpenses += int.Parse(lootAndExpenses[lootAndExpenses.Length - 1]);
                char[] tempArr = lootAndExpenses[0].ToCharArray();

                for (int i = 0; i < tempArr.Length; i++)
                {
                    if (tempArr[i] == '%')
                    {
                        totalMoney += priceOfJewels;
                    }
                    if (tempArr[i] == '$')
                    {
                        totalMoney += priceOfGold;
                    }
                }
            }

            if (totalMoney >= totalExpenses)
            {
                Console.WriteLine($"Heists will continue. Total earnings: {totalMoney - totalExpenses}.");
            }
            else
            {
                Console.WriteLine($"Have to find another job. Lost: {totalExpenses - totalMoney}.");
            }

        }
    }
}
