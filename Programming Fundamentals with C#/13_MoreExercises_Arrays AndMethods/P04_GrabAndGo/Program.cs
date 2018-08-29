using System;
using System.Linq;

namespace P04_GrabAndGo
{
    class Program
    {
        static void Main(string[] args)
        {
            int[] nums = Console.ReadLine()
                .Split()
                .Select(x => int.Parse(x))
                .ToArray();

            long num = long.Parse(Console.ReadLine());

            int stopIndex = -1 ;

            for (int i = 0; i < nums.Length; i++)
            {
                if (nums[i] == num)
                {
                    stopIndex = i;
                }
            }

            if (stopIndex < 0)
            {
                Console.WriteLine("No occurrences were found!");
            }
            else
            {
                long sum = 0;

                for (int i = 0; i < stopIndex; i++)
                {
                    sum += nums[i];
                }

                Console.WriteLine(sum);
            }
                
        }
    }
}
