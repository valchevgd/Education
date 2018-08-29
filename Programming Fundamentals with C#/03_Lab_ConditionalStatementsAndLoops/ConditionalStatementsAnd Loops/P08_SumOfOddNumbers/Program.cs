using System;

namespace P08_SumOfOddNumbers
{
    class Program
    {
        static void Main(string[] args)
        {
            int n = int.Parse(Console.ReadLine());
            int sum = 0;
            int num = 1;

            for (int count = 0; count < n; count++)
            {
                Console.WriteLine(num);
                sum += num;
                num += 2;
            }

            Console.WriteLine($"Sum: {sum}");
        }
    }
}
