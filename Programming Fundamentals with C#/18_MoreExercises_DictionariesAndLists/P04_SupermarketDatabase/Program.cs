using System;
using System.Collections.Generic;
using System.Linq;

namespace P04_SupermarketDatabase
{
    class Program
    {
        static void Main(string[] args)
        {
            Dictionary<string, Dictionary<decimal, int>> products
                = new Dictionary<string, Dictionary<decimal, int>>();


            while (true)
            {
                string line = Console.ReadLine();
                if (line == "stocked")
                {
                    break;
                }

                string[] tokens = line.Split();

                string productName = tokens[0];
                decimal productPrice = decimal.Parse(tokens[1]);
                int productQuantity = int.Parse(tokens[2]);

                if (products.ContainsKey(productName) == false)
                {
                    products.Add(productName, new Dictionary<decimal, int>());
                }
                products[productName].Add(productPrice, 0);
                products[productName][productPrice] += productQuantity;

            }

            decimal totalSum = 0;

            foreach (var product in products)
            {
                string name = product.Key;
                decimal price = product.Value.Keys.Last();
                int quantity = product.Value.Values.Sum();
                decimal total = price * quantity;
                totalSum += total;
                Console.WriteLine($"{name}: ${price:F2} * {quantity} = ${total:F2}");
            }

            Console.WriteLine(new string ('-', 30));

            Console.WriteLine($"Grand Total: ${totalSum:F2}");
        }
    }
}
