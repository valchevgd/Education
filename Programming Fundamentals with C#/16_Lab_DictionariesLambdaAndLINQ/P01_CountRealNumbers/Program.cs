using System;
using System.Collections.Generic;
using System.Linq;

namespace P01_CountRealNumbers
{
    class Program
    {
        static void Main(string[] args)
        {
            Dictionary<double, int> counter = new Dictionary<double, int>();

            double[] nums = Console.ReadLine()
                .Split()
                .Select(double.Parse)
                .ToArray();

            foreach (var num in nums)
            {
                if (counter.ContainsKey(num) == false)
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
