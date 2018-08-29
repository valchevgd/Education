using System;
using System.Collections.Generic;
using System.Linq;

namespace P06_FoldAndSum
{
    class Program
    {
        static void Main(string[] args)
        {
            int[] nums = Console.ReadLine()
                .Split()
                .Select(int.Parse)
                .ToArray();
            int k = nums.Length / 4;

            List<int> firstRow = new List<int>();

            firstRow.AddRange(nums.Take(k).Reverse());
            firstRow.AddRange(nums.TakeLast(k).Reverse());

            List<int> secondRow = new List<int>();

            secondRow.AddRange(nums.Skip(k).Take(k * 2));

            List<int> sum = new List<int>();

            for (int i = 0; i < k * 2; i++)
            {
                sum.Add(firstRow[i] + secondRow[i]);
            }

            Console.WriteLine(string.Join(" ", sum));
        }
    }
}
