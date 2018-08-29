using System;

namespace P08_CaloriesCounter
{
    class Program
    {
        static void Main(string[] args)
        {
            int n = int.Parse(Console.ReadLine());

            int calories = 0;
            int counter = 0;

            while (true)
            {
                string ingredients = Console.ReadLine().ToLower();

                if ("cheese" == ingredients)
                {
                    calories += 500;
                }
                else if ("tomato sauce" == ingredients)
                {
                    calories += 150;
                }
                else if ("salami" == ingredients)
                {
                    calories += 600;
                }
                else if ("pepper" == ingredients)
                {
                    calories += 50;
                }

                counter++;

                if (counter == n)
                {
                    break;
                }
            }

            Console.WriteLine($"Total calories: {calories}");
        }
    }
}
