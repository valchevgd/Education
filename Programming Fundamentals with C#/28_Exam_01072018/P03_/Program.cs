using System;
using System.Collections.Generic;
using System.Linq;
using System.Text.RegularExpressions;

namespace P03_
{
    class Program
    {
        static void Main(string[] args)
        {
            decimal totalPrice = 0;

            string line = Console.ReadLine();

            string pattern =
                @"(?:[^\|$%\.]*)?%(?<name>[A-Z][a-z]*)%(?:[^\|$%\.]*)?<(?<product>[\w]*)>(?:[^\|$%\.]*)?\|(?<count>[0-9]*)\|";
            string newPattern = @"([\d]+(\.\d+)?(?=\$))";

            while (line != "end of shift")
            {
                Regex regex = new Regex(pattern);

                MatchCollection matches = regex.Matches(line);
                string customerName = "";
                string product = "";
                int count = 0;

                foreach (Match order in matches)
                {
                    customerName = order.Groups["name"].Value;
                    product = order.Groups["product"].Value;
                    count = int.Parse(order.Groups["count"].Value);

                }
                decimal price = 0;
                Match newMatch = Regex.Match(line, newPattern);
                if (newMatch.Success)
                {
                    price = decimal.Parse(newMatch.Value);
                }

                decimal priceForOrder = price * count;
                if (priceForOrder > 0)
                {
                    Console.WriteLine($"{customerName}: {product} - {priceForOrder:f2}");

                }

                totalPrice += priceForOrder;
                line = Console.ReadLine();
            }

            Console.WriteLine($"Total income: {totalPrice:f2}");
        }
    }
}
