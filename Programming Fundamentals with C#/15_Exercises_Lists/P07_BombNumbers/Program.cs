using System;
using System.Collections.Generic;
using System.Linq;

namespace P07_BombNumbers
{
    class Program
    {
        static void Main(string[] args)
        {
            List<decimal> nums = Console.ReadLine()
                .Split()
                .Select(decimal.Parse)
                .ToList();

            List<decimal> comands = Console.ReadLine()
                .Split()
                .Select(decimal.Parse)
                .ToList();

            decimal bomb = comands[0];
            decimal power = comands[1];

            for (int i = 0; i < nums.Count; i++)
            {
                if (nums[i] == bomb)
                {
                    for (int j = 0; j < power; j++)
                    {
                        if (i - 1 >= 0 )
                        {
                            nums.RemoveAt(i - 1);
                            i--;
                        }
                        if (i + 1 < nums.Count)
                        {
                            nums.RemoveAt(i + 1);
                        }
                    }

                    nums.RemoveAt(i);
                    i--;
                    
                }
            }

            decimal sum = 0;

            foreach (decimal num in nums)
            {
                sum += num;
            }

            Console.WriteLine(sum);

        }
    }
}
