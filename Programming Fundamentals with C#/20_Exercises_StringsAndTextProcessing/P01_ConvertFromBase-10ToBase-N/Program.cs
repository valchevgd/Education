using System;
using System.Collections.Generic;
using System.Numerics;

namespace P01_ConvertFromBase_10ToBase_N
{
    class Program
    {
        static void Main(string[] args)
        {
            string[] input = Console.ReadLine().Split();

            BigInteger converter = BigInteger.Parse(input[0]);
            BigInteger numberToConvert = BigInteger.Parse(input[1]);
            List<BigInteger> result = new List<BigInteger>();

            while (true)
            {
                
                result.Add(numberToConvert % converter);
                numberToConvert /= converter;
                if (numberToConvert == 0)
                {
                    break;
                }
            }

            result.Reverse();

            Console.WriteLine(string.Join("", result));
        }
    }
}
