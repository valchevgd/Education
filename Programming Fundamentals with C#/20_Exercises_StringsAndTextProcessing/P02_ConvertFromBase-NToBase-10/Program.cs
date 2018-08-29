using System;
using System.Collections.Generic;
using System.Numerics;

namespace P02_ConvertFromBase_NToBase_10
{
    class Program
    {
        static void Main(string[] args)
        {
            string[] input = Console.ReadLine().Split();

            BigInteger converter = BigInteger.Parse(input[0]);
            BigInteger numberToConvert = BigInteger.Parse(input[1]);
            BigInteger lastNum = numberToConvert % 10;
            BigInteger result = lastNum;
            int power = 0;

            while (true)
            {
                
                
                numberToConvert /= 10;
                lastNum = numberToConvert % 10;
                result += GetPowered(converter, power) * lastNum;
                power++;
                if (numberToConvert == 0)
                {
                    break;
                }
            }



            Console.WriteLine(result);
        }

        private static BigInteger GetPowered(BigInteger converter, int power)
        {
            BigInteger result = converter;

            for (int i = 0; i < power; i++)
            {
                result *= converter;
            }

            return result;
        }
    }
}
