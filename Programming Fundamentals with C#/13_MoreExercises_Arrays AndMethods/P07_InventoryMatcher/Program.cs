using System;

namespace P07_InventoryMatcher
{
    class Program
    {
        static void Main(string[] args)
        {
            string[] products = Console.ReadLine().Split();
            string[] quantities = Console.ReadLine().Split();
            string[] price = Console.ReadLine().Split();
            while (true)
            {
                string searchingProduct = Console.ReadLine();
                if (searchingProduct == "done")
                {
                    break;
                }

                for (int i = 0; i < products.Length; i++)
                {
                    if (products[i] == searchingProduct)
                    {
                        Console.WriteLine($"{products[i]} costs: {price[i]}; Available quantity: {quantities[i]}");
                    }
                }
            }
        }
    }
}
