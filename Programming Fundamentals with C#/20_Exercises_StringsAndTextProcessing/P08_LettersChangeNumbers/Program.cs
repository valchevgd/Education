using System;
using System.Numerics;

namespace P08_LettersChangeNumbers
{
    class Program
    {
        static void Main(string[] args)
        {
            string[] input = Console.ReadLine().Split(' ', StringSplitOptions.RemoveEmptyEntries);

            decimal sum = 0;

            for (int i = 0; i < input.Length; i++)
            {
                char[] temp = input[i].ToCharArray();
                char letterBefore = temp[0];
                char letterAfter = temp[temp.Length - 1];
                string numStr = "";

                for (int j = 1; j < temp.Length - 1; j++)
                {
                    numStr += temp[j].ToString();
                }

                decimal num = decimal.Parse(numStr);

                //int tempSum = 0;

                if (letterBefore >= 'A' && letterBefore <= 'Z')
                {
                    num /= (decimal)((int)letterBefore - 64);
                }
                else if (letterBefore >= 'a' && letterBefore <= 'z')
                {
                    num *= (decimal)((int)letterBefore - 96);
                }

                if (letterAfter >= 'A' && letterAfter <= 'Z')
                {
                    num -= (decimal)((int)letterAfter - 64);
                }
                else if (letterAfter >= 'a' && letterAfter <= 'z')
                {
                    num += (decimal)((int)letterAfter - 96);
                }

                sum += num;
            }

            Console.WriteLine($"{sum:f2}");
        }
    }
}
