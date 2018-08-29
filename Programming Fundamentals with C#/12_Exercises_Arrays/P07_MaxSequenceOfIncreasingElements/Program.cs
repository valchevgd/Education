using System;
using System.Linq;

namespace P07_MaxSequenceOfIncreasingElements
{
    class Program
    {
        static void Main(string[] args)
        {
            int[] nums = Console.ReadLine().
                Split().
                Select(int.Parse).
                ToArray();

            int startIndex = 0;
            int bestLenght = 0;
            int start = 0;
            int lenght = 0;

            for (int i = 1; i < nums.Length; i++)
            {


                if (nums[i - 1] < nums[i])
                {
                    if (lenght == 0)
                    {
                        start = i - 1;
                    }
                    lenght++;
                }
                else
                {
                    start = 0;
                    lenght = 0;
                }

                if (lenght > bestLenght)
                {
                    startIndex = start;
                    bestLenght = lenght;
                }
            }

            for (int i = startIndex; i <= startIndex + bestLenght; i++)
            {
                Console.Write(nums[i] + " ");
            }
            Console.WriteLine();
        }
    }
}
