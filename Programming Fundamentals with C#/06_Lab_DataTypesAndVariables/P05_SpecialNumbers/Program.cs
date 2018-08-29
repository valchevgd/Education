using System;

namespace P05_SpecialNumbers
{
    class Program
    {
        static void Main(string[] args)
        {
            int num = int.Parse(Console.ReadLine());

            for (int i = 1; i <= num; i++)
            {
                int sum = 0;
                int startNum = i;

                while (true)
                {
                    int lastNum = startNum % 10;
                    sum += lastNum;
                    startNum = startNum / 10;

                    if (startNum == 0)
                    {
                        break;
                    }
                }

                if (sum == 5 || sum == 7 || sum == 11)
                {
                    Console.WriteLine($"{i} -> True");
                }
                else
                {
                    Console.WriteLine($"{i} -> False");
                }

            }
        }
    }
}
