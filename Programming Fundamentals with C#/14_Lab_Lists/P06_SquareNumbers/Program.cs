using System;
using System.Collections.Generic;
using System.Linq;

namespace P06_SquareNumbers
{
    class Program
    {
        static void Main(string[] args)
        {
            List<int> nums = Console.ReadLine()
                .Split()
                .Select(int.Parse)
                .ToList();

            List<int> squareNumber = new List<int>();

            for (int i = 0; i < nums.Count; i++)
            {
                if (Math.Sqrt(nums[i]) == (int)Math.Sqrt(nums[i]))
                {
                    squareNumber.Add(nums[i]);
                }
            }

            squareNumber.Sort((a, b) => b.CompareTo(a));

            Console.WriteLine(string.Join(" ", squareNumber));
        }
    }
}
