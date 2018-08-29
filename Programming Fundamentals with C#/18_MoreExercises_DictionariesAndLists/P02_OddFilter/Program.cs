using System;
using System.Collections.Generic;
using System.Linq;

namespace P02_OddFilter
{
    class Program
    {
        static void Main(string[] args)
        {
            List<int> nums = Console.ReadLine()
                .Split()
                .Select(int.Parse)
                .ToList();

            nums.RemoveAll(x => x % 2 != 0);

            var avg = nums.Average();
            for (int i = 0; i < nums.Count; i++)
            {
                if (nums[i] <= nums.Average() + 1)
                {
                    nums[i]--;
                }
                else
                {
                    nums[i]++;
                }

            }


            Console.WriteLine(string.Join(" ", nums));
        }
    }
}
