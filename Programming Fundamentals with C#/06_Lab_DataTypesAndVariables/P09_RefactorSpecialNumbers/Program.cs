using System;

namespace P09_RefactorSpecialNumbers
{
    class Program
    {
        static void Main(string[] args)
        {
            int num = int.Parse(Console.ReadLine());
            bool isValid = false;


            for (int i = 1; i <= num; i++)
            {
                int sum = 0;
                int newNum = i;

                while (i > 0)
                {
                    sum += i % 10;
                    i = i / 10;
                }

                isValid = (sum == 5) || (sum == 7) || (sum == 11);
                Console.WriteLine($"{newNum} -> {isValid}");
                sum = 0;
                i = newNum;
            }

        }
    }
}
