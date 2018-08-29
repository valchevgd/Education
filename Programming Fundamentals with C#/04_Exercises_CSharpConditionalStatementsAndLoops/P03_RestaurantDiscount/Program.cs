using System;

namespace P03_RestaurantDiscount
{
    class Program
    {
        static void Main(string[] args)
        {
            int groupSize = int.Parse(Console.ReadLine());
            string package = Console.ReadLine();

            double totalPrice = 0;
            string hall = null;
            double discount = 0;

            if (groupSize <= 50)
            {
                totalPrice += 2500.0;
                hall = "Small Hall";

                if ("Normal" == package)
                {
                    totalPrice += 500.0;
                    discount = 0.05;
                }
                else if ("Gold" == package)
                {
                    totalPrice += 750.0;
                    discount = 0.10;
                }
                else if ("Platinum" == package)
                {
                    totalPrice += 1000.0;
                    discount = 0.15;
                }
            }
            else if (groupSize <= 100)
            {
                totalPrice += 5000.0;
                hall = "Terrace";

                if ("Normal" == package)
                {
                    totalPrice += 500.0;
                    discount = 0.05;
                }
                else if ("Gold" == package)
                {
                    totalPrice += 750.0;
                    discount = 0.10;
                }
                else if ("Platinum" == package)
                {
                    totalPrice += 1000.0;
                    discount = 0.15;
                }
            }
            else if (groupSize <= 120)
            {
                totalPrice += 7500.0;
                hall = "Great Hall";

                if ("Normal" == package)
                {
                    totalPrice += 500.0;
                    discount = 0.05;
                }
                else if ("Gold" == package)
                {
                    totalPrice += 750.0;
                    discount = 0.10;
                }
                else if ("Platinum" == package)
                {
                    totalPrice += 1000.0;
                    discount = 0.15;
                }
            }

            double priceAfterDiscount = totalPrice - totalPrice * discount;
            double pricePerPerson = priceAfterDiscount / groupSize;

            if (totalPrice == 0)
            {
                Console.WriteLine("We do not have an appropriate hall.");
            }
            else
            {
                Console.WriteLine($"We can offer you the {hall}");
                Console.WriteLine($"The price per person is {pricePerPerson:f2}$");
            }

        }
    }
}
