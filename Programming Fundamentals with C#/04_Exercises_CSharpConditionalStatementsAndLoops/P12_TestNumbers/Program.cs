using System;

namespace P12_TestNumbers
{
    class Program
    {
        static void Main(string[] args)
        {
            int n = int.Parse(Console.ReadLine());
            int m = int.Parse(Console.ReadLine());
            int maxSum = int.Parse(Console.ReadLine());

            int sum = 0;
            int combinations = 0;

            for (int i = n; i > 0; i--)
            {
                for (int j = 1; j <= m; j++)
                {
                    if (sum >= maxSum)
                    {
                        break;
                    }

                    sum += 3 * (i * j);
                    combinations++;
                    
                }
            }

            if (sum >= maxSum)
            {
                Console.WriteLine($"{combinations} combinations");
                Console.WriteLine($"Sum: {sum} >= {maxSum}");
            }
            else
            {
                Console.WriteLine($"{combinations} combinations");
                Console.WriteLine($"Sum: {sum}");
            }
        }
    }
}
