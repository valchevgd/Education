using System;
using System.Linq;

namespace P08_UpgradedMatcher
{
    class Program
    {
        static void Main(string[] args)
        {
            string[] products = Console.ReadLine().Split();
            

            string[] strQuantity = Console.ReadLine().Split();
            long[] quantities = new long[products.Length];

            for (int i = 0; i < strQuantity.Length; i++)
            {
                quantities[i] = long.Parse(strQuantity[i]);
            }
            decimal[] price = Console.ReadLine()
                .Split()
                .Select(decimal.Parse)
                .ToArray();

            while (true)
            {
                string searchingProduct = Console.ReadLine();
                if (searchingProduct == "done")
                {
                    break;
                }

                string[] tokens = searchingProduct.Split();
                string product = tokens[0];
                long quantity = long.Parse(tokens[1]);

                for (int i = 0; i < products.Length; i++)
                {
                    if (products[i] == product)
                    {
                        if (quantities[i] >= quantity)
                        {
                            decimal totalPrice = price[i] * quantity;
                            Console.WriteLine($"{products[i]} x {quantity} costs {totalPrice:f2}");
                            quantities[i] -= quantity;
                        }
                        else
                        {
                            Console.WriteLine($"We do not have enough {products[i]}");
                        }
                    }
                }
            }
        }
    }
}
