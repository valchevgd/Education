using System;
using System.Collections.Generic;
using System.Linq;

namespace ConsoleApp1
{
    class Program
    {
        static void Main(string[] args)
        {
            int[] nums = Console.ReadLine()
                .Split()
                .Select(x => int.Parse(x))
                .ToArray();

            Console.WriteLine($"Min = {nums.Min()}");
            Console.WriteLine($"Max = {nums.Max()}");
            Console.WriteLine($"Sum = {nums.Sum()}");
            Console.WriteLine($"Average = {nums.Average()}");
        }
    }
}
