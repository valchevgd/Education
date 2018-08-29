using System;

namespace P09_MultiplyEvensByOdds
{
    class Program
    {
        static void Main(string[] args)
        {
            int input = int.Parse(Console.ReadLine());
            int inputAbs = Math.Abs(input);

            int result = GetMultipleOfEvensAndOdds(inputAbs);

            Console.WriteLine(result);
        }

        static int GetMultipleOfEvensAndOdds(int input)
        {
            int evenSum = GetEvenSum(input);
            int oddSum = GetOddSum(input);
            return evenSum * oddSum;
        }

        private static int GetOddSum(int input)
        {
            int oddSum = 0;

            while (input > 0)
            {
                int lastDigit = input % 10;
                if (lastDigit % 2 != 0)
                {
                    oddSum += lastDigit;
                }
                input /= 10;

            }

            return oddSum;
        }

        private static int GetEvenSum(int input)
        {
            int evenSum = 0;

            while (input > 0)
            {
                int lastDigit = input % 10;
                if (lastDigit % 2 == 0)
                {
                    evenSum += lastDigit;
                }
                input /= 10;

            }

            return evenSum;
        }
    }
}
