using System;

namespace P06_IntervalOfNumbers
{
    class Program
    {
        static void Main(string[] args)
        {
            int firsNum = int.Parse(Console.ReadLine());
            int secondNum = int.Parse(Console.ReadLine());

            int min = Math.Min(firsNum, secondNum);
            int max = Math.Max(firsNum, secondNum);

            for (int i = min; i <= max; i++)
            {
                Console.WriteLine(i);
            }
        }
    }
}
