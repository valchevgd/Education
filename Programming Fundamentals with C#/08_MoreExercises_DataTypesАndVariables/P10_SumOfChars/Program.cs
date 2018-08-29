using System;

namespace P10_SumOfChars
{
    class Program
    {
        static void Main(string[] args)
        {
            int num = int.Parse(Console.ReadLine());

            int sum = 0;

            for (int i = 0; i < num; i++)
            {
                char nextChar = char.Parse(Console.ReadLine());
                sum += (int)nextChar;
            }

            Console.WriteLine($"The sum equals: {sum}");
        }
    }
}
