using System;
using System.Linq;

namespace P08_MostFrequentNumber
{
    class Program
    {
        static void Main(string[] args)
        {
            int[] nums = Console.ReadLine().
                Split().
                Select(int.Parse).
                ToArray();

            int maxCount = 0;
            int maxNum = 0;
            
            for (int i = 0; i < nums.Length; i++)
            {
                int counter = 0;

                for (int j = i; j < nums.Length; j++)
                {

                    if (nums[i] == nums[j])
                    {
                        counter++;
                    }

                    if (counter > maxCount) 
                    {
                        maxCount = counter;
                        maxNum = nums[i];
                    }
                }
            }
                Console.WriteLine(maxNum);
        }
    }
}
