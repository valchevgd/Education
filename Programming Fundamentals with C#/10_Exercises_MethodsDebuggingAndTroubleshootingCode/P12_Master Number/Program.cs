using System;

namespace P12_Master_Number
{
    class Program
    {
        static void Main(string[] args)
        {
            int input = int.Parse(Console.ReadLine());

            for (int number = 1; number <= input; number++)
            {

                {
                    bool sumDivisibleBy7 = ChekSumDivisibleBy7(number);
                    if (sumDivisibleBy7)
                    {
                        bool evenNumber = CheckForEvenNumber(number);
                        if (evenNumber)
                        {
                            bool palimarone = CheckIsPalimarone(number);
                            if (palimarone)

                            {
                                Console.WriteLine(number);
                            }
                        }
                    }
                }
            }


        }

        private static bool CheckForEvenNumber(int num)
        {
            bool evenNumber = false;

            while (num > 0)
            {
                int number = num % 10;
                if (number % 2 == 0)
                {
                    evenNumber = true;
                    break;
                }
                num /= 10;
            }

            return evenNumber;
        }

        private static bool CheckIsPalimarone(int num)
        {
            bool isPalimarone = false;
            string number = num.ToString();
            char[] textToRevirce = number.ToCharArray();
            string revercedNumber = "";


            for (int i = textToRevirce.Length - 1; i >= 0; i--)
            {
                revercedNumber += textToRevirce[i];
            }

            if (number == revercedNumber)
            {
                isPalimarone = true;
            }

            return isPalimarone;
        }

        private static bool ChekSumDivisibleBy7(int num)
        {
            bool divBy7 = false;
            int totalSum = 0;

            while (num > 0)
            {
                totalSum += num % 10;
                num /= 10;
            }

            if (totalSum % 7 == 0)
            {
                divBy7 = true;
            }

            return divBy7;
        }
    }
}
