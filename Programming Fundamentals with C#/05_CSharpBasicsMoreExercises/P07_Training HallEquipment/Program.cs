using System;

namespace P07_Training_HallEquipment
{
    class Program
    {
        static void Main(string[] args)
        {
            double budget = double.Parse(Console.ReadLine());
            int numberOfItems = int.Parse(Console.ReadLine());

            double solution = 0;

            while (numberOfItems > 0)
            {
                string itemName = Console.ReadLine();
                double itemPrice = double.Parse(Console.ReadLine());
                int itemCount = int.Parse(Console.ReadLine());

                if (itemCount > 1)
                {
                    itemName += "s";
                }

                Console.WriteLine($"Adding {itemCount} {itemName} to cart.");

                budget -= itemPrice * itemCount;
                solution += itemPrice * itemCount;
                numberOfItems--;
            }

            Console.WriteLine($"Subtotal: ${solution:f2}");

            if (budget >= 0)
            {
                Console.WriteLine($"Money left: ${budget:f2}");
            }
            else
            {
                Console.WriteLine($"Not enough. We need ${Math.Abs(budget):f2} more.");
            }
        }
    }
}
