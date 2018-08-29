using System;
using System.Linq;

namespace P10_PairsByDifference
{
    class Program
    {
        static void Main(string[] args)
        {
            int[] nums = Console.ReadLine().
                Split().
                Select(int.Parse).
                ToArray();
            int difference = int.Parse(Console.ReadLine());

            int counter = 0;

            for (int i = 0; i < nums.Length; i++)
            {
                for (int j = i; j < nums.Length; j++)
                {
                    if (Math.Abs(nums[i] - nums[j]) == difference)
                    {
                        counter++;
                    }
                }
            }

            Console.WriteLine(counter);
        }
    }
}
