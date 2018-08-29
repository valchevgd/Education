using System;
using System.Collections.Generic;
using System.Linq;

namespace P03_SumAdjacentEqualNumbers
{
    class Program
    {
        static void Main(string[] args)
        {
            List<decimal> nums = Console.ReadLine()
                .Split()
                .Select(decimal.Parse)
                .ToList();

            for (int i = 0; i < nums.Count - 1; i++)
            {
                if (nums[i] == nums[i + 1])
                {
                    nums[i + 1] += nums[i];
                    nums.RemoveAt(i);
                    i = -1;
                }
            }

            Console.WriteLine(string.Join(" ", nums));
        }
    }
}
