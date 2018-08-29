using System;
using System.Linq;

namespace P09_JumpAround
{
    class Program
    {
        static void Main(string[] args)
        {
            int[] nums = Console.ReadLine()
                .Split()
                .Select(int.Parse)
                .ToArray();

            int sum = 0;
            int index = 0;

            while (true)
            {
                sum += nums[index];

                if (index + nums[index] < nums.Length)
                {
                    index += nums[index];
                }
                else if (index - nums[index] >= 0)
                {
                    index -= nums[index];
                }
                else
                {
                    
                    break;
                }
            }

            Console.WriteLine(sum);
        }
    }
}
