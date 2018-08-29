using System;
using System.Collections.Generic;
using System.Linq;

namespace P01_MaxSequenceOfEqualElements
{
    class Program
    {
        static void Main(string[] args)
        {
            List<int> nums = Console.ReadLine()
                .Split()
                .Select(int.Parse)
                .ToList();

            int bestStart = 0;
            int bestLenght = 0;
            int start = 0;
            int lenght = 0;
            

            for (int i = 1; i < nums.Count; i++)
            {
                if (nums[i - 1] == nums[i])
                {
                    if (lenght == 0)
                    {
                        start = i - 1;
                    }
                    lenght++;

                   
                }
                else
                {
                    lenght = 0;
                    start = 0;
                }

                if (lenght > bestLenght)
                {
                    bestLenght = lenght;
                    bestStart = start;
                }
            }

            for (int i = bestStart; i <= bestStart + bestLenght; i++)
            {
                Console.Write(nums[i] + " ");
            }

            Console.WriteLine();

        }
    }
}
