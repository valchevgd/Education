using System;
using System.Collections.Generic;
using System.Linq;

namespace P01_Remove_Negatives_and_everse
{
    class Program
    {
        static void Main(string[] args)
        {
            List<int> nums = Console.ReadLine()
                .Split()
                .Select(int.Parse)
                .ToList();

            nums.RemoveAll(x => x < 0);
            nums.Reverse();

            if (nums.Count == 0)
            {
                Console.WriteLine("empty");
            }
            else
            {
            Console.WriteLine(string.Join(" ", nums));
            }
        }
    }
}
