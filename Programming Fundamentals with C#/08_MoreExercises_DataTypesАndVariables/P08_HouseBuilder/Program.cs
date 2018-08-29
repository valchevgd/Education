using System;

namespace P08_HouseBuilder
{
    class Program
    {
        static void Main(string[] args)
        {
            ulong firstPrice = ulong.Parse(Console.ReadLine());
            ulong secondPrice = ulong.Parse(Console.ReadLine());

            ulong sbytePrice = 0;
            ulong intPrice = 0;
            ulong totalPrice = 0;

            if (firstPrice <= 127)
            {
                sbytePrice = firstPrice;
            }
            else
            {
                intPrice = firstPrice;
            }

            if (secondPrice <= 127)
            {
                sbytePrice = secondPrice;
            }
            else
            {
                intPrice = secondPrice;
            }

            totalPrice = sbytePrice * 4 + intPrice * 10;

            Console.WriteLine(totalPrice);
        }
    }
}
