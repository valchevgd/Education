using System;
using System.Collections.Generic;
using System.Linq;

namespace P03_SumMinMaxAverage
{
    class Program
    {
        static void Main(string[] args)
        {
            int n = int.Parse(Console.ReadLine());

            List<int> nums = new List<int>();

            for (int i = 0; i < n; i++)
            {
                int nextNum = int.Parse(Console.ReadLine());
                nums.Add(nextNum);
            }

            Console.WriteLine($"Sum = {nums.Sum()}");
            Console.WriteLine($"Min = {nums.Min()}");
            Console.WriteLine($"Max = {nums.Max()}");
            Console.WriteLine($"Average = {nums.Average()}");
            Console.WriteLine($"First = {nums[0]}");
            Console.WriteLine($"Last = {nums[nums.Count - 1]}");
        }
    }
}
