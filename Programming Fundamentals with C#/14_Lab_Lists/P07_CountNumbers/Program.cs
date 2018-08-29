using System;
using System.Collections.Generic;
using System.Linq;

namespace P07_CountNumbers
{
    class Program
    {
        static void Main(string[] args)
        {
            Dictionary<int, int> counter = new Dictionary<int, int>();

            int[] input = Console.ReadLine()
                .Split()
                .Select(int.Parse)
                .ToArray();

            foreach (var num in input)
            {
                if (!counter.ContainsKey(num))
                {
                    counter.Add(num, 0);
                }

                counter[num]++;
            }

            foreach (var num in counter.OrderBy(x => x.Key))
            {
                Console.WriteLine(string.Join(" -> ", num.Key, num.Value));
            }
        }
    }
}
